<header>
		<div class="container">                                 <!-- keep site content padded from borders -->
			<div id="branding">                                 <!-- logo -->
				<h1><span class="highlight">Jewel</span>Bling</h1> <!-- span is an inline element, colorchange, in css -->
			</div>
			<nav> 												<!-- navigation bar -->
				<ul>
					<?php $subLink=''.$_SERVER['PHP_SELF']; ?>
					<?php if($subLink == '/phpsandbox/JewelBling/index.php'):?>
						<li class="current"><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="categories.php">Categories</a></li>
						<li><a href="pledge.php">Pawn Item</a></li>
					<?php elseif($subLink == '/phpsandbox/JewelBling/about.php'):?>
						<li><a href="index.php">Home</a></li>
						<li class="current"><a href="about.php">About</a></li>
						<li><a href="categories.php">Categories</a></li>
						<li><a href="pledge.php">Pawn Item</a></li>
					<?php elseif($subLink == '/phpsandbox/JewelBling/categories.php'):?>
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li class="current"><a href="categories.php">Categories</a></li>
						<li><a href="pledge.php">Pawn Item</a></li>
					<?php elseif($subLink == '/phpsandbox/JewelBling/pledge.php'):?>
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="categories.php">Categories</a></li>
						<li class="current"><a href="pledge.php">Pawn Item</a></li>
					<?php else: ?>
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="categories.php">Categories</a></li>
						<li><a href="pledge.php">Pawn Item</a></li>
					<?php endif ?>
				</ul>
			</nav>
		</div>
</header>