<section class="fnavbar">
		<div class="navbar-fixed">
		<nav>
		    <div class="nav-wrapper">
		      <a href="#" class="brand-logo">GoPrekin</a>
		      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
		      <ul class="right hide-on-med-and-down">
		        <li><a href="/GoPrekin" class="hvr-grow">Utama</a></li>
		        <li><a href="/GoPrekin/about-goprekin.php" class="hvr-grow">Tentang Kami</a></li>
		        <li><a href="food-categories.php" class="hvr-grow">Kategori</a></li>
		        <li><a href="foods.php" class="hvr-grow">Makanan</a></li>
		        <li><a href="#" class="hvr-grow" onclick="toggleModal('Informasi Kontak', 'Anda bisa menghubungi kami dengan memanggil nomor telepon (WA) +62 87-786-308-759. Silahkan cek seksi footer kami di bawah laman ini untuk informasi lebih lanjut.');">Kontak</a></li>
		        
		        <?php

		        	if (isset($_SESSION['user'])) {
		        		echo '<li><a href="#" class="hvr-grow">Halo, '.$_SESSION['user'].'</a></li>
		        		<li><a href="logout.php" class="hvr-grow">Logout</a></li>';
		        	} else {
		        		echo '<li><a href="#" class="hvr-grow modal-trigger" data-target="modal1">Masuk</a></li>
		        		<li><a href="#" class="hvr-grow modal-trigger" data-target="modal2">Daftar</a></li>';
		        	}

		        ?>
		        
		      </ul>
		    </div>
		  </nav>
		</div>

		  <ul class="sidenav" id="mobile-demo">
		    <li><a href="/GoPrekin">Utama</a></li>
	        <li><a href="/GoPrekin/about-goprekin.php">Tentang Kami</a></li>
	        <li><a href="food-categories.php">Kategori</a></li>
	        <li><a href="foods.php">Makanan</a></li>
	        <li><a href="#" onclick="toggleModal('Informasi Kontak', 'Anda bisa menghubungi kami dengan memanggil nomor telepon (WA) +62 87-786-308-759. Silahkan cek seksi footer kami di bawah laman ini untuk informasi lebih lanjut.');">Kontak</a></li>

	        <?php

		        	if (isset($_SESSION['user'])) {
		        		echo '<li><a href="#">Halo, '.$_SESSION['user'].'</a></li>
		        		<li><a href="logout.php">Logout</a></li>';
		        	} else {
		        		echo '<li><a href="#" class="modal-trigger" data-target="modal1">Masuk</a></li>
		        		<li><a href="#" class="modal-trigger" data-target="modal2">Daftar</a></li>';
		        	}

		        ?>
		  </ul>
	</section>