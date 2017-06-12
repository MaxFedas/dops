		<?php
			$logoText = 'bz';
			$pageName = basename($_SERVER['PHP_SELF'],'.php');
			switch ($pageName) {
				case 'services':
					$logoText = 'services';
					break;
				case 'process':
					$logoText = 'process';
					break;
				case 'industry':
					$logoText = 'industries';
					break;
				case 'values':
					$logoText = 'values';
					break;
				case 'reviews':
					$logoText = 'feedback';
					break;
				case 'contacts':
					$logoText = 'contacts';
					break;
			}
		?>
		
		<!-- Preloader -->
		<div class="preloader"></div>
		
		<!-- Header -->
		<header>
			<div class="wrap">
				<a href="#" class="menu-btn">
					<span class="lines">	
						<span class="line"></span>
						<span class="line"></span>
						<span class="line"></span>
					</span>
				</a>
				<div class="logo">
					<a href="index.html">dops <span>.</span> <?php echo $logoText; ?></a>
				</div>
				<div class="right">
					<a class="order-btn" href="order.html">order a call back</a>
					<a class="cases-btn" href="portfolio.php">
						<span class="circles">
							<span class="circle blue"></span>
							<span class="circle"></span>
							<span class="circle"></span>
							<span class="circle blue"></span>
						</span>
						<span class="lines">	
							<span class="line"></span>
							<span class="line"></span>
							<span class="line"></span>
						</span>
					</a>
				</div>
				<a class="close-btn">
					<span class="lines">	
						<span class="line"></span>
						<span class="line"></span>
						<span class="line"></span>
					</span>
				</a>
				<div class="clr"></div>
			</div>
		</header>