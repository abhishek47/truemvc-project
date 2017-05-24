<?php

namespace Trivial\Database;

class QueryBuilder {

	protected $pdo; 

	public function __construct(\PDO $pdo)
	{
		$this->pdo = $pdo;
	}

	public function selectAll($table)
	{
		$statement = $this->pdo->prepare("select * from {$table} order by id desc");

		$statement->execute();

		return $statement->fetchAll(\PDO::FETCH_CLASS);
	}

	public function insert($table, $parameters)
	{
		$columns = implode(',', array_keys($parameters));

		$values = implode(', :', array_keys($parameters));

		$sql = sprintf("insert into %s (%s) values(%s)", $table, $columns, ':' . $values);
       
        try {
		 
		 $statement = $this->pdo->prepare($sql);

		 $statement->execute($parameters);
        
        } catch (\Exception $e)
        {	
        	die('Whoops!Something went wrong!');
        }         

		return $parameters;
	}

	public function delete($table, $id)
	{

		try {
		 
		 $statement = $this->pdo->prepare("delete from {$table} where id={$id}");

		 $statement->execute();
        
        } catch (\Exception $e)
        {	
        	die('Whoops!Something went wrong!');
        }    

	}
}