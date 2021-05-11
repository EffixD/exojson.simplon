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

$menu = $_GET['menu'];
$_SESSION['menu'] = $menu;

if (isset($_GET['mayo'])) {
  $mayo = $_GET['mayo'];
}else{
  $mayo = 'false';
};
if (isset($_GET['pv'])) {
  $pv = $_GET['pv'];
}else{
  $pv = 'false';
};
if (isset($_GET['ket'])) {
  $ket = $_GET['ket'];
}else{
  $ket = 'false';
};

$options = new stdClass();
$options->mayo = $mayo;
$options->pv = $pv;
$options->ket = $ket;

$jsoncom = json_encode($options);
$_SESSION['jsoncom'] = $jsoncom;

$query = "INSERT INTO `commandes1` (`menu`, `options`) VALUES ('$menu', '$jsoncom')";
$pdo->exec($query);


header('location: ./merci.php');

?>
