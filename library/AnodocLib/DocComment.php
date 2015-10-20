<?php

namespace library\AnodocLib;

use library\AnodocLib\Collection\TagGroup;
use library\AnodocLib\Collection\TagGroupCollection;

class DocComment
{
    private $description;
    private $tags;

    public function __construct($description = '', TagGroupCollection $tags = null)
    {
        if (!$tags) {
            $tags = new TagGroupCollection;
        }
        $this->description = $description;
        foreach ($tags as $tag => $value) {
            $this->tags[$tag]= $value;
        }
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getShortDescription()
    {
        if (preg_match('/^(.+)\n/', $this->description, $matches)) {
            return $matches[1];
        }
        return $this->description;
    }

    public function getLongDescription()
    {
        if ($longDescription = preg_replace('/^.+\n/', '', $this->description)) {
            return $longDescription != $this->description ?
                trim($longDescription) : '';
        }
    }

    public function getTags($tag)
    {
        if ($this->hasTag($tag)) {
            return $this->tags[$tag];
        }
        return new TagGroup($tag);
    }

    public function getTag($tag)
    {
        if ($this->hasTag($tag)) {
            return $this->tags[$tag][$this->tags[$tag]->count() -1];
        }
        return new Tags\NullTag('', '');
    }

    public function getTagValue($tag)
    {
        if ($this->hasTag($tag)) {
            $last = $this->tags[$tag][$this->tags[$tag]->count() -1];
            return $last->getValue();
        }
    }

    public function hasTag($tag)
    {
        return isset($this->tags[$tag]);
    }
}
