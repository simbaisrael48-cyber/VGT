<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boutique</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
            <div class="fixation">
                <nav>
                    <ul class="menu">
                        <li> <a href="produits.php">Accueil</a></li>
                        <li> <a href="boutique.php">Boutique</a></li>
                        <li> <a href="">Catégorie</a></li>    
                    
                    </ul>
                </nav>
            </div>
        </header><br><br><br><br>
    <div class="title_boutique">
        <h1>Faites vous plaisir</h1><br><br><br><br>
    </div>
    
</body>
</html>






<?php
require "config/database.php";

$sql = "SELECT * FROM produits1";
$resultat = $conn->query($sql);

?>

<div class="produits">
    

<?php while ($produit = $resultat->fetch(PDO::FETCH_ASSOC)) { ?>

    <div class="produit">

        <img src="images/<?php echo $produit['Image']; ?>">
        <h2><?php echo $produit['Nom']; ?></h2>
        <p><?php echo $produit['Description']; ?></p>
        <p><?php echo $produit['Prix']; ?> $</p>
        
        <button>Voir plus</button>
    </div>

<?php } ?>
</div>
    