<?php

namespace Economic;

class Account_GetBudgetFigures
{

    /**
     * @var AccountHandle $accountHandle
     */
    protected $accountHandle = null;

    /**
     * @param AccountHandle $accountHandle
     */
    public function __construct($accountHandle)
    {
      $this->accountHandle = $accountHandle;
    }

    /**
     * @return AccountHandle
     */
    public function getAccountHandle()
    {
      return $this->accountHandle;
    }

    /**
     * @param AccountHandle $accountHandle
     * @return \Economic\Account_GetBudgetFigures
     */
    public function setAccountHandle($accountHandle)
    {
      $this->accountHandle = $accountHandle;
      return $this;
    }

}
