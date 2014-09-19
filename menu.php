<html>
<head>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="menu.js"></script>
</head>

<body>

    <?php
	header('Content-Type: application/json');
    ?>

    <div id="dump"></div>

    <script>
	// console.log(menu);
	$("#dump").html(JSON.stringify(menu));
	// $("#dump").html(JSON.stringify(menu, null, "\t"));
	// $("#dump").append($.dump(menu));
    </script>

</body>
</html>


