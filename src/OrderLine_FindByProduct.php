<?php

namespace Economic;

class OrderLine_FindByProduct
{

    /**
     * @var ProductHandle $productHandle
     */
    protected $productHandle = null;

    /**
     * @param ProductHandle $productHandle
     */
    public function __construct($productHandle)
    {
      $this->productHandle = $productHandle;
    }

    /**
     * @return ProductHandle
     */
    public function getProductHandle()
    {
      return $this->productHandle;
    }

    /**
     * @param ProductHandle $productHandle
     * @return \Economic\OrderLine_FindByProduct
     */
    public function setProductHandle($productHandle)
    {
      $this->productHandle = $productHandle;
      return $this;
    }

}
