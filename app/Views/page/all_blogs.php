
<section>
    <div class="container">
    <h1 class="display-4">All Blogs:</h1>
    <section class='blog-section'>
      <div class="container">
        <?php if ($table): ?>
            <?php $i = 1 + (6 * ($currentPage - 1)); ?>
            <?php foreach ($table as $p): ?>
              <div class="card mb-4">
                <img class="card-img-top" style="object-fit:cover; width:1078px; height:250px" src="upload/<?=$p['image']?>" alt="upload/CI4.png">
                <div class="card-body">
                  <h2 class="card-title"><?= $p['title']; ?></h2>
                  <p class="card-text"><?= $p['description']; ?></p>
                  <a href="/blog/<?= $p['id'] ?>" class="stretched-link">Continue reading &raquo;</a>
                </div>
                  <?php if (($p['tag']) == ("San Francisco"))
                         $color = "success";
                       else if(($p['tag']) == ("TeamCal"))
                         $color = "primary";
                       else if(($p['tag']) == ("CodeIgniter"))
                         $color = "danger";
                       else $color = "secondary";
                   ?>
                   <div class="card-footer text-<?= $color ?>">
                     <?= $p['tag']; ?>
                  </div>
              </div>
              <?php endforeach; ?>
          <?= $pager->links('post', 'pagination'); ?>
        <?php else: ?>
          <p class="text-center"> No posts have been found. Be the first one to post your blog!</p>
        <?php endif; ?>
      </div>
    </section>
    </div>
</section>
