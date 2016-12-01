<?php

namespace ToDo\Controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

/**
 * Description of MainSiteController
 *
 * @author Digital D.Lo <WebDevDLo@gmail.com>
 */
class MainSiteController extends Controller {
	
	/**
	 * The home of the site.
	 * 
	 * @param \Slim\Http\Request $request PSR-7 Request
	 * @param \Slim\Http\Response $response PSR-7 Response
	 * @return \Slim\Http\Response $response PSR-7 Response
	 */
	public function showHome(Request $request, Response $response)
	{
		// Get forms
		$this->container->get('orm');
		$lists = \ToDo\Models\ToDoList::all();
		
		// Return template
		$response = $this->container
        ->get('view')
        ->render($response,
            "home.php",
            [
              'page_title' => 'Current Lists',
              'lists' => $lists
            ]);
		return $response;
	}
}
