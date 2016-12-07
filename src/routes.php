<?php
/**
 * Set the routes the app responds to.
 * 
 * @link http://www.slimframework.com/docs/objects/router.html
 * @author Digital D.Lo <WebDevDLo@gmail.com>
 */

$app->get('/login', '\ToDo\Controllers\SiteController:showLogin');
$app->post('/login', '\ToDo\Controllers\SiteController:processLogin');
$app->get('/logout', '\ToDo\Controllers\SiteController:processLogout');

// Routes that require logged in users
$app->group('/', function () {
  
  $this->get('', '\ToDo\Controllers\SiteController:showHome');

  $this->get('lists/form', '\ToDo\Controllers\ListsController:showListForm');
  $this->post('lists', '\ToDo\Controllers\ListsController:addList');
  $this->get('lists/{id}', '\ToDo\Controllers\ListsController:showList');
  $this->get('lists/{id}/delete', '\ToDo\Controllers\ListsController:deleteList');

  $this->get('tasks/form', '\ToDo\Controllers\TasksController:showTaskForm');
  $this->post('tasks', '\ToDo\Controllers\TasksController:addTask');
  $this->get('tasks/{id}', '\ToDo\Controllers\TasksController:showTask');
  $this->get('tasks/{id}/delete', '\ToDo\Controllers\TasksController:deleteTask');
    
})->add($requireLoggedInUser);
