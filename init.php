<?php defined('SYSPATH') or die('No direct script access.');


Route::set('project', 'kogit/(<project>/(<controller>(/<action>(/<id>))))', array('id' => '.+'))
	->defaults(array(
		'directory'  => 'kogit',
		'controller' => 'tree',
		'action'     => 'index',
	));
