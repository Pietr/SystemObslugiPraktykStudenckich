<?php
		require_once "../config/config.php";
	require_once "../action/session.php";
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
		require_once "head.php";?>
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
		<form action="" method="post">
			<div class="row col-md-6 offset-3" style="margin-bottom: 30px">
				<div class="col">
					<label for="inputEmail4">Student</label>
					<input type="text" class="form-control" placeholder="Imię i Nazwisko" name="student" >
				</div>
			</div>
			<div class="col-md-12" style="float: left">
				<button type="submit" class="btn btn-sm btn-outline-secondary col-lg-4 offset-lg-4 col-md-4 col-sm-4 cos-xs-4" style="margin-bottom: 18px" ><b>Wyszukaj</b></button>
		</form>
		<a class="btn btn-sm btn-outline-secondary col-lg-4 offset-lg-4 col-md-4 col-sm-4 cos-xs-4" style="margin-bottom: 18px" data-toggle="modal" data-target="#exampleModal"><b>Dodaj praktykanta</b></a>
		</div>
		<div class="limiter">
			<div class="container-table100">
				<div class="wrap-table100">
					<div class="table100">
						<table id="tablePreview" class="table table-striped table-bordered col-md-12 " style="margin-top: 40px">
							<thead>
								<tr class="table100-head">
									<th class="column1">#</th>
									<th class="column3">Imię i Nazwisko</th>
									<th class="column3">Nr indexu</th>
									<th class="column2">Login</th>
									<th class="column2">E-mail</th>
									<th class="column3">Edycja</th>
									<th class="column2">Reset hasła</th>
									<th class="column2">Usuń</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$role_type = 1;
									
									if (isset($_POST['student'])){
									if ($_POST['student']==""){
									$query = "SELECT * FROM users where role_type like $role_type";
									}else{
									$student = $_POST['student'];
									$query = "SELECT * FROM users where role_type like $role_type AND name like '%$student%'";
									}
									
									}else{
									    $query = "SELECT * FROM users where role_type like $role_type";
									}
									
									$result = $db->query($query);
									$row = $result->num_rows;
									for ($x=0; $x < $row; $x++)
									{
									    $array = $result->fetch_assoc();
									    ?>
								<tr>
									<td class="column1"><?php echo $array['id']; ?></td>
									<td class="column3"><?php echo $array['name']; ?></td>
									<td class="column3"><?php echo $array['index_number']; ?></td>
									<td class="column3"><?php echo $array['username']; ?></td>
									<td class="column3"><?php echo $array['mail']; ?></td>
									<td><a class='column2 btn btn-sm btn-outline-primary' type='button' href="edit_user_manager.php?id=<?php echo $array['id'];?>">Edycja</a></td>
									<td><a class='column2 btn btn-sm btn-outline-primary' type='button' href="../action/reset_password.php?id=<?php echo $array['id'];?>">Reset hasła</a></td>
									<td><a class='column2 btn btn-sm btn-outline-danger' type='button' href="../action/del_user_manager.php?id=<?php echo $array['id'];?>">Usuń</a></td>
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
	<?php
		echo "<div class=\"modal fade\" id=\"exampleModal\" tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel'><div class=\"modal-dialog\" role=\"document\"><div class=\"modal-content\"><div class=\"modal-header\">
		          <h4 id='exampleModalLabel' >Nowy praktykant</b></h4></div><div class='modal-body'>
		          <form action='../action/add_user_manager.php' method='post' name='add' data-toggle='validator' role='form'>";
		?>
	<!--Formularz dodawania -->
	<div class="form-row">
		<div class="form-group col-md-12">
			<label for="inputEmail4">Imię i Nazwisko</label>
			<input type="text" class="form-control"  placeholder="Imię i Nazwisko" name="add_name" required>
		</div>
		<div class="form-group col-md-6">
			<label for="inputEmail4">E-mail</label>
			<input type="text" class="form-control"  placeholder="E-mail" name="add_mail" required>
		</div>
		<div class="form-group col-md-6">
			<label for="inputEmail4">Login</label>
			<input type="text" class="form-control"  placeholder="Login" name="add_username" minlength="4" required>
		</div>
		<div class="form-group col-md-6">
			<label for="inputEmail4">Hasło</label>
			<input type="password" class="form-control"  placeholder="Hasło" name="add_password" minlength="8" required>
		</div>
		<div class="form-group col-md-6">
			<label for="inputEmail4">Nr indexu</label>
			<input type="text" class="form-control"   placeholder="Nr indexu" name="add_index" required>
		</div>
	</div>
	</div>
	<div class='modal-footer'>
		<button type='button' class='btn btn-outline-secondary' data-dismiss='modal'>Anuluj</button>
		<button type='submi' class='btn btn-outline-success'>Dodaj</button>
		</form>
	</div>
	</div>
	</div>
	</div>
	<?php
		unset($_SESSION['search']);
		?>
	<script src="js/classie.js"></script>
	<!-- Okno dodawawania  -->
	<script>
		$('#exampleModal').on('show.bs.modal', function (event) {
		    var button = $(event.relatedTarget)
		    var recipient = button.data('whatever')
		    var modal = $(this)
		    modal.find('.modal-title').text('New message to ' + recipient)
		    modal.find('.modal-body input').val(recipient)
		})
		$(function () {
		    $('[data-toggle="tooltip"]').tooltip()
		})
		$(function() {
		    if (!String.prototype.trim) {
		        (function() {
		            var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
		            String.prototype.trim = function() {
		                return this.replace(rtrim, '');
		            };
		        })();
		    }
		    [].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
		        if( inputEl.value.trim() !== '' ) {
		            classie.add( inputEl.parentNode, 'input--filled' );
		        }
		        inputEl.addEventListener( 'focus', onInputFocus );
		        inputEl.addEventListener( 'blur', onInputBlur );
		    } );
		    function onInputFocus( ev ) {
		        classie.add( ev.target.parentNode, 'input--filled' );
		    }
		    function onInputBlur( ev ) {
		        if( ev.target.value.trim() === '' ) {
		            classie.remove( ev.target.parentNode, 'input--filled' );
		        }
		    }
		})();
	</script>
	<script src="../js/jquery-3.4.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/bootstrap-select.min.js"></script>
	<script src="../js/select2.min.js"></script>
</body>
<?php
	require_once "footer.php";
	}else{
		//$_SESSION['alert'] = '<script type="text/javascript">swal("Brak dostępu", "Strona jest dostępna tylko dla zalogowanych użytkowników.", "error");</script>';
		header('location: ../index.php?alert=1');
	}
	?>