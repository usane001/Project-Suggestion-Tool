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
    <h1 id="intro">Login</h1>
    <hr class="hr mt-2" />
    <form action="includes/login.inc.php" method="post">
      <div class="login-form">
        <label for="exampleInputEmail1">Username/Email</label>
        <input type="text" name="name" class="form-control"  />
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="pwd"class="form-control"  />
      </div>
      <button type="submit" class="btn btn-default">Sign In</button>
    </div>
    </form>

</div>

  </div>
  <?php include('../Partials/footer.php') ?>
  </body>
</html>

