<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 header">
			<h1>Student Management System</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<p class="lead">Menu
			<button type="button" class="btn btn-default">
					<span class="glyphicon glyphicon-search"></span>
					Search
			</button>
			</p>
			
			<ul>			
				<li><a href="<?php echo base_url('/boots');?>" class="btn btn-primary btn-lg">Students</a></li>
				<li><a href="<?php echo base_url('/boots/course');?>" class="btn btn-primary btn-lg">Courses</a></li>
			<li>
			<div class="btn-group">
				<div class="btn-group">
					<button type="button" 
						class="btn btn-primary dropdown-toggle" 
						data-toggle="dropdown">Schedules <span class="caret"></span>
					</button>
					<ul class="dropdown-menu" role="menu">
						<li><a href="">Course</a></li>
						<li><a href="">Section</a></li>
					</ul>
				</div>				
			</div>
			</li>								
			</ul>
		</div>
		<div class="col-md-8 contents">
			<p class="lead">Add New Course</p>
			<form role="form" class="" method="post">
				
				<div class="text-danger">
				<?php
				if( isset($errors) ){
					echo $errors;
				}
				?>
				</div>
				
				<div class="form-group">
					<label for="course_id">Course ID:</label>
					<input type="text" class="form-control" id="course_id" name="course_id" />
				</div>
				<div class="form-group">
					<label for="name">Name:</label>
					<input type="text" class="form-control" id="name" name="name" />
				</div>	
				<div class="form-group">
					<label for="course_desc">Course Description:</label>
					<input type="text" class="form-control" id="course_desc" name="course_desc" />
				</div>	
				<div class="form-group">
					<button type="submit" class="btn btn-primary">
						Save <span class="glyphicon glyphicon-save"></span> 
					</button>
				</div>
			</form>
	
			<hr />
			<!--
			<form role="form" class="form-horizontal">
				<div class="form-group">
					<label for="idno" class="control-label col-md-2">ID No.:</label>
					<div class="col-md-10">
						<input type="text" class="form-control" id="idno" name="idno" />
					</div>
				</div>
				<div class="form-group">
					<label for="lname" class="control-label col-md-2">Last Name:</label>
					<div class="col-md-10">
						<input type="text" class="form-control" id="lname" name="lname" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-offset-2">
						<button type="submit" class="btn btn-primary">
						Save <span class="glyphicon glyphicon-save"></span> 
						</button>				
					</div>				

				</div>
			</form>-->	
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 text-center footer">
			Copyright &copy; 2017. Jayson Felix Al Corporation.
		</div>
	</div>
</div>

<?php
if( isset($saved) && $saved==TRUE ){
?>
<script type="text/javascript">
	alert("The new course record was successfully saved!");
	location.href = '<?php echo base_url('boots/course'); ?>';
</script>
<?php
}

?>




