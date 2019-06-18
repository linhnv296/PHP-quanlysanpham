<?php
include_once "../class/DBConnect.php";
include_once "../class/Product.php";

$idget = $_GET['id'];
$productGetOne = new Product();
$productGetOne->getOne($idget);
$result = $productGetOne->getOne($idget);
//print_r($result);

if ($_SERVER['REQUEST_METHOD']=="POST"){
    $id = $idget;
    $name = $_POST['name'];
    $price = $_POST['price'];
    $desc = $_POST['desc'];
    echo $id.$name.$price;
    $productEdit = new Product();
    $productEdit->edit($id,$name,$price,$desc);
}


?>
<form action="" method="post">
<br><span>ID:</span><span name="id"><?php echo $result['id']; ?></span>
<br><span>Product Name</span><input type="text" name="name" value="<?php echo $result['productName']; ?>">
<br><span>Price</span><input type="text" name="price" value="<?php echo $result['price']; ?>">
<br><span>Decreption</span><input type="text" name="desc" value="<?php echo $result['decreption']; ?>">
<br><span></span><input type="submit" value="Edit">

</form>



