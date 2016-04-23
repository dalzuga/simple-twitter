<!DOCTYPE html>

<html>
  <head>
    <title>Simple Twitter</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet">
    <link href="mediaquery.css" rel="stylesheet">
  </head>

  <body>
    <header class="profile">
      <div data-name="welcome-text">Hello, there! Please log in!</div>
    </header>

    <nav>
      Welcome to Simple Twitter!
    </nav>

    <header>
      <div data-name="loginrot13"></div>
    </header>

    <header>
      <div data-name="loginlength"></div>
    </header>

    <header>
      <h4>Log In</h4>
      <form class="form-login" action="index.php" method="post">
        <input type="text" name="login" placeholder="Username" autofocus>
        <input type="password" name="password" placeholder="Password">
        <div>
          <button type="submit" name="submit">Login</button>
          <button type="reset">Reset</button>
        </div>
      </form>
      <form class="form-guest" action="index.php" method="post">
        <button name="guest">Continue as Guest</button>
      </form>
    </header>

  </body>
</html>
