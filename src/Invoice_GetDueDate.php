<?php

namespace Economic;

class Invoice_GetDueDate
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
     * @return \Economic\Invoice_GetDueDate
     */
    public function setInvoiceHandle($invoiceHandle)
    {
      $this->invoiceHandle = $invoiceHandle;
      return $this;
    }

}
