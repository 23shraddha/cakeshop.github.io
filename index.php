<?php include("header.php"); 
// session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>



    <div class="container mt-5">
        <div class="row">
        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="bf.jpg" class="card-img-top" style="height:300px;">
                <div class="card-body text-center">
                    <h5 class="card-title">Black Forest</h5>
                    <p class="card-text">Price: Rs. 400/-</p>
                    <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add To Cart</button>
                    <input type="hidden" name="Item_Name" value="Black Forest">
                    <input type="hidden" name="Price" value="400">
                </div>
            </div>
            </form>
        </div>

        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="wff.jpg" class="card-img-top" style="height:300px;">
                <div class="card-body text-center">
                    <h5 class="card-title">White Forest</h5>
                    <p class="card-text">Price: Rs. 380/-</p>
                    <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add To Cart</button>
                    <input type="hidden" name="Item_Name" value="White Forest">
                    <input type="hidden" name="Price" value="380">
                </div>
            </div>
            </form>
        </div>

        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="mang.jpg" class="card-img-top" style="height:300px;">
                <div class="card-body text-center">
                    <h5 class="card-title">Mango Pastry</h5>
                    <p class="card-text">Price: Rs. 350/-</p>
                    <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add To Cart</button>
                    <input type="hidden" name="Item_Name" value="Mango Pastry">
                    <input type="hidden" name="Price" value="350">
                </div>
            </div>
            </form>
        </div>

        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="straw.jpg" class="card-img-top" style="height:300px;">
                <div class="card-body text-center">
                    <h5 class="card-title">Strawberry Pastry</h5>
                    <p class="card-text">Price: Rs. 340/-</p>
                    <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add To Cart</button>
                    <input type="hidden" name="Item_Name" value="Strawberry Pastry">
                    <input type="hidden" name="Price" value="340">
                </div>
            </div>
            </form>
        </div>

      
        </div>
    </div>
</body>
</html>