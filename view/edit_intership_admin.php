<?php
	require_once "../action/session.php";
	require_once "../config/config.php";
	if ($_SESSION['session_active'] == "1"){
		$user_type = $_SESSION['user_type'];
		$id = $_GET['id'];
		$_SESSION['id_internship'] = $id;
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
					<form action="../action/edit_internship_admin.php" method="post">
						<?php
							$role_type = 1;
							$query = "SELECT * FROM internship where id like $id";
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
								<label for="inputEmail4">Identyfikator:</label>
								<input type="text" class="form-control" placeholder="Data" name="id" disabled value="<?php echo $array['id'];?>">
							</div>
							<div class="form-group col-md-12">
								<label for="inputEmail4">Nazwa</label>
								<input type="text" class="form-control" placeholder="Nazwa" name="name"  value="<?php echo $array['name'];?>">
							</div>
							<div class="form-group col-md-12">
								<label for="inputEmail4">Opis</label>
								<input type="text" class="form-control" placeholder="Opis" name="content"  value="<?php echo $array['content'];?>">
							</div>
							<div class="form-group col-md-12">
								<label for="inputEmail4">Początek</label>
								<input type="date" class="form-control" placeholder="RRRR-MM-DD" name="start_date"  value="<?php echo $array['start_date'];?>">
							</div>
							<div class="form-group col-md-12">
								<label for="inputEmail4">Koniec</label>
								<input type="date" class="form-control" placeholder="RRRR-MM-DD" name="end_date"  value="<?php echo $array['end_date'];?>">
							</div>
							<div class="form-group col-md-12">
								<label for="inputEmail4">Opiekun praktyk</label>
								<?php
									$categories5_query = "SELECT * FROM users where role_type=2";
									$categories5_result = $db->query($categories5_query);
									
									$categories5_row = $categories5_result->num_rows;
									echo "<select class='form-control' name='patron' required> <option value=''>--</option>";
									
									for ($i=0; $i < $categories5_row; $i++)
									{
									    $categories5_array = $categories5_result->fetch_assoc();
										if($array['id_patron'] == $categories5_array['id']){
											echo "<option selected='selected' value='". $categories5_array['id'] ."'>". $categories5_array['name'] ."</option>";
										}else{
											echo "<option value='". $categories5_array['id'] ."'>". $categories5_array['name'] ."</option>";
										}
									}
									echo "</select>";
									?>
							</div>
							<div class="form-group col-md-12">
								<label for="inputEmail4">Student</label>
								<?php
									$categories5_query = "SELECT * FROM users where role_type=1";
									$categories5_result = $db->query($categories5_query);
									
									$categories5_row = $categories5_result->num_rows;
									echo "<select class='form-control' name='student' required> <option value=''>--</option>";
									
									for ($i=0; $i < $categories5_row; $i++)
									{
									    $categories5_array = $categories5_result->fetch_assoc();
										if($array['id_student'] == $categories5_array['id']){
											echo "<option selected='selected' value='". $categories5_array['id'] ."'>". $categories5_array['name'] ."</option>";
										}else{
											echo "<option value='". $categories5_array['id'] ."'>". $categories5_array['name'] ."</option>";
										}
									}
									echo "</select>";
									?>
							</div>
							<div class="form-group col-md-12">
								<label for="inputEmail4">Firma</label>
								<?php
									$categories5_query = "SELECT * FROM company where del=0";
									$categories5_result = $db->query($categories5_query);
									
									$categories5_row = $categories5_result->num_rows;
									echo "<select class='form-control' name='company' required> <option value=''>--</option>";
									
									for ($i=0; $i < $categories5_row; $i++)
									{
									    $categories5_array = $categories5_result->fetch_assoc();
										if($array['company'] == $categories5_array['id']){
											echo "<option selected='selected' value='". $categories5_array['id'] ."'>". $categories5_array['name'] ."</option>";
										}else{
											echo "<option value='". $categories5_array['id'] ."'>". $categories5_array['name'] ."</option>";
										}
									}
									echo "</select>";
									?>
							</div>
							<div class="form-group col-md-12">
								<label for="inputEmail4">Status</label>
								<?php
									$categories5_query = "SELECT * FROM statuses ";
									$categories5_result = $db->query($categories5_query);
									
									$categories5_row = $categories5_result->num_rows;
									echo "<select class='form-control' name='statuses' required> <option value=''>--</option>";
									
									for ($i=0; $i < $categories5_row; $i++)
									{
									    $categories5_array = $categories5_result->fetch_assoc();
										if($array['status'] == $categories5_array['id']){
											echo "<option selected='selected' value='". $categories5_array['id'] ."'>". $categories5_array['name'] ."</option>";
										}else{
											echo "<option value='". $categories5_array['id'] ."'>". $categories5_array['name'] ."</option>";
										}
									}
									echo "</select>";
									?>
							</div>
							<div class="form-group col-md-12">
								<label for="inputEmail4">Ilość godzin</label>
								<input type="number" class="form-control" placeholder="Godziny" name="hours"  value="<?php echo $array['hours'];?>">
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