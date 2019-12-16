<article id="main-col">
	<ul id="services">
		<div class="dark">
			<?php $subLink=''.$_SERVER['PHP_SELF']; ?>
			<?php if($subLink == '/phpsandbox/JewelBling/DISCOUNTS.php'): ?>
				<h1>DISCOUNTS</h1>
			<?php elseif($subLink == '/phpsandbox/JewelBling/UNIQUES.php'):?>
				<h1>UNIQUES</h1>
			<?php elseif($subLink == '/phpsandbox/JewelBling/RINGS.php'):?>
				<h1>RINGS</h1>
			<?php elseif($subLink == '/phpsandbox/JewelBling/EARRINGS.php'):?>
				<h1>EARRINGS</h1>
			<?php elseif($subLink == '/phpsandbox/JewelBling/CHAINS.php'):?>
				<h1>CHAINS</h1>
			<?php elseif($subLink == '/phpsandbox/JewelBling/BRACELETS.php'):?>
				<h1>BRACELETS</h1>
			<?php elseif($subLink == '/phpsandbox/JewelBling/NECKLACES.php'):?>
				<h1>NECKLACES</h1>
			<?php else: ?>
				<h1> Unknown Category </h1>
			<?php endif ?>
		</div>
		
		<?php
		function calcDiscountPercentage($orig, $curr){
			$res = $curr / $orig;
			$res2 = 1 - $res;
			if($res2 > 0 AND $res2 < 1){
				$res2 = round($res2,3)*100;
				return $res2."% Discount";
			}
			else{
				return "";
			}
		}
		?>
		
		<?php foreach($items as $item): ?>
			<li>
				<?php echo "<img src='img/localDB/".$item['picture']."' >"; ?>
				<h2><?php echo calcDiscountPercentage($item['price_original'],
				$item['price_current']); ?></h2>
				<h3><?php echo $item['item_name']; ?></h3>
				<p><?php echo $item['item_description']; ?></p>
				<p>Current price: 
				<?php echo $item['price_current']; ?>
				</p>
				<p>Original price: 
				<?php echo $item['price_original']; ?>
				</p>
			</li>
		<?php endforeach; ?>
	</ul>
</article>