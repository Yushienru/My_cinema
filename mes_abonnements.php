<!DOCTYPE HTML>
<html lang="fr">

<head>
    <title>My Cinema</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    
</head>

<body>
    <header>
        <?php require "navbar.php" ?>
    </header>
    <div class="container">
        <?php require "mes_abonnements_tab.php" ?>
        <h1 class="genre">Modifier vos abonnements</h1>
        <form action = "mes_abonnements.php" method = "POST" class="form-inline my-2my-lg-0 pb-4 formulaire" >
    
                <input id = "input_nom"  class="form-control mr-sm-2 col-2 " type="text" name = "nom" placeholder="Rechercher nom" aria-label="Search">
                <input id = "input_prenom" class="form-control mr-sm-2 col-2" type="text" name = "prenom" placeholder="Rechercher Prenom" aria-label="Search">
                <select name="abo" class="form-control">
                    <option>Choisir abonnement</option>
                    <?php require "dropdown_abonnement.php" ?>
                </select>
                                      
                
                <button class="btn btn-primary my-2 my-sm-0 ml-4" type="submit" value = "Modifier" >Modifier</button>
                <button class="btn btn-primary my-2 my-sm-0 ml-4" type="submit" value = "Modifier" >Ajouter</button>
                <button class="btn btn-primary my-2 my-sm-0 ml-4" type="submit" value = "Modifier" >Supprimer</button>
            </form>
                <?php require "nom_abonnement.php" ?>
    </div>

    

    
    <footer>
        
    </footer>
    
</body>

</html>