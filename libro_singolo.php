<?php
// Genera un numero casuale tra 1.0 e 5.0
$rating = (mt_rand(0, 40) / 10) + 1;
?>

<div class="col-lg-3 col-md-4 col-sm-6 mb-4">
    <div class="card h-100 w-100">

    

        <div class="product-detail-container p-2">

            <div class="d-flex justify-content-between align-items-center">
                <h6 class="fs-6 font-weight-bold">
                    <?php echo $book['titolo']; ?>
                </h6>
                
            </div>
            <!-- Autore -->
            <div class="d-flex justify-content-between align-items-center">
                <blockquote class="author-name" data-author-id="<?php echo $book['id']; ?>">
                    <?php echo "Autore - ". $book['autore']; ?>
                </blockquote>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <blockquote class="anno_pubblicazione" data-author-id="<?php echo $book['id']; ?>">
                    <?php echo "Anno - ". $book['anno_pubblicazione']; ?>
                </blockquote>
            </div>


            <div class="d-flex justify-content-between align-items-center">
                <blockquote class="genere" data-author-id="<?php echo $book['id']; ?>">
                    <?php echo $book['genere']; ?>
                </blockquote>
            </div>

            <div class="rating">
        <span class="rating-number"><?php echo $rating; ?></span>
        <?php
        for ($i = 1; $i <= 5; $i++) {
            if ($rating >= $i - 0.5) {
                if ($rating >= $i) {
                    echo '<i class="bi bi-star-fill"></i>';
                } else {
                    echo '<i class="bi bi-star-half"></i>'; 
                }
            } else {
                echo '<i class="bi bi-star"></i>'; 
            }
        }
        ?>
    </div>
            <!-- Genere  -->
            <div class="d-flex justify-content-between align-items-center pt-1">
                <div class="color-select d-flex">
                    <?php
                    $genre = $book['genere'];
                    $icon_class = '';

                    switch ($genre) {
                        case 'Fantasy':
                            $icon_class = 'fas fa-dragon';
                            break;
                        case 'Romanzo':
                            $icon_class = 'bi bi-heart';
                            break;
                        default:
                            $icon_class = 'bi bi-book';
                            break;
                    }
                    ?>
                    <button type="button" class="btn creme" style="padding: 8px 12px;"><i
                            class="<?php echo $icon_class; ?>"></i></button>

                            <a href='RimuovereLibro.php?id=<?php echo $book['id']; ?>' class="btn red ml-2 d-flex align-items-center" onclick="return confirm('Sei sicuro di voler eliminare questo libro?')">
    <i class="bi bi-trash-fill"></i>
</a>
                    <a href='modificazione_libro.php?id=<?php echo $book['id']; ?>' class="btn blue ml-2 d-flex align-items-center"><i
                            class="bi bi-pencil-square"></i></a>
                </div>
                <div class="d-flex">
                </div>
            </div>

            <div class="d-flex justify-content-between align-items-center pt-1">
    
   
</div>
        </div>
    </div>
</div>