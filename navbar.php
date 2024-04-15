<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EBooks</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    
    
    <link rel="stylesheet" href="assets/css/styles.php">

</head>

<body>

    <header class="head">
        
        <div id="navbarSupportedContent" class="navcol pt-0 d-none d-lg-block">
            <ul>
                <li class="border-bottom text-center">
                    <a href="index.php"><i class="bi bi-house-door"></i> Home</a>
                </li>
    

                <li class="nav-item">
                    <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Aggiungi un nuovo libro</button>
                </li>

            </ul>
        </div>
    </header>
    <div class="main-content">
        <h1 class="text-center">Benvenuti nella mia libreria</h1>
        <div class="nav-bar sticky-top sticky-top-xl bg-white shadow-sm w-100 p-3">
            <div class="row  align-items-center">
                <div class="col-12">
                    <div class="input-group mb-0">
                        <form class="form-inline input-group align-items-center mb-0 " action="search.php" method="GET">
                            <input class="form-control border-end-0  mr-sm-2" type="search" placeholder="Cerca nel database"
                                aria-label="Search" name="query">
                            <button class="btn" type="submit">
                                <span class="input-group-text sit border-start-0" id="basic-addon2">
                                    <i class="bi bi-search">
                                    </i>
                                </span>
                            </button>
                        </form>
                    </div>
                </div>


            </div>
        </div>


        <nav>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Aggiungi un nuovo libro</h5>
                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                               
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="addBookForm" action="aggiuntaLibri.php" method="post">
                                <div class="form-group">
                                    <label for="bookTitle">Titolo:</label>
                                    <input type="text" class="form-control" id="bookTitle" name="titolo" required>
                                </div>
                                <div class="form-group">
                                    <label for="bookAuthor">Autore:</label>
                                    <input type="text" class="form-control" id="bookAuthor" name="autore" required>
                                </div>
                                <div class="form-group">
                                    <label for="publicationYear">Anno di pubblicazione:</label>
                                    <input type="text" class="form-control" id="publicationYear"
                                        name="anno_pubblicazione" required>
                                </div>
                                <div class="form-group">
                                  <label for="genere">Genere:</label>
                                    <select class="form-control" id="genere" name="genere">
                                         <option value="Romanzo" >Romanzo</option>
                                         <option value="Fantasy" >Fantasy</option>
                                         <option value="Giallo" >Giallo</option>

                                         </select>
</div>
                                
                                <button type="submit" class="btn btn-primary mt-3">AGGIUNGI</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Chiudi</button>
                        </div>
                    </div>
                </div>
            </div>

        </nav>