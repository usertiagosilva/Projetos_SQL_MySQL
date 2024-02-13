<!-- HEADER -->
<?php

  include_once("templates/header.php");

  // CHECAR ACESSO ID NO GET
  if(isset($_GET['id'])) {

    // ACHAR POST
    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post) {

      // ACESSO AO POST QUE VEIO DO ID
      if($post['id'] == $postId) {
        $currentPost = $post;

      }

    }
  }

?>
<!-- POST ID -->
<main id="post-container">
  <div class="content-container">
    <!-- TITULO  -->
    <h1 id="main-title"><?= $currentPost['title'] ?></h1>
    <!-- DESCRIÇÃO -->
    <p id="post-description"><?= $currentPost['description'] ?></p>
    <div class="img-container">
      <!-- IMAGEM  -->
      <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
    </div>
    <p class="post-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, voluptate! Tempora dolor necessitatibus cum nesciunt dicta dolores illum, deleniti asperiores error numquam repudiandae quidem sint, impedit ea, ab ipsum esse.
    Veniam sed saepe dicta, laudantium minima ad quod nam dolore voluptates. Sed, consectetur at. Fugiat possimus architecto, molestiae nobis maiores aliquam doloribus repudiandae quibusdam molestias autem ducimus! Quod, aliquam quidem.
    Voluptatem, ratione facere officia commodi ab praesentium harum nisi architecto pariatur, odit dicta hic magnam, totam explicabo. Aliquid quos repudiandae, quo nostrum asperiores consequuntur voluptatem voluptas rerum odit illo deleniti!
    Minima suscipit omnis nostrum doloremque fugiat tempore sint, hic perferendis cum. Praesentium sed nemo inventore laboriosam molestias laborum, tempora id consectetur ad numquam fugit nam dignissimos, assumenda laudantium odio facilis.
    Fuga cum dolorem nobis sequi. Eos, dolore saepe incidunt nobis quam nulla vel error odit soluta temporibus numquam voluptas est deserunt esse iusto, aliquam ipsam, quaerat natus quas? Molestiae, a.
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, voluptate! Tempora dolor necessitatibus cum nesciunt dicta dolores illum, deleniti asperiores error numquam repudiandae quidem sint, impedit ea, ab ipsum esse.
    Veniam sed saepe dicta, laudantium minima ad quod nam dolore voluptates. Sed, consectetur at. Fugiat possimus architecto, molestiae nobis maiores aliquam doloribus repudiandae quibusdam molestias autem ducimus! Quod, aliquam quidem.
    Voluptatem, ratione facere officia commodi ab praesentium harum nisi architecto pariatur, odit dicta hic magnam, totam explicabo. Aliquid quos repudiandae, quo nostrum asperiores consequuntur voluptatem voluptas rerum odit illo deleniti!
    Minima suscipit omnis nostrum doloremque fugiat tempore sint, hic perferendis cum. Praesentium sed nemo inventore laboriosam molestias laborum, tempora id consectetur ad numquam fugit nam dignissimos, assumenda laudantium odio facilis.
    Fuga cum dolorem nobis sequi. Eos, dolore saepe incidunt nobis quam nulla vel error odit soluta temporibus numquam voluptas est deserunt esse iusto, aliquam ipsam, quaerat natus quas? Molestiae, a.
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, voluptate! Tempora dolor necessitatibus cum nesciunt dicta dolores illum, deleniti asperiores error numquam repudiandae quidem sint, impedit ea, ab ipsum esse.
    Veniam sed saepe dicta, laudantium minima ad quod nam dolore voluptates. Sed, consectetur at. Fugiat possimus architecto, molestiae nobis maiores aliquam doloribus repudiandae quibusdam molestias autem ducimus! Quod, aliquam quidem.
    Voluptatem, ratione facere officia commodi ab praesentium harum nisi architecto pariatur, odit dicta hic magnam, totam explicabo. Aliquid quos repudiandae, quo nostrum asperiores consequuntur voluptatem voluptas rerum odit illo deleniti!
    Minima suscipit omnis nostrum doloremque fugiat tempore sint, hic perferendis cum. Praesentium sed nemo inventore laboriosam molestias laborum, tempora id consectetur ad numquam fugit nam dignissimos, assumenda laudantium odio facilis.
    Fuga cum dolorem nobis sequi. Eos, dolore saepe incidunt nobis quam nulla vel error odit soluta temporibus numquam voluptas est deserunt esse iusto, aliquam ipsam, quaerat natus quas? Molestiae, a.</p>
  </div>

<!-- ASIDE NAV-->
<aside id="nav-container">
  <h3 id="tags-title">Tags</h3>
  <ul id="tag-list">
    <!-- LOOP TAGS -->
    <?php foreach($currentPost['tags'] as $tag): ?>
      <li><a href="#"><?= $tag ?></a></li>
    <?php endforeach; ?>
  </ul>
  <h3 id="categories-title">Categorias</h3>
  <ul id="categories-list">
     <!-- LOOP CATEGORIAS -->
    <?php foreach($categories as $category): ?>
      <li><a href="#"><?= $category ?></a></li>
    <?php endforeach; ?>
  </ul>  
</aside>
</main>


<!-- FOOTER -->
<?php

  include_once("templates/footer.php");
  
?>