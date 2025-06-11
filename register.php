<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        *{
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        }
        body {
        height: 100vh;
        background-color: #f8f2f5;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        }
        h1 {
        text-align:center;
        margin-bottom: 20px;
        color: #333;
        }

        form {
        background-color: #fff;
        padding: 30px 40px;
        border-radius: 8px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 400px;
        }

        label {
        display: block;
        margin: 15px 0 5px;
        font-weight: 600;
        color: #333;
        }
        input{
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        }
        button {
        margin-top: 20px;
        width: 100%;
        padding: 12px;
        background-color: #c94bc9;
        border: none;
        border-radius: 4px;
        color: white;
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
    <form method="GET" action="insert.php">
    <div><a href="home.php"><i class="fa-solid fa-chevron-left"></i></a></div>
     <h1>Register</h1>
      <label for="name">User Name</label>
      <input type="text" id="name" name="name" />
      <label for="phone">Phone Number</label>
      <input type="number" name="phone" id="phone" />
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" />
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" />
      <button type="submit">Register</button>
      <div id="center">OR</div>
    <div id="register">Already have an account? <a href="signin.php">Sign In</a></div>
    </form>
</body>
</html>