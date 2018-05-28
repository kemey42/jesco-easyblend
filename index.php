<?php require_once 'header.php'; ?>

<!--body goes here. End body tag is in footer-->
<body>

<div class="container-fluid">
<!--container goes here. End container tag is in footer-->
    
	<div class="row d-flex d-md-block flex-nowrap wrapper">
	<!--wrapper goes here. End wrapper tag is in footer-->
        
		<!--sidebar-->
		<?php include 'navi.php';?>
		<!--end sidebar-->
        
		<!--main content-->
		<main class="col-md-10 float-left col px-5 pl-md-2 pt-2 main">
		<!--main content goes here. End main tag is in footer-->
			<div class="row">
				<div class="col">
				<button type="button" class="btn btn-outline-primary" data-target="#sidebar" data-toggle="collapse">
				<span class="oi oi-menu icon-menu" title="menu" aria-hidden="true"></span>
				</button>
				</div>
				<div class="float-right">
				<a href="index.php"><img src="res/img/jesco-logo.jpg"  alt="Jesco"></a>
				</div>
			</div>
			<hr>
            <?php require_once 'connect.php';?>

			<div id="appmaincontent" class="container enable-scroll">
			<?php
			  if (isset($_GET['create'])) {
				include_once 'screen/createProgram.content.php';
			  } elseif (isset($_GET['exists'])) {
				include_once 'screen/existingProgram.content.php';
			  } elseif (isset($_GET['run'])) {
				include_once 'screen/run.content.php';
			  } elseif (isset($_GET['setting'])) {
				include_once 'screen/setting.content.php';
			  } elseif (isset($_GET['log'])) {
				include_once 'screen/log.content.php';
			  } else {
				include_once 'screen/main.content.php'; 
			  }
			?>
			</div>
        
<?php require_once 'footer.php'; ?>