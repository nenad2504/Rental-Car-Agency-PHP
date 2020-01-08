<?php session_start();
    require_once '../config/env.php';
    require_once '../config/konekcija.php';
    require_once '../models/user/user.php';

  if (isset($_POST['submit'])) {

      $email = $_POST['email'];
      $password = crypt($_POST['password'], SALT);

      $user = dohvatiKorisnikaEmailPassword($email, $password);
      var_dump($_SESSION);
      if ($user == false){
        $_SESSION['error_message'] = "Ne postoji korisnik sa tim email i password!";
        header ("Location: ../index.php?page=login");
      } else {
        $_SESSION['korsinik'] = $user;
        // if ($user->naziv == 'admin') {
        //   header("Location: admin.php?page=admin");
        // } else {
        //   header("Location: index.php?page=home");
        // }
        $user->naziv == 'admin' ?
          header("Location: ../admin.php?page=admin") : header("Location: ../index.php?page=home");
      }


  } else {
    echo "Greska";
    //header ("Location: ../index.php?page=login");
  }



 ?>
