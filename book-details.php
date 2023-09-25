
<?php
include "include/header.php";
?>
    
    <main>

        <?php
        $pro_id = $_GET['pro_id'];
        include "admin/db.php";
        $sel = "SELECT * FROM `pro` WHERE `pro_id` = '$pro_id'   ";
        $query = mysqli_query($con, $sel);
        while ($row = mysqli_fetch_array($query)) {
        ?>
            <div class="services-area2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-xl-12">

                                    <div class="single-services d-flex align-items-center mb-0">
                                        <div class="features-img">
                                            <img src="admin/<?php echo $row['image'] ?>" height="250px" width="100%" alt="image">
                                        </div>
                                        <div class="features-caption">
                                            <h3><?php echo $row['title'] ?></h3>
                                            <p><?php echo $row['title'] ?></p>
                                            <div class="price">
                                                <span><?php echo $row['price'] ?></span>
                                            </div>
                                            <div class="review">
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </div>
                                                <p>(<span>120</span> Review)</p>
                                            </div>
                                            <a href="#" class="white-btn mr-10">Add to Cart</a>
                                            <a href="#" class="border-btn share-btn"><i class="fas fa-share-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="container mt-5 mb-5">
                <div class="row justify-content-center">

                    <div class="col-10">
                        <ul class="nav nav-tabs mb-5" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Description</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                                    Author</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">
                                    Comments</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false" disabled>review</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent" style="color:#8b8889;line-height :1.7;">
                            <div class="tab-pane fade show active"  id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0"><?php echo $row['description'] ?></div>
                            <div class="tab-pane fade"  id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0"><?php echo $row['title'] ?></div>
                            <div class="tab-pane fade"  id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...</div>
                            <div class="tab-pane fade"  id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div>
                        </div>
                    </div>
                </div>
            </div>
        <?php   } ?>


        <section class="subscribe-area">
            <div class="container">
                <div class="subscribe-caption text-center  subscribe-padding section-img2-bg" data-background="assets/img/gallery/section-bg1.jpg">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8 col-md-9">
                            <h3>Join Newsletter</h3>
                            <p>Lorem started its journey with cast iron (CI) products in 1980. The initial main objective was to ensure pure water and affordable irrigation.</p>
                            <form action="#">
                                <input type="text" placeholder="Enter your email">
                                <button class="subscribe-btn">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <?php
include "include/footer.php";
?>