<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #ffb6c1; /* Warna light pink */
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }

        .container {
            background-color: #ffe4e1; /* Warna pink lebih lembut */
            padding: 50px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            text-align: center;
            max-width: 600px;
            width: 100%;
            border: 2px solid #ff69b4; /* Border warna pink */
            animation: fadeIn 1.5s ease-out;
        }

        h1 {
            color: #ff69b4;
            font-size: 36px;
            margin-bottom: 20px;
            text-transform: uppercase;
            animation: slideInDown 1.5s ease-out;
        }

        p {
            font-size: 18px;
            margin-bottom: 30px;
            color: #555;
            animation: fadeIn 2s ease-out 0.5s backwards;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #ff69b4;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
            animation: pulse 1.5s infinite;
        }

        .btn:hover {
            background-color: #ff1493;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes slideInDown {
            from {
                transform: translateY(-50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
            100% {
                transform: scale(1);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat Datang di Dunia Baru</h1>
        <p>Buatlah duniamu yang indah menjadi lebih indah</p>
        <a href="#" class="btn">Masuk</a>
    </div>
</body>
</html>
