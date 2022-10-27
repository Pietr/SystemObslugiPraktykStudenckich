<?php
	require_once "../config/config.php";
	require_once "../action/session.php";
	
	if ($_SESSION['session_active'] == "1"){
		$user_type = $_SESSION['user_type'];
		$user_id = $_SESSION['user_id'];
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
								<tr class="table100-head">
									<th class="column1">#</th>
									<th class="column3">Nazwa</th>
									<th class="column2">Autor</th>
									<th class="column2">Status</th>
									<th class="column2">Wypełnij</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$query = "SELECT * FROM form";
									$result = $db->query($query);
									$row = $result->num_rows;
									for ($x=0; $x < $row; $x++)
									{
									    $array = $result->fetch_assoc();
									    $id_cat = $array['author_id'];
									    $query_cat = "SELECT * FROM users where id like '$id_cat'";
									    $result_cat = $db->query($query_cat);
									    $array_cat = $result_cat ->fetch_assoc();
									?>
								<tr>
									<td class="column1"><?php echo $array['id']; ?></td>
									<td class="column3"><?php echo $array['name']; ?></td>
									<td class="column2"><?php echo $array_cat['name']; ?></td>
									<?php
										$form_id = $array['id'];
										$query_cat2 = "SELECT * FROM form_finish where id_user like '$user_id' AND id_form like '$form_id' ";
										$result_cat2 = $db->query($query_cat2);
										$array_cat2 = $result_cat2 ->fetch_assoc();
										$row2 = $result_cat2->num_rows;
										if ($row2>0){
										?>
									<td class="column2">Wypełniona</td>
									<td></td>
									<?php
										}else{
										?>
									<td class="column2">Do wypełnienia</td>
									<td><a class='column2 btn btn-sm btn-outline-secondary' type='button' href="form_fill_patron.php?id=<?php echo $array['id'];?>">Wypełnij</a></td>
									<?php
										}
										                     ?>
								</tr>
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