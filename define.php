<?php

define('_JEXEC',123);
echo _JEXEC;


echo '<br/>';
print_r(__DIR__);

if (file_exists(__DIR__ . '/coockie.php'))
{
	include_once __DIR__ . '/coockie.php';
}

$path = join(DIRECTORY_SEPARATOR, array('root', 'lib', 'file.php');

echo '<br/>';
echo $php;
echo '<br/>';
print_r($path);


// if (!defined('_JDEFINES'))
// {
// 	define('JPATH_BASE', __DIR__);
// 	require_once JPATH_BASE . '/includes/defines.php';
// }

// require_once JPATH_BASE . '/includes/framework.php';