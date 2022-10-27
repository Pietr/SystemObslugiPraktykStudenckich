<?php
	require_once "../config/config.php";
	require_once "../action/session.php";
	
	$user_id = $_SESSION['user_id'];
	$id_diary = $_GET['id'];
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
                        <tbody>
                        <?php
                        $query = "SELECT * FROM internship where id like $id_diary ";
                        $result = $db->query($query);
                        $row = $result->num_rows;
                        $array = $result->fetch_assoc();

                        $id_cat = $array['company'];
                        $query_cat = "SELECT * FROM company where id like '$id_cat'";
                        $result_cat = $db->query($query_cat);
                        $array_cat = $result_cat ->fetch_assoc();

                        $id_cat2 = $array['id_patron'];
                        $query_cat2 = "SELECT * FROM users where id like '$id_cat2'";
                        $result_cat2 = $db->query($query_cat2);
                        $array_cat2 = $result_cat2 ->fetch_assoc();
						
						$diary = $array['id'];
                        $query_diary = "SELECT SUM(time) AS suma FROM diary where id_internship like '$diary'";
                        $result_diary = $db->query($query_diary);
                        $array_diary = $result_diary ->fetch_assoc();
                        ?>
                        <tr>
                            <th class="column1">Nazwa:</th>
                            <td class="column1"><?php echo $array['name']; ?></td>
                        </tr>
                        <tr>
                            <th class="column1">Opis:</th>
                            <td class="column1"><?php echo $array['content']; ?></td>
                        </tr>
                        <tr>
                            <th class="column1">Rozpoczęcie:</th>
                            <td class="column1"><?php echo $array['start_date']; ?></td>
                        </tr>
                        <tr>
                            <th class="column1">Zakończenie:</th>
                            <td class="column1"><?php echo $array['end_date']; ?></td>
                        </tr>
						<tr>
                            <th class="column1">Ilość przepracowanych godzin:</th>
                            <td class="column1"><?php echo $array_diary['suma']; ?></td>
                        </tr>
						<tr>
                            <th class="column1">Ilość godzin:</th>
                            <td class="column1"><?php echo $array['hours']; ?></td>
                        </tr>
                        <tr>
                            <th class="column1">Firma:</th>
                            <td class="column2"><?php echo $array_cat['name']; ?></td>
                        </tr>
                        <tr>
                            <th class="column1">Patron:</th>
                            <td class="column2"><?php echo $array_cat2['name']; ?></td>
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