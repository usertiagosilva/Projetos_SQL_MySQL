<!-- HEADER -->
<?php
  include_once("templates/header.php");
?>
<!-- HOME -->
  <main>
    <div id="title-container">
      <h1>Blog Tech </h1>
      <p>O seu blog de programação</p>
    </div>
    <div id="posts-container">
      <!-- LOOP DE CADA POST-->
      <?php foreach($posts as $post): ?>
        <div class="post-box">
          <!-- IMAGEM DOS POST -->
          <img src="<?= $BASE_URL ?>/img/<?= $post['img'] ?>" alt="<?= $post['title'] ?>">
          <!-- TITULOS DOS POST -->
          <h2 class="post-title">
            <a href="<?= $BASE_URL ?>post.php?id=<?= $post['id'] ?>"><?= $post['title'] ?></a>
          </h2>
          <!-- DESCRIÇÃO DOS POST-->
          <p class="post-description"><?= $post['description'] ?></p>
          <div class="tags-container">
            <!-- ACESSO AS TAGS -->
            <?php foreach($post['tags'] as $tag): ?>
              <a href="#"><?= $tag ?></a>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </main>
 
<!-- FOOTER -->
<?php
  include_once("templates/footer.php")
?>