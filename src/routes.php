<?php
/**
 * Set the routes the app responds to
 * @link http://www.slimframework.com/docs/objects/router.html
 * @author Digital D.Lo <WebDevDLo@gmail.com>
 */

$app->get('/login', '\ToDo\Controllers\SiteController:showLogin');

$app->get('/', '\ToDo\Controllers\SiteController:showHome');

$app->get('/lists/form', '\ToDo\Controllers\ListsController:showListForm');
$app->post('/lists', '\ToDo\Controllers\ListsController:addList');
$app->get('/lists/{id}', '\ToDo\Controllers\ListsController:showList');
$app->get('/lists/{id}/delete', '\ToDo\Controllers\ListsController:deleteList');

$app->get('/tasks/form', '\ToDo\Controllers\TasksController:showTaskForm');
$app->post('/tasks', '\ToDo\Controllers\TasksController:addTask');
$app->get('/tasks/{id}', '\ToDo\Controllers\TasksController:showTask');
$app->get('/tasks/{id}/delete', '\ToDo\Controllers\TasksController:deleteTask');
