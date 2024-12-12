<?php
$conn=mysqli_connect(hostname: "localhost",username: "root",password: "",database: "day_5");
if(isset($_POST["submit"])){
    $productname=$_POST["productname"];
    $productprice=$_POST["productprice"];
    $productcategory=$_POST["productcategory"];
    $sqli="INSERT INTO `product_description`(`pname`, `pdescription`, `pprice`, `pcategory`) VALUES ('$productname','$productprice','$productcategory')";
    $result=mysqli_query(mysql:$conn,query:$sqli);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="style.css">
<title>Product page</title>
   
</head>
<body>

    <div class="container">
        <h1>Product Submission Form</h1>
        <form action="submit_product.php" method="POST" enctype="multipart/form-data">
            <!-- Product Name -->
            <div class="form-group">
                <label for="productName">Product Name</label>
                <input type="text" id="productName" name="productName" required>
            </div>

            <!-- Product Description -->
            <div class="form-group">
                <label for="productDescription">Product Description</label>
                <textarea id="productDescription" name="productDescription" required></textarea>
            </div>

            <!-- Product Price -->
            <div class="form-group">
                <label for="productPrice">Product Price ($)</label>
                <input type="number" id="productPrice" name="productPrice" step="0.01" required>
            </div>

            <!-- Product Category -->
            <div class="form-group">
                <label for="productCategory">Product Category</label>
                <select id="productCategory" name="productCategory" required>
                    <option value="electronics">Electronics</option>
                    <option value="fashion">Fashion</option>
                    <option value="home">Home & Kitchen</option>
                    <option value="beauty">Beauty</option>
                    <option value="sports">Sports</option>
                    <option value="toys">Toys</option>
                </select>
            </div>


            <!-- Submit Button -->
            <div class="form-group">
                <button type="submit" name="submit">Submit Product</button>
            </div>
        </form>

        <div class="form-footer">
            <p>Already have an account? <a href="login.html">Login here</a></p>
        </div>
    </div>
    </head>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>
