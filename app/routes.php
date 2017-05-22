<?php

namespace puffin;

use \puffin\directory as directory;


$___routes = new directory();

$___includes = $___routes->rscan( APP_PATH . '/routes' );

foreach($___includes as $include)
{
	if( $include['ext'] == 'php' )
	{
		include $include['full_path'];
	}
}
