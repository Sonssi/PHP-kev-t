<!DOCTYPE html>
<html lang="fi">
<head>
<title>PHP</title>
<link rel="stylesheet" href="harjoitus.css" type="text/css">
</head>
<body>
<h1>Hello World</h1>
<p>
    <?= $greeting; ?>
</p>
<ul>
    <?php
        echo  "<li>$names[0]</li>";
        echo  "<li>$names[1]</li>";
        echo  "<li>$names[2]</li>";
    ?>
</ul>
</body>
</html>  