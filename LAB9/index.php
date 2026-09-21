<?php
session_start();
$defaultUsername = "admin123";
$defaultPassword = "password123";

$message = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if($username === $defaultUsername && $password === $defaultPassword) {
        $_SESSION["username"] = $username;

        header("Location: dashboard.php");
            exit();
    } else {
        $message = "Invalid credentials";
        }
        
        
        }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <h3>Login System</h3>
    <form method="POST">
        <label for="username">
            Username:
            <input class="form-control" type="text" name="username" placeholder="Username">
        </label>
            <br>
        <label for="password">
            Enter Password:
            <input class="form-control" type="password" name="password" placeholder="Password">
        </label>
        <button class="btn btn-primary type="submit">Submit</button>
    </form>

    <p style="color: red;">
        <?php echo $message; ?>
    </p>
</body>
</html>