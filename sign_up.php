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
					 <form class="form-horizontal" method="POST" id="sign_up_form">
									<div class="form-group" id="form-sign_up">
									<div class="form-group" id="form-login">
          <label class="col-sm-4 control-label">Last Name:</label>
          <div class="col-sm-8">
            <input class="form-control" style="text-transform:capitalize" id="" name="lname" type="text"  required>
          </div>
        </div>
   
      <div class="form-group" id="form-login">
          <label class="col-sm-4 control-label">First Name:</label>
          <div class="col-sm-8">
            <input class="form-control" style="text-transform:capitalize" id="" name="fname" type="text"  required>
          </div>
        </div> 

      <div class="form-group" id="form-login">
          <label class="col-sm-4 control-label">Gender:</label>
          <div class="col-sm-4">
            <select class="form-control"  name="gender" type="text"  required>
            <option></option>
            <option>Female</option>
            <option>Male</option>
            </select>
          </div>
        </div>
        
        <div class="form-group" id="form-login">
          <label class="col-sm-4 control-label">Contact no.:</label>
          <div class="col-sm-5">
            <input class="form-control text-right"  id="" name="cn" type="text" maxlength="11"  required>
          </div>
        </div>

        <div class="form-group" id="form-login">
          <label class="col-sm-4 control-label">Status:</label>
          <div class="col-sm-8">
            <select class="form-control"  id="" name="status" type="text"  required>
            <option></option>
            <option>Single</option>
            <option>Married</option>
            <option>Widow</option>
            </select>
          </div>
        </div>

        <div class="form-group" id="form-login">
          <label class="col-sm-4 control-label">Position:</label>
          <div class="col-sm-8">
            <select class="form-control"  id="" name="position" type="text"  required>
            <option></option>
            <?php
            include '../includes/db.php';
              $pos_query = mysqli_query($conn,"SELECT * FROM position order by position ASC");
              while($pos_row = mysqli_fetch_assoc($pos_query)){
             ?>
            <option style="text-transform:capitalize" value="<?php echo $pos_row['pid'] ?>"><?php echo $pos_row['position'] ?></option>
            <?php } ?>
            </select>
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
						jQuery("#login_form").submit(function(e){
								e.preventDefault();
								var formData = jQuery(this).serialize();
								$.ajax({
									type: "POST",
									url: "includes/login.php",
									data: formData,
									success: function(html){
									if(html=='true' )
									{
										$('#error').hide();
										$("#correct").slideDown();
										var delay = 2000;
										setTimeout(function(){	window.location = 'pages/index.php?page=home';   }, delay);  
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