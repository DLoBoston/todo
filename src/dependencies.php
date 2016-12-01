<?php
/**
 * Dependency container.
 * @link http://www.slimframework.com/docs/concepts/di.html
 * @author Digital D.Lo <WebDevDLo@gmail.com>
 */

$container = $app->getContainer();
$container['view'] = new \Slim\Views\PhpRenderer("../views/");
