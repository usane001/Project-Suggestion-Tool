<?php
session_start();
include_once 'includes/functions.inc.php';
?>


<nav class="navbar navbar-toggleable-sm fixed-top navbar-inverse bg-inverse app-navbar">
<button
class="navbar-toggler navbar-toggler-right hidden-md-up"
type="button"
data-toggle="collapse"
data-target="#navbarResponsive"
aria-controls="navbarResponsive"
aria-expanded="false"
aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>


<a class="navbar-brand active mr-4" href="../Pages/Home.php">
<span class="icon icon-pencil square navbar-brand-icon"></span>
Project Suggestion Tool
</a>
<div class="collapse navbar-collapse mr-auto" id="navbarResponsive">
<ul class="nav navbar-nav">
<li class="nav-item">
<a class="nav-link" href="../Pages/BrowseCategory.php">Browse Category</a>
</li>
<li class="nav-item">
<a class="nav-link" href="../Pages/SuggestProject.php">Suggest a Project</a>
</li>
<li class="nav-item">
<a class="nav-link" href="../Pages/TrackProgress.php">Track Progress</a>
</li>
</ul>


<form class="form-inline hidden-sm-down ml-auto">
<input class="form-control" type="text" data-action="grow" placeholder="Search">
</form>
</div>

<span class="dashhead-toolbar-divider hidden-sm-down"></span>
</div>
<?php
if (isset($_SESSION["userid"])) {
?>
    <i class="fa fa-fw fa-user mr-1"></i>
    <a href="#"><?php echo $_SESSION["useruid"]; ?></div></a>
    <a href="includes/logout.inc.php" class="btn btn-outline-primary ml-3" role="button">Logout</a>
<?php
}
else {
    
?>
<a href="../Pages/Signup.php" class="btn btn-outline-primary mr-2" role="button">Sign up</a>
<a href="../Pages/Login.php" class="btn btn-outline-primary" role="button">Login</a>
<?php
}
?>

</div>
</nav>