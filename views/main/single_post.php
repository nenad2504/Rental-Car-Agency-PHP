<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $blog = ispisivanjePostovaZaId($_GET['id']);
?>
    <?php foreach ($blog as $post): ?>

      <div class="container">
        <div class="row">
          <div class="col-lg-12 mt-5 mb-5">
              <h1><?= $post->naslov;  ?></h1>
              <p><?= $post->sadrzaj;  ?></p>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
<?php

  } else {
    header("Location: index.php?page=home");
  }
