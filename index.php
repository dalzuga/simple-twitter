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
      <div data-name="welcome-text">Hello, there!</div>
      <div data-name="profile">Log in</div>
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
      <div data-name="loginrot13">Your rot13 login is:</div>
    </header>
    <header>
      <div data-name="loginlength">The length of your login is:</div>
    </header>

    <article>

      <!-- (div.post>h2>{User Post}^lorem*2)*4 -->
      <div class="post">
        <h2>User Post</h2>
        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam corporis enim aliquam facere possimus in deserunt voluptatum, iste, iusto recusandae molestiae magni fugiat voluptatibus expedita omnis rerum? Facilis, amet, dolore.</div>
        <div>Omnis commodi similique blanditiis temporibus, quis laudantium repellendus pariatur! Nesciunt facere, doloribus placeat recusandae quia laborum, obcaecati inventore ut quos reiciendis minus nam sit asperiores quam architecto dolorem eligendi illum.</div>
      </div>
      <div class="post">
        <h2>User Post</h2>
        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima delectus quasi iusto in, dicta fuga odit, eaque voluptas nemo, est ipsam! Itaque in pariatur aut cum dolorum delectus ex magnam.</div>
        <div>Excepturi at quasi autem error eos qui quaerat in sequi, laborum facere consequatur iusto vel nam earum nobis voluptate repellendus dolorem? Corrupti itaque commodi suscipit, magni hic, eveniet illum fugiat.</div>
      </div>
      <div class="post">
        <h2>User Post</h2>
        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam veritatis cum enim ut numquam ipsum in cupiditate at fugiat. Ad blanditiis dolor, iusto animi libero sint! Error labore blanditiis quo.</div>
        <div>Accusamus itaque vitae ratione, nemo perferendis distinctio alias natus tempora nisi exercitationem. Quod, fugit, voluptates nihil magnam reiciendis enim! Ad velit eligendi vel, perspiciatis rem perferendis quidem eos itaque optio!</div>
      </div>
      <div class="post">
        <h2>User Post</h2>
        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit mollitia omnis quidem animi dolore magnam alias aspernatur aut, sed, accusamus nostrum, porro optio amet rem. Repellat excepturi placeat eligendi corporis.</div>
        <div>Quis sapiente eaque voluptates nulla ratione facere officiis, ad, eligendi vel quae consequatur quia dolorum, voluptate odit laudantium blanditiis voluptatibus esse necessitatibus alias modi. Commodi, magnam, temporibus. Dolorem, porro, voluptatem.</div>
      </div>

    </article>
    <aside>
      <!-- (div.user>h2>{About User}^lorem)*3 -->
      <div class="user">
        <h2>About User</h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi magni totam laudantium numquam accusantium delectus reprehenderit nesciunt at ab id! Repudiandae quisquam vel molestiae in, architecto error enim vero cum.
      </div>
      <div class="user">
        <h2>About User</h2>Officia, culpa vitae. Magnam reiciendis dolorem doloribus ab necessitatibus. Labore assumenda excepturi aliquid. Architecto itaque, rem odio, debitis dolorem sit minima nihil veritatis ratione, ipsa officia porro natus quibusdam alias.
      </div>
      <div class="user">
        <h2>About User</h2>Voluptatum rerum maxime aut laudantium deleniti quo necessitatibus, ullam ea obcaecati ipsam, ipsum doloribus hic, voluptatem! Ab necessitatibus voluptates nesciunt reprehenderit ex, totam, ullam quidem itaque, cum architecto nihil nulla.
      </div>
    </aside>

    <footer>
      <div>Links</div>
    </footer>

    <div class="sticky">Currently in BETA</div>
  </body>
</html>