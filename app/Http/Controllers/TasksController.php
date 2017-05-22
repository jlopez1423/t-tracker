<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

class TasksController extends Controller
{
    //Return all tasks
    public function index()
    {
    	return view( 'layouts.tasks.index' );

    }


    public function show()
    {
    	return view( 'layouts.tasks.index' );

    }

    public function create() {

    	return view( 'layouts.tasks.create' );
    
    }

    public function store()
    {
    	$task 			= new Task;
    	
    	Task::create([
    			'title' => request( 'title' ),

    			'body' 	=> request( 'body' )

    		]);
    	//Create a new task using request data

    	// $task->title 	= request( 'title' );
    	// $task->body 	= request( 'body' );

    	// dd( request( 'title' ) );

    	//Save it to the database
    	$task->save();

    	// Redirect
    	return redirect( '/' );
    }
}
