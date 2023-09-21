<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Book Shop</title>
    <meta name="description" content>
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>

<body>
    <?php
    include_once("./admin/db.php");
    $category_sql = "SELECT * FROM cat  ";
    $resultset = mysqli_query($con, $category_sql) or die("database error:" . mysqli_error($con));
    $active_class = 0;
    $category_html = '';
    $product_html = '';
    while ($row = mysqli_fetch_assoc($resultset)) {
        $current_tab = "";
        $current_content = "";
        if (!$active_class) {
            $active_class = 1;
            $current_tab = 'active';
            $current_content = 'in active';
        }
        $category_html .= '<li class=" btn btn-info mx-2'  . $current_tab . '"><a href="#' . $row['cat_id'] . '" data-toggle="tab">' .
            $row['cat_name'] . '</a></li>';
        $product_html .= '<div id="' . $row["cat_id"] . '" class="tab-pane fade ' . $current_content . '">';
        $product_sql = "SELECT * FROM pro WHERE cat_id = " . $row["cat_id"];
        $product_results = mysqli_query($con, $product_sql) or die("database error:" . mysqli_error($con));
        if (!mysqli_num_rows($product_results)) {
            $product_html .=  '<br>No product found!';
        }
        while ($product = mysqli_fetch_assoc($product_results)) {
            $product_html .= '<div class="col-md-3 product">';
            $product_html .=  '<h4>' . $product["title"] . '</h4>';
            $product_html .=  '<h4>Price: $' . $product["cat_id"] . '</h4>';
            $product_html .=  '</div>';
        }
        $product_html .=  '<div class="clear_both"></div></div>';
    }
    ?>

    <ul class="nav nav-tabs  ">
        <?php echo $category_html; ?>
    </ul>
    <div class="tab-content">
        <?php echo $product_html; ?>

    </div>
    <br>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>