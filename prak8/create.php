<!-- Dila Ayu Prastita
121140075
Praktikum Pemrograman Web Minggu 8 -->

<?php
include 'database.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (nama, email) VALUES ('$nama', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create</title>
</head>
<body>

<form action="create.php" method="post">
    <label for="name">nama:</label><br>
    <input type="text" id="nama" name="nama"><br>
    <label for="email">Email:</label><br>
    <input type="text" id="email" name="email"><br><br>
    <label for="prodi">prodi:</label><br>
    <input type="text" id="prodi" name="prodi"><br><br>
    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>