<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        form {
            display: flex;
            flex-direction: column;
            width: 450px;
            border: 1px solid black;
        }

        .group {
            display: flex;
            width: 100%;
            justify-content: space-around;
            padding: 10px;
            border-radius: 5px;
        }

        button {
            padding: 5px 10px;
            background-color: #a0a0a0;
            border: none;
            border-radius: 5px;
        }

        input {
            padding: 5px;
            margin: 0px 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="/authenticate" method="POST">
            <div class="group">
                <h1 style="font-size: 30px; margin:0 auto">Login</h1>
            </div>
            <div class="group">
                <label for="email">email</label>
                <input type="email" name="email" id="email" placeholder="type your email here" value="<?php echo $data['email'] ?? '' ?>">
            </div>

            <div class="group">
                <label for="password">password</label>
                <input type="password" name="password" id="password" placeholder="type your password here" value="<?php echo $data['password'] ?? '' ?>">
            </div>
            <div class="group">
                <input type="submit" name="sendLogin" value="Log in">
            </div>
        </form>
    </div>
</body>

</html>