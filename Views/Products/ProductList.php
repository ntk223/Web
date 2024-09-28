
<body>
    <h1>List <?php echo isset($productline) ? $productline : 'Undefined'; ?></h1>
    <?php if($result){?>
    <table>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Vendor</td>
            <td>Description</td>
            <td>Price</td>
        </tr>
        <?php while ( $row = $result->fetch_assoc()){ ?>
        <tr>
            <td><?php echo $row["productCode"]; ?></td>
            <td><?php echo $row["productName"]; ?></td>
            <td><?php echo $row["productVendor"]; ?></td>
            <td style = "width:45%" ><?php echo $row["productDescription"]; ?></td>
            <td><?php echo $row["buyPrice"]; ?></td>
            <td>
            <a href="index.php?page=showproduct&action=update&id=<?php echo $row['productCode']; ?>">Edit</a> | 
            <a href="index.php?page=showproduct&action=delete&id=<?php echo $row['productCode']; ?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
    <?php } ?>
    <h1><a href="index.php?page=showproduct&action=add">Add</a></h1>
</body>
