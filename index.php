<?php
  $users = [
    array("id" => 1, "login" => "valerie", "password" => "password1", "full_name" => "Valerie"),
    array("id" => 2, "login" => "daniel", "password" => "password2", "full_name" => "Daniel"),
    array("id" => 3, "login" => "vzcbffvoyr", "password" => "password3", "full_name" => "User 3"),
  ];

  function userExists($login, $password, $users) {
    foreach ($users as &$elem) {
      if ($elem[login]==$login && $elem[password]==$password) {
          $GLOBALS['userfull'] = $elem[full_name];
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
    <script src="post_a_status.js"></script>
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
          if (isset($userfull)) {
            echo $userfull;
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

    <header>
      <a href="#" id="1">Post a status</a>
    </header>

    <div data-name="makepost" id="2">
      <form class="postform" method="post">
        <textarea name="posttext" cols="30" rows="10" placeholder="Enter text here..."></textarea>
        <button type="reset" name="button">Post</button>
        <input type="checkbox" name="name"><label>Include Location</label>
      </form>
    </div>

    <article>
      <!-- (div.post>h2>{User Post}^lorem*2^a[#][id=$@3]{Reply})*4 -->
      <div class="post">
        <h2>User Post</h2>
        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ullam quasi suscipit, numquam earum eveniet, magnam cupiditate nesciunt rem natus optio veritatis culpa reiciendis dolor voluptatibus aspernatur amet neque deleniti.</div>
        <div>Natus cumque consequuntur quae ad eum aliquid iste nisi, dicta dolore veritatis nostrum vitae, incidunt adipisci. Quia, quisquam accusamus error quibusdam. Amet odit, hic in facere ex asperiores incidunt, nisi?</div>
      </div>
      <a href="#" id="3">Reply</a>
      <div class="post">
        <h2>User Post</h2>
        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita numquam quo excepturi vero fugit totam aspernatur maxime blanditiis quisquam eum deserunt quos dignissimos necessitatibus quam vel, eaque distinctio ipsum officiis!</div>
        <div>Error culpa nobis architecto qui dicta eum cumque id reiciendis sit, numquam quod necessitatibus laudantium obcaecati neque. Itaque sunt officia, aliquid inventore, ab, a dolore, velit sit rerum ipsam molestiae!</div>
      </div>
      <a href="#" id="4">Reply</a>
      <div class="post">
        <h2>User Post</h2>
        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A cupiditate facilis libero sequi enim vero sint eum quibusdam, cumque iste voluptas voluptate aut beatae molestiae. Vitae, autem nostrum exercitationem impedit!</div>
        <div>Unde ipsa fugiat quo sint qui molestiae incidunt vel similique dolor, optio reprehenderit, totam quod aliquam atque deserunt non, eligendi tenetur tempora! Autem saepe cum aperiam voluptatum veniam nisi, tempore!</div>
      </div>
      <a href="#" id="5">Reply</a>
      <div class="post">
        <h2>User Post</h2>
        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis veritatis ipsam natus iure quod velit earum recusandae, error quia autem neque fugiat. Fugit sint repudiandae dolor, porro voluptatum, a assumenda!</div>
        <div>Doloribus nihil qui fuga quisquam ab nam itaque repellat, possimus commodi autem voluptatibus eos expedita quas? Doloribus modi reprehenderit ex odio, possimus nulla pariatur officiis commodi delectus, officia quo. Error?</div>
      </div>
      <a href="#" id="6">Reply</a>
    </article>

    <aside>
      <!-- (div.user>h2>{About User}^div>lorem)*3 -->
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
