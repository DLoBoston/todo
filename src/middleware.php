<?php
/**
 * Middleware functions called at various points during a request.
 * 
 * @link http://www.slimframework.com/docs/concepts/middleware.html
 * @author Digital D.Lo <WebDevDLo@gmail.com>
 */

// Callable closure that can be added to routes to ensure users are logged in
$requireLoggedInUser = function (\Psr\Http\Message\ServerRequestInterface $request, \Psr\Http\Message\ResponseInterface $response, $next) {
  
  // Check for session. Redirect if applicable.
  session_start();
  if (empty($_SESSION['user_id'])):
    redirect_to('/login');
  endif;
  
  // Invoke the next middleware
	$response = $next($request, $response);
	return $response;
};
