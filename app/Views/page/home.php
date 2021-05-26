<section>
    <?php
      $session = \Config\Services:: session();
      ?>
      <?php if(isset($session->success)): ?>
        <div class ="alert alert-success text-center alert-dismissible fade show mb-0" role ="0">
          <?= $session->success ?>
        <button type ="button" class="close" data-dismiss="alert" aria -label="Close">
          <span aria-hidden="true"> &times; </span>
      </button>
      </div>
    <?php endif; ?>

<div class="container">
<div class="row">
  <h1 class="display-4">Top Blogs:</h1>
</div>
 <!-- Example row of columns -->
  <?php if ($news): ?>
    <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
      <div class="col-md-6 px-0">
        <h1 class="display-4 font-italic"><?= $news[0]['title'] ?></h1>
        <p class="lead my-3"><?= mb_substr($news[0]['description'], 0, 200) ?></p>
        <p class="lead mb-0"><a href="/blog/<?= $news[0]['id'] ?>" class="text-white font-weight-bold ">Continue reading &raquo;</a></p>
      </div>
    </div>
     <div class="row mb-2">
   <?php for ($i = 1; $i < 5; $i++): ?>
     <div class="col-md-6">
       <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
         <div class="col p-4 d-flex flex-column position-static">
           <?php if (($news[$i]['tag']) == ("San Francisco"))
                  $color = "success";
                else if(($news[$i]['tag']) == ("TeamCal"))
                  $color = "primary";
                else if(($news[$i]['tag']) == ("CodeIgniter"))
                  $color = "danger";
                else $color = "secondary";
            ?>
            <strong class="d-inline-block mb-2 text-<?= $color ?>"><?= $news[$i]['tag'] ?></strong>
           <h3 class="mb-0"><?= $news[$i]['title'] ?></h3>
           <div class="mb-1 text-muted"></div>
           <p class="mb-auto"><?= mb_substr($news[$i]['description'], 0, 110) ?></p>
           <a href="/blog/<?= $news[$i]['id'] ?>" class="stretched-link">Continue reading &raquo;</a>
         </div>
         <div class="col-auto d-none d-lg-block">
           <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
             <image xlink:href="upload/<?=$news[$i]['image']?>" alt="upload/CI4.png" x="0" y="0" height="100%" width="160%" preserveAspectRatio="none"/>
           </svg>
         </div>
       </div>
     </div>
   <?php endfor; ?>
    </div>
    <a class="btn btn-primary btn-lg" href="/all_blogs" role="button">view more &raquo;</a>
 <?php else: ?>
   <p class="text-center"> No posts have been found. Be the first one to post your blog!</p>
 <?php endif; ?>



<hr>
</div>
</section>
