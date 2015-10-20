<?php
namespace library\AnodocLib\Collection;

class Collection implements \ArrayAccess, \Countable, \SeekableIterator
{
    private $store = array();

    public function __construct(array $array = array())
    {
        $this->store = array_merge($this->store, $array);
    }

    public function offsetExists($key)
    {
        return isset($this->store[$key]);
    }

    public function offsetGet($key)
    {
        return $this->store[$key];
    }

    public function offsetSet($key, $value)
    {
        if (is_null($key)) {
            $this->store[] = $value;
        } else {
            $this->store[$key] = $value;
        }
    }

    public function isKeySet($key)
    {
        return $this->offsetExists($key);
    }

    public function offsetUnset($key)
    {
        unset($this->store[$key]);
    }

    public function seek($position)
    {
        if (isset($this->store[$position])) {
            return $this->store[$position];
        }
        throw new \OutOfBoundsException("Invalid seek position ($position)");
    }

    public function length()
    {
        return $this->count();
    }

    public function get($key)
    {
        return $this->offsetGet($key);
    }

    public function count()
    {
        return count($this->store);
    }

    public function rewind()
    {
        reset($this->store);
    }

    public function current()
    {
        return current($this->store);
    }

    public function key()
    {
        return key($this->store);
    }

    public function next()
    {
        next($this->store);
    }

    public function valid()
    {
        return key($this->store) !== null;
    }

    public function isEmpty()
    {
        return empty($this->store);
    }
}
