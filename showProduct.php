<?php
include_once "header.php";
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
$sql = "select * from `products`";
$products = $conn->query($sql)->fetchAll();
var_dump($conn);
foreach ($products as $product){
    ?>

    <tr>
        <td><?php echo $product['id']?></td>
        <td class="tdwidth"><?php echo $product['productName']?></td>
        <td class="tdwidth"><?php echo $product['price']?></td>
        <td class="tdwidth"><?php echo $product['decreption']?></td>
        <td>edit</td>
        <td>delete</td>
    </tr>



    <?php
}
?>
</table>

