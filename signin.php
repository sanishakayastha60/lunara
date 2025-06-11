<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
        * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    form {
        background-color: #fff;
        padding: 30px;
        width: 100%;
        max-width: 400px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    input[type="email"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button {
        width: 100%;
        padding: 10px;
        background-color: #c94b9b;
        color: white;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
    }
    button:hover {
        background-color: #a83b83;
    }
    #center{
        text-align:center;
        margin:8px 0;
        font-weight:normal;
    }
    #register{
        text-align:center;
    }
    a{
        text-decoration:none;
        color: #c94bc9;
    }
    </style>
</head>
<body>
    <form action="GET" onsubmit="check.php">
        <div><a href="home.php"><i class="fa-solid fa-chevron-left"></i></a></div>
        <h1>Sign In</h1>
        <label for="email">Email<label>
        <input type="email" name="" id="email">
        <label for="password">Password</label>
        <input type="password" name="" id="Password">
        <button type="submit">Submit</button>
    </form>
    <div id="center">OR</div>
    <div id="register">Don't Have an account yet? <a href="register.php">Register</a></div>
</body>
</html>