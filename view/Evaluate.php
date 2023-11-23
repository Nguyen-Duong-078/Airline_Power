<?php
if (is_array($loadOne_blog)) {
    extract($loadOne_blog);
}
$images =  $image_path . $Image;
?>
<section class="blog-section ptb-120">
    <div class="container">
        <div class="row justify-content-center mb-30-none">
            <div class="col-xl-8 col-lg-8 mb-30">
                <div class="row justify-content-center mb-30-none">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-30">
                        <div class="blog-item">
                            <div class="blog-thumb">
                                <img src="<?= $images ?>" alt="blog">
                            </div>
                            <div class="blog-content">
                                <div class="blog-post-meta">
                                    <span class="date"><?= $Date ?></span>
                                    <span class="comment">3 Comment</span>
                                </div>
                                <h3 class="title"><a href="blog-details.html"><?= $Blog_name ?></a></h3>
                                <p><?= $Blog_content ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <style>
                    .title_dg {
                        width: 100%;
                        background: red;
                        margin-left: -20px;
                        padding: 10px;
                        border-radius: 10px;
                    }
                </style> -->
                <div class="blog-btn">
                    <div class="row">
                        <!-- <div class="title_dg">
                            Đánh giá
                        </div> -->
                        <?php
                        if (isset($_SESSION['username'])) {
                            extract($_SESSION['username']);
                        ?>
                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                            <script>
                                $(document).ready(function() {
                                    $("#binhluan").load("view/Evaluete/comments.php", {
                                        idpro: <?= $ID ?>
                                    });
                                });
                            </script>
                            <div class=" row conts_bl magin" id="binhluan"></div>

                        <?php
                        } else {
                        ?>
                            <h4 style="padding: 15px;"> <a href="index.php?action=login">Vui lòng đăng nhập để bình luận</a></h4>
                        <?php }
                        ?>

                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 mb-30">
                <div class="sidebar">
                    <div class="widget-box mb-30">
                        <h4 class="widget-title">Search</h4>
                        <div class="search-widget-box">
                            <form class="search-form">
                                <input type="text" name="search" class="form--control" placeholder="Search">
                                <button type="submit"><i class="icon-Search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="widget-box mb-30">
                        <h4 class="widget-title">Recent Posts</h4>
                        <div class="popular-widget-box">
                            <div class="single-popular-item d-flex flex-wrap align-items-center">
                                <div class="popular-item-thumb">
                                    <img src="assets/images/blog/small-blog-1.png" alt="blog">
                                </div>
                                <div class="popular-item-content">
                                    <span class="blog-date">Aug 23,2021</span>
                                    <h5 class="title"><a href="blog-details.html">Charter flight of the Death
                                            Penalty in America</a></h5>
                                </div>
                            </div>
                            <div class="single-popular-item d-flex flex-wrap align-items-center">
                                <div class="popular-item-thumb">
                                    <img src="assets/images/blog/small-blog-2.png" alt="blog">
                                </div>
                                <div class="popular-item-content">
                                    <span class="blog-date">Aug 23,2021</span>
                                    <h5 class="title"><a href="blog-details.html">Our technology consistently
                                            delivers</a></h5>
                                </div>
                            </div>
                            <div class="single-popular-item d-flex flex-wrap align-items-center">
                                <div class="popular-item-thumb">
                                    <img src="assets/images/blog/small-blog-3.png" alt="blog">
                                </div>
                                <div class="popular-item-content">
                                    <span class="blog-date">Aug 23,2021</span>
                                    <h5 class="title"><a href="blog-details.html">Search the world with ease and
                                            transparency</a></h5>
                                </div>
                            </div>
                            <div class="single-popular-item d-flex flex-wrap align-items-center">
                                <div class="popular-item-thumb">
                                    <img src="assets/images/blog/small-blog-4.png" alt="blog">
                                </div>
                                <div class="popular-item-content">
                                    <span class="blog-date">Aug 23,2021</span>
                                    <h5 class="title"><a href="blog-details.html">Charter an entire jet, or
                                            offer the seats</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-box mb-30">
                        <h4 class="widget-title">Categories</h4>
                        <div class="category-widget-box">
                            <ul class="category-list">
                                <li><a href="#0"><i class="fas fa-chevron-right"></i> Business Analysis
                                        <span>4</span></a></li>
                                <li><a href="#0"><i class="fas fa-chevron-right"></i> Business Strategy
                                        <span>5</span></a></li>
                                <li><a href="#0"><i class="fas fa-chevron-right"></i> Stock Investment
                                        <span>1</span></a></li>
                                <li><a href="#0"><i class="fas fa-chevron-right"></i> Business Analysis
                                        <span>4</span></a></li>
                                <li><a href="#0"><i class="fas fa-chevron-right"></i> Business Analysis
                                        <span>4</span></a></li>
                                <li><a href="#0"><i class="fas fa-chevron-right"></i> Business Analysis
                                        <span>4</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget-box">
                        <h4 class="widget-title">Tags</h4>
                        <div class="tag-widget-box">
                            <ul class="tag-list">
                                <li><a href="#0">Airport</a></li>
                                <li><a href="#0">Private Jet</a></li>
                                <li><a href="#0">Helicopter</a></li>
                                <li><a href="#0">Gallery</a></li>
                                <li><a href="#0">Corporate</a></li>
                                <li><a href="#0">Business</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <ul class="pagination">
                <li class="page-item prev">
                    <a class="page-link" href="#" rel="prev" aria-label="Prev &raquo;">PREV</a>
                </li>
                <li class="page-item active" aria-current="page"><span class="page-link">01</span></li>
                <li class="page-item"><a class="page-link" href="#">02</a></li>
                <li class="page-item"><a class="page-link" href="#">03</a></li>
                <li class="page-item"><a class="page-link" href="#">04</a></li>
                <li class="page-item"><a class="page-link" href="#">05</a></li>
                <li class="page-item next">
                    <a class="page-link" href="#" rel="next" aria-label="Next &raquo;">NEXT</a>
                </li>
            </ul>
        </nav>
    </div>
</section>
<!--End Blog-->