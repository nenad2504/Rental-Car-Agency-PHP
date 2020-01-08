<?php
    function ispisivanjePostova() {
        global $konekcija;

        $query = "SELECT p.id AS idPost, p.naslov, p.sadrzaj, p.datum, k.username FROM post p INNER JOIN korisnik k
        ON p.idKorisnik = k.id";
        $prUpit = $konekcija->query($query);
        $post = $prUpit->fetchAll();

        return $post;
    }

    function ispisivanjePostovaZaId($id) {
        global $konekcija;

        $query = "SELECT p.id, p.naslov, p.sadrzaj, p.datum, k.username FROM post p INNER JOIN korisnik k
        ON p.idKorisnik = k.id WHERE p.id = :id";
        $prUpit = $konekcija->prepare($query);
        $prUpit->bindParam(":id", $id);

        $prUpit->execute();

        $post = $prUpit->fetch();

        return $post;
    }

  function insertPost($id, $naslov, $sadrzaj, $idKorisnik){
    global $konekcija;

    $query = "INSERT INTO post (id , naslov, sadrzaj, idKorisnik)
    VALUES (:id, :naslov, :sadrzaj, :idKorisnik )";

    $prUpit = $konekcija->prepare($query);
    $prUpit->bindParam(":id", $id);
    $prUpit->bindParam(":naslov", $naslov);
    $prUpit->bindParam(":sadrzaj", $sadrzaj);
    $prUpit->bindParam(":idKorisnik", $idKorisnik);

    $rez = $prUpit->execute();
    return $rez;
  }

  function updatePost($naslov, $sadrzaj, $datum, $idKorisnik, $id){
    global $konekcija;
    $query = "UPDATE post SET
    naslov = :naslov,
    sadrzaj = :sadrzaj,
    datum = :datum,
    idKorisnik = :idKorisnik,
    WHERE id = :id";

    $prUpit = $konekcija->prepare($query);
    $prUpit->bindParam(":naslov", $naslov);
    $prUpit->bindParam(":sadrzaj", $sadrzaj);
    $prUpit->bindParam(":datum", date("Y-m-d H:i:s"));
    $prUpit->bindParam(":idKorisnik", $idKorisnik);
    $prUpit->bindParam(":id", $id);

    $rez = $prUpit->execute();
    return $rez;
}

function upisKategorije($naslov, $sadrzaj, $naziv){
  global $konekcija;
  $query1 = "INSERT INTO post(naslov, sadrzaj) VALUES (:naslov, :sadrzaj)";
  $prUpit1 = $konekcija->prepare($query1);
  $prUpit1->bindParam(":naslov", $naslov);
  $prUpit1->bindParam(":sadrzaj", $sadrzaj);

  $query2 = "INSERT INTO kategorija(naziv) VALUES (:naziv)";
  $prUpit2 = $konekcija->prepare($query2);
  $prUpit2->bindParam(":naziv", $naziv);
  if($prUpit1->execute() AND $prUpit2->execute()){
    echo "Bravo majstore";
  } else {
    echo "glup si";
  }
}






 ?>
