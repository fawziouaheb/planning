<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>
    <link rel="stylesheet" href="../css/inscription.css">
</head>
<body>
<div class="container">
  <h2>Inscription</h2>
  <form action="../../processing/registration.php" method="post">
    <div class="form-group">
      <label for="nom">Nom :</label>
      <input type="text" id="nom" name="nom" required>
    </div>
    <div class="form-group">
      <label for="prenom">Prénom :</label>
      <input type="text" id="prenom" name="prenom" required>
    </div>
    <div class="form-group">
      <input type="hidden" name="role" id="role" value=<?= $_GET['role']?? 0 ?>>
    </div>
    <div class="form-group">
      <label for="email">Adresse e-mail :</label>
      <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
      <label for="motDePasse">Mot de passe :</label>
      <input type="password" id="motDePasse" name="motDePasse" required>
    </div>
    <button type="submit">S'inscrire</button>
  </form>
</div>
</body>
</html>
