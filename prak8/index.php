<!-- Dila Ayu Prastita
121140075
Praktikum Pemrograman Web -->

<?php
include 'database.php';

$sql = "SELECT id, nama, email, prodi FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Praktikum Pemrograman Web Minggu 8</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Prodi</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nama"] . "</td><td>" . $row["email"] . "</td><td>" . $row["prodi"] . "</td></tr>";
        }
    } else {
        echo "<tr><td colspan='3'>No users found</td></tr>";
    }
    $conn->close();
    ?>
</table>

</body>
</html><?php
include 'database.php';

$sql = "SELECT id, nama, email, prodi FROM users";
$result = $conn->query($sql);
?>

