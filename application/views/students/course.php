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
		<div class="col-md-9 contents">
			
			<table class="table table-striped table-hover table-condensed table-responsive">
				<thead>
					<tr>
						<th>COURSE ID</th>
						<th>NAME</th>
						<th>DESCRIPTION</th>
					</tr>
				</thead>
				<tbody>
				<?php
				foreach($courses as $s){
					echo '	<tr>	
								<td>'.$s['course_id'].'</td>
								<td>'.$s['name'].'</td>
								<td>'.$s['course_desc'].'</td>
							</tr>
							';
				}
				?>
				</tbody>
			</table>
			<div class="">	 				
				<a href="<?php echo base_url('boots/add_course');?>" class="btn btn-primary btn-lg">New Course</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 text-center footer">
			Copyright &copy; 2017. Jayson Felix Al Corporation.
		</div>
	</div>
</div>





