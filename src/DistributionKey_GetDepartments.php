<?php

namespace Economic;

class DistributionKey_GetDepartments
{

    /**
     * @var DistributionKeyHandle $distributionKeyHandle
     */
    protected $distributionKeyHandle = null;

    /**
     * @param DistributionKeyHandle $distributionKeyHandle
     */
    public function __construct($distributionKeyHandle)
    {
      $this->distributionKeyHandle = $distributionKeyHandle;
    }

    /**
     * @return DistributionKeyHandle
     */
    public function getDistributionKeyHandle()
    {
      return $this->distributionKeyHandle;
    }

    /**
     * @param DistributionKeyHandle $distributionKeyHandle
     * @return \Economic\DistributionKey_GetDepartments
     */
    public function setDistributionKeyHandle($distributionKeyHandle)
    {
      $this->distributionKeyHandle = $distributionKeyHandle;
      return $this;
    }

}
