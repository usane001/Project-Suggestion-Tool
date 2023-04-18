
<div class="form-group" id="form-login">
          <label class="col-sm-4 control-label">Divisions:</label>
          <div class="col-sm-8">

<?php
include '../includes/db.php';
$id = $_GET['id'];
if($id == '1'){
	$typ = '1';
}else if ($id == '2'){
	$typ = '2';
}else if ($id == '3') {
	$typ = '3';
}else if ($id == '4') {
	$typ = '4';
}else if ($id == '5') {
	$typ = '5';
}else{
	$typ = '6';
}
$query = mysqli_query($conn,"SELECT * from project_division where project_type = '$typ' order by division ");
while($row = mysqli_fetch_assoc($query)){
?>
	<input type="checkbox" name="divs[]" value='<?php echo $row['pd_id'] ?>' id="div<?php echo $row['pd_id'] ?>" checked/>
	<label style="text-transform:capitalize" for="div<?php echo $row['pd_id'] ?>"><?php echo $row['division'] ?></label><br>
<?php
}
?>
 </div>
        </div>