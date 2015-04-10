<?php

class Modifiers{

	public function connect(){
		$connection = $this->createDbConnection();

		$this-setDbConnection($connection);
		return $connection;
	}


}