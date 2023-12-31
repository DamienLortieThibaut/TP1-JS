<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <link rel="stylesheet" href="../../scss/index.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <title>OptiPrime - Produits</title>
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
      <h2>Contactez-nous</h2>
      <form action="" method="POST">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required />

        <label for="email">Adresse e-mail :</label>
        <input type="email" id="email" name="email" required />

        <label for="message">Message :</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <button type="submit">Envoyer</button>
        <?php echo "$content" ?>
      </form>
    </section>

    <footer>
      <div class="footer-content">
        <div class="left-part">
          <h2 class="title-footer">Opti Prime</h2>
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
