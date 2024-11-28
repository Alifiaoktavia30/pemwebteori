<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/cosmo/bootstrap.min.css"
        integrity="sha384-5QFXyVb+lrCzdN228VS3HmzpiE7ZVwLQtkt+0d9W43LQMzz4HBnnqvVxKg6O+04d" crossorigin="anonymous">
    <style>
        /* Mengatur latar belakang */
        body {
            background: linear-gradient(to bottom right, #343a40, #6c757d);
            color: white;
            font-family: 'Poppins', sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        /* Gaya untuk header */
        h1 {
            font-size: 2.5rem;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
            margin-bottom: 20px;
        }

        /* Gaya untuk tombol */
        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 1.2rem;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            box-shadow: 0 0 10px rgba(0, 123, 255, 0.8);
        }

        /* Gaya untuk kontainer */
        .container {
            text-align: center;
            padding: 20px;
            background: rgba(0, 0, 0, 0.7);
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat Datang Admin</h1>
        <a href="logout.php" class="btn btn-primary">Logout</a>
    </div>
</body>
</html>
