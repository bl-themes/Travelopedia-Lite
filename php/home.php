<?php if ($WHERE_AM_I == 'home'): ?>
  <!-- Featured Post -->
    <?php
      $featured = array_slice($content, 0, 1);
      $content = array_slice($content, 1);
      foreach ($featured as $page):
    ?>
    <div class="container">
      <div class="container my-5 bg-img" style=" background: url('<?php echo ($page->coverImage()?$page->coverImage():Theme::src('img/noimage.png')) ?>') no-repeat center center; background-size: cover; height: 100%; border-radius: 5px;">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg" style="background-color: rgba(0, 0, 0, 0.4);">
          <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
            <p class="d-block text-white">
              <img src="<?php echo ($page->user('profilePicture')?$page->user('profilePicture'):Theme::src('img/noimage.png')) ?>" alt="<?php echo $page->user('nickname'); ?>" width="45" height="45" class="rounded-circle"> &nbsp;<?php echo $page->user('nickname'); ?>
            </p>
            <h1 class="display-4 fw-bold lh-1 text-white pb-3"><?php echo $page->title(); ?></h1>
            <p class="lead text-white pb-3"><?php echo (empty($page->description())?'Complete the description of the article for a correct work of the theme':$page->description()) ?></p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
              <a href="<?php echo $page->permalink(); ?>" type="button" class="btn btn-primary rounded btn-lg px-4 me-md-2 fw-bold" role="button">Read More</a>
              <a href="https://borderless.safetywing.com/" type="button" class="btn btn-light rounded btn-lg px-4 me-md-2 fw-bold" role="button" target="_blank"><i class="fas fa-shield-virus"></i> Travel Guidelines</a>
            </div>
          </div>
          <div class="col-lg-4 offset-lg-1 position-relative overflow-hidden">
            <div class="position-lg-absolute top-0 left-0 overflow-hidden">
              <!-- Weather Widget: Insert Weatherwidget script here-->
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endforeach ?>
<?php endif; ?>


    <!-- All Article -->
    <div class="container pb-5 pt-4">
      <p class="lead pb-2 text-secondary"><?php ($WHERE_AM_I=='search'?$language->p('Search'):$language->p('All Article')) ?></p>
      <div class="row">
        <?php if (empty($content)) { $language->p('No pages found'); } ?>
        <?php foreach ($content as $page): ?>
        <div class="col-sm-4 mb-4">
          <a href="<?php echo $page->permalink(); ?>">
          <div class="card h-100 border-light">
            <img src="<?php echo ($page->coverImage()?$page->coverImage():Theme::src('img/noimage.png')) ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="d-block">
                <img src="<?php echo ($page->user('profilePicture')?$page->user('profilePicture'):Theme::src('img/noimage.png')) ?>" alt="<?php echo $page->user('nickname'); ?>" width="35" height="35" class="rounded-circle"> &nbsp;<small class="text-muted"><?php echo $page->user('nickname'); ?></small>
              </p>
              <h5 class="card-title"><?php echo $page->title(); ?></h5>
              <p class="card-text"><small class="text-muted"><?php echo $page->date(); ?></small></p>
            </div>
          </div>
          </a>
        </div>
        <?php endforeach ?>
      </div>
      <!-- Navigation -->
      <?php if (Paginator::numberOfPages()>1): ?>
        <?php if (Paginator::showPrev()): ?>
          <a href="<?php echo Paginator::previousPageUrl() ?>" type="button" class="btn btn-primary rounded-pill btn-sm px-4 me-md-2 fw-bold" role="button">Previous</a>
        <?php endif ?>
        <?php if (Paginator::showNext()): ?>
          <a href="<?php echo Paginator::nextPageUrl() ?>" type="button" class="btn btn-primary rounded-pill btn-sm px-4 me-md-2 fw-bold" role="button">Next</a>
        <?php endif ?>
      <?php endif ?>
    </div>