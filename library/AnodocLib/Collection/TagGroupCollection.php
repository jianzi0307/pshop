<?php
namespace library\AnodocLib\Collection;

class TagGroupCollection extends Collection
{

    public function __construct($array = array())
    {
        foreach ($array as $key => $value) {
            $this->offsetSet($key, $value);
        }
    }

    public function offsetSet($key, $value)
    {
        if ($value instanceof TagGroup) {
            parent::offsetSet($key, $value);
        } else {
            throw new NotATagGroupException("Offset '$key' is not a tag group");
        }
    }
}
