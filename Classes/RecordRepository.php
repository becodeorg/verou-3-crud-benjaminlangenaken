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
		if($_SERVER['REQUEST_METHOD'] === 'POST') {

			$artist = $_POST['artist'];
			$album = $_POST['album'];
			$genre = $_POST['genre'];
			$year = $_POST['year'];

			// Make sure we only add values into the database when all fields have been entered
			if (!empty($artist && $album && $genre && $year)) {
				$sqlQuery = "INSERT INTO records(artist, album, genre, year) VALUES(:artist, :album, :genre, :year)";
				$statement = $this->databaseManager->connection->prepare($sqlQuery);

				$statement->bindValue(':artist', $artist);
				$statement->bindValue(':album', $album);
				$statement->bindValue(':genre', $genre);
				$statement->bindValue(':year', $year);

				// Execute our record creation and go back to the overview
				$statement->execute();
				header("Location: index.php");
			} else {
				echo '<br>'.'<div class="alert alert-danger col-2">Please fill out all fields</div>'.'<br>';
			}
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
		$statement = $this->databaseManager->connection->prepare($sqlQuery);
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_OBJ);

		// We get the database connection first, so we can apply our queries with it
		// return $this->databaseManager->connection-> (runYourQueryHere)
	}

	public function update(): void
	{
//		string $idToUpdate, string $newArtist, string $newAlbum, string $newGenre, int $newYear
//		try{
//			$sql = "UPDATE records SET artist='{$newArtist}', album='{$newAlbum}', genre='{$newGenre}', year={$newYear} WHERE id={$idToUpdate}";
//			$this->databaseManager->connection->exec($sql);
//		} catch (PDOException $e) {
//			echo $e->getMessage().'<br>';
//		}
	}

	public function delete(): void
	{
		$sqlQuery = 'DELETE FROM records WHERE record_id = :id';
		$statement = $this->databaseManager->connection->prepare($sqlQuery);

		$statement->bindValue(':id', $_GET['id']);
		$statement->execute();
	}
}