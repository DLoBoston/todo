<?php

namespace ToDo\Controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

/**
 * Controller for task actions.
 *
 * @author Digital D.Lo <WebDevDLo@gmail.com>
 */
class TasksController extends Controller {
	
	/**
	 * Show task form.
	 * 
	 * @param \Slim\Http\Request $request PSR-7 Request
	 * @param \Slim\Http\Response $response PSR-7 Response
   * 
	 * @return \Slim\Http\Response $response PSR-7 Response
	 */
	public function showTaskForm(Request $request, Response $response)
	{		
		return $response->write("Show task form");
	}
	
	/**
	 * Add task.
	 * 
	 * @param \Slim\Http\Request $request PSR-7 Request
	 * @param \Slim\Http\Response $response PSR-7 Response
   * 
	 * @return \Slim\Http\Response $response PSR-7 Response
	 */
	public function addTask(Request $request, Response $response)
	{		
		return $response->write("Add task");
	}
	
	/**
	 * Show task.
	 * 
	 * @param \Slim\Http\Request $request PSR-7 Request
	 * @param \Slim\Http\Response $response PSR-7 Response
	 * @param array $args Named placeholders from the URL
   * 
	 * @return \Slim\Http\Response $response PSR-7 Response
	 */
	public function showTask(Request $request, Response $response, array $args)
	{		
		return $response->write("Show task " . $args['id']);
	}
	
	/**
	 * Delete task.
	 * 
	 * @param \Slim\Http\Request $request PSR-7 Request
	 * @param \Slim\Http\Response $response PSR-7 Response
	 * @param array $args Named placeholders from the URL
   * 
	 * @return \Slim\Http\Response $response PSR-7 Response
	 */
	public function deleteTask(Request $request, Response $response, array $args)
	{	
		return $response->write("Delete task " . $args['id']);
	}
  
}
