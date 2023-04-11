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
    <?php include('../Partials/protect.php') ?>
    <?php include('../Partials/newsletter.php') ?>
    

    <h2 class="dashhead-title">Suggest a Project</h2>
    
</div>

<div class="container-fluid">
	
	<a class="container-fluid" href="#new_project" data-toggle="modal"><center><i class="fa fa-plus"></i> New Project</center></a>
	
</div>
<br>
<br>

	<div class="panel panel-default">
        <div class="panel-heading">
        <?php if($_GET['io'] = '1'){ $btn_class1 = 'class="btn btn-md btn-success"';} else{ $btn_class1 = 'class="btn btn-md btn-default"';} ?>
        <?php if($_GET["io"] = '2'){ $btn_class = 'class="btn btn-md btn-success"';} else{ $btn_class = 'class="btn btn-md btn-default"';} ?>
        <?php if($_GET["io"] = '3'){ $btn_class2 = 'class="btn btn-md btn-success"';} else{ $btn_class2 = 'class="btn btn-md btn-default"';} ?>
          <a href="SuggestProjectIndex.php?page=SuggestProject&io=1" <?php echo $btn_class1 ?> > On going</a>
          <a href="SuggestProjectIndex.php?page=SuggestProject&io=2" <?php echo $btn_class ?> > Finished</a>
          <a href="SuggestProjectIndex.php?page=SuggestProject&io=3" <?php echo $btn_class2 ?> > Canceled</a>
        </div> 
        <div class="panel-body"> 
			
       <table id="position" class="table table-bordered table-condensed">
    <thead>
      <tr id="heads">
        <th class="col-md-2 text-center">Project</th>
        <th class="col-md-2 text-center">Location</th>
        <th class="col-md-1 text-center">Deadline</th>
        <th class="col-md-1 text-center"></th>
      </tr>
    </thead>
    <tbody>
    <?php
    include '../Pages/includes/dbh.inc.php';
   
      $query=  mysqli_query($conn, "SELECT * FROM projects where io = '".$_GET['io']."'");
        ;
         while($row = mysqli_fetch_assoc($query)) {   
         $id =$row['project_id']; 
      

    ?>
      <tr>

        <td style="text-transform:capitalize" class="text-center"><?php echo $row['project'] ?></td>
        <td style="text-transform:capitalize" class="text-center"><?php echo $row['location'] ?></td>
        <td style="text-transform:capitalize" class="text-center"><?php echo date("M. d, Y",strtotime($row['deadline'])) ?></td>
        <td style="text-transform:capitalize" class="text-center"><center><a href="SuggestProjectIndex.php?page=project_detail&id=<?php echo $id ?>&stats=<?php echo $_GET['io'] ?>"><i class="fa fa-eye"></i> View </a></center></td>
       </tr>
       
      <?php } ?>
      </tbody>
  </table>
		</div>
    
	</div>
  
</div>
  <?php include('../Partials/footer.php') ?>
  </body>
  <?php include ('../Pages/includes/add_modal.php') ?>
</html>

<div id="retCode1"></div>
<script>
	jQuery(document).ready(function(){
						jQuery("#proj_form").submit(function(e){
								e.preventDefault();
								var formData = jQuery(this).serialize();
								
								$.ajax({
									type: "POST",
									url: "../forms/add_forms.php?action=project",
									data: formData,
									success: function(html){
										$('#retCode1').html(html);
									 
									}
								});
									return false;
						});
						});
</script>



<script type="text/javascript">
        $(function() {
            $("#position").dataTable(
        { "aaSorting": [[ 2, "desc" ]] }
      );
        });
    </script>