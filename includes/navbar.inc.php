<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="" style="height: 100%;">
        <img src="img/Coat_of_arms_of_Kenya_(Official).svg.png" height="60" alt="">
        KBPA
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <?php if (isset($_SESSION['user'])) { ?>
			<li class="nav-item">
			<a class="nav-link" href="<?php echo BASE_URL . 'admin/applications.php' ?>"> <?php echo $_SESSION['user']['name'] ?></a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="logout.php">Logout</a>
			</li>
			<?php }else{?>
				<li class="nav-item">
			<a class="nav-link" href="login_sign_up.php">Sign Up/Login</a>
			</li> <?php } ?>

        </ul>
      </div>
    </nav>