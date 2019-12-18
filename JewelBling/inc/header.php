<meta charset="utf-8">                                      <!-- utf-8 characters -->
<meta name="viewport" content="width=device-width">         <!-- responsive size -->
<meta name="description" content="Jewelry, at best prices! Right from your home!">
<meta name="keywords" content="web-design, html, css">
<meta name="author" content="Vlad Demidov">
<style>
@import url('https://fonts.googleapis.com/css?family=Raleway&display=swap');
</style>
<?php $subLink=''.$_SERVER['PHP_SELF']; ?>
<?php if($subLink == '/phpsandbox/JewelBling/index.php'): ?>
	<title>JewelBling | Home</title>
<?php elseif($subLink == '/phpsandbox/JewelBling/about.php'):?>
	<title>JewelBling | About</title>
<?php elseif($subLink == '/phpsandbox/JewelBling/categories.php'):?>
	<title>JewelBling | Categories</title>
<?php elseif($subLink == '/phpsandbox/JewelBling/pledge.php'):?>
	<title>JewelBling | Pledge Item</title>
<?php else: ?>
	<title>JewelBling</title>
<?php endif ?>
<link rel="stylesheet" href="./css/style.css">