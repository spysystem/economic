<?php

namespace Economic;

class TimeEntry_FindApprovedByDate
{

    /**
     * @var \DateTime $fromDate
     */
    protected $fromDate = null;

    /**
     * @var \DateTime $toDate
     */
    protected $toDate = null;

    /**
     * @param \DateTime $fromDate
     * @param \DateTime $toDate
     */
    public function __construct(\DateTime $fromDate, \DateTime $toDate)
    {
      $this->fromDate = $fromDate->format(\DateTime::ATOM);
      $this->toDate = $toDate->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getFromDate()
    {
      if ($this->fromDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->fromDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $fromDate
     * @return \Economic\TimeEntry_FindApprovedByDate
     */
    public function setFromDate(\DateTime $fromDate)
    {
      $this->fromDate = $fromDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getToDate()
    {
      if ($this->toDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->toDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $toDate
     * @return \Economic\TimeEntry_FindApprovedByDate
     */
    public function setToDate(\DateTime $toDate)
    {
      $this->toDate = $toDate->format(\DateTime::ATOM);
      return $this;
    }

}
