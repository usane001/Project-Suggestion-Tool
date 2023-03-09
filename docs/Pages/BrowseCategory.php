<!DOCTYPE html>
<html lang="en">
  <head>
  
    <title>
      
        Project Suggestion Tool &middot; 
      
    </title>
    <?php include('../Partials/header.php') ?>
  </head>

  <style>
  .card {  
  color:#000000
}
.card-title {  
  color:#000000
}

</style>

<body class="with-top-navbar">
    <?php include('../Partials/navigation.php') ?>
    <?php include('../Partials/protect.php') ?>
    <?php include('../Partials/newsletter.php') ?>

    <h2 class="dashhead-title">Browse Catergories</h2>
    <a class="badge bg-primary text-decoration-none link-light mb-4">Browse</a>
    
    <section id="gallery">
  <div class="container-fluid">
    <div class="row">
    <div class="col-md-4 col-lg-3 col-xl-4">
    <div class="card mb-4">
      <img src="../assets/img/academic.jpg" alt="" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title mt-2">Academic Projects</h5>
        <p class="card-text">This category contains all strictly academic projects, school projects, college projects, and projects for university students. These projects can even be for teachers that need a project for their students to do.</p>
       <a href="../Pages/Academic.php" class="btn btn-outline-primary btn-sm">See Projects</a>

      </div>
     </div>
    </div>
  <div class=" col-md-4 col-lg-3 col-xl-4">
  <div class="card mb-4">
      <img src="../assets/img/art.jpg" alt="" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title mt-2">Art Projects</h5>
        <p class="card-text">This category contains all projects that relate to art, whether it's Drawing, Painting or Modelling, there are multiple options of projects to choose from for artists to art enthusiasts. </p>
       <a href="../Pages/Art.php" class="btn btn-outline-primary btn-sm">See Projects</a>

      </div>
      </div>
    </div>
    <div class=" col-md-4 col-lg-3 col-xl-4">
    <div class="card mb-4">
      <img src="../assets/img/gaming.png" alt="" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title mt-2">Gaming Projects</h5>
        <p class="card-text">This category contains gaming projects, which could involve creating games, research on games and projects that include completing games or guides that allow you to beat the game.</p>
       <a href="../Pages/Gaming.php" class="btn btn-outline-primary btn-sm">See Projects</a>

      </div>
     </div>
    </div>
    <div class="col-md-4 col-lg-3 col-xl-4">
    <div class="card mb-4">
      <img src="../assets/img/business.jpeg" alt="" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title mt-2">Business Projects</h5>
        <p class="card-text">This category contains business projects, the category involves projects that are suitable for those that run businesses, to help improve or understand. projects that can help to make new businesses or allow them to meet objectives. </p>
       <a href="../Pages/Business.php" class="btn btn-outline-primary btn-sm">See Projects</a>

      </div>
     </div>
    </div>
    <div class="col-md-4 col-lg-3 col-xl-4">
    <div class="card mb-4">
      <img src="../assets/img/FYPP.jpg" alt="" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title mt-2">Final Year Projects</h5>
        <p class="card-text">This category contains projects strictly for university students that are seeking projects as part of their final year projects. These projects will allow students to access a huge variety of projects they can use. Projects can be added by lecturers for students.</p>
       <a href="../Pages/FYP.php" class="btn btn-outline-primary btn-sm">See Projects</a>

      </div>
     </div>
    </div>
    <div class="col-md-4 col-lg-3 col-xl-4">
    <div class="card mb-4">
      <img src="../assets/img/other.jpg" alt="" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title mt-2">Other</h5>
        <p class="card-text">This category contains all sorts of projects, projects that don't fit in any other category can be added here, this will vary from projects that are for fun or entertainment projects to projects that are incredibly important and professional. </p>
       <a href="../Pages/Other.php" class="btn btn-outline-primary btn-sm">See Projects</a>
      </div>
     </div>
    </div>
</section>


  </div>
  <?php include('../Partials/footer.php') ?>
  </body>
</html>