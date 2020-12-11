<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Red+Rose:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
      <input type="text" id="surname" name="surname" placeholder="Nom" required>
    </div>
    <div class="category">
      <label for="name">PRENOM</label>
      <input type="text" id="name" class="form-control" name="name" placeholder="Prénom" required>
    </div>
    <div class="category">
      <label for="mail">ADRESSE EMAIL</label>
      <input type="email" id="email" class="form-control email" name="email" placeholder="Email" required>
    </div>
    <div class="category">
      <label for="mail">TELEPHONE</label>
      <input type="text" id="phone" name="phone" placeholder="Téléphone" pattern="^0\d(?:\d{2}){4}$" title="format: 0123456789" required />
    </div>
    <div class="category">
      <label for="subject">SUJET</label>
		  <input type="text" id="subject" name="subject" placeholder="Sujet" required>
    </div>
    <div class="category">
      <label for="device">CATEGORIE</label>
		  <input type="text" id="device" placeholder="Imprimante, cartouche, toner" name="device" placeholder="" required>
    </div>
    <div class="message_container">
      <div class="category">
        <label for="message">MESSAGE</label>
        <textarea id="message" id="message" name="message" placeholder="Votre message..." required></textarea>
      </div>	
      <div class="autorization">
        <input type="checkbox" class="ckeckbox" id="">
        <label for="authorize" class="autorization_text">J’autorise le site à conserver mes données personnelles</label>
      </div>
      <div class="category">
        <button type="submit" name="send" value="send">ENVOYER</button>
      </div>
    </div>
    <?php
      if(isset($_POST['message'] )){
          $entete  = 'MIME-Version: 1.0' . "\r\n";
          $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
          $entete .= 'From: ' . $_POST['email'] . "\r\n";
              
          $message = '<h1>Message envoyé depuis la page Contact de svprint.com</h1>
          <p><b>Nom : </b>' . $_POST['name'] . '<br>
          <p><b>Prenom : </b>' . $_POST['surname'] . '<br>
          <b>Email : </b>' . $_POST['email'] . '<br>
          <b>Téléphone : </b>' . $_POST['phone'] . '<br>
          <b>Message : </b>' . $_POST['message'] . '</br>
          <b>Authorization : </b>' . $_POST['ok'] . '</br>
          <b>Sujet : </b>' . $_POST['subject'] . '</p>';

          $retour = mail('nellyanda18@gmail.com', 'Envoi depuis page Contact', $message, $entete);
          if($retour) {
            echo '<p>Votre message a bien été envoyé.</p>';
          }
      }
    ?>
  </form>
  <footer>
    <?php 
      require_once('footer.html');
    ?>
  </footer>
</body>
</html>