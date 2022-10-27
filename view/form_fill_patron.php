<?php
	require_once "../config/config.php";
	require_once "../action/session.php";
	
	if ($_SESSION['session_active'] == "1"){
		$user_type = $_SESSION['user_type'];
		$user_id = $_SESSION['user_id'];
		$form_id = $_GET['id'];
		if ($user_type==1){
			header('location: main.php');
		}
		if ($user_type==3){
			header('location: main_manager.php');
		}
		if ($user_type==4){
			header('location: main_admin.php');
		}
		require_once "head.php";
	?>
<body class="u-body">
	<?php require_once "header.php"; ?>
	<div class="col-md-8 offset-md-2">
		<div class="limiter">
			<div class="container-table100">
				<div class="wrap-table100">
					<div class="table100">
						<table id="tablePreview" class="table table-striped table-bordered col-md-12 " style="margin-top: 40px">
							<thead>
							</thead>
							<tbody>
								<form action="../action/add_form_fill_patron.php" method="post">
									<?php
										$query = "SELECT * FROM form_table where id_form like $form_id";
										$_SESSION['form_id'] = $form_id;
										$result = $db->query($query);
										$row = $result->num_rows;
										for ($x=0; $x < $row; $x++)
										{
										    $array = $result->fetch_assoc();
										?>
									<tr>
										<td>
											<h4><?php echo $array['name']; ?></h4>
											<?php
												$id_cat = $array['id'];
												$query_cat = "SELECT * FROM form_table_option where id_form_table like '$id_cat'";
												$result_cat = $db->query($query_cat);
												$row_cat = $result_cat->num_rows;
												for ($y=0; $y < $row_cat; $y++) {
												$array_cat = $result_cat->fetch_assoc();
												?>
											<input type="radio"  name="<?php echo $array['id']; ?>" value="<?php echo $array_cat['id']; ?>"> &nbsp;
											<label for="age1"> <?php echo $array_cat['name']; ?></label><br>
											<?php
												}
												?>
										</td>
									</tr>
									<?php
										}
										?>
							</tbody>
						</table>
						<td><input  class='column2 btn btn-sm btn-outline-secondary col-md-3 offset-4' type="submit" value="Zapisz ankiete"></td>
						</form>
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