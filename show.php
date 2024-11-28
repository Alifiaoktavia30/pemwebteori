<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-top: 20px;
        }

        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 90%;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        table thead tr {
            background-color: #4CAF50;
            color: white;
        }

        table th,
        table td {
            padding: 15px;
            text-align: center;
            border: 1px solid #ddd;
        }

        table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tbody tr:hover {
            background-color: #f1f1f1;
        }

        table a {
            color: #4CAF50;
            text-decoration: none;
            font-weight: bold;
        }

        table a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Data Produk</h1>
    <table border="1">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Gambar Produk</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                require './config/db.php';

                $products = mysqli_query($db_connect, "SELECT * FROM products");
                $no = 1;

                while ($row = mysqli_fetch_assoc($products)) {
            ?>
                <tr>
                    <td><?=$no++;?></td>
                    <td><?=$row['name'];?></td>
                    <td>Rp<?=number_format($row['price'], 0, ',', '.');?></td>
                    <td><a href="<?=$row['image'];?>" target="_blank">Unduh</a></td>
                    <td>
                        <a href="edit.php?id=<?=$row['id'];?>">Edit</a> | 
                        <a href="delete.php?id=<?=$row['id'];?>">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
