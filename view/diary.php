<?php
		require_once "../config/config.php";
	require_once "../action/session.php";
	
	$user_id = $_SESSION['user_id'];
	$id_diary = $_GET['id'];
	$_SESSION['id_diary'] = $id_diary;
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
					<button type="submit" class="btn btn-sm btn-outline-secondary col-lg-4 offset-lg-4 col-md-4 col-sm-4 cos-xs-4" style="margin-bottom: 18px" data-toggle="modal" data-target="#exampleModal"><b>Dodaj wpis</b></button>
					<center> <a class=' col-md-4 btn btn-sm btn-outline-primary' type='button' href="diary_print.php?id=<?php echo $id_diary;?>">Do druku</a></center>
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
		          <h4 id='exampleModalLabel' >Nowy wpis</b></h4></div><div class='modal-body'>
		          <form action='../action/add_diary.php' method='post' name='add' data-toggle='validator' role='form'>";
		?>
	<!--Formularz dodawania-->
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="inputEmail4">Data</label>
			<input type="date" class="form-control"  placeholder="RRRR-MM-DD" name="add_date">
		</div>
		<div class="form-group col-md-6">
			<label for="inputEmail4">Ilość godzin</label>
			<input type="number" class="form-control"  placeholder="Ilość godzin" name="add_time" required>
		</div>
		<div class="form-group col-md-12">
			<label for="inputEmail4">Spostrzeżenia</label>
			<input type="text" class="form-control"  placeholder="Spostrzeżenia" name="add_info" required>
		</div>
		<div class="form-group col-md-12">
			<label for="inputEmail4">Czynności</label>
			<input type="text" class="form-control"   placeholder="Czynności" name="add_content" required>
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
	<!-- Okno dodawawania -->
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
</body>
<?php
	require_once "footer.php";
	}else{
		//$_SESSION['alert'] = '<script type="text/javascript">swal("Brak dostępu", "Strona jest dostępna tylko dla zalogowanych użytkowników.", "error");</script>';
		header('location: ../index.php?alert=1');
	}
	?>