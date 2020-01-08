<?php
    require_once '../../config/konekcija.php';
    require_once './post.php';


        $status = 500;
        $data = null;

          if (isset($_GET['id'])) {
              $post = ispisivanjePostovaZaId($_GET['id']);
              if (isset($post)) {
                // header("Location: ../admin.php?page=post");
                $data = json_encode($post);
                $status = 201;
              }

          }

          http_response_code($status);
          echo $data;

         ?>
