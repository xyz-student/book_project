<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->

</head>

<body>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <?php
        include "./admin/db.php";
        $sel = "SELECT * FROM `cat`";
        $q = mysqli_query($con, $sel);
        while ($row = mysqli_fetch_array($q)) {
            $id = $row['cat_id'];

        ?>
            <li class="nav-item  " role="presentation">
                
                <button class="nav-link"   data-bs-toggle="tab" data-bs-target="#file<?php echo $row['cat_id'] ?>"><?php echo $row['cat_name'] ?></button>
            </li>
        <?php } ?>
    </ul>

    <div class="tab-content" id="myTabContent">
        <?php
        include "./admin/db.php";
        $sel = "SELECT * FROM `pro` WHERE cat_id = '1' ";
        $q = mysqli_query($con, $sel);
        while ($row = mysqli_fetch_array($q)) {
            // $id = $row['pro_id'];
            // $cat_id = $row['cat_id']
        ?>
            <div class="tab-pane  fade show active  " id="file<?php echo $row['cat_id'] ?>">
                <?php echo $row['title'] ?>
                <?php echo $row['cat_id'] ?>
            </div>

        <?php } ?>

    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>