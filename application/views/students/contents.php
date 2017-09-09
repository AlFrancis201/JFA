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
			<?php
				echo "<p class='text-danger'>Welcome $name!</p>";
			?>
			<table class="table table-striped table-hover table-condensed table-responsive">
				<thead>
					<tr>
						<th>ID NO.</th>
						<th>LAST NAME</th>
						<th>FIRST NAME</th>
						<th>MIDDLE NAME</th>
						<th>SEX</th>
						<th>ACTION</th>
					</tr>
				</thead>
				<tbody>
				<?php
				foreach($students as $s){
					echo '	<tr>	
								<td>'.$s['idno'].'</td>
								<td>'.$s['lastname'].'</td>
								<td>'.$s['firstname'].'</td>
								<td>'.$s['middlename'].'</td>
								<td>'.$s['course'].'</td>
								<td>'.$s['sex'].'</td>
								<td>
									<a href="'.base_url('students/profile/'.$s['idno']).'">View</a> |
									<a href="">Edit</a> |
									<a href="" class="delete">Delete</a>
								</td>
							</tr>
							';
				}
				?>
				</tbody>
			</table>
			<div class="">	 				
				<a href="boots/add_student" class="btn btn-primary btn-lg">New Student</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 text-center footer">
			Copyright &copy; 2017. Jayson Felix Al Corporation.
		</div>
	</div>
</div>





