<?php
	require_once "../action/session.php";
	require_once "../config/config.php";
	if ($_SESSION['session_active'] == "1"){
		$user_type = $_SESSION['user_type'];
		$id = $_GET['id'];
		$_SESSION['id_company'] = $id;
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
					<form action="../action/edit_company_admin.php" method="post">
						<?php
							$role_type = 1;
							$query = "SELECT * FROM company where id like $id";
							$result = $db->query($query);
							$row = $result->num_rows;
							for ($x=0; $x < $row; $x++)
							{
							    $array = $result->fetch_assoc();
							?>
						<button type="submit" class="btn btn-sm btn-outline-success col-lg-6 offset-lg-3 col-md-6 col-sm-6 cos-xs-6" style="margin-bottom: 18px; " ><b>Zapisz</button></a>
						<a type="submit" href="javascript:history.back()" class="btn btn-sm btn-outline-secondary col-lg-6 offset-lg-3 col-md-6 col-sm-6 cos-xs-6" style="margin-bottom: 18px; " ><b>Anuluj</b></a>
						<div class="col-lg-6 offset-lg-3 col-md-6 col-sm-6 cos-xs-6">
							<div class="form-group col-md-12">
								<label for="inputEmail4">Identyfikator firmy:</label>
								<input type="text" class="form-control" placeholder="ID" name="id" disabled value="<?php echo $array['id'];?>">
							</div>
							<div class="form-group col-md-12">
								<label for="inputEmail4">Nazwa</label>
								<input type="text" class="form-control" placeholder="Nazwa firmy" name="name"  value="<?php echo $array['name'];?>">
							</div>
							<div class="form-group col-md-12">
								<label for="inputEmail4">Adres</label>
								<input type="text" class="form-control" placeholder="Adres" name="address"  value="<?php echo $array['address'];?>">
							</div>
							<div class="form-group col-md-12">
								<label for="inputEmail4">NIP</label>
								<input type="text" class="form-control" placeholder="NIP" name="nip"  value="<?php echo $array['nip'];?>">
							</div>
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