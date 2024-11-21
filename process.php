<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $message = $_POST["message"];
    $file = $_FILES["file"];

    // Validasi data
    if (strlen($name) < 3 || strlen($message) < 10) {
        die("Invalid input data.");
    }

    // Validasi file
    $allowedTypes = ["text/plain", "image/jpeg", "image/png"];
    if (!in_array($file["type"], $allowedTypes)) {
        die("Invalid file type.");
    }

    // Simpan file ke folder uploads/
    $uploadDir = "uploads/";
    $filePath = $uploadDir . basename($file["name"]);
    move_uploaded_file($file["tmp_name"], $filePath);

    // Baca isi file
    $fileContent = file($filePath);

    // Informasi browser/sistem operasi
    $userAgent = $_SERVER["HTTP_USER_AGENT"];

    // Kirim data ke result.php
    session_start();
    $_SESSION["data"] = compact("name", "email", "age", "message", "filePath", "fileContent", "userAgent");
    header("Location: result.php");
    exit;
}
