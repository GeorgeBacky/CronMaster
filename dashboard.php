<?php
include_once('includes/navbar.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- Bootstrap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/dashboard.css">
    <title>Cron Master</title>
</head>
<body>
<script>
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
});
</script>
</head>
<body>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Cron<b> Dashboard</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#export2excel" class="btn btn-success"><i class="fas fa-file-excel"></i><span>Export To Excel</span></a>
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Domain Name</th>
						<th>Cron Root</th>
						<th>ID</th>
						<th>Filename</th>
                        <th>Description</th>
                        <th>Interval</th>
                        <th>Status</th>
                        <th>Target ID</th>
                        <th>Edit</th>
                        <th>Delete</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>55</td>
						<td>example.com</td>
						<td>/filesys/example.com/ggwp.php</td>
						<td>1</td>
                        <td>index.php</td>
						<td>Cronjob started</td>
						<td>123456789102541</td>
                        <td>Active</td>
						<td>1</td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="far fa-edit" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
						</td>
                        <td>
                        <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="far fa-trash-alt" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
					</tr>
					<tr>
						<td>56</td>
						<td>example.com</td>
						<td>/filesys/example.com/ggwp.php</td>
						<td>2</td>
                        <td>index.php</td>
						<td>Cronjob started</td>
						<td>123456789102541</td>
                        <td>Active</td>
                        <td>2</td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="far fa-edit" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
						</td>
                        <td>
                        <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="far fa-trash-alt" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
					</tr>
					<tr>
						<td>57</td>
						<td>example.com</td>
						<td>/filesys/example.com/ggwp.php</td>
						<td>3</td>
                        <td>index.php</td>
						<td>Cronjob started</td>
						<td>123456789102541</td>
                        <td>Active</td>
                        <td>3</td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="far fa-edit" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
						</td>
                        <td>
                        <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="far fa-trash-alt" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
					</tr>
					<tr>
						<td>58</td>
						<td>example.com</td>
						<td>/filesys/example.com/ggwp.php</td>
						<td>4</td>
                        <td>index.php</td>
						<td>Cronjob started</td>
						<td>123456789102541</td>
                        <td>Active</td>
                        <td>4</td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="far fa-edit" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
						</td>
                        <td>
                        <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="far fa-trash-alt" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
					</tr>					
					<tr>
						<td>59</td>
						<td>example.com</td>
						<td>/filesys/example.com/ggwp.php</td>
						<td>5</td>
                        <td>index.php</td>
						<td>Cronjob started</td>
						<td>123456789102541</td>
                        <td>Active</td>
                        <td>5</td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="far fa-edit" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
						</td>
                        <td>
                        <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="far fa-trash-alt" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
					</tr> 
				</tbody>
			</table>
			<div class="clearfix">
				<div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
				<ul class="pagination">
					<li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
					<li class="page-item"><a href="#" class="page-link">2</a></li>
					<li class="page-item"><a href="#" class="page-link">3</a></li>
					<li class="page-item"><a href="#" class="page-link">4</a></li>
					<li class="page-item"><a href="#" class="page-link">5</a></li>
					<li class="page-item"><a href="#" class="page-link">Next</a></li>
				</ul>
			</div>
		</div>
	</div>        
</div>
<!-- Edit Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Add Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Name</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Address</label>
						<textarea class="form-control" required></textarea>
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input type="text" class="form-control" required>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Add">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Edit Cron</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Name</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Address</label>
						<textarea class="form-control" required></textarea>
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input type="text" class="form-control" required>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-info" value="Save">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Delete Cron</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Are you sure you want to delete these Records?</p>
					<p class="text-warning"><small>This action cannot be undone.</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-danger" value="Delete">
				</div>
			</form>
		</div>
	</div>
</div>
</body>
<!-- Bootstrap js -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- Table2Excel -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="//cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>
</html>