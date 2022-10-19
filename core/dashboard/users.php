<?php
 include 'des_include/header.php';
 include 'des_include/nav.php';
 include 'des_include/sidebar.php';

?>
		
		<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Users</li>
			</ol>
		</div><!--/.row-->
		
	
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Users</h1>
			</div>
			
			<table class="table table-hover">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Name Or Email</th>
				  <th scope="col">Password</th>
				  
				  
			    </tr>
			  </thead>
			  <tbody>
<?php
    $count = 1;

    
	$select_all_users = "SELECT *  FROM users";
	$result_all_users = $connection->query($select_all_users);
	foreach ($result_all_users as $key_users) {
		$name = $key_users['name'];
		$password = $key_users['password'];
		

?>
				<tr>
			      <th scope="row"><?php echo $count++; ?></th>
			      <td><?php echo $name; ?></td>
				  <td><?php echo $password; ?></td>
			      
			    </tr>
<?php } ?>			    


			  </tbody>
			</table>

		</div><!--/.row-->		

<?php 
	include 'des_include/footer.php';
?>