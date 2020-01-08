<!--== Page Title Area Start ==-->
<section id="page-title-area" class="section-padding overlay">
    <div class="container">
        <div class="row">
            <!-- Page Title Start -->
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2>Our Latest Articles</h2>
                    <span class="title-line"><i class="fa fa-car"></i></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
            <!-- Page Title End -->
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<!--== Car List Area Start ==-->
<div id="blog-page-content" class="section-padding">
    <div class="container">
        <div class="row">
            <!-- Single Articles Start -->
            <div class="col-lg-12">
                <article class="single-article">
                    <div class="row">
                        <!-- Articles Thumbnail Start -->
                        <div class="col-lg-5">
                            <div class="article-thumb">
                                <img src="assets/img/article/arti-thumb-1.jpg" alt="JSOFT">
                            </div>
                        </div>
                        <!-- Articles Thumbnail End -->

                        <!-- Articles Content Start -->
                        <?php $postovi = ispisivanjePostova(); ?>
                        <div class="col-lg-7">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <div class="article-body">

                                      <?php foreach ($postovi as $post): ?>

                                        <h3><a href="article-details.html"><?= $post->naslov; ?></a></h3>
                                        <div class="article-meta">
                                            <a href="#" class="author">By :: <span><?= $post->username; ?></span></a>
                                            <a href="#" class="commnet">Comments :: <span>10</span></a>
                                        </div>

                                        <div class="article-date"><?= $post->datum; ?></span></div>

                                        <p><?= substr($post->sadrzaj,0,70) ."..."; ?></p>

                                        <a href="index.php?page=single_post&id=<?= $post->idPost; ?>" class="readmore-btn">Read More <i class="fa fa-long-arrow-right"></i></a>

                                      <?php endforeach; ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Articles Content End -->
                    </div>
                </article>
            </div>
            <!-- Single Articles End -->

        </div>

        <div class="row">
            <!-- Page Pagination Start -->
            <div class="col-lg-12">
                <div class="page-pagi">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- Page Pagination End -->
        </div>
    </div>
</div>
<!--== Car List Area End ==-->
