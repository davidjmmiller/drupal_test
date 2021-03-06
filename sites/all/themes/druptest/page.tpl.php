  <header>
    <?php if ($site_name): ?>
    <h1 id="site-name">
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
    </h1>
    <?php endif; ?>
    <?php if ($site_slogan): ?>
      <div id="site-slogan">
        <?php print $site_slogan; ?>
      </div>
    <?php endif; ?>
    <?php print render($page['header']); ?>
  </header>
  <nav>
      <?php print render($page['nav']); ?>
  </nav>

  <div id="branding" class="clearfix">
    <?php print $breadcrumb; ?>
    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
      <h1 class="page-title"><?php print $title; ?></h1>
    <?php endif; ?>
    <?php print render($title_suffix); ?>
    <?php print render($primary_local_tasks); ?>
  </div>

  <div id="page">
    <?php if ($secondary_local_tasks): ?>
      <div class="tabs-secondary clearfix"><?php print render($secondary_local_tasks); ?></div>
    <?php endif; ?>

    <div id="content" class="clearfix">
      <div class="element-invisible"><a id="main-content"></a></div>
      <?php if ($messages): ?>
        <div id="console" class="clearfix"><?php print $messages; ?></div>
      <?php endif; ?>
      <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
      <?php print render($page['content']); ?>
    </div>

    <div id="footer">
      <footer>
        <?php print render($page['footer']); ?>
      </footer>

      <?php print $feed_icons; ?>
    </div>
  </div>
