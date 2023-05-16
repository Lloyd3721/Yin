<form method="POST" action="">
  <label for="naam">Naam:</label>
  <input type="text" id="naam" name="naam"><br><br>
  
  <label for="achternaam">Achternaam:</label>
  <input type="text" id="achternaam" name="achternaam"><br><br>
  
  <label for="leeftijd">Leeftijd:</label>
  <input type="number" id="leeftijd" name="leeftijd"><br><br>
  
  <label for="adres">Adres:</label>
  <input type="text" id="adres" name="adres"><br><br>
  
  <label for="email">Email:</label>
  <input type="email" id="email" name="email"><br><br>
  
  <input type="submit" value="Versturen">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
  $naam = $_POST["naam"];
  $achternaam = $_POST["achternaam"];
  $leeftijd = $_POST["leeftijd"];
  $adres = $_POST["adres"];
  $email = $_POST["email"];
  
  echo "<h2>Ingevoerde gegevens:</h2>";
  echo "<p>Naam: " . $naam . "</p>";
  echo "<
