<?php

namespace Economic;

class TimeEntry_CreateFromDataArray
{

    /**
     * @var ArrayOfTimeEntryData $dataArray
     */
    protected $dataArray = null;

    /**
     * @param ArrayOfTimeEntryData $dataArray
     */
    public function __construct($dataArray)
    {
      $this->dataArray = $dataArray;
    }

    /**
     * @return ArrayOfTimeEntryData
     */
    public function getDataArray()
    {
      return $this->dataArray;
    }

    /**
     * @param ArrayOfTimeEntryData $dataArray
     * @return \Economic\TimeEntry_CreateFromDataArray
     */
    public function setDataArray($dataArray)
    {
      $this->dataArray = $dataArray;
      return $this;
    }

}
