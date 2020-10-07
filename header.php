<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Chat app</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>
  <body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.php">ChatApp</a>
      <div class="container">
        <form action="includes/dbh.php" method="post">
          <input type="text" name="uname" placeholder="Brugernavn">
          <input type="password" name="pass" placeholder="Adgangskode">
          <button class="btn btn-primary" type="submit" name="login" >Login</button>
        </form>
        <a class="nav-link"href="signup.php">Opret Bruger</a>
        <form action="includes/signup.db.php" method="post">
          <button class="btn btn-dark"type="submit" name="logout">Logout</button>
      </div>
    </nav>
