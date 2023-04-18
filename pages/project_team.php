<div class="col-md-12">
<h4>Project Team</h4>
<hr style="border-bottom:1px solid grey"></hr>
<P>This is a difficult procedure but a necessary one, users need to start by adding the members that will be on the team, Selecting the "Member:" box, and then selecting the "+" when all members have been selected. when completed press the "Save" button. The final step is to add the foreman(leader of the group) by clicking on "Update". We select the "Foreman" box and just as before add and then save. you might want to remove the users as they might be repeated one too many times.</P>
<div class="col-md-1">
<div class="input-group">
</div>
  <a type="button" class="btn btn sm- btn-info"  onclick="add_team()">New Team <i class="fa fa-plus"></i></a>
 </div>
</div><br>
</div>
<style>
	.control-label {
		text-transform:capitalize;
	}


</style>
<?php
include '../includes/db.php';
?>
</div>
<div class="col-md-12">
<div id="team">
	<?php include 'team.php'; ?>
</div>
</div>
<?php include '../includes/update_modals.php' ?>
 <div id="retCode1"></div>
 <script>
	jQuery(document).ready(function(){
						jQuery("#proj_form").submit(function(e){
								e.preventDefault();
								var formData = jQuery(this).serialize();
								
								$.ajax({
									type: "POST",
									url: "../forms/update_forms.php?action=project",
									data: formData,
									success: function(html){
										$('#retCode1').html(html);
									 
									}
								});
									return false;
						});
						});
	function add_team(){
		
		$.ajax({
			url:"add_team.php",
			success:function (html){
				$('#team').html(html);

			}
		});
	}
</script>