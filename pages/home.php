<style>
	#notif{
		display:none
	}
	.col-sm-4.project-item {
		background: #008aff24;
		padding: .5em;
		border-radius: 6px;
		border: 1px solid #0000ff59;
	}
	.col-sm-4.project-item:hover {
		background:#008aff8c;
	}
</style>
<h2>Dashboard</h2>
<hr style="border-bottom:1px solid black"></hr>
<P>Welcome! to the Project suggestion website! Here you will be able to suggest and choose a wide range of topics. We project that is both Academic and non-academic. We have a multiple categories for you to search, depending on the projects you will like to have. Tracking feature is also useful to manange and check your projects.</P>
<div class="col-lg-16" id="project-field">
	<div class="panel panel-primary">
		<div class="panel-body">
			<?php include '../includes/db.php';
			$query = mysqli_query($conn,"SELECT * FROM projects where io = '1' ");
			while($row = mysqli_fetch_assoc($query)){
				?>
				<div class="col-sm-4 project-item">
				<a href="index.php?page=project_detail&id=<?php echo $row['project_id'] ?>&action=view details" style="color:black">
				<center><img src="../images/<?php echo $row["site_pic"] ?>" width="180px" height="230px" alt=""></center>
				<br>
				<center><label style="text-transform:capitalize"><?php echo $row['project'] ?></label></center></a>
				</div>
			<?php } ?>
		</div>
	</div>
</div>
<div class="col-lg-4" id="notif">
	<div id="" style="">
		
<script>
	if($('#notif .panel').length > 0){
		$('#project-field').removeClass('col-lg-12').addClass("col-md-8")
		$('#notif').show()
	}
</script>