<?php

namespace Economic;

class CreditorContact_GetExternalId
{

    /**
     * @var CreditorContactHandle $creditorContactHandle
     */
    protected $creditorContactHandle = null;

    /**
     * @param CreditorContactHandle $creditorContactHandle
     */
    public function __construct($creditorContactHandle)
    {
      $this->creditorContactHandle = $creditorContactHandle;
    }

    /**
     * @return CreditorContactHandle
     */
    public function getCreditorContactHandle()
    {
      return $this->creditorContactHandle;
    }

    /**
     * @param CreditorContactHandle $creditorContactHandle
     * @return \Economic\CreditorContact_GetExternalId
     */
    public function setCreditorContactHandle($creditorContactHandle)
    {
      $this->creditorContactHandle = $creditorContactHandle;
      return $this;
    }

}
