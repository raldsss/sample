<?php
// home.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="home.css">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
  <nav>
    <a href="home.php" class="nav-link active"><i class="fas fa-home"></i></a>
    <a href="studentbooks.php" class="nav-link"><i class="fas fa-book"></i></a>
    <a href="#" class="nav-link"><i class="fas fa-user"></i></a>
    <a href="#" class="nav-link"><i class="fas fa-sign-out-alt"></i></a>

  </nav>

  <main>
    <div class="home-content">
      <h2>Welcome to our Library Management System </h2>
      <p>LMS is a software solution designed to help libraries manage their operations and resources efficiently</p>
<a href="studentbooks.php" class="home-button" style="text-decoration:none;"><i id="arrow" class="fas fa-external-link-alt"></i>Explore Books</a>
    </div>
  </main>
</body>
</html>

