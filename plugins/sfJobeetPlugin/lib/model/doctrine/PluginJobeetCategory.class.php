<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class PluginJobeetCategory extends BaseJobeetCategory
{
  public function getActiveJobs($max = 10)
  {
    $q = $this->getActiveJobsQuery()
      ->limit($max);
 
    return $q->execute();
  }

  public function countActiveJobs()
  {
    return $this->getActiveJobsQuery()->count();
  }

  public function getActiveJobsQuery()
  {
    $q = Doctrine_Query::create()
      ->from('JobeetJob j')
      ->where('j.category_id = ?', $this->getId());
 
    return Doctrine::getTable('JobeetJob')->addActiveJobsQuery($q);
  }

  public function getLatestPost()
  {
    $jobs = $this->getActiveJobs(1);
 
    return $jobs[0];
  }
}
