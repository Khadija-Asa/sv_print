<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <header>
  <?php 
    require_once('header.html');
  ?>
  </header>
  <div>
    <h1>Contactez-nous</h1>
  </div>
  <div>
    <p>Service client au top à l'écoute du lundi au vendredi 
    <span class="highlight">de 9h à 12h00 / 13H45 - 17H45 </span>
    ou joignable par mail pour répondre à toutes vos questions, 
    une erreur dans votre commande ? ou non reçue : 
    Notre équipe vous recontactera dans la journée <span class="highlight">pour vous trouver une solution !<span></p>
  </div>
  <div>
    <div>
      <img src="arrow.png" alt="flèche">
      <p>SV Print<br>
      80 AV Roland Moreno<br>
      9410 Anzin</p>
    </div>
    <div>
    <img src="phone.png" alt="téléphone">
      <p>0652804655</p>
    </div>
    <div>
      <img src="at.png" alt="arobase">
      <p>sandy@svprint.fr</p>
    </div>
  </div>
  <form action="" method="post">
    <div>
      <label for="name">NOM:</label>
      <input type="text" id="name" name="user_name">
    </div>
    <div>
      <label for="name">PRENOM</label>
      <input type="text" id="name" name="user_name">
    </div>
    <div>
      <label for="mail">ADRESSE EMAIL</label>
      <input type="email" id="mail" name="user_mail">
    </div>
    <div>
      <label for="mail">TELEPHONE</label>
      <input type="email" id="mail" name="user_mail">
    </div>
    <div>
      <p>
        <label for="topic">SUJET</label>
        <select name="" id="">
          <option value="">Informations</option>
          <option value="">Achat</option>
          <option value="">Panne</option>
          <option value="">Recherche d'emploi/stage</option>
        </select>
      </p>
    </div>
    <div>
      <p>
        <label for="topic">CATEGORIE</label>
        <select name="" id="">
          <option value="">Imprimantes</option>
          <option value="">Cartouches</option>
          <option value="">Toner</option>
          <option value="">Autre</option>
        </select>
      </p>
    </div>
    <div>
      <label for="message">MESSAGE</label>
      <textarea id="message" name="user_message"></textarea>
    </div>
    <div>
      <input type="checkbox" class="" id="">
      <label for="authorize">J’autorise le site à conserver mes données personnelles</label>
    </div>
    <div>
      <button class="" type="submit">Envoyer</button>
    </div>
  </form>
  <footer>
    <?php 
      require_once('footer.html');
    ?>
  </footer>
</body>
</html>