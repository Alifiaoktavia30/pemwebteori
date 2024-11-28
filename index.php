<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Poppins:300);
        html {
            height: 100%;
        }
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background: linear-gradient(#30142b, #2772a1);
        }
        .form {
            position: relative;
            z-index: 1;
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            width: 400px;
            padding: 40px;
            transform: translate(-50%, -50%);
            background: rgba(0, 0, 0, 0.5);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.6);
            border-radius: 10px;
        }
        .form input {
            width: 100%;
            padding: 10px 0;
            font-size: 13px;
            color: #fff;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #fff;
            outline: none;
            background: transparent;
        }
        h1 {
            color: white;
            text-align: center;
        }
        .btn {
            position: relative;
            display: inline-block;
            padding: 10px 20px;
            color: #289bb8;
            font-size: 16px;
            text-decoration: none;
            overflow: hidden;
            transition: 0.5s;
            margin-top: 15px;
            letter-spacing: 2px;
        }
        .btn:hover {
            background: #289bb8;
            color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px #289bb8, 
                        0 0 25px #289bb8, 
                        0 0 50px #289bb8, 
                        0 0 100px #289bb8;
        }
    </style>
</head>
<body>
    <div class="form">
        <h1>Login</h1>
        <form action="./backend/login.php" method="post">
            <input type="email" name="email" placeholder="Masukkan email Anda" required>
            <input type="password" name="password" placeholder="Masukkan password Anda" required>
            <input type="submit" value="Login" name="submit" class="btn">
        </form>
    </div>
</body>
</html>
