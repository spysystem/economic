<?php

namespace Economic;

class Quotation_GetVatZone
{

    /**
     * @var QuotationHandle $quotationHandle
     */
    protected $quotationHandle = null;

    /**
     * @param QuotationHandle $quotationHandle
     */
    public function __construct($quotationHandle)
    {
      $this->quotationHandle = $quotationHandle;
    }

    /**
     * @return QuotationHandle
     */
    public function getQuotationHandle()
    {
      return $this->quotationHandle;
    }

    /**
     * @param QuotationHandle $quotationHandle
     * @return \Economic\Quotation_GetVatZone
     */
    public function setQuotationHandle($quotationHandle)
    {
      $this->quotationHandle = $quotationHandle;
      return $this;
    }

}
