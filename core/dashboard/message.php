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
			      <th scope="col">UserName</th>
                  <th scope="col">Email</th>
				  <th scope="col">Text</th>
                  <th scope="col">Read OR Not</th>
				  
				  
			    </tr>
			  </thead>
			  <tbody>
<?php
    $count = 1;

    
	$select_all_messages = "SELECT *  FROM massages";
	$result_all_messages = $connection->query($select_all_messages);
	foreach ($result_all_messages as $key_message) {
		$username = $key_message['username'];
		$email = $key_message['email'];
        $text = $key_message['text'];
        $bool = $key_message['bool'];
		if ($bool == 0) {
            $statue = 'Not';
        }
        else {
            $statue = 'Read';
        }
?>
				<tr>
			      <th scope="row"><?php echo $count++; ?></th>
			      <td><?php echo $username; ?></td>
				  <td><?php echo $email; ?></td>
                  <td><?php echo $text; ?></td>
                  <td><?php echo $statue; ?></td>
			      <td><a href="view_message.php?text=<?php echo $text; ?>&id=<?php echo $key_message['id'];?>" class="btn btn-primary>">Open</a><td>
			    </tr>
<?php } ?>			    


			  </tbody>
			</table>

		</div><!--/.row-->		

<?php 
	include 'des_include/footer.php';
?>