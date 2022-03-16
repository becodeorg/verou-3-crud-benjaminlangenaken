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
		if(isset($_GET['artist'], $_GET['album'], $_GET['genre'], $_GET['year'])){
			$artist = $_GET['artist'];
			$album = $_GET['album'];
			$genre = $_GET['genre'];
			$year = $_GET['year'];

			$sqlQuery  = "INSERT INTO records(artist, album, genre, year) VALUES(:artist, :album, :genre, :year)";
			$stmt = $this->databaseManager->connection->prepare($sqlQuery);
			$stmt->execute([':artist' => $artist, ':album' => $album, ':genre' => $genre, ':year' => $year]);
		}
	}

	// Get one
	public function find(): array
	{

	}

	// Get all
	public function get(): array
	{
		// Replace dummy data by real one
		$sqlQuery = 'SELECT * FROM records';
		$queryResult = $this->databaseManager->connection->query($sqlQuery, PDO::FETCH_OBJ);
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