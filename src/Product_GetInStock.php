<?php

namespace Economic;

class Product_GetInStock
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
     * @return \Economic\Product_GetInStock
     */
    public function setProductHandle($productHandle)
    {
      $this->productHandle = $productHandle;
      return $this;
    }

}
