<?php

namespace Economic;

class CurrentInvoiceLineHandle
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var int $Number
     */
    protected $Number = null;

    /**
     * @param int $Id
     * @param int $Number
     */
    public function __construct($Id, $Number)
    {
      $this->Id = $Id;
      $this->Number = $Number;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param int $Id
     * @return \Economic\CurrentInvoiceLineHandle
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param int $Number
     * @return \Economic\CurrentInvoiceLineHandle
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

}
