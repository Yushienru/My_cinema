
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
    <script src="test.js"></script>
    <script src="JavaScript/dropdown.js"></script>
    <script src="JavaScript/dropdown_dist.js"></script>
    <script src="JavaScript/search.js"></script>
    <script src="titre.js"></script>






    <!-- NAVBAR -->

    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark m-3">
        
            <a class="logo"><img src="logo_2.png" alt="logo_site" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav mr-auto">
                    <ul>
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="films.php">Tous les films</a>
                    </li>
                    </ul>

                    <div class="dropdown mt-2">
                    
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Genre
            </button>
            <div class="dropdown-menu" id="filter_genre" aria-labelledby="dropdownMenuButton1">
                    <?php require "genre.php" ?>    
            </div>
            </div>

            <div class="dropdown ml-3 mr-3 mt-2">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Distributeurs
            </button>
            <div class="dropdown-menu" id="filter_distrib" aria-labelledby="dropdownMenuButton2">
                    <?php require "distrib.php" ?>    
            </div>
            </div>
      
                </div>
                <form class="form-inline my-2 my-lg-0">
                    <input id="query_titre" class="form-control mr-sm-2 col-9 mt-1 ml-8" type="search" placeholder="Rechercher noms de films" aria-label="Search">
                    <button id="submit_titre" class="btn btn-outline-success my-2 my-sm-0 ml-3" type="submit">GO</button>
                </form>
                <form action="search_noms.php" method="post" class="form-inline my-2 my-lg-0">
                    <input id="query_name" class="form-control mr-sm-2 mt-1 ml-8 col-2" type="search" name="Nom" placeholder="Nom" aria-label="Search">
                    <input id="query_last_name" class="form-control mr-sm-2 mt-1 ml-8 col-2" type="search" name="Prenom" placeholder="Prenom" aria-label="Search">
                    <button id="submit_name" class="btn btn-outline-success my-2 my-sm-0 ml-3" type="submit">GO</button>
                </form>

            </div>
            
            <a href="#" class="btn btn-info btn-lg mr-2"><span class="glyphicon glyphicon-user"></span> S'enregistrer </a>
            <a href="#" class="btn btn-info btn-lg mr-2"><span class="glyphicon glyphicon-lock"></span> Mon compte </a>
            <a href="mes_abonnements.php" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-new-window"></span>Mon abonnement </a>

    </nav>

    
   



