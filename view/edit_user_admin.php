<?php
	require_once "../action/session.php";
	require_once "../config/config.php";
	if ($_SESSION['session_active'] == "1"){
		$user_type = $_SESSION['user_type'];
		$id = $_GET['id'];
		$_SESSION['id_user'] = $id;
		if ($user_type==1){
			header('location: main.php');
		}
		if ($user_type==3){
			header('location: main_manager.php');
		}
		if ($user_type==2){
			header('location: main_patron.php');
		}
		require_once "head.php";
	?>
<body class="u-body">
	<?php require_once "header.php"; ?>
	<div class="col-md-8 offset-md-2">
		<?php
			if (isset($_SESSION['alert']))
			{
			    echo "</table><div >".$_SESSION['alert']."</div>";
			    unset($_SESSION['alert']);
			}
			?>
	</div>
	<div class="limiter">
	<div class="container-table100">
		<div class="wrap-table100">
			<div class="table100">
				<form action="../action/edit_user_admin.php" method="post">
					<?php
						$role_type = 1;
						$query = "SELECT * FROM users where id like $id";
						$result = $db->query($query);
						$row = $result->num_rows;
						for ($x=0; $x < $row; $x++){
						    $array = $result->fetch_assoc();
						?>
					<button type="submit" class="btn btn-sm btn-outline-success col-lg-6 offset-lg-3 col-md-6 col-sm-6 cos-xs-6" style="margin-bottom: 18px; " ><b>Zapisz</button></a>
					<a type="submit" href="javascript:history.back()" class="btn btn-sm btn-outline-secondary col-lg-6 offset-lg-3 col-md-6 col-sm-6 cos-xs-6" style="margin-bottom: 18px; " ><b>Anuluj</b></a>
					<div class="col-lg-6 offset-lg-3 col-md-6 col-sm-6 cos-xs-6">
						<div class="form-group col-md-12">
							<label for="inputEmail4">Identyfikator:</label>
							<input type="text" class="form-control" placeholder="ID" name="id" disabled value="<?php echo $array['id'];?>">
						</div>
						<div class="form-group col-md-12">
							<label for="inputEmail4">Imię / Nazwisko</label>
							<input type="text" class="form-control" placeholder="Imie Nazwisko" name="name"  value="<?php echo $array['name'];?>">
						</div>
						<div class="form-group col-md-12">
							<label for="inputEmail4">Nr indeksu</label>
							<input type="number" class="form-control" placeholder="Numer indexu" name="index_number"  value="<?php echo $array['index_number'];?>">
						</div>
						<div class="form-group col-md-12">
							<label for="inputEmail4">Login</label>
							<input type="text" class="form-control" placeholder="Login" name="username"  value="<?php echo $array['username'];?>">
						</div>
						<div class="form-group col-md-12">
							<label for="inputEmail4">E-mail</label>
							<input type="email" class="form-control" placeholder="E-Mail" name="mail"  value="<?php echo $array['mail'];?>">
						</div>
						<div class="form-group col-md-12">
							<label for="inputEmail4">Typ konta</label>
							<select class='form-control' name='role_type' required>
								<option value=''>--</option>
								<?php
									if($array['role_type']==1){
										echo "<option selected='selected' value='1' >Student</option><option value='2' >Opiekun praktyk</option><option value='3' >Kierownik praktyk</option><option value='4' >Administrator</option>";
									}elseif($array['role_type']==2){
										echo "<option value='1' >Student</option><option selected='selected' value='2' >Opiekun praktyk</option><option value='3' >Kierownik praktyk</option><option value='4' >Administrator</option>";
									}elseif($array['role_type']==3){
										echo "<option value='1' >Student</option><option value='2' >Opiekun praktyk</option><option selected='selected' value='3' >Kierownik praktyk</option><option value='4' >Administrator</option>";
									}elseif($array['role_type']==4){
										echo "<option value='1' >Student</option><option value='2' >Opiekun praktyk</option><option value='3' >Kierownik praktyk</option><option selected='selected' value='4' >Administrator</option>";
									}else{
										echo "<option value='1' >Student</option><option value='2' >Opiekun praktyk</option><option value='3' >Kierownik praktyk</option><option value='4' >Administrator</option>";
									}
								?>
							</select>
				</form>
				<?php
					}
					?>
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