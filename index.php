<?php
	include 'lib/user.php';
	include 'inc/header.php';
	Session:: checkSession();
	
 ?>

<?php
	$loginmsg = Session::get("loginmsg");
	if (isset($loginmsg)) {
		echo $loginmsg;
	}
	Session::set("loginmsg", NULL);
?>

	<div class="panel panel-default">
		<div class="panel-heading">
			<h2>User list <span class="pull-right"><strong>Welcome!</strong>
			
			<?php
				$name = Session::get("name");
				if (isset($name)) {
					echo $name;
				}
			?>


			</span></h2>
		</div>

		<div class="panel-body">
			<table class="table table-striped">

				<tr>
					<th width="20%">Serial</th>
					<th width="20%">Name</th>
					<th width="20%">User name</th>
					<th width="20%">Email Address</th>
					<th width="20%">Action</th>
				</tr>

<?php
	$user = new User();
	$userdata = $user->getUserData();
	if ($userdata) {
			$i=0;
		while ($row = $userdata->fetch_object()) {
				$i++;
?>
				<tr>
					<td> <?php echo $i; ?>  </td>
					<td> <?php echo $row->name; ?> </td>
					<td> <?php echo $row->username; ?> </td>
					<td> <?php echo $row->email; ?></td>
					<td>
						<a class="btn btn-primary" href="profile.php?id=<?php echo $row->id; ?>">View</a>
					</td>
				</tr>
		<?php }}else{ ?>
				<tr><td colspan="5"><h2>No User Data Found .......</h2></td></tr>
		<?php } ?>

			</table>

		</div>

	</div>

	<?php
		include 'inc/footer.php';
	?>
</body>
</html>
