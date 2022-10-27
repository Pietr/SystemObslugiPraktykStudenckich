<?php
		require_once "../config/config.php";
	require_once "../action/session.php";
	
	$user_id = $_SESSION['user_id'];
	$id_diary = $_GET['id'];
	if ($_SESSION['session_active'] == "1"){
		$user_type = $_SESSION['user_type'];
		if ($user_type==1){
			header('location: main.php');
		}
		if ($user_type==2){
			header('location: main_patron.php');
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
									<th class="column3">Data dodania</th>
									<th class="column2">Ilość godzin</th>
									<th class="column2">Spostrzeżenia</th>
									<th class="column2">Czynności</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$query = "SELECT * FROM diary where id_internship like $id_diary ORDER BY id ";
									$result = $db->query($query);
									$row = $result->num_rows;
									 for ($x=0; $x < $row; $x++){
										$array = $result->fetch_assoc();
									?>
								<tr>
									<td class="column1"><?php echo $x+1; ?></td>
									<td class="column3"><?php echo $array['date_diary']; ?> h</td>
									<td class="column2"><?php echo $array['time']; ?></td>
									<td class="column2"><?php echo $array['info']; ?></td>
									<td class="column2"><?php echo $array['content']; ?></td>
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