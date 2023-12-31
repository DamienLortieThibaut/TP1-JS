<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../scss/index.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <title>OptiPrime - Inscription</title>
  </head>
  <body>
    <header>
      <nav>
        <div class="logo">
          <img src="../../img/opti-prime.png" alt="logo optiprime" />
        </div>
        <ul class="nav-elements">
          <li><a href="../../accueil.html">Accueil</a></li>
          <li><a href="../../produit.html">Nos produits</a></li>
          <li><a href="../../contact.html">Contact</a></li>
          <li><a href="../../inscription.html">Inscription</a></li>
          <li><a href="../../connexion.html">Connexion</a></li>
        </ul>
        <div class="nav-search">
          <input type="text" placeholder="Recherche" />
        </div>
      </nav>
    </header>
    <section class="contact-form">
      <h2><?php (isset($content)) ? print_r('Nous Rejoindre'): print_r('Se connecter')  ?></h2>
      <form action="" method="POST">
        <label for="nom">Nom: </label>
        <input type="text" name="nom" placeholder="Dupont" />
        <label for="prenom">Prénom: </label>
        <input type="text" name="prenom" placeholder="Pierre" />
        <label for="motdepasse">Mot de passe: </label>
        <input type="password" name="motdepasse" />
        <button type="submit">Envoyer</button>
        <?php (isset($content)) ? (print_r($content)):(print_r($content_connexion)) ?>
      </form>
    </section>
    <footer>
      <div class="footer-content">
        <div class="left-part">
          <h2>Opti Prime</h2>
          <p class="footer-description">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero velit
            quos explicabo veniam error obcaecati! Amet dignissimos quod dolorem
            aspernatur? Fugiat quam ex illum optio.
          </p>
        </div>
        <div class="right-part">
          <div class="newsletter">
            <h3>NEWSLETTER</h3>
            <input type="email" placeholder="Your email address" />
          </div>
          <div class="follow-us">
            <h3>FOLLOW US :</h3>
            <ul>
              <li><i class="fab fa-facebook-f"></i></li>
              <li><i class="fab fa-twitter"></i></li>
              <li><i class="fab fa-instagram"></i></li>
              <li><i class="fab fa-pinterest"></i></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
