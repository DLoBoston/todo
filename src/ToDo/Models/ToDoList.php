<?php

namespace ToDo\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Models interaction with list entity in persistent data.
 * Follows Eloquent ORM conventions.
 *
 * @author Digital D.Lo <WebDevDLo@gmail.com>
 */
class ToDoList extends Model
{
  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'todo_lists';
  
	/**
	 * Eloquent function to get the tasks for a specific list.
	 */
	public function tasks()
	{
			return $this->hasMany('ToDo\Models\Task');
	}
	
}
