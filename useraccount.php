<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      background-color: #f0f0f0;
    }

    h1 {
      font-size: 1.5rem;
      text-align: center;
      margin: 1rem;
    }

    nav {
      display: flex;
      justify-content: space-around;
      align-items: center;
      padding: 0.75rem 1rem;
      background-color: #007bff;
      color: white;
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    nav a {
      color: white;
      font-size: 1.2rem;
      text-decoration: none;
    }

    nav a.active {
      font-weight: bold;
    }

    .form-container {
      background-color: #d3d3d3;
      width: 90%;
      max-width: 800px;
      border-radius: 10px;
      padding: 20px;
      margin: 2rem auto;
      display: flex;
      flex-direction: row;
      align-items: center;
      justify-content: space-between;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .profile-img {
  width: 400px;
  height: 200px;
  margin: 20px;
  border-radius: 50%;
  overflow: hidden;
  border: 4px solid #67aaed;
}

.profile-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

    .form-details {
      line-height: 1.8;
      margin-left: 3rem;
      width: 100%;
    }

    .form-details span {
      font-weight: bold;
    }

    @media (max-width: 768px) {
      nav {
        position: fixed;
        bottom: 0;
        top: auto;
        width: 100%;
        box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.2);
      }
      .form-container {
        flex-direction: column;
        text-align: left;
        align-items: center;
      }

      .profile-img {
        margin: 0 0 20px;
        width: 200px;
      }

      .form-details {
        width: 100%;
      }
    }
  </style>
</head>
<body>
  <nav>
    <a href="home.php" class="nav-link active"><i class="fas fa-home"></i></a>
    <a href="studentbooks.php" class="nav-link"><i class="fas fa-book"></i></a>
    <a href="#" class="nav-link"><i class="fas fa-user"></i></a>
    <a href="#" class="nav-link"><i class="fas fa-sign-out-alt"></i></a>
  </nav>
  <h1>User Information</h1>
  <main>
    <div class="form-container">
      <div class="profile-img">
        <img src="https://img-cdn.pixlr.com/image-generator/history/65bb506dcb310754719cf81f/ede935de-1138-4f66-8ed7-44bd16efc709/medium.webp" alt="Profile Image">
      </div>
      <div class="form-details">
        <div><span>Name:</span> </div>
        <div><span>Course:</span> </div>
        <div><span>Year / Section:</span></div>
        <div><span>Address:</span></div>
        <div><span>Sex:</span></div>
        <div><span>Age:</span></div>
        <div><span>Birthday:</span></div>
      </div><br><br>
      <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">Edit Information</button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="borrowModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="borrowModalLabel">Personal Information</h5>
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
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Update Information</button>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
