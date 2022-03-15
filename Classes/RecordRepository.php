<?php

// This class is focussed on dealing with queries for one type of data
// That allows for easier re-using and it's rather easy to find all your queries
// This technique is called the repository pattern
class RecordRepository
{
	private DatabaseManager $databaseManager;

	// This class needs a database connection to function
	public function __construct(DatabaseManager $databaseManager)
	{
		$this->databaseManager = $databaseManager;
	}

	public function create(): void
	{

	}

	// Get one
	public function find(): array
	{

	}

	// Get all
	public function get(): array
	{
		// Replace dummy data by real one
		$getSqlQuery = "SELECT * FROM records";
		$queryResult = $this->databaseManager->connection->query($getSqlQuery, PDO::FETCH_ASSOC);
		return $queryResult->fetchAll();

		// We get the database connection first, so we can apply our queries with it
		// return $this->databaseManager->connection-> (runYourQueryHere)
	}

	public function update(): void
	{

	}

	public function delete(): void
	{

	}
}

//array(10) {
//	[0]=>
//  array(5) {
//		["record_id"]=>
//    string(1) "1"
//		["artist"]=>
//    string(11) "Miles Davis"
//		["album"]=>
//    string(12) "Kind of Blue"
//		["genre"]=>
//    string(4) "Jazz"
//		["year"]=>
//    string(4) "1959"
//  }