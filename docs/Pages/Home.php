


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
    <?php
if (isset($_SESSION["useruid"])) {
  echo '<div class="alert alert-success alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>Success!</strong> You have successfully logged in.
  </div>
';
}
?>
    <h2 class="dashhead-title">Introduction</h2>
    <a class="badge bg-primary text-decoration-none link-light mb-2">Home</a>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="../assets/img/projects.png" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="../assets/img/FYP.png" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="../assets/img/Non.png" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="Intro-para mt-2">
    <p class="h6">Welcome to the Project suggestion website! Here you will be able to suggest and choose a wide range of topics. We project that is both Academic and non-academic. We have a multiple categories for you to search, depending on the projects you will like to have. Tracking feature is also useful to manange and check your projects. </p>
  </div>
  </div>
</div>



<div class="hr-divider mt-3 mb-5">
  <h3 class="hr-divider-content hr-divider-heading">Popular Catergories</h3>
</div>
<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="Category 1">
      <img data-src="holder.js/100%x200" alt="100%x200" src="../assets/img/academic.jpg" data-holder-rendered="true" style="height: 300px; width: 100%; display: block;"/>
      <div class="caption mt-2">
        <h3 id="thumbnail-label">Academic Projects<a class="anchorjs-link" href="#thumbnail-label"><span class="anchorjs-icon"></span></a></h3>
        <p>This category contains all strictly academic projects, school projects, college projects, and projects for university students. These projects can even be for teachers that need a project for their students to do.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="Category 2">
      <img data-src="holder.js/100%x200" alt="100%x200" src="../assets/img/art.jpg" data-holder-rendered="true" style="height: 300px; width: 100%; display: block;" />
      <div class="caption mt-2">
        <h3 id="thumbnail-label">Art Projects<a class="anchorjs-link" href="#thumbnail-label"><span class="anchorjs-icon"></span></a></h3>
        <p>This category contains all projects that relate to art, whether it's Drawing, Painting or Modelling, there are multiple options of projects to choose from for artists to art enthusiasts.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="Category 3">
      <img data-src="holder.js/100%x200" alt="100%x200" src="../assets/img/gaming.png" data-holder-rendered="true" style="height: 300px; width: 100%; display: block;"/>
      <div class="caption mt-2">
        <h3 id="thumbnail-label">Gaming Projects<a class="anchorjs-link" href="#thumbnail-label"><span class="anchorjs-icon"></span></a></h3>
        <p>This category contains gaming projects, which could involve creating games, research on games and projects that include completing games or guides that allow you to beat the game.</p>
      </div>
    </div>
  </div>
</div>

</div>

  </div>
  <?php include('../Partials/footer.php') ?>
  </body>
</html>

