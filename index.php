<?php
include('controller/product.php');
$productView = new Product();
$dataProduct = $productView->view_product();

//check apakah mendapat return nilai
if ($dataProduct[0] == 1) {
    $dataProduct = $dataProduct[1];
} else {
    //trigger warning nantinya
    $warning = 1;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <table style="border: 1px solid black;">
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Price</th>
            <th>Description</th>
            <th>Category</th>
            <th>Stock</th>
        </tr>
        <?php
        $no = 1;
        foreach ($dataProduct as $row) {
        ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['price'] ?></td>
            <td><?= $row['description'] ?></td>
            <td><?= $row['category'] ?></td>
            <td><?= $row['stock'] ?></td>
        </tr>
        <?php } ?>
    </table>
</body>

</html>