<?php
$conn = mysqli_connect("localhost",  "root",   "",  "tugastabel13");

$result = mysqli_query($conn, "SELECT * FROM tabel13");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Dartar Santri</h1>
<style>

table {
            
            border-collapse: collapse;
        }

        table, th, td {
            border: 3px solid black;
        }








</style>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>nama</th>
            <th>alamat</th>
            
        </tr>

        <?php while ( $row = mysqli_fetch_assoc($result) ) :
        ?>
        <tr>
            <td><?= $row["nama"]?></td>
            <td><?= $row["alamat"]; ?></td>
            
        </tr>
        <?php endwhile; ?>
    </table>

</body>
</html>

</body>
</html>
