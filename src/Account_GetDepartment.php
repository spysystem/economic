<?php

namespace Economic;

class Account_GetDepartment
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
     * @return \Economic\Account_GetDepartment
     */
    public function setAccountHandle($accountHandle)
    {
      $this->accountHandle = $accountHandle;
      return $this;
    }

}
