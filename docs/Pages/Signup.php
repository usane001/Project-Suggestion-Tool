<!DOCTYPE html>
<html lang="en">
  <head>
    <title>
      
        Project Suggestion Tool &middot; 
      
    </title>
    <?php include('../Partials/header.php') ?>
  </head>


<body class="with-top-navbar">
  <?php include('../Partials/navigation.php') ?>
  <?php include('../Partials/newsletter.php') ?>
    <h1 id="intro">Sign up</h1>
    <hr class="hr mt-2" />
    <form action="includes/signup.inc.php" method="post">
      <div class="signup-form-form">
        <label for="name">Full Name</label>
        <input type="text" class="form-control" name="name"/>
      </div>
      <div class="form-group">
        <label for="exampleInputSecondName">Username</label>
        <input type="text" class="form-control" name="uid" />
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="text" class="form-control" name="email"/>
      </div>
      <div class="form-group">
      <label for="u_type">User Type:</label>
      <select type="text" class="form-control" id="u_type" name="u_type">
       <option>Please Choose:</option>
       <option value="1">Admin</option>
      </select>
    </div>
    <div class="form-group">
      <label for="io">IO</label>
      <select type="text" class="form-control" id="io" name="io">
       <option>Please Select:</option>
       <option value="1">Active</option>
    </select>
    </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="pwd" class="form-control" />
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Repeat Password</label>
        <input type="password" name="pwdrepeat" class="form-control" />
      </div>
      <button type="submit" name="submit" class="btn btn-default">Sign Up</button>
    </div>
    </form>
    <?php
    // Error messages
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
        echo '<script>alert("Please enter your details ")</script>';
      }
      else if ($_GET["error"] == "invaliduid") {
        echo '<script>alert("Choose a proper username!")</script>';
      }
      else if ($_GET["error"] == "invalidemail") {
        echo '<script>alert("use an Aston email!")</script>';
      }
      else if ($_GET["error"] == "passwordsdontmatch") {
        echo '<script>alert("Passwords does not match!")</script>';
      }
      else if ($_GET["error"] == "stmtfailed") {
        echo '<script>alert("Something went wrong!")</script>';
      }
      else if ($_GET["error"] == "usernametaken") {
        echo '<script>alert("Username already taken!")</script>';
      }
      else if ($_GET["error"] == "none") {
        echo '<script>alert("You have signed up!")</script>';
      }
    }
 ?>
</div>
  </div>
  <?php include('../Partials/footer.php') ?>
  </body>
</html>

