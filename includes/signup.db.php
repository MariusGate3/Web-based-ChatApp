<?php
if (isset($_POST["signup-submit"])) {

  require 'dbh.php';

  $username = $_POST['uname'];
  $password = $_POST['pass'];
  $passwordCheck = $_POST['pass-repeat'];
  echo "data" + $username + $password + $passwordCheck;

  if (empty($username) || empty($password) || empty($passwordCheck)){
    echo "hej";
    header("Location: ../signup.php?error=emptyfields&uname?".$username);
    exit();
  }
  else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
    header("Location: ../signup.php?error=invalid&uname?".$username);
    exit();
  }
  else {

    $sql = "SELECT uname FROM users WHERE uname=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../signup.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_param($stmt, "s", $username);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt);
      if($resultCheck > 0) {
        header("Location: ../signup.php?error=unameTaken");
        exit();
      }
      else {

        $sql = "INSERT INTO users (uname, pass) VALUES (?,?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)){
          header("Location: ../signup.php?error=sqlerror");
          exit();
        }
        else {
          $hashedPass = password_hash($password, PASSWORD_DEFAULT);



          mysqli_stmt_bind_param($stmt, "ss", $username, $hashedPass);
          mysqli_stmt_execute($stmt);
          header("Location: ../signup.php?signup=godkendt");
          exit();
        }
      }

    }

  }

  mysqli_stmt_close($stmt);
  mysqli_close($conn);

}
else {
  header("Location: ../signup.php?");
  exit();
}
