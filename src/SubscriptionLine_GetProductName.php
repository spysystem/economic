<?php

namespace Economic;

class SubscriptionLine_GetProductName
{

    /**
     * @var SubscriptionLineHandle $subscriptionLineHandle
     */
    protected $subscriptionLineHandle = null;

    /**
     * @param SubscriptionLineHandle $subscriptionLineHandle
     */
    public function __construct($subscriptionLineHandle)
    {
      $this->subscriptionLineHandle = $subscriptionLineHandle;
    }

    /**
     * @return SubscriptionLineHandle
     */
    public function getSubscriptionLineHandle()
    {
      return $this->subscriptionLineHandle;
    }

    /**
     * @param SubscriptionLineHandle $subscriptionLineHandle
     * @return \Economic\SubscriptionLine_GetProductName
     */
    public function setSubscriptionLineHandle($subscriptionLineHandle)
    {
      $this->subscriptionLineHandle = $subscriptionLineHandle;
      return $this;
    }

}
