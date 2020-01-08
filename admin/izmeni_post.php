<?php
    if (isset($_POST['submit'])) {
      require_once '../config/konekcija.php';
      require_once '../models/post/post.php';

    $error = [];

      $naslov = $_POST['naslov'];
      $sadrzaj = $_POST['sadrzaj'];
      $idKorisnik = 1;
      $idPost = $_POST['id'];
      $datum = date("Y-m-d H:i:s");


      // upis posta u bazu
                    if (updatePost($naslov, $sadrzaj, $idKorisnik, $datum, $id)) {
                    // echo "Uspesno";
                    header("Location: ./../admin.php?page=blog");

            }
            else {

              header("Location:./../admin.php?page=blog");
            }



    } else {

    header("Location:./../admin.php?page=admin");
  }




?>
