    <!-- Footer -->
    <div class="container-fluid bg-light pb-4 mt-4">
        <div class="container bg-light">
          <footer class="pt-5 pt-md-5 border-bottom">
          <div class="row">
              
              <div class="col-6 col-md mb-4">
              <h5>Categories</h5>
              <ul class="list-unstyled text-small">
                <?php foreach ($categories->db as $key=>$fields):
                if($fields['list']):  ?>
                <li class="mb-3"><a class="link-secondary text-decoration-none" href="<?php echo DOMAIN_CATEGORIES.$key; ?>"><?php echo $fields['name']; ?></a></li>
                <?php
                endif;
                endforeach; ?>
              </ul>
            </div>
            
            <div class="col-6 col-md mb-4">
              <h5>Latest Post</h5>
              <ul class="list-unstyled text-small">
                <?php
                $listOfKeys = $pages->getList(1, 5);
                if ($listOfKeys) :
                foreach ($listOfKeys as $key) :
                $lPage = new Page($key);
                ?>
                <li class="mb-3"><a class="link-secondary text-decoration-none" href="<?php echo $lPage->permalink() ?>"><?php echo $lPage->title() ?></a></li>
                <?php endforeach ?>
                <?php endif ?>
              </ul>
            </div>
            
            <div class="col-12 col-md mb-4">
              <h5><?php echo $site->title(); ?></h5>
              <p class="text-secondary"><?php echo $site->description(); ?></p>
              <small class="d-block mb-3 text-muted">&copy; 2020–<?php echo date("Y");?> <strong><a class="text-dark" href="#" target="_blank"><?php echo $site->title(); ?></a></strong></small>
            </div>
            
          </div>
        </footer>
        <p class="pt-3 text-secondary"><small>Powered by <strong><a class="text-secondary" href="https://www.bludit.com/" target="_blank">Bludit</a></strong> - Theme by <strong><a class="text-secondary" href="https://blthemes.com/" target="_blank">BlThemes</a></strong></small></p>
        </div>
    </div>
    
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-6062a5abe9be094e"></script>
