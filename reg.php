<?php
include_once('database.php');
if (isset($_SESSION['username'])) {
  header("Location: i");
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Registration system PHP and MySQL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  </head>
  <body>

  <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #e3f2fd; /* Light blue background */
      }

      .card {
        max-width: 500px;
        margin: 50px auto;
        border: none;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        background-color: #ffffff;
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

      .text-primary {
        color: #007bff; /* Light blue text */
      }

      .text-primary a {
        text-decoration: none;
        color: #007bff; /* Light blue link */
      }

      .text-primary a:hover {
        text-decoration: underline;
      }

      .alert {
        border-radius: 5px;
        margin-bottom: 20px;
      }

      .alert-success {
        background-color: #d4edda; /* Light green for success alert */
        color: #155724;
      }

      .bg-danger {
        background-color: #f8d7da !important;
        color: #721c24 !important;
      }

      .alert-danger {
        background-color: #f8d7da;
        color: #721c24;
        border-color: #f5c6cb;
      }
</style>
    <div class="card p-3">
      <?php if (isset($_SESSION['message'])): ?>
        <div class="alert alert-success <?= $_SESSION['success'] == 'danger' ? 'bg-danger text-light' : null ?>" role="alert">
          <?php echo $_SESSION['message']; ?>
        </div>
        <?php unset($_SESSION['message']); ?>
      <?php endif
      ?>
      <div class="card-body">
        <h2 class="card-title">Registration</h2>
        <form method="post" action="distrajoprofile/login.php">
          <div class="row mb-3">
            <div class="col form-group">
              <label for="fname">First Name:</label>
              <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" required>
            </div>
            <div class="col form-group">
              <label for="lname">Last Name:</label>
              <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" required>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col form-group">
              <label for="phone">Contact Number:</label>
              <input type="tel" class="form-control" id="phone" name="phone" pattern="[0]{1}[9]{1}[0-9]{9}" placeholder="09123456789" required>
            </div>
            <div class="col form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com" required>
            </div>
          </div>
          <div class="select_option">
            <select class="form-select country" aria-label="Default select example" onchange="loadStates()">
                <option selected>Select Country</option>
            </select>
            <br>
            <select class="form-select state" aria-label="Default select example" onchange="loadCities()">
                <option selected>Select State</option>
            </select>
            <br>
            <select class="form-select city" aria-label="Default select example">
                <option selected>Select City</option>
            </select>
        </div>
        <br>
            <div class="col form-group">
              <label for="brgy">Barangay:</label>
              <input type="text" class="form-control" id="brgy" name="brgy" placeholder="Barangay" required>

            </div>
          </div>
          <div class="row mb-3">
            <div class="col form-group">
              <label for="lot">Block and Lot:</label>
              <input type="text" class="form-control" id="lot" name="lot" placeholder="Lot/Block" required>
            </div>
            <div class="col form-group">
              <label for="street">Street:</label>
              <input type="text" class="form-control" id="street" name="street" placeholder="Street" required>
            </div>
          </div>
          <div class="form-group mb-2">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
          <div class="form-group mb-2">
            <label for="cpassword">Repeat Password:</label>
            <input type="password" class="form-control" id="cpassword" name="cpassword" required>
          </div>
          <div class="form-group mt-3 text-center">
            <button type="submit">Sign up</button>
          </div>
        </form>
        <br>
        <p class="text-center">Have an account?&nbsp;<a href="login.php">Log in here</a></p>
      </div>
    </div>
    <script src="app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>