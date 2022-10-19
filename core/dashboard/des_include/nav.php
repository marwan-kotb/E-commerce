
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Dashboard</span>Lumino</a>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-envelope"></em><span class="label label-danger"><?php 
						
						$c = 0;
						define("SERVERNAME" , "localhost");
						define("USERNAME" , "root");
						define("PASSWORD" , "");
						define("DB_NAME" , "project_iti");
						$connection =  new mysqli(SERVERNAME, USERNAME , PASSWORD , DB_NAME);
						$arr = array();
						$select_all_messages = "SELECT * FROM massages WHERE bool = '0'";
						$count = $connection->query($select_all_messages);
						foreach ($count as $key => $value) {
							
							
							$c++;
							array_push($arr, $value['username']);
							
							
						}
						echo $c; ?></span>
					</a>
						<ul class="dropdown-menu dropdown-messages">
							<li class="divider"></li>
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									
									</a>
									<?php
										foreach ($arr as $key) {
										  $name = $key;
									?>
										<a href="#">New message from <strong><?php echo $name ?></strong>.</a>
									<br />
									<?php } ?>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="all-button"><a href="message.php">
									<em class="fa fa-inbox"></em> <strong>All Messages</strong>
								</a></div>
							</li>
						</ul>
					</li>
					
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>