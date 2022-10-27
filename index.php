<?php
	session_start();
	if (isset($_SESSION['session_active'])){
		$user_type = $_SESSION['user_type'];
		if ($user_type==1){
		  header('location: view/main.php');
		}
		if ($user_type==2){
		  header('location: view/main_patron.php');
		}
		if ($user_type==3){
		  header('location: view/main_manager.php');
		}
		if ($user_type==4){
		  header('location: view/main_admin.php');
		}
	}
	?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Sample Headline">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Strona główna</title>
    <link rel="stylesheet" href="css/main.css" media="screen">
	<link rel="stylesheet" href="css/main_2.css" media="screen">
    <script class="u-script" type="text/javascript" src="js/jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/main.js" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
	
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.8/dist/sweetalert2.all.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">

    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/g224495cbe8d71950f452f1e5b1c8158f2abf36caad0dc8534d2de05308a9f9c8a9bef4520f8507fad84051ed694b550a02db8e438dfd1e951d797062e042bd6c_1280.png"}
	</script>
    <meta name="theme-color" content="#3a0e63">
    <meta property="og:title" content="Strona główna">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body"><header class="u-clearfix u-header u-header" id="sec-8ded"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="index.php" class="u-image u-logo u-image-1" src="" data-image-width="1280" data-image-height="640">
          <img src="images/icon.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-align-left u-menu u-menu-dropdown u-nav-spacing-25 u-offcanvas u-menu-1" data-responsive-from="XS">
          <div class="menu-collapse">
            <a class="u-button-style u-nav-link" href="#" style="padding: 4px 0px; font-size: calc(1em + 8px);">
              <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 302 302" style="undefined"><use xlink:href="#svg-7b92"></use></svg>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-7b92" x="0px" y="0px" viewBox="0 0 302 302" style="enable-background:new 0 0 302 302;" xml:space="preserve" class="u-svg-content"><g><rect y="36" width="302" height="30"></rect><rect y="236" width="302" height="30"></rect><rect y="136" width="302" height="30"></rect></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-25 u-unstyled"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php" style="padding: 8px 14px;">Strona główna</a>
			</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="view/login.php" style="padding: 8px 14px;">Logowanie</a>
			<!--</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="view/register.php" style="padding: 8px 14px;">Rejestracja</a>-->
            </li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-align-center u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
            <ul class="u-nav u-spacing-25 u-unstyled"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php" style="padding: 8px 14px;">Strona główna</a>
			</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="view/login.php" style="padding: 8px 14px;">Logowanie</a>
			<!--</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="view/register.php" style="padding: 8px 14px;">Rejestracja</a>-->
			</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>

  <img src="images/header.jpg" width="100%" height="" style="margin-bottom: 20px">
    <section class="u-clearfix u-section-3" id="carousel_f6ad">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-20 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-size-30 u-size-60-md">
                <div class="u-layout-col">
                  <div class="u-align-center u-container-style u-layout-cell u-left-cell u-size-60 u-layout-cell-1">
                    <div class="u-container-layout u-container-layout-1">
                      <img class="u-expanded-width u-image u-image-1" src="images/9.png" data-image-width="717" data-image-height="500">
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-size-30 u-size-60-md">
                <div class="u-layout-col">
                  <div class="u-size-40">
                    <div class="u-layout-row">
                      <div class="u-container-style u-layout-cell u-right-cell u-size-60 u-layout-cell-2">
                        <div class="u-container-layout u-container-layout-2">
                          <h4 class="u-text u-text-1">Twoje praktyki w jednym miejscu</h4>
                          <p class="u-align-justify u-text u-text-palette-2-base u-text-2">Niniejsza aplikacja pomoże Ci łatwo zarządzać cały procesem praktyk. <br>
                            <br>Dzięki temu, że wszystkie informacje są w jednym miejscu, dostęp do nich powinien być łatwiejszy niż kiedykolwiek.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="u-size-20">
                    <div class="u-layout-row">
                      <div class="u-container-style u-hidden-md u-hidden-sm u-hidden-xs u-layout-cell u-size-30 u-layout-cell-3">
                        <div class="u-container-layout u-container-layout-3"></div>
                      </div>
                      <div class="u-align-left-md u-align-left-sm u-align-left-xs u-container-style u-layout-cell u-palette-2-base u-radius-50 u-right-cell u-shape-round u-size-30 u-layout-cell-4">
                        <div class="u-container-layout u-container-layout-4">
                          <ul class="u-custom-list u-text u-text-3">
                            <li style="">
                              <div class="u-list-icon u-text-white">
                                <svg class="u-svg-content" viewBox="0 0 512 512" id="svg-ac83"><path d="m433.1 67.1-231.8 231.9c-6.2 6.2-16.4 6.2-22.6 0l-99.8-99.8-78.9 78.8 150.5 150.5c10.5 10.5 24.6 16.3 39.4 16.3 14.8 0 29-5.9 39.4-16.3l282.7-282.5z" fill="currentColor"></path></svg>
                              </div>Prowadzenie dzienniczka
                            </li>
                            <li style="">
                              <div class="u-list-icon u-text-white">
                                <svg class="u-svg-content" viewBox="0 0 512 512" id="svg-ac83"><path d="m433.1 67.1-231.8 231.9c-6.2 6.2-16.4 6.2-22.6 0l-99.8-99.8-78.9 78.8 150.5 150.5c10.5 10.5 24.6 16.3 39.4 16.3 14.8 0 29-5.9 39.4-16.3l282.7-282.5z" fill="currentColor"></path></svg>
                              </div>Informacje o praktykach
                            </li>
                            <li style="">
                              <div class="u-list-icon u-text-white">
                                <svg class="u-svg-content" viewBox="0 0 512 512" id="svg-ac83"><path d="m433.1 67.1-231.8 231.9c-6.2 6.2-16.4 6.2-22.6 0l-99.8-99.8-78.9 78.8 150.5 150.5c10.5 10.5 24.6 16.3 39.4 16.3 14.8 0 29-5.9 39.4-16.3l282.7-282.5z" fill="currentColor"></path></svg>
                              </div>Wypełnianie ankiet
                            </li>
                            <li style="">
                              <div class="u-list-icon u-text-white">
                                <svg class="u-svg-content" viewBox="0 0 512 512" id="svg-ac83"><path d="m433.1 67.1-231.8 231.9c-6.2 6.2-16.4 6.2-22.6 0l-99.8-99.8-78.9 78.8 150.5 150.5c10.5 10.5 24.6 16.3 39.4 16.3 14.8 0 29-5.9 39.4-16.3l282.7-282.5z" fill="currentColor"></path></svg>
                              </div>Intuicyjny interfejs
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  <section class="u-align-center u-clearfix u-white u-section-2" id="carousel_6f99">
    <div class="u-expanded-width u-gradient u-shape u-shape-rectangle u-shape-1"></div>
    <h1 class="u-custom-font u-heading-font u-text u-text-default u-text-1">Opiekunowie praktyk</h1>
    <div class="u-list u-list-1">
      <div class="u-repeater u-repeater-1">
        <div class="u-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white u-list-item-1">
          <div class="u-container-layout u-similar-container u-container-layout-1">
            <div class="u-border-4 u-border-palette-2-light-2 u-image u-image-circle u-preserve-proportions u-image-1" alt="" data-image-width="900" data-image-height="600"></div>
            <h4 class="u-text u-text-default u-text-2">Alicja Nowak</h4>
            <p class="u-text u-text-default u-text-3">Dziekanat</p>
          </div>
        </div>
        <div class="u-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white u-list-item-2">
          <div class="u-container-layout u-similar-container u-container-layout-2">
            <div class="u-border-4 u-border-palette-2-light-2 u-image u-image-circle u-preserve-proportions u-image-2" alt="" data-image-width="626" data-image-height="417"></div>
            <h4 class="u-text u-text-default u-text-4">Dawid Mosir</h4>
            <p class="u-text u-text-default u-text-5">Opiekiun praktyk</p>
          </div>
        </div>
        <div class="u-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white u-list-item-3">
          <div class="u-container-layout u-similar-container u-container-layout-3">
            <div class="u-border-4 u-border-palette-2-light-2 u-image u-image-circle u-preserve-proportions u-image-3" alt="" data-image-width="206" data-image-height="206"></div>
            <h4 class="u-text u-text-default u-text-6">Anna Kwiatek</h4>
            <p class="u-text u-text-default u-text-7">Administrator systemu</p>
          </div>
        </div>
        <div class="u-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white u-list-item-4">
          <div class="u-container-layout u-similar-container u-container-layout-4">
            <div class="u-border-4 u-border-palette-2-light-2 u-image u-image-circle u-preserve-proportions u-image-4" alt="" data-image-width="626" data-image-height="417"></div>
            <h4 class="u-text u-text-default u-text-8">Marta Makowaska</h4>
            <p class="u-text u-text-default u-text-9">Dziekanat</p>
          </div>
        </div>
      </div>
    </div>
  </section>

    <section class="u-align-center u-clearfix u-palette-5-dark-3 u-valign-bottom-lg u-valign-bottom-md u-valign-bottom-sm u-valign-bottom-xs u-section-4" id="carousel_f6e3">
      <div class="u-border-5 u-border-palette-4-base u-line u-line-horizontal u-line-1"></div>
      <div class="u-expanded-width u-grey-light-2 u-map u-map-1">
        <div class="embed-responsive">
          <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5127.597903253814!2d22.68123398790837!3d50.01512339433524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x34c3e02f77a47069!2sPa%C5%84stwowa%20Wy%C5%BCsza%20Szko%C5%82a%20Techniczno-Ekonomiczna!5e0!3m2!1spl!2spl!4v1649972055759!5m2!1spl!2spl" data-map="JTdCJTIycG9zaXRpb25UeXBlJTIyJTNBJTIybWFwLWFkZHJlc3MlMjIlMkMlMjJhZGRyZXNzJTIyJTNBJTIyV2Fyc2F3JTIyJTJDJTIyem9vbSUyMiUzQTEwJTJDJTIydHlwZUlkJTIyJTNBJTIycm9hZCUyMiUyQyUyMmxhbmclMjIlM0ElMjIlMjIlMkMlMjJhcGlLZXklMjIlM0ElMjIlMjIlN0Q="></iframe>
        </div>
      </div>
      <div class="u-clearfix u-gutter-0 u-layout-wrap u-layout-wrap-1">
        <div class="u-gutter-0 u-layout">
          <div class="u-layout-row">
            <div class="u-container-style u-layout-cell u-left-cell u-palette-5-light-3 u-size-20 u-layout-cell-1">
              <div class="u-container-layout u-valign-top u-container-layout-1"><span class="u-icon u-icon-circle u-palette-4-base u-spacing-20 u-text-body-alt-color u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xlink:href="#svg-9534"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-9534" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" class="u-svg-content"><g><g><path d="M256,0C156.748,0,76,80.748,76,180c0,33.534,9.289,66.26,26.869,94.652l142.885,230.257    c2.737,4.411,7.559,7.091,12.745,7.091c0.04,0,0.079,0,0.119,0c5.231-0.041,10.063-2.804,12.75-7.292L410.611,272.22    C427.221,244.428,436,212.539,436,180C436,80.748,355.252,0,256,0z M384.866,256.818L258.272,468.186l-129.905-209.34    C113.734,235.214,105.8,207.95,105.8,180c0-82.71,67.49-150.2,150.2-150.2S406.1,97.29,406.1,180    C406.1,207.121,398.689,233.688,384.866,256.818z"></path>
				</g></g><g><g><path d="M256,90c-49.626,0-90,40.374-90,90c0,49.309,39.717,90,90,90c50.903,0,90-41.233,90-90C346,130.374,305.626,90,256,90z     M256,240.2c-33.257,0-60.2-27.033-60.2-60.2c0-33.084,27.116-60.2,60.2-60.2s60.1,27.116,60.1,60.2    C316.1,212.683,289.784,240.2,256,240.2z"></path></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></span>
                <h5 class="u-align-center u-custom-font u-text u-text-palette-5-dark-2 u-text-3">Adres:</h5>
                <p class="u-align-center u-text u-text-4">Wyższa Wirtualna Szkoła w Jarosławiu<br>Czarnieckiego 16<br>37-500 Jarosław
                </p>
              </div>
            </div>
            <div class="u-container-style u-layout-cell u-palette-5-light-3 u-size-20 u-layout-cell-2">
              <div class="u-container-layout u-container-layout-2"><span class="u-icon u-icon-circle u-palette-4-base u-spacing-20 u-text-body-alt-color u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 479.058 479.058" style=""><use xlink:href="#svg-6af8"></use></svg><svg xmlns="http://www.w3.org/2000/svg" id="svg-6af8" enable-background="new 0 0 479.058 479.058" viewBox="0 0 479.058 479.058" class="u-svg-content"><path d="m434.146 59.882h-389.234c-24.766 0-44.912 20.146-44.912 44.912v269.47c0 24.766 20.146 44.912 44.912 44.912h389.234c24.766 0 44.912-20.146 44.912-44.912v-269.47c0-24.766-20.146-44.912-44.912-44.912zm0 29.941c2.034 0 3.969.422 5.738 1.159l-200.355 173.649-200.356-173.649c1.769-.736 3.704-1.159 5.738-1.159zm0 299.411h-389.234c-8.26 0-14.971-6.71-14.971-14.971v-251.648l199.778 173.141c2.822 2.441 6.316 3.655 9.81 3.655s6.988-1.213 9.81-3.655l199.778-173.141v251.649c-.001 8.26-6.711 14.97-14.971 14.97z"></path></svg></span>
                <h5 class="u-align-center u-custom-font u-text u-text-palette-5-dark-2 u-text-5">Email:</h5>
                <a href="mailto:kontakt@wirtualnaszkola.pl" class="u-border-active-none u-border-hover-none u-btn u-btn-rectangle u-button-style u-none u-text-hover-palette-2-base u-text-palette-5-dark-3 u-btn-1">kontakt@wirtualnaszkola.pl</a>
              </div>
            </div>
            <div class="u-container-style u-layout-cell u-palette-5-light-3 u-right-cell u-size-20 u-layout-cell-3">
              <div class="u-container-layout u-valign-top u-container-layout-3"><span class="u-icon u-icon-circle u-palette-4-base u-spacing-20 u-text-body-alt-color u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 384 384" style=""><use xlink:href="#svg-04b2"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-04b2" x="0px" y="0px" viewBox="0 0 384 384" style="enable-background:new 0 0 384 384;" xml:space="preserve" class="u-svg-content"><g><g><path d="M353.188,252.052c-23.51,0-46.594-3.677-68.469-10.906c-10.906-3.719-23.323-0.833-30.438,6.417l-43.177,32.594    c-50.073-26.729-80.917-57.563-107.281-107.26l31.635-42.052c8.219-8.208,11.167-20.198,7.635-31.448    c-7.26-21.99-10.948-45.063-10.948-68.583C132.146,13.823,118.323,0,101.333,0H30.812C13.823,0,0,13.823,0,30.812    C0,225.563,158.438,384,353.188,384c16.99,0,30.813-13.823,30.813-30.813v-70.323C384,265.875,370.177,252.052,353.188,252.052z     M362.667,353.188c0,5.229-4.25,9.479-9.479,9.479c-182.99,0-331.854-148.865-331.854-331.854c0-5.229,4.25-9.479,9.479-9.479    h70.521c5.229,0,9.479,4.25,9.479,9.479c0,25.802,4.052,51.125,11.979,75.115c1.104,3.542,0.208,7.208-3.375,10.938L82.75,165.427    c-2.458,3.26-2.844,7.625-1,11.26c29.927,58.823,66.292,95.188,125.531,125.542c3.604,1.885,8.021,1.49,11.292-0.979    l49.677-37.635c2.51-2.51,6.271-3.406,9.667-2.25c24.156,7.979,49.479,12.021,75.271,12.021c5.229,0,9.479,4.25,9.479,9.479    V353.188z"></path>
				</g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></span>
                <h5 class="u-align-center u-custom-font u-text u-text-palette-5-dark-2 u-text-6">Telefon</h5>
                <p class="u-align-center u-text u-text-7">+48 22 123 45 67<br>+48 123 456 789<br>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
	<?php
	if(isset($_GET["alert"])){
		if (htmlspecialchars($_GET["alert"] == 1))
		{
			echo '<script type="text/javascript">alert("Strona jest dostępna tylko dla zalogowanych użytkowników.");</script>';
		}elseif(htmlspecialchars($_GET["alert"] == 2)){
			echo '<script type="text/javascript">alert("Wylogowano.");</script>';
		}
	}
    ?>
  </body>
</html>