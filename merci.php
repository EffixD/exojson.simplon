<?php
  session_start();
  $host = 'localhost';
  $dbname = 'exojson';
  $username = 'root';
  $password = '';
  try{
  $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
}catch(Exception $e)
{
  // En cas d'erreur, un message s'affiche et tout s'arrête
        die('Erreur : '.$e->getMessage());
}
?>

<HTML lang="fr">
<head>

</head>
<body>
  <h2>
    <?php
      $options = json_decode($_SESSION['jsoncom']);
        if ($options->mayo == 'true') {
          $mayo = "mayo";
        }else{
          $mayo = NULL;
        };
        if ($options->pv == 'true') {
          $pv = "poivre";
        }else{
          $pv = NULL;
        };
        if ($options->ket == 'true') {
          $ket = "ketchup";
        }else{
          $ket = NULL;
        };
     echo "Votre commande: " . $_SESSION['menu'] . " " . $ket . " " . $mayo . " " . $pv . "!" ;
    ?>
  </h2>
</body>
</html>
