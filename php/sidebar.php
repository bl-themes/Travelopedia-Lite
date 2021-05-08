<div class="col-sm-4 sticky">
  <div class="sticky">
    <h4 class="pb-2" style="padding-top:1px;">Latest Posts</h4>
        <?php
          $listOfKeys = $pages->getList(1, 8);
          if ($listOfKeys) :
          foreach ($listOfKeys as $key) :
          $lPage = new Page($key);
        ?>
          <a href="<?php echo $lPage->permalink() ?>">
            <div class="d-flex bd-highlight mb-3 bg-light rounded-3">
              <div class="p-2 bd-highlight"><img src="<?php echo ($lPage->coverImage()?$lPage->coverImage():Theme::src('img/noimage.png')) ?>" alt="<?php echo $lPage->title() ?>" width="70" height="70" class="rounded-3" style="object-fit: cover;"></div>
              <div class="p-2 bd-highlight align-self-center"><?php echo $lPage->title() ?></div>
            </div>
          </a>
        <?php endforeach ?>
        <?php endif ?>
        <h4 class="pb-2 pt-3">About</h4>
        <ul class="list-unstyled text-small">
            <?php foreach ($staticContent as $staticPage): ?>
            <?php if ($staticPage->slug() != "error") { // hide error page from menu ?>
            <li class="mb-3"><a class="link-secondary text-decoration-none" href="<?php echo $staticPage->permalink(); ?>"><?php echo $staticPage->title(); ?></a></li>
            <?php } ?>
            <?php endforeach ?>
        </ul>
  </div>
</div>
