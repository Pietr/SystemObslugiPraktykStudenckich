<?php
		require_once "../config/config.php";
	require_once "../action/session.php";
	
	$user_id = $_SESSION['user_id'];
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
									<th class="column3">Student</th>
									<th class="column2">Rozpoczęcie</th>
									<th class="column2">Firma</th>
									<th class="column3">Status</th>
									<th class="column2">Dzienniczek</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$query = "SELECT * FROM internship where id_patron like $user_id ";
									$result = $db->query($query);
									$row = $result->num_rows;
									for ($x=0; $x < $row; $x++)
									{
									$array = $result->fetch_assoc();
									
									$id_cat = $array['company'];
									$query_cat = "SELECT * FROM company where id like '$id_cat'";
									$result_cat = $db->query($query_cat);
									$array_cat = $result_cat ->fetch_assoc();
									
									    $id_student = $array['id_student'];
									    $query_student = "SELECT * FROM users where id like '$id_student'";
									    $result_student = $db->query($query_student);
									    $array_student = $result_student ->fetch_assoc();
									?>
								<tr>
									<td class="column1"><?php echo $array['id']; ?></td>
									<td class="column3"><?php echo $array['name']; ?></td>
									<td class="column2"><?php echo $array_student['name']; ?></td>
									<td class="column2"><?php echo $array['start_date']; ?></td>
									<td class="column2"><?php echo $array_cat['name']; ?></td>
									<?php
										if ($array['status']==1){
										    $status = "Nowe";
										}
										if ($array['status']==2){
										    $status = "W trakcie";
										}
										if ($array['status']==3){
										    $status = "Zakończone";
										}
										?>
									<td class="column2"><?php echo $status; ?></td>
									<td><a class='column2 btn btn-sm btn-outline-primary' type='button' href="diary_patron.php?id=<?php echo $array['id'];?>">Sprawdź dzienniczek</a></td>
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