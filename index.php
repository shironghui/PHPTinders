<?php
/**
 * Tinders - A PHP Framework For Web Application
 *
 * @author   Tris.H <tris_10@sina.com>
 */

error_reporting(E_ERROR | E_WARNING);

require __DIR__ . '/autoload.php';

$app = new App();
$app->run();
?>