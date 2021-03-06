<?php

namespace Economic;

class Invoice_GetDebtorCity
{

    /**
     * @var InvoiceHandle $invoiceHandle
     */
    protected $invoiceHandle = null;

    /**
     * @param InvoiceHandle $invoiceHandle
     */
    public function __construct($invoiceHandle)
    {
      $this->invoiceHandle = $invoiceHandle;
    }

    /**
     * @return InvoiceHandle
     */
    public function getInvoiceHandle()
    {
      return $this->invoiceHandle;
    }

    /**
     * @param InvoiceHandle $invoiceHandle
     * @return \Economic\Invoice_GetDebtorCity
     */
    public function setInvoiceHandle($invoiceHandle)
    {
      $this->invoiceHandle = $invoiceHandle;
      return $this;
    }

}
