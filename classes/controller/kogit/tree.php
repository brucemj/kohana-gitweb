<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Repository files and directories tree
 *
 * @package    Kogit
 * @category   Controllers
 * @author     Birkir R Gudjonsson
 * @copyright  (c) 2010 Birkir R Gudjonsson
 * @license    http://kohanaphp.com/license
 */
class Controller_Kogit_Tree extends Controller_Kogit {

	public function action_index()
	{
		$this->request = Request::factory('kogit/project_alias/tree/tag')->execute();
	}

	public function action_tag($tag=NULL)
	{
	}

	public function action_branch($branch=NULL)
	{
	}

}