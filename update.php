<?php
include 'conn.php';
if (isset($_POST['update'])) {
    $pid = $_GET['id'];
    $pname = $_POST['pname'];
    $color = $_POST['color'];
    $size = $_POST['size'];
    $img = $_POST['img'];
    $shipping = $_POST['shipping'];
    $warranty = $_POST['warranty'];
    $query = "UPDATE bootstrapProducts SET 
    pid = '$pid', 
    pname = '$pname',
    color = '$color',
    size = '$size',
    img = '$img',
    shipping = '$shipping',
    warranty = '$warranty' 
    WHERE pid = $pid";
    $conn->query($query);
    header("location: http://localhost:8232/WE/Ecommerce_Bootstrap/index.php");
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>SHOP-IT</title>
</head>

<body>
    <nav class="navbar stickyHeader navbar-expand-lg navbar-dark">
        <div class="container-fluid mx-auto">


            <a class="navbar-brand bold" href="#"><img src="Images/icons8_price_30px.png" alt="" /> SHOP-IT</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="demo" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Images/Bg1.jpg" alt="Los Angeles" width="1400" height="400">
            </div>
            <div class="carousel-item">
                <img src="Images/Picture23.jpg" alt="New York" width="1400" height="400">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <div class="container mx-auto text-center my-4">
        <h1>Update Product Form</h1>
        <form class="text-white modelbg containersize mx-auto text-center" method="post">
            <div class="container">
                <div class="form-group forminput">
                    <input type="text" name="pname" id="pname" class="form-control" placeholder="Product Name">
                </div>
                <div class="form-group forminput">
                    <select name="color" id="color" class="form-control">
                        <option value="Red">Red</option>
                        <option value="White">White</option>
                        <option value="Black">Black</option>
                        <option value="Blue">Blue</option>
                        <option value="Green">Green</option>
                    </select>
                </div>
                <div class="form-group forminput">
                    <select name="size" id="size" class="form-control">
                        <option value="XS">XS</option>
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                    </select>
                </div>
                <div class="form-group forminput">
                    <input type="file" name="img" id="img" class="form-control">
                </div>
                <div class="form-group mx-auto text-center">
                    <label>Free Shipping</label><br>
                    <input type="checkbox" name="shipping" id="shipping" value="Free Shipping" default="Free Shipping" checked>
                </div>
                <div class="form-group mx-auto text-center">
                    <label>Warranty</label><br>
                    <input type="radio" name="warranty" id="warranty" value="15 Days"> 15 Days
                    <input type="radio" name="warranty" id="warranty" value="No Warranty" checked> No Warranty
                </div>

                <!-- Modal footer -->
                <div class="modal-footer mx-auto text-center">
                    <button type="submit" class="btn BtnSuccess" name="update" id="update">Update Product</button><br>
                    <a class=" btn BtnDanger btnsize" href="http://localhost:8232/WE/Ecommerce_Bootstrap/index.php">Back</a>
                </div>  
            </div>
        </form>
    </div>
</body>

</html>

<script>
    window.addEventListener("scroll", function() {
        var header = document.querySelector("nav");
        header.classList.toggle("sticky", window.scrollY > 0);
    })
</script>