<?php

namespace ToDo\Controllers;

use \Slim\Container;

/**
 * Parent controller that injects DI container via constructor
 * 
 * @author Digital D.Lo <WebDevDLo@gmail.com>
 */
abstract class Controller {
    
	/** @var array Application dependency container */
	protected $container;

	/**
	 * Inject dependency container upon instantiation.
	 * 
	 * @param \Slim\Container $c Dependency container
	 * @return void
	 */
	public function __construct(Container $c)
	{
			$this->container = $c;
	}
}
