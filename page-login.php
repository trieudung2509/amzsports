<?php include "templates/head.php"; ?>
<body>
<header class="main-header">
	<div class="container">
		<?php
				include "templates/header-login.php";
		?>
  </div>
</header>
  <div class="login-body">
    <div class="block-login-left">
      <h3 class="title-item-left">Become a AMZSport member and you will get</h3>
      <div class="line-green"></div>
      <ul>
        <li class="content-item-left">Early updated Top Football Leagues and Tournament </li>
        <li class="content-item-left">Full HD 1080p high quality football streaming videos</li>
        <li class="content-item-left">Diverse supported devices - TV, laptops, smartphones, and other electronic devices</li>
        <li class="content-item-left">English commentary</li>
      </ul>
    </div>
    <div class="block-login-right">
      <div class="content-login-right">
        <h3 class="title-item-right">Sign up</h3>
        <form action="">
          <div class="box-input">
            <label for="email" class="label-input">Your Email</label><br />
            <input type="email" id="email" name="email" placeholder="Enter your email" class="input-login" />
          </div>
          <div class="box-input">
            <label for="password" class="label-input">Password</label><br />
            <input type="password" id="password" name="password" placeholder="Enter your password" class="input-login" />
          </div>
          <div class="box-input">
            <label for="confirmPassword" class="label-input">Confirm Password</label><br />
            <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Enter your password" class="input-login" />
          </div>
          <button type="submit" class="btn-submit active">Sign Up</button>
          <button type="submit" class="btn-submit">Log in</button>
        </form>
      </div>
    </div>
  </div>
  <?php include "templates/footer.php"; ?>
</body>

</html>