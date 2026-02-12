<!DOCTYPE html>
<html>

<head>
    <title>Upload Photo</title>
</head>

<body>

    <h1>Upload Photo</h1>

    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="title" placeholder="Photo title" required>
        <input type="file" name="photo" accept="image/*" required>
        <button type="submit">Upload</button>
    </form>

</body>

</html>