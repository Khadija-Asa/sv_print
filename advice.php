<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/advice.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Red+Rose:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 
  <title>Conseils et Astuces</title>
</head>

  <?php
    require_once('header.html');
  ?>

  <body>

    <div class="title">
      <h1>Conseils et Astuces</h1>
      <span class="horizontal"></span>
    </div>

  <section class="content">

    <div class="part1">
      <img src="/drops/drop1.png" alt="Goutte avec une image">
      <p>
        1. <span class="highlight">Télécharger</span> les pilotes
      </p>
    </div>

    <div class="part2">
      <img src="/drops/drop2.png" alt="Goutte avec une image">
      <p>
        2. <span class="highlight">Activer</span> toutes les options (sprint, wifi, réseau)
      </p>
    </div>

    <!-- <div class="line">
      <span class="diagonal-line"></span>
    </div> -->

    <div class="part3">
      <img src="/drops/drop3.png" alt="Goutte avec une image">
      <p class="paragraph-3">
        3. <span class="highlight">Nettoyage</span> de votre imprimante :
        <br>
        - Jet d'encre : bombe gaz
        <br>
        - Laser : feuillet de nettoyage<span class="highlight">
        <br>
          Feuille magnétique</span> : attire les résidus, nettoie en profondeur les machines)
      </p>
    </div>

    <div class="part4">
      <img src="/drops/drop4.png" alt="Goutte avec une image">
      <p>
        4. Utiliser un <span class="highlight">papier adapté</span> à la machine
      </p>
    </div>

    <div class="part5">
      <img src="/drops/drop5.png" alt="Goutte avec une image">
      <p>
        5. Utiliser des <span class="highlight">cartouches XL</span>
      </p>
    </div>

    <!-- <div class="line">
      <span class="diagonal-line"></span>
    </div> -->

    <div class="part6">
      <img src="/drops/drop6.png" alt="Goutte avec une image">
      <p>
        6. Utiliser des cartouches remanufacturées haute gamme avec <span class="highlight">garantie</span>
      </p>
    </div>
    
    <div class="part7">
      <img src="/drops/drop7.png" alt="Goutte avec une image">
      <p class="paragraph-7">
        7. Changer les pièces d'usure <span class="highlight">au bon moment</span>
        <br>
        (ne pas attendre la dernière minute)
      </p>
    </div>
  </section>

    <?php
      require_once('footer.html');
    ?>

  </body>
</html>