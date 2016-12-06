<?php

namespace ToDo\Controllers;

/**
 * Controller for login functionality.
 * 
 * @author Digital D.Lo <WebDevDLo@gmail.com>
 */

class LoginController extends Controller
{
  /**
   * Validates login submission.
   * 
   * @param array $data Email and password.
   * 
   * @return array The first value of the array is a boolean indicating if the 
   * submission is valid. The second value is the user's ID, if applicable. The
   * third value is an array of error messages, if applicable.
   */
  public function validateLogin($data)
  {
    // Initialize return var
    $results = [
      'valid_submission' => true,
      'user_id' => null,
      'errors' => array()
    ];
    
    // Validate email
    $valid_email = filter_var($data['email'], FILTER_VALIDATE_EMAIL);
    if (!$valid_email) {
      $results['valid_submission'] = false;
      $results['errors'][] = 'Email is not a valid format.';
    }
    
    // Validate password
    $valid_password = filter_var($data['password'], FILTER_VALIDATE_REGEXP, array('options' => array('regexp' => '/^[[:graph:]+]/')));
    if (!$valid_password) {
      $results['valid_submission'] = false;
      $results['errors'][] = 'Please specify a password.';
    }
    
    // If email and password validate, search for user
    if ($valid_email && $valid_password) {
      
      // Query matching record in user
      $this->container->get('orm');
      $user = \ToDo\Models\User::where([
        ['email', '=', $data['email']],
        ['password', '=', $data['password']]
      ])->first();
      
      // if found...
      if ($user) {
        // set user id
        $results['user_id'] = $user->id;
      }
      // else
      else {
        // set error
        $results['valid_submission'] = false;
        $results['errors'][] = 'Email and password combo are incorrect.';
      }
    }
    
    // Return
    return $results;
    
  }
  
}
