<?php
require "header.php";
 ?>

 <main>
<h1>Signup</h1>
<div class="container"
<form action="includes/signup.db.php" method="post">
  <div class="col-lg">
  <input type="text" name="uname" placeholder="Brugernavn">
</div>
<div class="col-lg">
    <input type="password" name="pass" placeholder="Adgangskode">
  </div>
  <div class="col-lg">
    <input type="password" name="pass-check" placeholder="Gentag Adangskode">
  </div>
  <div class="text-aling">
    <button class="btn btn-secondary btn-block" type="submit" name="signup-submit">Opret Bruger</button>
  </div>
  </div
</form>
</main>

<?php
require "footer.php";
 ?>
