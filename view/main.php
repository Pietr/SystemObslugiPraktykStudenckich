<?php
		require_once "../config/config.php";
	require_once "../action/session.php";

	$user_id = $_SESSION['user_id'];
	if ($_SESSION['session_active'] == "1"){
		$user_type = $_SESSION['user_type'];
		if ($user_type==2){
		  header('location: main_patron.php');
		}
		if ($user_type==3){
		  header('location: main_manager.php');
		}
		if ($user_type==4){
		  header('location: main_admin.php');
		}
		require_once "head.php"; //załadowanie <head>
	?>
<body class="u-body">
	<?php require_once "header.php"; //załadowanie nagłówka?>
	<div class="col-md-8 offset-md-2">
		<h2 class="display-1 text-center">Twoje dzienniki praktyk</h2>
		<div class="limiter">
			<div class="container-table100">
				<div class="wrap-table100">
					<div class="table100">
						<table id="tablePreview" class="table table-striped table-bordered col-md-12 " style="margin-top: 40px">
							<thead>
								<tr class="table100-head">
									<th class="column1">#</th>
									<th class="column3">Nazwa</th>
									<th class="column2">Rozpoczęcie</th>
									<th class="column2">Firma</th>
									<th class="column2">Ilość godzin</th>
									<th class="column2">Akcje</th>
									<th class="column2">Szczegóły</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$query = "SELECT * FROM internship where id_student like $user_id ";
									$result = $db->query($query);
									$row = $result->num_rows;
									for ($x=0; $x < $row; $x++)
									{
									    $array = $result->fetch_assoc();
									    $id_cat = $array['company'];
									    $query_cat = "SELECT * FROM company where id like '$id_cat'";
									    $result_cat = $db->query($query_cat);
									    $array_cat = $result_cat ->fetch_assoc();
									
									$diary = $array['id'];
									$query_diary = "SELECT SUM(time) AS suma FROM diary where id_internship like '$diary'";
									$result_diary = $db->query($query_diary);
									$array_diary = $result_diary ->fetch_assoc();
									    ?>
								<tr>
									<td class="column1"><?php echo $array['id']; ?></td>
									<td class="column3"><?php echo $array['name']; ?></td>
									<td class="column2"><?php echo $array['start_date']; ?></td>
									<td class="column2"><?php echo $array_cat['name']; ?></td>
									<td class="column2"><?php if(!isset($array_diary['suma'])) { echo "<font color='red'>0"; }elseif ($array_diary['suma'] < $array['hours']) { echo "<font color='red'>".$array_diary['suma']; }else{ echo "<font color='green'>".$array_diary['suma']; } ?> / <?php echo $array['hours']; ?></font></td>
									<td class="column2"><?php if ($array['status'] == "3") { echo "<font color='green'>ZAKOŃCZONO</font> <a class='column2 btn btn-sm btn-outline-primary' type='button' href='diary_print.php?id=".$array['id']."'>Druk</a>"; }else{ echo "<a class='column2 btn btn-sm btn-outline-primary' type='button' href='diary.php?id=".$array['id']."'>Wypełnij dzienniczek</a>"; } ?></td>
									<td><a class='column2 btn btn-sm btn-outline-secondary' type='button' href="intership_details.php?id=<?php echo $array['id'];?>">Szczegóły</a></td>
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
	require_once "footer.php"; //załadowanie stopki
	}else{
		//$_SESSION['alert'] = '<script type="text/javascript">swal("Brak dostępu", "Strona jest dostępna tylko dla zalogowanych użytkowników.", "error");</script>';
		header('location: ../index.php?alert=1');
	}
	?>