<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <div class="lege__ruimte">

    </div>
    <div class="kkrgroteborder">

    <ul>
  <li class="nav__a--border"><a href="paniek.php">paniek</a></li>
  <li class="nav__a--border"><a href="index.php">inloggen</a></li>
  <li class="nav__a--border"><a href="javascript:history.go(-1)">terug</a></li>
</ul>
  <hr>
    <h2> </h2>

    <form action="/action_page.php" method="post">
      <div class="border__login">



      <div class="container">
        <div class="container__login--code">
        <label for="uname"><b><center>Code</center></b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>
      </div>
      <div class="container__login--password">
        <label for="psw"><b><center>Password</center></b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
      </div>
      <div class="container__login--login">
        <button type="submit">inloggen</button>
      </div>
  </div>
  </div>

<div class="container__forgot-password">
    <span class="psw"><a href="#">Password vergeten? </a></span>
  </div>

<div class="container__regristreren">
  <span class="rgs"><a href="#">Regristreer</a></span>
</div>




  </form>
</div>
</body>
</html>
