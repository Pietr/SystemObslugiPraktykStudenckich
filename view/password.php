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
					<form action='../action/new_password.php' method='post' name='add' role='form'>
						<?php
							if (isset($_SESSION['alert']))
							{
								echo $_SESSION['alert'];
								unset($_SESSION['alert']);
							}
							?>
						<div class="form-group col-md-6 offset-3 ">
							<label for="inputEmail4">Nowe hasło</label>
							<input type="password"  class="form-control" placeholder="Nowe hasło" name="password_1" required>
						</div>
						<div class="form-group col-md-6 offset-3 ">
							<label for="inputEmail4">Powtórz nowe hasło</label>
							<input type="password"  class="form-control" placeholder="Powtórz nowe hasło" name="password_2" required>
						</div>
						<br><br>
						<button type='submi' class='btn btn-outline-success col-md-4 offset-4 menu' style='margin-bottom: 12px; '>Zmień</button>
					</form>
					<a href='main.php' class='btn btn-outline-danger col-md-4 offset-4 menu' style='margin-bottom: 12px; '><b>Anuluj</b><br></a>
					</center>
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