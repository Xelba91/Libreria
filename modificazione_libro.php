<?php
include 'databaseaccess.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM libri WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifica libro</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2>Modifica il libro</h2>
            <form action='GestioneModificaLibro.php' method='post'>
                <div class="form-group">
                    <label for="titolo">Titolo:</label>
                    <input type='text' class="form-control" id="titolo" name='titolo' value='<?php echo htmlspecialchars($row['titolo'], ENT_QUOTES); ?>'>
                </div>
                <div class="form-group">
                    <label for="autore">Autore:</label>
                    <input type='text' class="form-control" id="autore" name='autore' value='<?php echo $row['autore']; ?>'>
                </div>
                <div class="form-group">
                    <label for="anno_pubblicazione">Anno di pubblicazione:</label>
                    <input type='text' class="form-control" id="anno_pubblicazione" name='anno_pubblicazione' value='<?php echo $row['anno_pubblicazione']; ?>'>
                </div>
                <div class="form-group">
                <label for="genere">Genere:</label>
    <select class="form-control" id="genere" name="genere">
        <option value="Romanzo" >Romanzo</option>
        <option value="Fantasy" >Fantasy</option>
        <option value="Giallo" >Giallo</option>
    
    </select>
</div>
                <input type='hidden' name='id' value='<?php echo $row['id']; ?>'>
                <button type="submit" class="btn btn-primary">Salva Modifiche</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>

<?php
    } else {
        echo "Libro non trovato";
    }
} else {
    echo "ID del libro non fornito";
}

mysqli_close($conn);
?>