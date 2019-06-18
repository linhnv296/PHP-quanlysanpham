<?php
include_once "class/DBConnect.php";
include_once "class/Product.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<?php

?>
<a href="app/add.php"><input type="submit" value="Add Product"></a>
<table>
    <tr>
        <th>ID</th>
        <th class="tdwidth">Product Name</th>
        <th class="tdwidth">Price</th>
        <th class="tdwidth">Decreption</th>
    </tr>
    <?php
    $products = new Product();
    $result = $products->getAll();
    foreach ($result as $product){
        ?>
        <tr>
            <td><?php echo $product['id']?></td>
            <td class="tdwidth"><?php echo $product['productName']?></td>
            <td class="tdwidth"><?php echo $product['price']?></td>
            <td class="tdwidth"><?php echo $product['decreption']?></td>
            <td name="<?php echo $product['id']?>">
                <a href="app/edit.php?page=edit&id=<?php echo $product['id']?>">
                    <button type="submit">Edit</button>
                </a>
            </td>
            <td name="<?php echo $product['id']?>">
                <a href="app/delete.php?page=delete&id=<?php echo $product['id']?>">
                    <button type="submit">Delete</button>
                </a>
            </td>

        </tr>
        <?php
    }
    ?>
</table>
</body>
</html>

