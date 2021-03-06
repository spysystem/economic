<?php

namespace Economic;

class Subscription_FindByNumber
{

    /**
     * @var int $number
     */
    protected $number = null;

    /**
     * @param int $number
     */
    public function __construct($number)
    {
      $this->number = $number;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
      return $this->number;
    }

    /**
     * @param int $number
     * @return \Economic\Subscription_FindByNumber
     */
    public function setNumber($number)
    {
      $this->number = $number;
      return $this;
    }

}
