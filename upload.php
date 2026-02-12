<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $title = $_POST['title'];

    if (!isset($_FILES['photo']) || $_FILES['photo']['error'] !== UPLOAD_ERR_OK) {
        die("Upload failed");
    }

    $file = $_FILES['photo'];

    $allowed = ['image/jpeg', 'image/png', 'image/gif'];
    if (!in_array($file['type'], $allowed)) {
        die("Invalid file type");
    }

    $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
    $filename = uniqid() . '.' . $ext;

    move_uploaded_file($file['tmp_name'], 'uploads/' . $filename);

    $stmt = $pdo->prepare("INSERT INTO photos (title, filename) VALUES (?, ?)");
    $stmt->execute([$title, $filename]);

    echo "Upload successful!";
}
