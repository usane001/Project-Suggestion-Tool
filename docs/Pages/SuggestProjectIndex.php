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
    
    <div id="proj_list_report" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog"> 
               <div class="modal-content modal-sm">  
             
                  <div class="modal-header"> 
                     <h4 class="modal-title" id='head'>
                     <i class=""></i> Project List Report
                     </h4> 
                     <div id="retCode1"></div>
                  </div> 
                      
 <div class="modal-body">
  
  
   
    <div class="form-horizontal">
        
      <div class="form-group" id="form-login">
          <label class="col-sm-4 control-label">Status:</label>
          <div class="col-sm-8">
            <select class="form-control" style="text-transform:capitalize" id="stats" required>
            <option selected="" disabled=""></option>
            <option value="1">Ongoing Projects</option>
            <option value="2">Finished Projects</option>
            <option value="3">Cancelled Projects</option>
            </select>
          </div>
        </div>

    </div>
   </div>
          <div class="modal-footer">
               <button onclick="rep_proj_list()" class="btn btn-md btn-info" id="btn_sub"><i class="fa fa-eye"></i> View</button>
                <button data-dismiss="modal" class="btn btn-md btn-info"><i class="glyphicon glyphicon-close"></i>Close</button>
           
                     </div>
                     </div> 
            </div>
          </div>

  <div id="proj_prog_report" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog"> 
               <div class="modal-content modal-md">  
             
                  <div class="modal-header"> 
                     <h4 class="modal-title" id='head'>
                     <i class=""></i> Project Progress Report
                     </h4> 
                     <div id="retCode1"></div>
                  </div> 
                      
 <div class="modal-body">
  
  
   
    <div class="form-horizontal">
        
      <div class="form-group" id="form-login">
          <label class="col-sm-4 control-label">Project:</label>
          <div class="col-sm-8">
            <select class="form-control" style="text-transform:capitalize" id="pp" required>
            <option selected="" disabled=""></option>
           <?php
            $pp = mysqli_query($conn,"SELECT * FROM projects order by project ASC ");
            while($pp_row=mysqli_fetch_assoc($pp)){
            ?>
            <option value="<?php echo $pp_row['project_id'] ?>"><?php echo ucwords($pp_row['project']) ?></option>
            <?php } ?>
            </select>
          </div>
        </div>

    </div>
   </div>
          <div class="modal-footer">
               <button onclick="rep_proj_prog()" class="btn btn-md btn-info" id="btn_sub"><i class="fa fa-eye"></i> View</button>
                <button data-dismiss="modal" class="btn btn-md btn-info"><i class="glyphicon glyphicon-close"></i>Close</button>
           
                     </div>
                     </div> 
            </div>
          </div>
    
</div>
  <?php include('../Partials/footer.php') ?>
  </body>
  <script src="assets/js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
 <script>
    $(document).ready(function(){
      $('#msg20').hide();
      $('#msg21').hide();
    });
     jQuery("#update_user_form2").submit(function(e){
                e.preventDefault();
                var formData = jQuery(this).serialize();
                $.ajax({
                  type: "POST",
                  url: "../forms/update_forms.php?action=user2",
                  data: formData,
                  success: function(html){
                    $('#retCode10').append(html);
                  }
                });
                  return false;
            });
     function rep_proj_list(){
      var stats = $('#stats').val();
      window.open('printable_project_report.php?status='+stats);
      $('#proj_list_report').modal('close');
     }
     function rep_proj_prog(){
      var pp = $('#pp').val();
      window.open('printable_progress_report.php?id='+pp);
      $('#proj_list_report').modal('close');
     }
  </script>

</html>


