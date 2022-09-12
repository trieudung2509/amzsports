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
        <div class="register-by-socical">
          <a href="#" target="#" class="icon-login login-facebook">
            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_1_15419)">
                <path d="M10.9999 21.5418C16.8219 21.5418 21.5416 16.8222 21.5416 11.0002C21.5416 5.17816 16.8219 0.458496 10.9999 0.458496C5.17792 0.458496 0.458252 5.17816 0.458252 11.0002C0.458252 16.8222 5.17792 21.5418 10.9999 21.5418Z" fill="#1877F2" />
                <path d="M15.1034 14.0472L15.5709 11.0002H12.6472V9.02292C12.6472 8.18921 13.0556 7.37659 14.365 7.37659H15.6942V4.78242C14.9138 4.65613 14.1252 4.58719 13.3347 4.57617C10.9266 4.57617 9.35269 6.03551 9.35269 8.6778V11.0002H6.67603V14.0472H9.35269V21.4135C10.4442 21.5846 11.5557 21.5846 12.6472 21.4135V14.0472H15.1034Z" fill="white" />
              </g>
              <defs>
                <clipPath id="clip0_1_15419">
                  <rect width="22" height="22" fill="white" />
                </clipPath>
              </defs>
            </svg>
          </a>
          <a href="#" class="icon-login login-google">
            <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M10.4981 4.79471C11.9557 4.79382 13.3665 5.3089 14.4807 6.24869L17.6015 3.27679C16.4035 2.17215 14.9645 1.36194 13.3988 0.910465C11.833 0.458986 10.1836 0.378663 8.58137 0.675873C6.97916 0.973082 5.46828 1.63964 4.16863 2.62265C2.86898 3.60566 1.81634 4.87807 1.09424 6.33888L4.61251 9.05072C5.02283 7.81342 5.81204 6.73658 6.86835 5.97274C7.92467 5.20889 9.19454 4.79676 10.4981 4.79471Z" fill="#D94F3D" />
              <path d="M4.29465 10.9981C4.29553 10.3361 4.40284 9.67861 4.61245 9.0507L1.09418 6.33887C0.374515 7.7866 0 9.38136 0 10.9981C0 12.6148 0.374515 14.2096 1.09418 15.6573L4.61245 12.9455C4.40284 12.3176 4.29553 11.6601 4.29465 10.9981Z" fill="#F2C042" />
              <path d="M20.5665 9.08936H10.5457V13.384H16.2241C15.8863 14.5983 15.1124 15.6453 14.0506 16.3244L17.5416 19.0157C19.7725 17.0135 21.0833 13.7576 20.5665 9.08936Z" fill="#5085ED" />
              <path d="M14.0493 16.3243C12.9704 16.9418 11.7404 17.2455 10.4981 17.2013C9.19454 17.1993 7.92467 16.7871 6.86835 16.0233C5.81204 15.2594 5.02283 14.1826 4.61251 12.9453L1.09424 15.6571C1.96326 17.4089 3.30381 18.8835 4.96513 19.915C6.62644 20.9465 8.54261 21.494 10.4981 21.496C13.0712 21.5659 15.5794 20.6821 17.5404 19.0146L14.0493 16.3243Z" fill="#57A75C" />
            </svg>
          </a>
        </div>
        <p class="login-description">Register a new membership</p>
      </div>
    </div>
  </div>
  <?php include "templates/footer.php"; ?>
</body>

</html>