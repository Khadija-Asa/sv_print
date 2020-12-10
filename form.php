<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/header.css" rel="stylesheet">
  <link href="css/footer.css" rel="stylesheet">
  <link href="css/form.css" rel="stylesheet">
  <title>Contactez-nous</title>
</head>
<body>
  <header>
  <?php 
    require_once('header.html');
  ?>
  </header>
  <div class="title">
    <h1>Contactez-nous</h1>
    <span class="horizontal"></span>
  </div>
  </div>
  <div>
    <p class="contact_us">Service client au top à l'écoute du lundi au vendredi 
    <span class="highlight">de 9h à 12h00 / 13H45 - 17H45 </span>
    ou joignable par mail pour répondre à toutes vos questions, 
    une erreur dans votre commande ? ou non reçue : 
    Notre équipe vous recontactera dans la journée <span class="highlight">pour vous trouver une solution !<span></p>
  </div>
  <div class="frames">
    <div class="frame">
      <img src="images/arrow.png" alt="flèche" class="small_icons">
      <p class="frame_address">SV Print<br>
      80 AV Roland Moreno<br>
      9410 Anzin</p>
    </div>
    <div class="frame">
    <img src="images/phone.png" alt="téléphone" class="small_icons">
      <p class="frame_text">0652804655</p>
    </div>
    <div class="frame">
      <img src="images/at.png" alt="arobase"class="small_icons">
      <p class="frame_text">sandy@svprint.fr</p>
    </div>
  </div>
  <form action="" method="post">
    <div class="category">
      <label for="name">NOM</label>
      <input type="text" id="surname" name="surname" placeholder="" required>
    </div>
    <div class="category">
      <label for="name">PRENOM</label>
      <input type="text" id="name" class="form-control" name="name" placeholder="" required>
    </div>
    <div class="category">
      <label for="mail">ADRESSE EMAIL</label>
      <input type="email" id="email" class="form-control email" name="email" placeholder="" required>
    </div>
    <div class="category">
      <label for="mail">TELEPHONE</label>
      <input type="text" id="phone" name="phone" placeholder="" pattern="^0\d(?:\d{2}){4}$" title="format: 0123456789" required />
    </div>
    <div class="category">
      <label for="subject">SUJET</label>
		  <input type="text" id="subject" name="subject" placeholder="" required>
    </div>
    <div class="message_container">
      <div class="category">
        <label for="message">MESSAGE</label>
        <textarea id="message" id="message" name="message" placeholder="" required></textarea>
      </div>	
      <div class="category autorization">
        <input type="checkbox" class="ckeckbox" id="">
        <label for="authorize" class="autorization_text">J’autorise le site à conserver mes données personnelles</label>
      </div>
      <div class="category">
        <button type="submit" name="send" value="send">ENVOYER</button>
      </div>
    </div>
  </form>
  <footer>
    <?php 
      require_once('footer.html');
    ?>
  </footer>
</body>
</html>