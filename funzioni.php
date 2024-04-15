<?php

function getAllBooks($conn)
{
    $sql = "SELECT * FROM libri";
    $result = mysqli_query($conn, $sql);
    return ($result && mysqli_num_rows($result) > 0) ? mysqli_fetch_all($result, MYSQLI_ASSOC) : false;
}


function getBooksByGenre($conn, $genere)
{
    $sql = "SELECT * FROM libri WHERE genere='$genere'";
    $result = mysqli_query($conn, $sql);
    return ($result && mysqli_num_rows($result) > 0) ? mysqli_fetch_all($result, MYSQLI_ASSOC) : false;
}


function displayBooks($books, $selected_genere = null)
{
    if ($books) {
        ?>
        <div class="section-container p-2 p-xl-4">
            <div class="row m-0 row-cols-1 row-cols-md-3 g-4">
                <?php foreach ($books as $book) { ?>

                    <?php include 'libro_singolo.php'; ?>

                <?php } ?>
            </div>
        </div>
    <?php } else {
        echo "Nessun libro trovato.";
    }
}
?>