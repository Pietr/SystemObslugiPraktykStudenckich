<?php
		require_once "../config/config.php";
	require_once "../action/session.php";

	$user_id = $_SESSION['user_id'];
	if ($_SESSION['session_active'] == "1"){
		$user_type = $_SESSION['user_type'];
		require_once "head.php";
	?>
<body class="u-body">
	<?php require_once "header.php"; ?>
	<div class="col-md-8 offset-md-2">
		<?php
			$query = "SELECT * FROM users where id like $user_id ";
			$result = $db->query($query);
			$row = $result->num_rows;
			$array = $result->fetch_assoc();
			?>
		<div class="limiter">
			<div class="container-table100">
				<div class="wrap-table100">
					<div class="table100">
						<table id="tablePreview" class="table col-md-6 offset-3 " style="margin-top: 40px">
							<tbody>
								<tr>
									<td >Typ konta: <b> <?php echo $account; ?> </b></td>
								</tr>
								<tr>
									<td >Imię i Nazwisko: <?php echo $array['name']; ?></td>
								</tr>
								<tr>
									<td >Login: <?php echo $array['username']; ?></td>
								</tr>
								<tr>
									<td >E-mail: <?php echo $array['mail']; ?></td>
								</tr>
								<tr>
									<td ><a href="password.php" class='btn btn-sm btn-outline-secondary form-control' type='button'>Zmień hasło</a></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<?php
	require_once "footer.php";
	}else{
		//$_SESSION['alert'] = '<script type="text/javascript">swal("Brak dostępu", "Strona jest dostępna tylko dla zalogowanych użytkowników.", "error");</script>';
		header('location: ../index.php?alert=1');
	}
	?>