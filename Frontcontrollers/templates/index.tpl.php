<?php session_start(); 
include("./logicals/Connection.php");
$str = "Logged-in: ";

//echo $_SESSION['user_id'] ;
//echo $_SESSION['username'] ;?>
<?php if(file_exists('./logicals/'.$find['file'].'.php')) { include("./logicals/{$find['file']}.php"); } ?>


<?php if(file_exists('./logicals/'.$find['file'].'.php')) { include("./logicals/{$find['file']}.php"); } ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?= $pagetitle['title'] . ( (isset($pagetitle['motto'])) ? ('|' . $pagetitle['motto']) : '' ) ?></title>
	
	<link rel="stylesheet" href="./styles/gyakorlo_css.css" type="text/css">
	<link rel="stylesheet" href="./styles/gallerycss.css" type="text/css">
	<script type="text/javascript" src="./styles/list.js"></script>
	<script type="text/javascript" src="./styles/subpages.js"></script>
	
	
	<?php if(file_exists('./styles/'.$find['file'].'.css')) { ?><link rel="stylesheet" href="./styles/<?= $find['file']?>.css" type="text/css"><?php } ?>
</head>
<body>


        <ul class="navbar">
			<?php foreach ($pages as $url => $page) { ?>
				<?php if(! isset($_SESSION['user']) && $page['menun'][0] || isset($_SESSION['user']) && $page['menun'][1]) { ?>
					<li<?= (($page == $find) ? ' class="active"' : '') ?>>
					<a href="<?= ($url == '/') ? '.' : ('?page=' . $url) ?>">
					<?= $page['text'] ?></a>
					</li>
					
				<?php } ?>
			<?php }
			?><li style="float:right;" ><a style=" display: block; color: Black; 	background-color:#578CAF; text-align: center; padding: 15px 100px; text-decoration: none; font-weight:bold; font-style:italic; transform: scale(1.0);"><?php echo $str . $_SESSION['first_name'] . " " .  $_SESSION['last_name'] . " (" . $_SESSION['username'] . ")"; ?></a></li> 

		</ul>  
            <?php include("./templates/pages/{$find['file']}.tpl.php"); ?>

   
	
</body>
</html>
