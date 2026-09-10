


<!-- <link rel="stylesheet" href="style.css">
<div class="produits"> -->


<!-- // while ($produit = $resultat->fetch(PDO::FETCH_ASSOC)) { -->

<!-- //     echo "<img src='images/" . $produit["Image"] . "' width='300'>"; -->

<!-- //     echo "<h2>" . $produit["Nom"] . "</h2>"; -->

<!-- //     echo "<p>" . $produit["Description"] . "</p>"; -->

<!-- //     echo "<p>Prix : " . $produit["Prix"] . " $</p>"; -->

<!-- //     echo "<p>Disponibilité : " . $produit["Disponibilité"] . "</p>"; -->

<!-- //     echo "<p>Catégorie : " . $produit["Catégorie"] . "</p>"; -->

<!-- //     echo "<hr>"; -->
<!-- // } -->


<!-- </div> -->

<?php
require "config/database.php";

$sql = "SELECT * FROM produits1";
$resultat = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css">  
</head>

<body>


    <div class="image22">
            <img src="/mon-ecommerce/images/GPT.jpg">
        </div>
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
        </header>
    
        <section id="texte">
            <h1>
                Tout votre materiel électronique
                et informatique au même endroit
                <span>facilement.</span>
            </h1>
            <p>Avec Arman_Business, trouvez tout votre matériel électronique et informatique facilement. 
                <br>
                Visitez, Commandez vos produits et profitez de la livraison rapide,<br>
                le tout en un seul endroit.
            </p>
            <a href="#zoom_client" class="btn">Découvrir nos offres</a>
        </section>


    </div><br><br><br><br>




    <div class="title">
        <h3>Vos produits</h3>
    </div> <br><br>
   
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



<section id="section2">
            <div class="Equipement">
                <h2>Equipez-vous. Connectez-vous. <br> Progressez.<br></h2>
                <p> Ordinateurs, accessoires, outils électronique et équipements professionnels: trouvez tout au même endroit</p>
            </div>
            <div class="imagee">
                <img src="/mon-ecommerce/images/WhatsApp Image 2026-08-27 at 21.06.47.jpeg">
            </div>
        </section><br><br><br><br><br><br>

        <h4>Pourquoi nous choisir ?</h4><br><br><br><br><br>
        <section id="section3">
            <div class="icone">
                <img src="/mon-ecommerce/images/percent-100.svg" alt="point"><br>
                <h3>Produit de qualité</h3>
                <h5>Des produits fiable et performents</h5>
            </div>
            <div class="icone">
               <img src="/mon-ecommerce/images/Médaille.svg" alt="médaille"><br>
               <h3>Prix compétitifs</h3> 
               <h5>Les meilleurs prix du marché</h5>
            </div>
            <div class="icone">
                <img src="/mon-ecommerce/images/Livraison rapide.svg" alt="Livraison"><br>
                <h3>Livraison rapide</h3>
                <h5>Livraison partout à votre porte</h5>
            </div>
            <div class="icone">
                <img src="/mon-ecommerce/images/securite-des-paiements.svg" alt="paiement sécurisé"><br>
                <h3>Paiement sécurisé</h3>
                <h5>Transaction 100% sécurisées</h5>
            </div>
            <div class="icone">
                <img src="/mon-ecommerce/images/Support client.svg" alt="support client"><br>
                <h3>Support client</h3>
                <h5>Assistance dédiée 7j/7  </h5>
            </div>
        </section>
    </main><br><br><br><br><br><br><br><br>

    <footer><br><br>    
        <div class="footer1">
            <div class="footer1_0">
                <h1>
                    <i class="fi fi-rr-shopping-cart-add"></i><span style="color: rgb(250, 250, 250);">Arman</span><span style="color: #417eef;">_Business</span>
                </h1><br><br>
                <h5 class="a">Avec Arman_Business, Equipez-vous du meilleurs en<br>
                  matériel électronique et informatique. Qualité,<br>fiabilité et solutions à vos besoins.
                    .<br>
                    
                </h5><br><br>
            </div>

            <div class="footer1_1">
                <h3>NAVIGATION</h3><br>
            
                <!-- <li><a href="produits.php">Boutique</a></li><br> -->
                
                <li><a href="boutique.php">Boutique</a></li><br>            
                <li><a href="panier.php">Mon panier</a></li><br>
                
            </div>

            <div class="footer1.2">
                <h3>NOS PRODUITS</h3><br>
                <li><a href="#section2"></a>Equipements électroniques</li><br>
                <li><a href="#zoom_client"></a>Equipements informatiques</li><br>
                <li><a href="#zoom_client"></a>Switch</li><br>
                <li><a href="#a_propos"></a>Accessoires</li><br>

            </div>

            <div class="footer1_3">
                <h3>Contact</h3><br>
                <li><i class="fi fi-rr-envelope"></i> Arman_Business@gmail.com</li><br>
                <li><i class="fi fi-rr-phone-call"></i> +243 982 582 756</li><br>
                <li><i class="fi fi-rr-marker"></i> Kinshasa</li>    
                <br>
            </div>
        </div>
        
        <div class="social">
            <h6 class="A">Suivez-nous</h6>
            <div class="icons">
                <a href="https://www.facebook.com/simba israel" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/Israel simba ngolu" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://wa.me/0982582756" target="_blank"><i class="fab fa-whatsapp"></i></a>
                <a href="https://www.tiktok.com/@tonprofil" target="_blank"><i class="fab fa-tiktok"></i></a>
            </div>
        </div><br><br>
        <hr>
        <h6 class="h">©2026 MyShop. Tous droits réservés <br>
            <a href="produits.php">↑ Retour en haut</a>
        </h6>
          
    </footer>
</body>
</html>













