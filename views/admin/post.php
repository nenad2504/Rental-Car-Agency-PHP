<!--== Page Title Area Start ==-->
<section id="page-title-area" class="section-padding overlay">
    <div class="container">
        <div class="row">
            <!-- Page Title Start -->
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2>ADMIN POSTS</h2>
                    <span class="title-line"><i class="fa fa-car"></i></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
            <!-- Page Title End -->
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<div class="container">
  <h2>Unos posta</h2>
  <form class="form-horizontal" id="contactForm" action="admin/insert_post.php" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2">Naslov:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="Upisi naslov" name="naslov" id="tbNaslov">
      </div>
    </div>
    <div class="form-group">
    <label class="control-label col-sm-2" for="exampleFormControlTextarea1">Sadrzaj:</label>
    <div class="col-sm-10">
      <textarea class="form-control" name="sadrzaj" rows="3" placeholder="Upisi sadrzaj" id="tbSadrzaj"></textarea>
    </div>
  </div><br>
  <div class="form-group">
  <label class="control-label col-sm-2">Naziv kategorije:</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" name="naziv" placeholder="Dodaj naziv" id="tbNaziv">
  </div>
</div><br>
  <input type="hidden" name="id" value="" id="idPost">
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="submit" id="btnSubmit">Unesi novi post</button>
      </div>
    </div>
  </form>
  <?php
  if(isset($_SESSION['error_message'])){
    echo  $_SESSION['error_message'];
    unset($_SESSION['error_message']);
  }
    ?>
</div>


<div class="">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Naslov</th>
        <th scope="col">Sadrzaj</th>
        <th scope="col">Datum</th>
        <th scope="col">Username</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    	<?php
        require_once './models/post/post.php';
        $postovi = ispisivanjePostova();
        foreach($postovi as $p): ?>
      <tr>
        <th scope="row"></th>
        <td><?= $p->naslov ?></td>
        <td><?= $p->sadrzaj ?></td>
        <td><?= $p->datum ?></td>
        <td><?= $p->username ?></td>
        <!--<td><a href="models/post/delete_post.php?id=<?= $p->idPost ?>">Izbrisi</a></td><br>-->
        <td><a class="delete" href="#" data-mojIdPost="<?= $p->idPost ?>">Izbrisi</a></td><br>
        <td><a class="edit"  href="#" data-id="<?= $p->idPost ?>">Izmeni</a</td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <p id="result_operation" class="mt-5"></p>
</div>
