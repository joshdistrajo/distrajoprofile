<?php
include_once('database.php');
if (isset($_SESSION['username'])) {
  header("Location: index.html");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #e3f2fd; /* Light blue background */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            max-width: 400px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            background-color: #ffffff; /* White card background */
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #007bff; /* Light blue title */
        }

        .form-control {
            border-radius: 5px;
        }

        .btn {
            border-radius: 5px;
            background-color: #007bff; /* Light blue button */
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }

        .text-primary a {
            text-decoration: none;
            color: #007bff; /* Light blue link */
        }

        .text-primary a:hover {
            text-decoration: underline;
        }
    </style>
  </head>
  <body>
    <div class="card p-3">
      <?php if (isset($_SESSION['message'])): ?>
        <div class="alert alert-success <?= $_SESSION['success'] == 'danger' ? 'bg-danger text-light' : null ?>" role="alert">
          <?php echo $_SESSION['message']; ?>
        </div>
        <?php unset($_SESSION['message']); ?>
      <?php endif
      ?>

      <div class="card-body">
        <h2 class="card-title ">Login</h2>
        <form method="post" action="/distrajoprofile/index.html">
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
          <div class="form-group mt-3 text-center">
            <button type="submit">Login</button>
          </div>
        </form>
        <br>
        <p>Don't have an account?&nbsp;<a href="reg.php">Register here</a></p>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>