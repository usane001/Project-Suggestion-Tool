<?php
session_start();
 include 'includes/header2.php'; 
 if(isset($_SESSION['UID']))
 header('location:pages/index.php');
 ?>
<style>
	#title1 {
		display: block;
		width:50%;
		height:90px;
		background-color: white;
		padding:1px;
		border-radius:5px;
		position:fixed;
		top:30%;
		z-index: 1000px;
	}
	#main-bod{
		    background: url(images/background.jpg);
		    background-repeat: no-repeat;
			background-size: cover;
			display:flex;
			height:calc(100%);
			width:calc(100%);
			align-items:center;
			justify-content:center;
			top: 0;
			margin:unset

	}
</style>
<body id="main-bod">
		<div class="col-lg-4">
			
			<div class="panel panel-info" style="">
				<div class="panel-heading">
					Signup
				</div>
				<div class="panel-body">
					 <div class="container-fluid">
					 <form class="form-horizontal" method="POST" id="user_form">
					 <div class="form-group" id="user_form">
					 <p>Please select "New user" as a template in "Employee" to create a username and password to login into the website and then you can add and edit your details once logged in.</p>
					 <label for="emp" class="control-label">Employee:</label>
	 <select name="eid" id="emp" class="form-control chosen-select" data-placeholder="Select Employee">
    <option value=""></option>
      <?php
    include 'includes/db.php';
   
      $query2=  mysqli_query($conn, "SELECT *,CONCAT(lastname,', ',firstname,' ') as name FROM employee where io = '1' and eid != '".$_SESSION['ID']."' order by name ");
         while($row2 = mysqli_fetch_assoc($query2)) {  
    ?>
      <option value="<?php echo $row2['eid'] ?>"><?php echo date("Y",strtotime($row2['date_added'])).$row2['ecode']. ' | ' . ucwords($row2['name']) ?></option> 
      <?php } ?>
    </select>
    </div>
	<div class="form-group">
    <label for="us" class="control-label">Username:</label>
   <input type="text" class="form-control" id="us" name="user">
    </div>

    <div class="form-group">
    <label for="pass" class="control-label">Password:</label>
   <input type="password" class="form-control" id="pass" name="pass">
    </div>
 
    <div class="form-group">
    <label for="u_type" class="control-label">User Type:</label>
   <select type="text" class="form-control" id="u_type" name="u_type">
   <option ></option>
   <option value="1">Administrator</option>
   <option value="2">User</option>
   </select>
    </div>

	<div class="form-group" id="msg">
									<div class="col-sm-8 col-sm-offset-8">
									<button type="submit" class="btn btn-info">Register</button>
									<a href="index.php" class="btn btn-info">Login</a>
									</form>
									</div>

									<div class="col-sm-11 md+2">
										<div class="alert alert-success" id="correct"> Successfully Registered!</div>
										<div class="alert alert-danger" id="error"> Error enter all details </div>
									</div>
									</div>
									
								</form>
					 </div>         	
					        
				</div>
			</div>
		</div>
</body>
<script>
		jQuery(document).ready(function(){
					jQuery(document).ready(function(){
						$("#correct").hide();
						$("#error").hide();
						jQuery("#user_form").submit(function(e){
							e.preventDefault();
								var formData = jQuery(this).serialize();
								$.ajax({
									type: "POST",
									url: "forms/add_forms.php?action=user",
									data: formData,
									success: function(html){
										if($("#user_form input[type=text]").val())
										{
										$('#error').hide();
										$("#correct").slideDown();
										var delay = 2000;
										setTimeout(function(){	window.location = 'index.php';   }, delay); 
									}else{
										$('#error').slideDown();
										var delay = 2000;
										setTimeout(function(){	$('#error').slideUp();  }, delay);
									}
									}
								});
								return false;
						});
						});
						});
	
</script>