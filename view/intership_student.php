<?php
	require_once "../config/config.php";
	require_once "../action/session.php";
	
	if ($_SESSION['session_active'] == "1"){
		$user_type = $_SESSION['user_type'];
		if ($user_type==1){
			header('location: main.php');
		}
		if ($user_type==3){
			header('location: main_manager.php');
		}
		if ($user_type==2){
			header('location: main_patron.php');
		}
		$id_intership = $_GET['id'];
		$_SESSION['id_intership'] = $id_intership;
		require_once "head.php";
	?>
<body class="u-body">
	<?php require_once "header.php"; ?>
	<div class="col-md-8 offset-md-2">
		<div class="form-group col-md-12">
			<form action='../action/add_intership_student.php' method='post' name='add' data-toggle='validator' role='form'>
				<label for="inputEmail4">Student</label>
				<?php
					$categories5_query = "SELECT * FROM users where role_type=1";
					$categories5_result = $db->query($categories5_query);
					
					$categories5_row = $categories5_result->num_rows;
					echo "<select class='form-control' name='add_student' required> <option value=''>--</option>";
					
					for ($i=0; $i < $categories5_row; $i++)
					{
					    $categories5_array = $categories5_result->fetch_assoc();
					    echo "<option value='". $categories5_array['id'] ."'>". $categories5_array['name'] ."</option>";
					}
					echo "</select>";
					?>
		</div>
	</div>
	<div class="col-md-12" style="float: left">
	<button type="submit" class="btn btn-sm btn-outline-secondary col-lg-4 offset-lg-4 col-md-4 col-sm-4 cos-xs-4" style="margin-bottom: 18px" data-toggle="modal" data-target="#exampleModal"><b>Przypisz</b></button>
	</form>
	</div>
	</div>
	</div>
	</div>
	</div>
	<?php
		echo "<div class=\"modal fade\" id=\"exampleModal\" tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel'><div class=\"modal-dialog\" role=\"document\"><div class=\"modal-content\"><div class=\"modal-header\">
		          <h4 id='exampleModalLabel' >Nowe praktyki</b></h4></div><div class='modal-body'>
		          <form action='../action/add_intership.php' method='post' name='add' data-toggle='validator' role='form'>";
		?>
	<!--Formularz dodawania -->
	<div class="form-row">
		<div class="form-group col-md-12">
			<label for="inputEmail4">Nazwa</label>
			<input type="text" class="form-control"  placeholder="Nazwa" name="add_name" required>
		</div>
		<div class="form-group col-md-6">
			<label for="inputEmail4">Opiekun praktyk</label>
			<?php
				$categories4_query = "SELECT * FROM users where role_type=2";
				$categories4_result = $db->query($categories4_query);
				
				$categories4_row = $categories4_result->num_rows;
				echo "<select class='form-control' name='add_patron' required> <option value=''>--</option>";
				
				for ($i=0; $i < $categories4_row; $i++)
				{
				    $categories4_array = $categories4_result->fetch_assoc();
				    echo "<option value='". $categories4_array['id'] ."'>". $categories4_array['name'] ."</option>";
				}
				echo "</select>";
				?>
		</div>
		<div class="form-group col-md-6">
			<label for="inputEmail4">Data rozpoczęcia</label>
			<input type="date" class="form-control"  placeholder="RRRR-MM-DD" name="add_start" minlength="10" maxlength="10" required>
		</div>
		<div class="form-group col-md-12">
			<label for="inputEmail4">Firma</label>
			<?php
				$categories5_query = "SELECT * FROM company where del=0";
				$categories5_result = $db->query($categories5_query);
				
				$categories5_row = $categories5_result->num_rows;
				echo "<select class='form-control' name='add_company' required> <option value=''>--</option>";
				
				for ($i=0; $i < $categories5_row; $i++)
				{
				    $categories5_array = $categories5_result->fetch_assoc();
				    echo "<option value='". $categories5_array['id'] ."'>". $categories5_array['name'] ."</option>";
				}
				echo "</select>";
				?>
		</div>
		<div class="form-group col-md-12">
			<label for="inputEmail4">Opis</label>
			<input type="text" class="form-control"  placeholder="Opis" name="add_content" required>
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
		header('location: ../index.php?alert=1');
	}
	?>