<?php

namespace library\AnodocLib\Tags;

class NullTag extends Tag
{
    public function __construct($tag_name, $value)
    {

    }

    public function getValue()
    {

    }

    public function getTagName()
    {

    }

    public function __toString()
    {
        return 'NullTag';
    }

    public function isNull()
    {
        return true;
    }
}
