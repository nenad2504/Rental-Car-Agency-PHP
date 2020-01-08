<?php
    require_once '../../config/konekcija.php';

    $data = new stdClass;
    $statusCode = 500;


    if (isset($_GET['id'])) {

      $query = "DELETE FROM post WHERE id = :idPost";
      $prUpit = $konekcija->prepare($query);
      $prUpit->bindParam(":idPost", $_GET['id'], PDO::PARAM_INT);

      $rezultat = $prUpit->execute();
      //$data->id=$_GET['id'];


      if($rezultat) {
        $statusCode = 200;
        $data->message = "Uspesno obrisan podatak!";
      } else {
        $statusCode = 500;
        $data->message = "Upit nije uspesno izvrsen!";
      }
    } else {
      $statusCode = 404;
      $data->message = "Pogresna stranica";
      echo "greska";
    }

    http_response_code($statusCode);
    //echo json_encode($data);

 ?>
