<?php 

namespace App\Controllers;

use Trivial\Core\App;

class TodosController {

	public function index()
	{
		$todos = App::get('database')->selectAll('todos');

		header('Content-type: application/json');

		echo json_encode( $todos );
	}


	public function store()
	{
		$data = $_POST; 

		$todo = App::get('database')->insert('todos', [
		'title' => $data['title'],
		'description' => $data['title'],
		'completed' => 0
		]);


		return redirect('/');
	}

    public function destroy()
    {

		$todo = App::get('database')->delete('todos', $_GET['id']);


		return "success";

    }

}