<?php

namespace Economic;

class ReportCode_GetCode
{

    /**
     * @var ReportCodeHandle $reportCodeHandle
     */
    protected $reportCodeHandle = null;

    /**
     * @param ReportCodeHandle $reportCodeHandle
     */
    public function __construct($reportCodeHandle)
    {
      $this->reportCodeHandle = $reportCodeHandle;
    }

    /**
     * @return ReportCodeHandle
     */
    public function getReportCodeHandle()
    {
      return $this->reportCodeHandle;
    }

    /**
     * @param ReportCodeHandle $reportCodeHandle
     * @return \Economic\ReportCode_GetCode
     */
    public function setReportCodeHandle($reportCodeHandle)
    {
      $this->reportCodeHandle = $reportCodeHandle;
      return $this;
    }

}
