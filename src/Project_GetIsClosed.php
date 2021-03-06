<?php

namespace Economic;

class Project_GetIsClosed
{

    /**
     * @var ProjectHandle $projectHandle
     */
    protected $projectHandle = null;

    /**
     * @param ProjectHandle $projectHandle
     */
    public function __construct($projectHandle)
    {
      $this->projectHandle = $projectHandle;
    }

    /**
     * @return ProjectHandle
     */
    public function getProjectHandle()
    {
      return $this->projectHandle;
    }

    /**
     * @param ProjectHandle $projectHandle
     * @return \Economic\Project_GetIsClosed
     */
    public function setProjectHandle($projectHandle)
    {
      $this->projectHandle = $projectHandle;
      return $this;
    }

}
