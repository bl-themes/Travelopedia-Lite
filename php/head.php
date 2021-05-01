<!-- Dynamic title tag -->
<?php echo Theme::metaTags('title'); ?>
<!-- Dynamic description tag -->
<?php echo Theme::metaTags('description'); ?>
<!-- Include Favicon -->
<?php echo Theme::favicon('img/favicon.png'); ?>
<!-- Include Bootstrap CSS file bootstrap.css -->
<?php echo Theme::cssBootstrap(); ?>
<!-- Include CSS Styles from this theme -->
<?php echo Theme::css('css/bootstrap.min.css'); ?>
<!-- Load Bludit Plugins: Site head -->
<?php Theme::plugins('siteHead'); ?>
<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/99398214e6.js" crossorigin="anonymous"></script>
<!-- Custom CSS -->
<style>
	a{color:#4a5259;text-decoration: none;}
    a:hover{color:#000;text-decoration: none;}
    a:hover .card{color:#000; box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;}
    .col-sm-8 p img{width: 100%;border-radius: 5px;margin-top:20px;margin-bottom: 30px;}
    .sticky {position: sticky;top: 104px;}
    .d-block img.u-pic {border-radius: 50%!important;width:70px;height: 70px;}
    p a{color:#0d6efd;}
</style>