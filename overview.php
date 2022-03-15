<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VinylCollector | Track your collection</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<h1>VinylCollector - Track your collection</h1>

<table class="table table-hover">
    <thead>
    <tr>
        <th>#</th>
        <th>Artist</th>
        <th>Album</th>
        <th>Genre</th>
        <th>Year</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($_SESSION['records'] as $record) : ?>
        <tr>
            <td> <?= $record->record_id ?> </td>
            <td> <?= $record->artist ?> </td>
            <td> <?= $record->album ?> </td>
            <td> <?= $record->genre ?> </td>
            <td> <?= $record->year ?> </td>
        </tr>
    <?php endforeach; ?>

    </tbody>
</table>

</body>
</html>

