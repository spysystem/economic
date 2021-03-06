<?php

namespace Economic;

class ProjectGroup_GetProjects
{

    /**
     * @var ProjectGroupHandle $projectGroupHandle
     */
    protected $projectGroupHandle = null;

    /**
     * @param ProjectGroupHandle $projectGroupHandle
     */
    public function __construct($projectGroupHandle)
    {
      $this->projectGroupHandle = $projectGroupHandle;
    }

    /**
     * @return ProjectGroupHandle
     */
    public function getProjectGroupHandle()
    {
      return $this->projectGroupHandle;
    }

    /**
     * @param ProjectGroupHandle $projectGroupHandle
     * @return \Economic\ProjectGroup_GetProjects
     */
    public function setProjectGroupHandle($projectGroupHandle)
    {
      $this->projectGroupHandle = $projectGroupHandle;
      return $this;
    }

}
