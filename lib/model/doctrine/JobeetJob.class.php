<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class JobeetJob extends BaseJobeetJob
{
  public function __toString()
  {
    return sprintf('%s at %s (%s)', $this->getPosition(), $this->getCompany(), $this->getLocation());
  }
}