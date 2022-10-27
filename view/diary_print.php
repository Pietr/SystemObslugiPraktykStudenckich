<?php
	require_once "../config/config.php";
	require_once "../action/session.php";
	
	$user_id = $_SESSION['user_id'];
	$id_diary = $_GET['id'];
	$_SESSION['id_diary'] = $id_diary;
	if ($_SESSION['session_active'] == "1"){
		$user_type = $_SESSION['user_type'];
		require_once "head.php";
	?>
<body class="u-body">
	<header class="u-clearfix u-header u-header" id="sec-8ded">
	<div class="u-clearfix u-sheet u-sheet-1">
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
				$query_studentid = "SELECT id_user AS id FROM diary where id_internship like $id_diary";
				$result_studentid = $db->query($query_studentid);
				$array_studentid = $result_studentid ->fetch_assoc();
				
				$id_cat2 = $array_studentid['id'];
				$query_cat2 = "SELECT * FROM users where id like $id_cat2";
				$result_cat2 = $db->query($query_cat2);
				$array_cat2 = $result_cat2 ->fetch_assoc();
				
				$query_intern = "SELECT * FROM internship where id like $id_diary";
				$result_intern = $db->query($query_intern);
				$array_intern = $result_intern ->fetch_assoc();
				
				$id_company = $array_intern['company'];
				$query_company = "SELECT * FROM company where id like $id_company";
				$result_company = $db->query($query_company);
				$array_company = $result_company ->fetch_assoc();
				
				$id_patron = $array_intern['id_patron'];
				$query_patron = "SELECT name FROM users where id like $id_patron";
				$result_patron = $db->query($query_patron);
				$array_patron = $result_patron ->fetch_assoc();
				
				echo '<p class="u-text u-text-4"><b>Dane praktykanta:</b> '.$array_cat2["name"].' '.$array_cat2["index_number"];
				echo '<br><b>Nazwa firmy:</b> '.$array_company["name"];
				echo '<br><b>Stanowisko:</b> '.$array_intern["name"];
				echo '<br><b>Patron:</b> '.$array_patron["name"];
				echo '<br><b>Zakres:</b> od '.$array_intern["start_date"].' do '.$array_intern["end_date"];
				echo '<br><b>Ilość godzin:</b> '.$array_intern["hours"].'</p>';
				
				$query = "SELECT * FROM diary where id_internship like $id_diary ORDER BY id ";
				$result = $db->query($query);
				$row = $result->num_rows;
				for ($x=0; $x < $row; $x++)
				{
				$array = $result->fetch_assoc();
				?>
			<tr>
				<td class="column1"><?php echo $x+1; ?></td>
				<td class="column3"><?php echo $array['date_diary']; ?> </td>
				<td class="column2"><?php echo $array['time']; ?> h</td>
				<td class="column2"><?php echo $array['info']; ?></td>
				<td class="column2"><?php echo $array['content']; ?></td>
			</tr>
			<?php
				}
				$query_diary = "SELECT SUM(time) AS suma FROM diary where id_internship like '$id_diary'";
				$result_diary = $db->query($query_diary);
				$array_diary = $result_diary ->fetch_assoc();
				?>
			<tr>
				<td class="column1">SUMA</td>
				<td class="column3"></td>
				<td class="column2"><?php echo $array_diary['suma']; ?> / <?php echo $array_intern["hours"]; ?> h</td>
				<td class="column2"></td>
				<td class="column2"></td>
			</tr>
		</tbody>
	</table>
	<script>
		window.print();
	</script>
</body>
<?php
	}else{
		//$_SESSION['alert'] = '<script type="text/javascript">swal("Brak dostępu", "Strona jest dostępna tylko dla zalogowanych użytkowników.", "error");</script>';
		header('location: ../index.php?alert=1');
	}
	?>
</html>