<?php

namespace Economic;

class Project_GetIsAccessible
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
     * @return \Economic\Project_GetIsAccessible
     */
    public function setProjectHandle($projectHandle)
    {
      $this->projectHandle = $projectHandle;
      return $this;
    }

}
