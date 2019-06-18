<?php
include_once "../class/Product.php";
include_once "../class/DBConnect.php";
?>
<form action="" name="FormAdd" method="post">
<!--    <br><span>ID</span><input name="id" type="text">-->
    <br><span>Product Name</span>
    <input name="name" type="text" required>
    <br><span>Price</span>
    <input name="price" type="number" required>
    <br><span>Decreption</span>
    <input name="descreption" type="text" required>
    <br><span></span>
    <input type="submit" value="Add Product">
</form>
<?php
if ($_SERVER['REQUEST_METHOD']=="POST"){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $descreption = $_POST['descreption'];
    $productAdd = new Product();
    $productAdd->add($id, $name, $price,$descreption);
}

?>
