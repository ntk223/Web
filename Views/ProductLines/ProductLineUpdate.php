<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>update</title>
            <style>
                form {
                    width: 50%;
                    margin: 0 auto;
                }
                input {
                    width: 100%;
                    padding: 10px;
                    margin: 10px 0;
                }
                .textDescription {
                    /* Add your custom styles here */
                    height: 100px;
                    width: 50%;
                    border: 2px solid #000;
                    background-color: #f9f9f9;
                }
            </style>
        </head>
        <body>
            <form action="" method="POST">
                <h1>Update</h1>
                <label for="textDescription">Description</label>
                <textarea name="textDescription" rows="4" cols="50"><?php echo htmlspecialchars($productline['textDescription']); ?></textarea>
                <input type="submit" name="submit" value="Update">
            </form>
        </body>
</html>