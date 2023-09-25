<?php
include "include/header.php";
?>
    <main>
        <div class="slider-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slider-active dot-style">

                            <div class="single-slider slider-height slider-bg1 d-flex align-items-center">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-6 col-sm-7">
                                            <div class="hero-caption text-center">
                                                <span data-animation="fadeInUp" data-delay=".2s">Science Fiction</span>
                                                <h1 data-animation="fadeInUp" data-delay=".4s">The History<br> of Phipino</h1>
                                                <a href="#" class="btn hero-btn" data-animation="bounceIn" data-delay=".8s">Browse Store</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="single-slider slider-height slider-bg2 d-flex align-items-center">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-6 col-sm-7">
                                            <div class="hero-caption text-center">
                                                <span data-animation="fadeInUp" data-delay=".2s">Science Fiction</span>
                                                <h1 data-animation="fadeInUp" data-delay=".4s">The History<br> of Phipino</h1>
                                                <a href="#" class="btn hero-btn" data-animation="bounceIn" data-delay=".8s">Browse Store</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="single-slider slider-height slider-bg3 d-flex align-items-center">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-6 col-sm-7">
                                            <div class="hero-caption text-center">
                                                <span data-animation="fadeInUp" data-delay=".2s">Science Fiction</span>
                                                <h1 data-animation="fadeInUp" data-delay=".4s">The History<br> of Phipino</h1>
                                                <a href="#" class="btn hero-btn" data-animation="bounceIn" data-delay=".8s">Browse Store</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <section>
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-md-12 col-lg-3  ">
                    <div class="  p-3">
                        <div class="box p-4 my-2  ">
                            <h3 class="h4 fw-bold">Filter by category</h3>
                            <ul class="list-unstyled">
                                <?php
                                include "admin/db.php";
                                $sel = "SELECT * FROM `cat`";
                                $query = mysqli_query($con, $sel);
                                while ($row = mysqli_fetch_array($query)) {
                                ?>
                                    <li class="my-3 mx-4"><a href="Cat-Page.php?cat_id=<?php echo $row['cat_id'] ?>" class="text-capitalize fw-bold"><?php echo $row['cat_name'] ?></a></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                        <div class="box p-4 my-2  ">
                            <h3 class="h4 fw-bold">Filter by price</h3>
                            <ul class="list-unstyled">
                                <?php
                                include "admin/db.php";
                                $sel = "SELECT * FROM `sub_cat`";
                                $query = mysqli_query($con, $sel);
                                while ($row = mysqli_fetch_array($query)) {
                                ?>
                                    <li class="my-3 mx-4"><a href="" class="text-capitalize fw-bold"><?php echo $row['author_name'] ?></a></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                        <div class="box p-4 my-2  ">
                            <h3 class="h4 fw-bold">Filter by author</h3>
                            <ul class="list-unstyled">
                                <li class="my-3 mx-4"><a href="">horrer</a></li>
                                <li class="my-3 mx-4"><a href="">horrer</a></li>
                                <li class="my-3 mx-4"><a href="">horrer</a></li>
                                <li class="my-3 mx-4"><a href="">horrer</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-8 ">
                    <div class="row">
                        <?php
                        include "admin/db.php";
                        $sel = "SELECT * FROM `pro`";
                        $query = mysqli_query($con, $sel);
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <div class="col-12 col-md-12 col-lg-4 ">
                                <a href="#" class="text-decoration-none my-4 text-capitalize    d-block border">
                                    <div class="card_box">
                                        <div class="img">
                                            <img src="admin/<?php echo $row['image'] ?>" height="auto" width="100%" alt="image">
                                        </div>

                                        <div class="contaent pb-3 px-3   ">
                                            <h4 class="text-dark fw-bold  mt-5"><?php echo $row['title'] ?></h4>
                                            <h5>skdjfkj</h5>
                                            <div class="review mt-3">
                                                <div class="rating">
                                                    <i class="fa-solid  fa-star" style="color:#FF5700;"></i>
                                                    <i class="fa-solid  fa-star" style="color:#FF5700;"></i>
                                                    <i class="fa-solid  fa-star" style="color:#FF5700;"></i>
                                                    <i class="fa-solid  fa-star" style="color:#FF5700;"></i>
                                                    <i class="fa-solid  fa-star-half-alt" style="color:#FF5700;"></i>
                                                </div>
                                                <small class="float-end text-danger fs-4 fw-bold">$<?php echo $row['price'] ?></small>
                                                <small>(120 Review)</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
include "include/footer.php";
?>