<?php
include 'databaseaccess.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $titolo = mysqli_real_escape_string($conn, $_POST['titolo']);
    $autore = mysqli_real_escape_string($conn, $_POST['autore']);
    $anno_pubblicazione = mysqli_real_escape_string($conn, $_POST['anno_pubblicazione']);
    $genere = mysqli_real_escape_string($conn, $_POST['genere']);

    $sql = "UPDATE libri SET titolo='$titolo', autore='$autore', anno_pubblicazione='$anno_pubblicazione', genere='$genere' WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo "Dati libro aggiornati con successo";
    } else {
        echo "Errore durante l'aggiornamento dei dati del libro: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
header("Location: index.php?status=success");

?>