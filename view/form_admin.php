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
		if ($user_type==2){
			header('location: main_patron.php');
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
						<button type="submit" class="btn btn-sm btn-outline-secondary col-lg-4 offset-lg-4 col-md-4 col-sm-4 cos-xs-4" style="margin-bottom: 18px" data-toggle="modal" data-target="#exampleModal"><b>Dodaj ankiete</b></button>
						<table id="tablePreview" class="table table-striped table-bordered col-md-12 " style="margin-top: 40px">
							<thead>
								<tr class="table100-head">
									<th class="column1">#</th>
									<th class="column3">Nazwa</th>
									<th class="column2">Autor</th>
									<th class="column2">Status</th>
									<th class="column2">Statystyki</th>
									<th class="column2">Edytuj</th>
									<th class="column2">Zmień stan</th>
									<th class="column2">Usuń</th>
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
										if ($array['enable']==1){
										?>
									<td class="column2">Aktywna</td>
									<?php
										}else{
										?>
									<td class="column2">Zakończona</td>
									<?php
										}
										?>
									<td><a class='column2 btn btn-sm btn-outline-secondary' type='button' href="form_statistics_admin.php?id=<?php echo $array['id'];?>">Statystyki</a></td>
									<td><a class='column2 btn btn-sm btn-outline-secondary' type='button' href="edit_form_admin.php?id=<?php echo $array['id'];?>">Edytuj</a></td>
									<?php
										if ($array['enable']==1){
										?>
									<td><a class='column2 btn btn-sm btn-outline-secondary' type='button' href="../action/disable_form.php?id=<?php echo $array['id'];?>">Zakończ</a></td>
									<?php
										}else{ 
										?>
									<td><a class='column2 btn btn-sm btn-outline-secondary' type='button' href="../action/enable_form.php?id=<?php echo $array['id'];?>">Aktywuj</a></td>
									<?php
										}
										?>
									<td><a class='column2 btn btn-sm btn-outline-danger' type='button' href="../action/del_form.php?id=<?php echo $array['id'];?>">Usuń</a></td>
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
		          <h4 id='exampleModalLabel' >Nowa ankieta</b></h4></div><div class='modal-body'>
		          <form action='../action/add_form.php' method='post' name='add' data-toggle='validator' role='form'>";
		?>
	<!--Formularz dodawania -->
	<div class="form-row">
		<div class="form-group col-md-12">
			<label for="inputEmail4">Nazwa</label>
			<input type="text" class="form-control"  placeholder="Nazwa" name="add_name" required>
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