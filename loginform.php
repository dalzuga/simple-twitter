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
      <div data-name="loginlength"></div>
    </header>

    <header>
      <h4>Enter Username and Password</h4>
      <form class="form-login" action="index.php" method="post">
        <input type="text" name="login" value="vzcbffvoyr" placeholder="username" autofocus>
        <input type="password" name="password" placeholder="password">
        <button type="submit" name="submit">Login</button>
      </form>
      <form action="index.php">
        <button>Continue as guest</button>
      </form>
    </header>

  </body>
</html>
