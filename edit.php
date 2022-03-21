<?php

 //If GET id exists --> take the id; otherwise take null
$id = $_GET['id'] ?? null;

if(!$_GET['id']) {
    header('Location: index.php');
    exit;
}

echo '<pre>';
var_dump($RecordRepository->update());
echo '</pre>';
// Add empty strings for input fields when loading page for the first time
if(empty($_GET)) {
    $_GET['artist'] = '';
    $_GET['album'] = '';
    $_GET['genre'] = '';
    $_GET['year'] = '';
};

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VinylCollector | Add record</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body style="padding: 20px">
<br>
<h1>VinylCollector - Edit record</h1>
<br>
<form action="" method="post">
    <div class="form-row">
        <div class="col-3">
            <label for="inputArtist">Artist Name</label>
            <input type="text" id="inputArtist" class="form-control" name="artist" value= <?= $_GET['artist'] ?> >
        </div>
        <br>
        <div class="col-3">
            <label for="inputAlbum">Album</label>
            <input type="text" id="inputAlbum" class="form-control" name="album" value= <?= $_GET['album'] ?> >
        </div>
        <br>
        <div class="col-3">
            <label for="inputGenre">Genre</label>
            <input type="text" id="inputGenre" class="form-control" name="genre" value= <?= $_GET['genre'] ?> >
        </div>
        <br>
        <div class="col-1">
            <label for="inputYear">Year Released</label>
            <input type="number" id="inputYear" class="form-control" name="year" value= <?= $_GET['year'] ?> >
        </div>
        <br>
        <div class="col-3">
<!--        name="action" refers to our $_GET['action'] variable-->
<!--        value="create" refers to the case 'create' from the switch statement-->
            <button name="action" value="create" type="submit" style="padding: 10px 10px"
                    class="btn btn-primary">Edit record!</button>
        </div>
</form>
</body>
</html>