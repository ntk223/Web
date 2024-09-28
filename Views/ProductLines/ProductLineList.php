
<body>
    <h1>List</h1>
    <?php if($result){?>
    <table>
        <tr>
            <td>ProductLine</td>
            <td>Description</td>
        </tr>
        <?php while ( $row = $result->fetch_assoc()){ ?>
        <tr>
            <td><?php echo $row["productLine"];?></td>
            <td style="width: 80%;"><?php echo $row["textDescription"]; ?></td>
            <td>
            <a href="index.php?page=productlines&action=update&id=<?php echo $row['productLine']; ?>">Edit</a> | 
            <a href="index.php?page=productlines&action=delete&id=<?php echo $row['productLine']; ?>">Delete</a>|
            <a href="index.php?page=productlines&action=showproduct&id=<?php echo $row['productLine']; ?>">Show products</a>
            </td>
        </tr>
        <?php } ?>
    </table>
    <?php } ?>
    <h1><a href="index.php?page=productlines&action=add">Add</a></h1>
</body>
