<?php

namespace Economic;

class CashBookEntry_GetCreditorInvoiceNumber
{

    /**
     * @var CashBookEntryHandle $cashBookEntryHandle
     */
    protected $cashBookEntryHandle = null;

    /**
     * @param CashBookEntryHandle $cashBookEntryHandle
     */
    public function __construct($cashBookEntryHandle)
    {
      $this->cashBookEntryHandle = $cashBookEntryHandle;
    }

    /**
     * @return CashBookEntryHandle
     */
    public function getCashBookEntryHandle()
    {
      return $this->cashBookEntryHandle;
    }

    /**
     * @param CashBookEntryHandle $cashBookEntryHandle
     * @return \Economic\CashBookEntry_GetCreditorInvoiceNumber
     */
    public function setCashBookEntryHandle($cashBookEntryHandle)
    {
      $this->cashBookEntryHandle = $cashBookEntryHandle;
      return $this;
    }

}
