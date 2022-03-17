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
<h1>VinylCollector - Edit record <?= $_GET['id'] ?> </h1>
<br>
<form method="get" action="" class="d-flex justify-content-center row g-4">
    <div class="col-md-5">
        <label for="inputArtist" class="form-label">Artist</label>
        <input type="text" class="form-control" id="inputArtist" name="name">
    </div>
    <div class="col-md-5">
        <label for="inputAlbum" class="form-label">Album Name</label>
        <input type="text" class="form-control" id="inputAlbum" name="album">
    </div>
    <div class="col-md-5">
        <label for="inputGenre" class="form-label">Genre</label>
        <input type="text" class="form-control" id="inputGenre" name="genre">
    </div>
    <div class="col-md-5">
        <label for="inputYear" class="form-label">Year Released</label>
        <input type="text" class="form-control" id="inputYear" name="year">
    </div>
    <div class="d-flex justify-content-center">
        <a href="index.php" style="padding-right: 50px">
            <button style="padding: 10px 40px" type="button" class="btn btn-primary btn-lg">Back</button>
        </a>
        <!--        name="action" refers to our $_GET['action'] variable-->
        <!--        value="create" refers to the case 'create' from the switch statement-->
        <button name="action" value="create" type="submit" style="padding: 10px 10px"
                class="btn btn-primary btn-lg">Edit record!</button>
    </div>
</form>
</body>
</html>