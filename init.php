<?php defined('SYSPATH') or die('No direct script access.');

require_once('vendor/glip/lib/git.class.php');

$repo = new Git('/var/www/m.eat.is/.git');
$master_name = $repo->getTip('master');
$master = $repo->getObject($master_name);


Route::set('kogit/media', 'kogit/media(/<type>(/<file>))', array('file' => '.+'))
	->defaults(array(
		'project'    => '',
		'directory'  => 'kogit',
		'controller' => 'media',
		'action'     => 'process',
	));
	
Route::set('kogit', 'kogit/(<controller>(/<action>(/<id>(/<extra>))))', array('extra' => '.+'))
	->defaults(array(
		'project'    => '',
		'directory'  => 'kogit',
		'controller' => 'tree',
		'action'     => 'index',
	));
