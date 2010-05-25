<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
  <title><?php print $head_title ?></title>
  <?php print $head ?>
  <?php print $styles ?>
  <?php print $scripts ?>
</head>

<body class="<?php print $body_classes; ?>">

<div id="wrapper"> <!--width independent from body-->


  <div id="header"><div id="header-inner">

    <div id="navigation">
      <?php if (isset($primary_links)) : ?>
        <?php print theme('links', $primary_links, array('class' => 'links primary-links')) ?>
      <?php endif; ?>

      <?php if (isset($secondary_links)) : ?>
        <?php print theme('links', $secondary_links, array('class' => 'links secondary-links')) ?>
      <?php endif; ?>
    </div>

    <?php if ($logo): ?>
      <div id="logo">
        <a href="<?php print $base_path; ?>" title="<?php print t('Home'); ?>" rel="home">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" id="logo-image" />
        </a>
      </div>
    <?php endif; ?>

    <?php if ($site_name): ?>
      <?php if ($title): ?>
        <div id="site-name"><strong>
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
            <?php print $site_name; ?>
          </a>
        </strong></div>
      <?php else: ?>
        <h1 id="site-name">
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
            <?php print $site_name; ?>
          </a>
        </h1>
      <?php endif; ?>
    <?php endif; ?>

    <?php if ($site_slogan): ?>
      <div id="slogan">
        <?php print $site_slogan; ?>
      </div>
    <?php endif; ?>

    <?php if ($search_box): ?>
      <?php print $search_box ?>
    <?php endif; ?>

    <?php if ($header): ?>
      <?php print $header ?>
    <?php endif; ?>

  </div></div><!--/header-inner /header-->

  <div id="main">

    <div id="sidebar-left">
      <?php print $left ; ?>
    </div>

    <div id="main-content">

      <?php if ($content_top): ?>
        <div id="content-top">
          <?php print $content_top; ?>
        </div> <!-- /#content-top -->
      <?php endif; ?>

      <?php if ($title): ?>
        <h1 class="title"><?php print $title; ?></h1>
      <?php endif; ?>

      <?php print $messages ?>

      <div class="tabs"><?php print $tabs; ?></div>

      <?php print $content; ?>

      <?php if ($content_bottom): ?>
         <div id="content-bottom">
           <?php print $content_bottom; ?>
         </div> <!-- /#content-bottom -->
      <?php endif; ?>

    </div><!--/main-content-->

  </div><!--/main-->
<!--/wrapper-->
  <?php if ($footer_message): ?>
    <div id="footer">
      <?php print $footer_message ?><?php print $footer; ?>
    </div>
  <?php endif; ?>

  <?php print $closure ?>

</div><!--/wrapper-->

</body>
</html>
