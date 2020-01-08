<?php

    if (isset($_POST['submit'])) {
          require_once 'config/konekcija.php';
          require_once 'config/env.php';
          require_once 'models/user/user.php';

          $firstName = $_POST['firstName'];
          $regExpFirstName = "/^[A-Z][a-z]{2,15}$/";

          $lastName = $_POST['lastName'];
          $regExpLastName = "/^([A-Z][a-z]{2,20})+$/";

          $email = $_POST['email'];

          $username = $_POST['username'];
          $regExpUsername = "/^[a-zA-Z0-9_]{5,30}+$/";

          $password = $_POST['password'];
          $rePassword = $_POST['rePassword'];
          $reqExpPassword = "/^(?=.*[a-z])(?=.*[0-9])[a-zA-Z0-9!?]{8,}$/";

          $error = [];

      //check first name
      if (!empty($firstName)) {
        if (!preg_match($regExpFirstName, $firstName)) {
          $error[] = 'Ime nije uneto kako treba!';
        }
      } else {
        $error[] ="Morate popuniti polje First name<br>";
      }

      //check last name
      if (!empty($lastName)) {
        if (!preg_match($regExpLastName, $lastName)) {
          $error[] = 'Prezime nije uneto kako treba!';
        }
      } else {
        $error[] ="Morate popuniti polje Last name<br>";
      }

      //check Email
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error[] = 'Nije unet email u skladu sa pravilom FILTER_VALIDATE_EMAIL!';
      }

      //check username
      if (!empty($username)) {
        if (!preg_match($regExpUsername, $username)) {
          $error[] = 'Username nije unet kako treba!';
        }
      } else {
        $error[] ="Morate popuniti polje Username<br>";
      }

      //check Password
      if (!empty($password)) {
        if (!preg_match($reqExpPassword, $password)) {
        $error[] = "Password nije unet kako treba";
        }
       } else {
        $error[] ="Morate popuniti polje Password<br>";
      }

      //check re-Password
      if (!empty($rePassword)) {


      } else {
        $error[] ="- Morate popuniti Repassword polje<br>";
      }

      if (!empty($password) && !empty($rePassword)) {
          if($password == $rePassword){
            $password = crypt($_POST['password'], SALT);
        }
      } else {
        $error[] ="Vase lozinke se ne poklapaju. Moraju biti jednake!<br>";
      }

      if ($error <> []) {
        //echo $error;
      } else {

      }

      //unos novog korisnika
      $rezultat = unesiNovogKorisnika($firstName, $lastName, $username, $email, $password);

      if ($rezultat) {
        header ("Location: index.php?page=home");
      } else {
        echo "Nije uspesno unet korisnik";
      }

      var_dump($error);

    } else {
      echo "Nije pronadjeno nista";
    }


 ?>
