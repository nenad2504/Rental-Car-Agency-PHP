<!--== Page Title Area Start ==-->
<section id="page-title-area" class="section-padding overlay">
    <div class="container">
        <div class="row">
            <!-- Page Title Start -->
            <div class="col-lg-12">
                <div class="section-title  text-center">

                   <?php if (isset($_GET['id'])): ?>
                     <?php    $blog = ispisivanjePostovaZaId($_GET['id']);?>
                   
                       <?php foreach ($blog as $post): ?>
                    <h2><?= $post->naslov;  ?></h2>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </div>
            </div>
            <!-- Page Title End -->
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->
