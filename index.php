<?php
include 'conn.php';
if (isset($_POST['add'])) {
    $pid = $_POST['pid'];
    $pname = $_POST['pname'];
    $color = $_POST['color'];
    $size = $_POST['size'];
    $img = $_POST['img'];
    $shipping = $_POST['shipping'];
    $warranty = $_POST['warranty'];
    $query = " INSERT INTO bootstrapProducts VALUES ('$pid','$pname','$color','$size','$img','$shipping','$warranty')";
    $conn->query($query);
}
$query2 = "SELECT * FROM bootstrapProducts";
$result = $conn->query($query2);
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
        <h1>Products List</h1>
        <div class="table mytable table-hover text-center mx-auto">
            <table class="table table-hover table-striped ">
                <thead class="bg-dark text-white text-center">
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Color</td>
                        <td>Size</td>
                        <td>Warranty</td>
                        <td>Shipping</td>
                        <td>Image</td>
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($rows = $result->fetch_assoc()) { ?>
                        <tr class="text-center">
                            <td><?php echo $rows["pid"]; ?></td>
                            <td><?php echo $rows["pname"]; ?></td>
                            <td><?php echo $rows["color"]; ?></td>
                            <td><?php echo $rows["size"]; ?></td>
                            <td><?php echo $rows["warranty"]; ?></td>
                            <td><?php echo $rows["shipping"]; ?></td>
                            <td><img src="Images/<?php echo $rows["img"]; ?>" alt="" width=50px />
                                <td><a href="update.php?id=<?php echo $rows['pid']; ?>"><button class="btn BtnPrimary">Update</button></a></td>
                            <td><a href="delete.php?id=<?php echo $rows['ID']; ?>"><button class="btn BtnDanger">Delete</button></a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="container">
            <div class="text-center mx-auto">
                <button type="button" class="btn BtnSuccess btnsize" data-toggle="modal" data-target="#myModal">
                    Add New Product
                </button>
            </div>
        </div>

        <!-- The Modal -->
        <div class="modal fade " id="myModal">
            <div class="modal-dialog ">
                <div class="modal-content modelbg">

                    <!-- Modal Header -->
                    <div class="modal-header modelheader">
                        <h4 class="modal-title mx-auto">New Product Form</h4>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form name="productform" method="post">
                            <div class="form-group forminput">
                                <input type="text" name="pid" id="pid" class="form-control" placeholder="Product ID">
                            </div>
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
                    </div>


                    <div class=" modal-footer mx-auto text-center">
                        <button type="submit" class="btn BtnSuccess" name="add" id="add">Add
                            Product</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<script>
    window.addEventListener("scroll", function() {
        var header = document.querySelector("nav");
        header.classList.toggle("sticky", window.scrollY > 0);
    })
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    function Success_Delete() {
        swal({
            title: "Successful!",
            text: "Deleted Successfully",
            icon: "success",
            button: false,
            timer: 10000
        });
    }
</script>