<!-- Header -->
<div class="container my-5 pb-5">
    <div class="row">
        <div class="col-sm-8">
            <!-- Load Bludit Plugins: Page Begin -->
            <?php Theme::plugins('pageBegin'); ?>
            <p class="blog-post-meta"><i class="far fa-calendar-alt text-muted"></i> <?php echo $page->date(); ?> &nbsp;<i class="far fa-folder text-muted"></i> <?php echo $page->category() ?></p>
            <h2 class="display-5 pb-3"><?php echo $page->title(); ?></h2>
            <?php if ($page->coverImage()): ?>
                <img src="<?php echo $page->coverImage(); ?>" class="img-fluid w-100 rounded" alt="<?php echo $page->title(); ?>">
            <?php endif ?>
            <p class="text-muted pt-2 pb-2"><small><?php echo $page->custom('figure'); ?></small></p>
            <!-- Content -->
            <?php echo $page->content(); ?>

            <!-- Author -->
            <div class="pt-3 pb-5">
            <div class="card">
              <div class="card-body">
                <div class="row">
                <div class="col-sm-4 pb-2">
                  <p class="fw-bold">Author</p>
                  <p class="d-block text-dark">
                    <img class="u-pic" src="<?php echo ($page->user('profilePicture')?$page->user('profilePicture'):Theme::src('img/noimage.png')) ?>" alt="<?php echo $page->user('nickname'); ?>" width="70" height="70" class="rounded-circle"> &nbsp;<?php echo $page->user('nickname'); ?>
                  </p>
                </div>
                <div class="col-sm-4">
                  <?php if (!empty($page->tags(true))): ?>
                  <p class="fw-bold">Tags</p>
                  <?php foreach ($page->tags(true) as $tagKey=>$tagName): ?>
                  <a class="btn btn-outline-dark btn-sm mb-2" href="<?php echo DOMAIN_TAGS.$tagKey ?>" role="button"><?php echo $tagName; ?></a> &nbsp;
                  <?php endforeach ?>
                  <?php endif; ?>
                </div>
                <div class="col-sm-4">
                  <p class="fw-bold">Share this post</p>
                    <!-- Go to www.addthis.com/dashboard to customize your tools -->
                    <div class="addthis_inline_share_toolbox"></div>
                </div>
                </div>
              </div>
            </div>
            </div>
            <!--/ Author -->
            
        <!-- Load Bludit Plugins: Page End -->
        <?php Theme::plugins('pageEnd'); ?>
        </div>

    <!-- Sidebar -->
    <?php include('sidebar.php'); ?>
    </div>   
</div>


