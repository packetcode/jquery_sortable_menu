<!-- APP: JQuery Sortable Menu Demo
	WEbsite:packetcode.com
	Author: Krishna TEja G S
	Date: 26th April 2014
	-->
<html>
<head>
<title>Jquery Sortable Menu</title>
<meta name="description" content="jquery ui based sortable menu with php backend to save to database">
<meta name="keywords" content="jquery,packetcode,php,sortable">
<meta name="author" content="Krishna Teja G S">
<link rel="stylesheet" href="sortable.css">
<script src="http://code.jquery.com/jquery-2.1.1-rc2.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
<script src="sortable.js"></script>
</head>
<body>
<?php require_once 'sortable.php'; ?>

	<div class="container">
		<h1>Sortable Menu</h1>
		<p>This is a tutorial to demonstrate the jquery sortable function with some php backend to save and retrieve
			the menus from database</p>
		<ul>
			<?php foreach($items as $key => $value) echo "<li id='item_$value'>".$value."</li>"; ?>
		</ul>
		<button class="save">save</button>
	</div>
</body>
</html>