<?php

namespace ToDo\Controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

/**
 * Controller for site actions.
 *
 * @author Digital D.Lo <WebDevDLo@gmail.com>
 */
class SiteController extends Controller {
	
	/**
	 * The home of the site.
	 * 
	 * @param \Slim\Http\Request $request PSR-7 Request
	 * @param \Slim\Http\Response $response PSR-7 Response
   * 
	 * @return \Slim\Http\Response $response PSR-7 Response
	 */
	public function showLogin(Request $request, Response $response)
	{	
		// Get URI object for route to be passed to template
		$uri = $request->getUri();
    
		// Return template
		$response = $this->container->get('view')->render($response, "login.php",
      ['page_title' => 'Login',
       'route' => $uri->getPath()]);
		return $response;
	}
	
	/**
	 * The login of the site.
	 * 
	 * @param \Slim\Http\Request $request PSR-7 Request
	 * @param \Slim\Http\Response $response PSR-7 Response
   * 
	 * @return \Slim\Http\Response $response PSR-7 Response
	 */
	public function showHome(Request $request, Response $response)
	{
		// Get forms
		$this->container->get('orm');
		$lists = \ToDo\Models\ToDoList::all();
		
		// Return template
		$response = $this->container->get('view')->render($response, "home.php", ['page_title' => 'Current Lists', 'lists' => $lists]);
		return $response;
	}
  
  /**
   * Process a login attempt. Redirect based on success or failure.
	 * 
	 * @param \Slim\Http\Request $request PSR-7 Request
	 * @param \Slim\Http\Response $response PSR-7 Response
   */
  public function processLogin(Request $request, Response $response)
  {
    // Get submission
		$data = $request->getParsedBody();
    
    // Validate submission
    $login_controller = new \ToDo\Controllers\LoginController($this->container);
    $login_results = $login_controller->validateLogin($data);
    
    // If valid...
    if ($login_results['valid_submission']) {
      // Set session
      $this->initializeSession($login_results['user_id']);
      // Redirect to home
      redirect_to('/');
    }
    // Else...
    else {
      // Redirect to login
      $uri = $request->getUri(); // Get URI object for route to be passed to redirect
      redirect_to($uri->getPath());
    }
  }
  
  /**
   * Initialize session with logged in user's ID.
   * 
   * @param type $user_id
   */
  private function initializeSession($user_id)
  {
    var_dump($user_id);    exit();
    session_start();
    $_SESSION['user_id'] = $user_id;
  }
  
}
