<?php
/**
 * Dependency container.
 * @link http://www.slimframework.com/docs/concepts/di.html
 * @author Digital D.Lo <WebDevDLo@gmail.com>
 */

$container = $app->getContainer();
$container['view'] = new \Slim\Views\PhpRenderer("../views/");
$container['db'] = function ($c) {
    $db = $c['settings']['db'];
    $pdo = new PDO("mysql:host={$db['host']};dbname={$db['dbname']}", $db['user'], $db['pass']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
};
$container['orm'] = function ($c) {
    $capsule = new \Illuminate\Database\Capsule\Manager;
    $capsule->addConnection($c['settings']['orm']);
    $capsule->setAsGlobal();
    $capsule->bootEloquent();
    return $capsule;
};
