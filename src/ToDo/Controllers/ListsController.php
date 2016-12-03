<?php

namespace ToDo\Controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

/**
 * Controller for list actions.
 *
 * @author Digital D.Lo <WebDevDLo@gmail.com>
 */
class ListsController extends Controller {
	
	/**
	 * Show list form.
	 * 
	 * @param \Slim\Http\Request $request PSR-7 Request
	 * @param \Slim\Http\Response $response PSR-7 Response
   * 
	 * @return \Slim\Http\Response $response PSR-7 Response
	 */
	public function showListForm(Request $request, Response $response)
	{		
		return $response->write("Show list form");
	}
	
	/**
	 * Add list.
	 * 
	 * @param \Slim\Http\Request $request PSR-7 Request
	 * @param \Slim\Http\Response $response PSR-7 Response
   * 
	 * @return \Slim\Http\Response $response PSR-7 Response
	 */
	public function addList(Request $request, Response $response)
	{		
		return $response->write("Add list");
	}
	
	/**
	 * Show list.
	 * 
	 * @param \Slim\Http\Request $request PSR-7 Request
	 * @param \Slim\Http\Response $response PSR-7 Response
	 * @param array $args Named placeholders from the URL
   * 
	 * @return \Slim\Http\Response $response PSR-7 Response
	 */
	public function showList(Request $request, Response $response, array $args)
	{		
		return $response->write("Show list " . $args['id']);
	}
	
	/**
	 * Delete list.
	 * 
	 * @param \Slim\Http\Request $request PSR-7 Request
	 * @param \Slim\Http\Response $response PSR-7 Response
	 * @param array $args Named placeholders from the URL
   * 
	 * @return \Slim\Http\Response $response PSR-7 Response
	 */
	public function deleteList(Request $request, Response $response, array $args)
	{	
		return $response->write("Delete list " . $args['id']);
	}
  
}
