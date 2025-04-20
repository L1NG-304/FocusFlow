<!-- LoginView.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?= $data["title"] ?? "Login" ?></title>
    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .brand {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 20px;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2);
        }

        .login-box {
            width: 480px;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.2);
            background-color: #fff;
            text-align: center;
        }

        .login-box h2 {
            font-size: 1.8rem;
            margin-bottom: 30px;
            font-weight: bold;
        }

        .login-box input {
            width: 100%;
            padding: 15px;
            margin: 10px 0;
            border: none;
            background-color: #f2f2f2;
            border-radius: 8px;
            font-size: 1rem;
        }

        .bottom-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 15px;
        }

        .bottom-section a {
            font-size: 0.9rem;
            color: #888;
            text-decoration: none;
        }

        .bottom-section button {
            padding: 10px 20px;
            border: none;
            background-color: #3498db;
            color: white;
            font-size: 1rem;
            border-radius: 8px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="brand">FocusFlow</h1>
    <div class="login-box">
        <h2>Login</h2>
        <form method="post" action="./Authenticate">
            <input type="text" name="username" placeholder="ID" required />
            <input type="password" name="password" placeholder="Password" required />
            <div class="bottom-section">
                <a href="#">Forgot password ?</a>
                <button type="submit" name="submit">Login</button>
            </div>
        </form>
        <?php if (!empty($data["error"])): ?>
            <p style="color:red; margin-top: 10px;"><?= $data["error"] ?></p>
        <?php endif; ?>
    </div>
</div>
</body>
</html>
