<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Clients</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
  <?php
  require_once '../../vendor/autoload.php';
  use Model\admin;
  use Variable\Role;
  $admin = new admin("fawzi","ouaheb","mdp","fawzi@gmail.com");
  $stmt = $admin->selectAllStudent();
?>
<div class="container">
  <h1>Bonjour</h1>
  <ul class="client-list">
    <?php 
    $role=array(Role::teacher->value=>"professeur",Role::student->value=>"Etudiant",Role::admin->value=>"administrateur");
  while($data = $stmt->fetch(PDO::FETCH_ASSOC)){
    echo <<<HTML
        <li class="client">
          <div class="client-info">
            <p><strong>Nom : </strong>{$data['nom']}</p>
            <p><strong>Prénom : </strong>{$data['prenom']}</p>
            <p><strong>Adresse e-mail : </strong>{$data['email']}</p>
            <p><strong>status du compte : </strong>{$data['status']}</p>
            <p><strong>status du compte : </strong>{$role[$data['role']]}<p>
            <p><strong>date d'inscription : </strong>{$data['date_inscription']}</p>
          </div>
          <div class="client-actions">  
            <form action="" method="post" >
            <button class="accept-btn" name="Accept" value=>Accepter</button>
            <button class="reject-btn">Refuser</button>
          
            </form> 
          </div>
        </li>
       HTML; 
  }
    ?>
  </ul>
