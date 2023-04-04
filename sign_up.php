
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
										<label for="" class="control-label">Fanta</label>
										<input class="form-control" id="user" name="user" type="text">
									</div>
									<div class="form-group">
										<label for="" class="control-label">Password</label>
										<input type="password" name="pass" id="pass" class="form-control">
									</div>
									<div class="form-group" id="msg">
									<div class="col-sm-8 col-sm-offset-8">
									<button type="submit" href="../Pages/index.php?page=index" class="btn btn-info">Login</button>
									<button type="submit" class="btn btn-info">Signup</button> <br>
									</div>

									<div class="col-sm-12">
										<div class="alert alert-success" id="correct"> Successfully Log in!</div>
										<div class="alert alert-danger" id="error"> Error Log in </div>
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