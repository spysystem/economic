<?php

namespace Economic;

class ArrayOfCompanyHandle implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CompanyHandle[] $CompanyHandle
     */
    protected $CompanyHandle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CompanyHandle[]
     */
    public function getCompanyHandle()
    {
      return $this->CompanyHandle;
    }

    /**
     * @param CompanyHandle[] $CompanyHandle
     * @return \Economic\ArrayOfCompanyHandle
     */
    public function setCompanyHandle(array $CompanyHandle = null)
    {
      $this->CompanyHandle = $CompanyHandle;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->CompanyHandle[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CompanyHandle
     */
    public function offsetGet($offset)
    {
      return $this->CompanyHandle[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CompanyHandle $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->CompanyHandle[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->CompanyHandle[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CompanyHandle Return the current element
     */
    public function current()
    {
      return current($this->CompanyHandle);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CompanyHandle);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CompanyHandle);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->CompanyHandle);
    }

    /**
     * Countable implementation
     *
     * @return CompanyHandle Return count of elements
     */
    public function count()
    {
      return count($this->CompanyHandle);
    }

}
