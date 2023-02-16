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
    <form action="signup.inc.php" method="post">
      <div class="signup-form">
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
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="pwd" class="form-control" />
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Repeat Password</label>
        <input type="password" name="pwdrepeat" class="form-control" />
      </div>
      <button type="submit" class="btn btn-default">Sign Up</button>
    </div>
    </form>

</div>

  </div>
  <?php include('../Partials/footer.php') ?>
  </body>
</html>

