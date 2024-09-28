
<body>
    <h1>List</h1>
    <?php if($result){ ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Adress</th>
        </tr>
        <?php while($row = $result->fetch_assoc()){ ?>
        <tr>
            <td><?php echo $row['customerNumber']; ?></td>
            <td><?php echo $row['customerName']; ?></td>    
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['addressLine1']; ?></td>
            <td>
            <a href="index.php?page=customers&action=update&id=<?php echo $row['customerNumber']; ?>">Edit</a> | 
            <a href="index.php?page=customers&action=delete&id=<?php echo $row['customerNumber']; ?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
    <?php } else { ?>
        <p>Không có dữ liệu</p>
    <?php } ?>
    <h1><a href="index.php?page=customers&action=add">Add</a></h1>
</body>



