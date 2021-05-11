<?php
session_start();
?>

<HTML lang="fr">


<head>

</head>
<body>
  <form action="./exojson-traitement.php" method="GET">
    <label for="menu">Le Menu:</label><br>
    <input list="menus" name="menu" id="menu">
    <datalist id="menus" >
      <option value="Big Mac">
      <option value="Cheeseburger">
      <option value="McDeluxe">
    </datalist><br>
    <input type="checkbox" id="vehicle1" name="mayo" value="true">
    <label for="vehicle1"> Mayo</label><br>
    <input type="checkbox" id="vehicle2" name="ket" value="true">
    <label for="vehicle2"> Ketchup</label><br>
    <input type="checkbox" id="vehicle3" name="pv" value="true">
    <label for="vehicle3"> Poivre</label><br>
    <input type="submit" value="Commander">
  </form>

</body>
