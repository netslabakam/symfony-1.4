<?php

/**
 * Job module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage Job
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseJobGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'jobeet_job' : 'jobeet_job_'.$action;
  }
}
