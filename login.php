<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garbage Go - Login</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="order.php">Order</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="container mt-5">

            <div class="row" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                <h1 class="mt-5 text-center">Login to request service</h1>
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <form action="">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required class="form-control">
                <label for="email">Password:</label>
                <input type="password" id="email" name="password" required class="form-control">

                <button type="submit" class="btn btn-success">Login</button>
                <p style="color: black;;padding-top: 20px;">Don't have an account?<a href="register.php" style="padding-left: 20px;">register</a></p>
                </form>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </main>

    <footer>
        <p>&copy; 2023 Garbage Go. All rights reserved.</p>
    </footer>
</body>
</html>
