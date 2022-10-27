<?php
	$user_type = $_SESSION['user_type'];
	//echo $user_type;
?>
	<header class="u-clearfix u-header u-header" id="sec-8ded"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="../index.php" class="u-image u-logo u-image-1" src="" data-image-width="1280" data-image-height="640">
          <img src="../images/icon.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-align-left u-menu u-menu-dropdown u-nav-spacing-25 u-offcanvas u-menu-1" data-responsive-from="XS">
          <div class="menu-collapse">
            <a class="u-button-style u-nav-link" href="#" style="padding: 4px 0px; font-size: calc(1em + 8px);">
              <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 302 302" style="undefined"><use xlink:href="#svg-7b92"></use></svg>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-7b92" x="0px" y="0px" viewBox="0 0 302 302" style="enable-background:new 0 0 302 302;" xml:space="preserve" class="u-svg-content"><g><rect y="36" width="302" height="30"></rect><rect y="236" width="302" height="30"></rect><rect y="136" width="302" height="30"></rect></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
              <?php
              //Praktykant
              if ($user_type==1){
                  $account = "Praktykant";
                  ?>
				  <ul class="u-nav u-spacing-25 u-unstyled"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="main.php" style="padding: 8px 14px;">Strona główna</a>
					  </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="form.php" style="padding: 8px 14px;">Ankiety</a>
					  </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="mydata.php" style="padding: 8px 14px;">Moje dane</a>
					  </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../action/logout.php" style="padding: 8px 14px;">Wyloguj (<span id="time">15:00</span>)</a>
					  </li></ul>
			  </div>
				<div class="u-custom-menu u-nav-container-collapse">
					<div class="u-align-center u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
						<div class="u-inner-container-layout u-sidenav-overflow">
							<div class="u-menu-close"></div>
							<ul class="u-nav u-spacing-25 u-unstyled"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="main.php" style="padding: 8px 14px;">Strona główna</a>
								</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="form.php" style="padding: 8px 14px;">Ankiety</a>
								</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="mydata.php" style="padding: 8px 14px;">Moje dane</a>
								</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../action/logout.php" style="padding: 8px 14px;">Wyloguj (<span id="time">15:00</span>)</a>
              <?php
              }
              //Patron
              if ($user_type==2){
                  $account = "Opiekun praktyk";
                  ?>
                    <ul class="u-nav u-spacing-25 u-unstyled"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="main.php" style="padding: 8px 14px;">Lista praktyk</a>
                         </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="form_patron.php" style="padding: 8px 14px;">Ankiety</a>
                         </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="mydata.php" style="padding: 8px 14px;">Moje dane</a>
                         </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../action/logout.php" style="padding: 8px 14px;">Wyloguj (<span id="time">15:00</span>)</a>
                         </li></ul>
                    </div>
                    <div class="u-custom-menu u-nav-container-collapse">
                        <div class="u-align-center u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                            <div class="u-inner-container-layout u-sidenav-overflow">
                                <div class="u-menu-close"></div>
                                <ul class="u-nav u-spacing-25 u-unstyled"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="main.php" style="padding: 8px 14px;">Strona główna</a>
                                    </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="form_patron.php" style="padding: 8px 14px;">Ankiety</a>
                                    </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="mydata.php" style="padding: 8px 14px;">Moje dane</a>
                                    </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../action/logout.php" style="padding: 8px 14px;">Wyloguj (<span id="time">15:00</span>)</a>
                  <?php
              }
              //Kierownik
              if ($user_type==3){
                  $account = "Kierownik praktyk";
                  ?>
                    <ul class="u-nav u-spacing-25 u-unstyled"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="main_manager.php" style="padding: 8px 14px;">Strona główna</a>
                        </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="users_manager.php" style="padding: 8px 14px;">Praktykanci</a>
                        </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="form_manager.php" style="padding: 8px 14px;">Ankiety</a>
                        </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="mydata.php" style="padding: 8px 14px;">Moje dane</a>
                        </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../action/logout.php" style="padding: 8px 14px;">Wyloguj (<span id="time">15:00</span>)</a>
						</li></ul>
                    </div>
                     <div class="u-custom-menu u-nav-container-collapse">
                        <div class="u-align-center u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                            <div class="u-inner-container-layout u-sidenav-overflow">
                                <div class="u-menu-close"></div>
                                    <ul class="u-nav u-spacing-25 u-unstyled"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="main_manager.php" style="padding: 8px 14px;">Strona główna</a>
                                        </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="users_manager.php" style="padding: 8px 14px;">Praktykanci</a>
                                        </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="form_manager.php" style="padding: 8px 14px;">Ankiety</a>
                                        </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="mydata.php" style="padding: 8px 14px;">Moje dane</a>
                                        </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../action/logout.php" style="padding: 8px 14px;">Wyloguj (<span id="time">15:00</span>)</a>
                  <?php
              }
              //Administrator
              if ($user_type==4){
                  $account = "Administrator";
                  ?>
                  <ul class="u-nav u-spacing-25 u-unstyled"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="main_admin.php" style="padding: 8px 14px;">Strona główna</a>
                    </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="users_admin.php" style="padding: 8px 14px;">Użytkownicy</a>
                    </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="form_admin.php" style="padding: 8px 14px;">Ankiety</a>
                    </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="company_admin.php" style="padding: 8px 14px;">Firmy</a>
                    </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="intership_admin.php" style="padding: 8px 14px;">Praktyki</a>
                    </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="mydata.php" style="padding: 8px 14px;">Moje dane</a>
                    </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../action/logout.php" style="padding: 8px 14px;">Wyloguj (<span id="time">15:00</span>)</a>
					</li></ul>
					</div>
                    <div class="u-custom-menu u-nav-container-collapse">
                        <div class="u-align-center u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                            <div class="u-inner-container-layout u-sidenav-overflow">
                                <div class="u-menu-close"></div>
                                    <ul class="u-nav u-spacing-25 u-unstyled"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="main_admin.php" style="padding: 8px 14px;">Strona główna</a>
                                        </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="users_admin.php" style="padding: 8px 14px;">Użytkownicy</a>
                                        </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="form_admin.php" style="padding: 8px 14px;">Ankiety</a>
                                        </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="company_admin.php" style="padding: 8px 14px;">Firmy</a>
                                        </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="intership_admin.php" style="padding: 8px 14px;">Praktyki</a>
                                        </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="mydata.php" style="padding: 8px 14px;">Moje dane</a>
                                        </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../action/logout.php" style="padding: 8px 14px;">Wyloguj (<span id="time">15:00</span>)</a>
              <?php
              }
              ?>
				</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div>
	</header>
	<img src="../images/header.jpg" width="100%" height="" style="margin-bottom: 20px">