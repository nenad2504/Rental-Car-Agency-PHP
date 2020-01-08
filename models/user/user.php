<?php

function ispisKorisnika() {
    global $konekcija;

    $query = "SELECT * FROM korisnik";
    $prUpit = $konekcija->query($query);
    $korisnik = $prUpit->fetchAll();

    return $korisnik;
  }


function unesiNovogKorisnika($firstName, $lastName, $username, $email, $password) {
    global $konekcija;

    $query = "INSERT INTO korisnik (ime, prezime, username, email, password, idUloga)
              VALUES (:firstName, :lastName, :username, :email, :password, 2)";
    $prUpit = $konekcija->prepare($query);
    $prUpit->bindParam(":firstName", $firstName);
    $prUpit->bindParam(":lastName", $lastName);
    $prUpit->bindParam(":username", $username);
    $prUpit->bindParam(":email", $email);
    $prUpit->bindParam(":password", $password);

    $result = $prUpit->execute();

    return $result;
  }

function dohvatiKorisnikaEmailPassword($email, $password) {
      global $konekcija;

      $query = "SELECT k.id, email, username, idUloga, naziv
      FROM korisnik k INNER JOIN uloga u ON k.idUloga = u.id
      WHERE email = :email AND password = :password";

      $prUpit = $konekcija->prepare($query);
      $prUpit->bindParam(":email", $email);
      $prUpit->bindParam(":password", $password);

      $prUpit->execute();
      $rez = $prUpit->fetch();
      return $rez;
  }
