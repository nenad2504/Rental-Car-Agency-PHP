<?php session_start();
    if (isset($_POST['submit'])) {
      require_once '../config/konekcija.php';
      require_once '../models/post/post.php';

    $error = [];


      $naslov = $_POST['naslov'];
      $sadrzaj = $_POST['sadrzaj'];
      $naziv = $_POST['naziv'];


      var_dump ($_SESSION);


      if (!empty($naslov)) {

      } else {
        $error[] = 'Morate popuniti polje naslov!';
      }

      if (!empty($sadrzaj)) {
        // code...
      } else {
        $error[] = 'Morate popuniti polje sadrzaj!';
      }

      //unos novog posta
  //     $rezultat = insertPost($id, $naslov, $sadrzaj, $idKorisnik);
  //
  //     if ($rezultat) {
  //       header ("Location: ../admin.php?page=blog");
  //     } else {
  //       echo "Nije uspesno unet post";
  //     }
  //
  //     var_dump($error);
  //
  //
  //
  //   } else {
  //
  //   header("Location:./../admin.php?page=admin");
  // }

$rezultat = upisKategorije($naslov, $sadrzaj, $naziv);
if ($rezultat) {
      header ("Location: ../admin.php?page=blog");
     } else {
       echo "Nije uspesno unet post";
     }

     var_dump($error);

   } else {

  header("Location:./../admin.php?page=admin");
}
