<div class="container-fluid">
<div class="row">
	<div class="col-md-12 header">
		<h1>Student Management System</h1>
	</div>
</div>
<div class="row">
		<div class="col-md-3">
			<p class="lead">Menu
			<button type="button" class="btn btn-default">
					<span class="glyphicon glyphicon-search"></span>
					Search
			</button>
			</p>
			
			<ul>			
				<li><button type="button" class="btn btn-primary">Students</button></li>
				<li><button type="button" class="btn btn-primary">Courses</button></li>
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


<div class="col-md-9 contents">
	<div class="student-picture">
		<img src="<?php echo base_url('assets/images/pat.png'); ?>" alt="Picture" height="100" />
	</div>
	<div class="student-profile">
		<p><b>ID No: </b><?php echo $student[0]['idno']; ?></p>
		<p><b>Name: </b><?php echo $student[0]['lname'].', '.$student[0]['fname'].' '.$student[0]['mname']; ?></p>
		<p><b>Course: </b><?php echo $student[0]['course']; ?></p>
		<p><b>Sex: </b><?php echo $student[0]['sex']; ?></p>
	</div>
	<div class="">	 				
		<a href=<?php echo base_url('boots')?> class="btn btn-success btn-s">< Back</a>
	</div>
</div>
</div>