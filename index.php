<?php
  $users = [
    array("id" => 1, "login" => "valerie", "password" => "password1", "full_name" => "User 1"),
    array("id" => 2, "login" => "daniel", "password" => "password2", "full_name" => "User 2"),
    array("id" => 3, "login" => "vzcbffvoyr", "password" => "password3", "full_name" => "User 3"),
  ];

  function userExists($login, $password, $users) {
    foreach ($users as &$elem) {
      if ($elem[login]==$login && $elem[password]==$password) {
          return true;
        }
      }
    return false;
  }

  if (isset($_POST['login'])) {
    $msg1 =  "Your rot13 login is: " . str_rot13($_POST['login']);
    $msg2 = "Your login length is: " . strlen($_POST['login']);
    if ($_POST['login']!="") {
      $user = $_POST['login'];
    }
    $word = "out";
  }
  else {
    $word = " In";
  }
?>

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
    <header class="credentials">
      <?php
      if (userExists($_POST['login'], $_POST['password'], $users)) {
      }
      elseif (!isset($_POST['guest'])) {
        echo "Invalid Credentials";
      }
      ?>
    </header>
    <header class="profile">
      <div data-name="welcome-text">
        Hello,
        <?php
          if (isset($user)) {
            echo $user;
          }
          else {
            echo there;
          }
        ?>!
      </div>
      <div data-name="profile"><a href="loginform.php">
        Log<?php echo $word ?>
      </a></div>
      <div data-name="profile">Edit Profile</div>
    </header>
    <nav>
      <div class="item">Home</div>
      <div class="item">Status</div>
      <div class="item">Users</div>
      <div class="item">About</div>
      <div class="item">Contact</div>
    </nav>

    <header>
      <div data-name="loginrot13">
        <?php echo $msg1; ?>
      </div>
    </header>
    <header>
      <div data-name="loginlength">
        <?php echo $msg2; ?>
      </div>
    </header>

    <article>

      <!-- (div.post>h2>{User Post}^lorem*2)*4 -->
      <div class="post">
        <h2>User Post</h2>
        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas pariatur fugit ea dolorem dolore neque iure, eaque tempore. Quod laborum aut qui labore natus perspiciatis, ut expedita vero error dolores.</div>
        <div>Aut quo, reprehenderit, officia earum tempore non illo, soluta error ipsa aliquid hic vitae impedit natus repellendus! Iste alias, eum, neque earum voluptatum repellendus, aperiam at nemo eius optio voluptate.</div>
      </div>
      <div class="post">
        <h2>User Post</h2>
        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore nihil, reiciendis, nobis recusandae ut totam. Facere sint quo cumque laborum molestias voluptatibus alias obcaecati reiciendis excepturi inventore esse accusamus, soluta.</div>
        <div>Necessitatibus nulla placeat, molestias, expedita, voluptatem eligendi et sapiente earum quis aliquam soluta ipsum dolores explicabo rerum deserunt atque maxime. Labore officiis natus nihil quisquam perferendis ullam vero exercitationem est.</div>
      </div>
      <div class="post">
        <h2>User Post</h2>
        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque debitis voluptas, omnis facere hic facilis vero ipsam unde odio iure at explicabo delectus error distinctio suscipit, autem sint dolores laborum!</div>
        <div>Consequatur culpa doloremque maxime perferendis doloribus explicabo asperiores eum commodi, natus praesentium possimus magnam aut iste labore exercitationem obcaecati, reiciendis ad blanditiis reprehenderit, esse et vero omnis iure accusamus illum.</div>
      </div>
      <div class="post">
        <h2>User Post</h2>
        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, dolorum id fuga eaque veniam, ipsa molestiae quos error delectus modi, iusto fugit. Dignissimos iste, ducimus rem? Voluptatem, facere eius quos.</div>
        <div>Maiores itaque modi accusamus magni, aspernatur laudantium in, maxime vero ex inventore, quos. Debitis amet, quam fugiat. Labore voluptates repudiandae mollitia sed! Fugit numquam vero corporis nemo facilis esse deserunt.</div>
      </div>

    </article>
    <aside>
      <!-- (div.user>h2>{About User}^lorem)*3 -->
      <div class="user">
        <h2>About User</h2>
        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa modi asperiores libero ea harum, eligendi explicabo magnam earum placeat debitis dolorem aliquid adipisci ipsum architecto in iusto sequi accusamus molestias.</div>
      </div>
      <div class="user">
        <h2>About User</h2>
        <div>Quo asperiores, officia ut nobis tempore inventore dolor veniam nisi. Temporibus, iusto obcaecati voluptatibus ducimus voluptatem rerum quos, quam ab dolores, consectetur culpa. Odit quasi doloremque facere minima sed at.</div>
      </div>
      <div class="user">
        <h2>About User</h2>
        <div>Optio ipsa praesentium, beatae quaerat inventore, maxime tempore id perferendis porro recusandae neque officia magni blanditiis non quas veritatis! Dignissimos, eius amet numquam ea neque ullam incidunt nisi dolor assumenda.</div>
      </div>
    </aside>

    <footer>
      <div>Links</div>
    </footer>

    <div class="sticky">Currently in BETA</div>
  </body>
</html>
