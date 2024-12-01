<?php
include('dbconnection.php');

$categoryQuery = "SELECT DISTINCT category FROM book";
$categoriesResult = mysqli_query($connect, $categoryQuery);

$selectedCategory = isset($_GET['category']) ? $_GET['category'] : 'All';
$bookQuery = $selectedCategory === 'All' 
    ? "SELECT * FROM book" 
    : "SELECT * FROM book WHERE category = '".mysqli_real_escape_string($connect, $selectedCategory)."'";
$booksResult = mysqli_query($connect, $bookQuery);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Books</title>
  <link rel="stylesheet" href="studentbooks.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
  
  </style>
</head>
<body>
  <nav>
    <a href="home.php" class="nav-link"><i class="fas fa-home"></i></a>
    <a href="#" class="nav-link active"><i class="fas fa-book"></i></a>
    <a href="useraccount.php" class="nav-link"><i class="fas fa-user"></i></a>
    <a href="#" class="nav-link"><i class="fas fa-sign-out-alt"></i></a>

  </nav>

  <main>
    <header>
      <h1>Books</h1>
    </header>

    <div class="categories">
      <button class="category <?php echo ($selectedCategory === 'All') ? 'active' : ''; ?>" onclick="window.location.href='?category=All'">All</button>
      <?php while ($categoryRow = mysqli_fetch_assoc($categoriesResult)): ?>
        <button class="category <?php echo ($selectedCategory === $categoryRow['category']) ? 'active' : ''; ?>" 
                onclick="window.location.href='?category=<?php echo urlencode($categoryRow['category']); ?>'">
          <?php echo htmlspecialchars($categoryRow['category']); ?>
        </button>
      <?php endwhile; ?>
    </div>

    <div class="product-list">
      <?php if (mysqli_num_rows($booksResult) > 0): ?>
        <?php while ($bookRow = mysqli_fetch_assoc($booksResult)): ?>
          <div class="product-card" onclick="showDetails('<?php echo $bookRow['image']; ?>', '<?php echo addslashes($bookRow['book_name']); ?>', '<?php echo addslashes($bookRow['description']); ?>')">
            <img src="<?php echo $bookRow['image']; ?>" alt="<?php echo htmlspecialchars($bookRow['book_name']); ?>">
            <h3><?php echo htmlspecialchars($bookRow['book_name']); ?></h3>
          </div>
        <?php endwhile; ?>
      <?php else: ?>
        <p>No books found in this category.</p>
      <?php endif; ?>
    </div>
  </main>

  <div class="details-panel" id="detailsPanel">
    <button class="close-btn" onclick="closeDetails()">&times;</button>
    <img id="detailsImage" src="" alt="">
    <h3 id="detailsTitle"></h3><hr>
    <p id="detailsDescription"></p>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#borrowModal">
      <i class="fas fa-external-link-alt"></i> Borrow
    </button>
  </div>

  <div class="modal fade" id="borrowModal" tabindex="-1" aria-labelledby="borrowModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="borrowModalLabel">Borrow Book</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Confirm Borrow</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

  <script>
    function showDetails(image, title, description) {
      document.getElementById('detailsImage').src = image;
      document.getElementById('detailsTitle').textContent = title;
      document.getElementById('detailsDescription').textContent = description;
      document.getElementById('detailsPanel').classList.add('active');
    }

    function closeDetails() {
      document.getElementById('detailsPanel').classList.remove('active');
    }
  </script>
</body>
</html>
