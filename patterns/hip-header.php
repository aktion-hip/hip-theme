<?php
/**
 * Title: HIP Header
 * Slug: hip/hip-header
 * Inserter: no
 */
$root = get_option( 'hip_settings_site_path', '' );
?>
<!-- Menu: tab list / start -->
<div id="header">
  <a href="<?php echo $root; ?>/hip.html" class="logo"><strong>Aktion HIP</strong></a>

  <div class="hip-header">
    <ul class="actions hip-nav alignleft">
      <li>
        <a href="<?php echo $root; ?>/hip/software.html" class="button small fit">Software</a>
      </li>
      <li>
        <a href="<?php echo $root; ?>/hip/texts.html" class="button small fit">Texte</a>
      </li>

      <?php if (is_home() || is_front_page()): ?>
        <li><span class="button small fit active">Blog</span></li>
      <?php else: ?>
        <li><a href="./" class="button small fit active_tree">Blog</a></li>
      <?php endif; ?>

      <li>
        <a href="<?php echo $root; ?>/hip/projects.html" class="button small fit">Projekte</a>
      </li>
      <li>
        <a href="<?php echo $root; ?>/hip/person.html" class="button small fit">Person</a>
      </li>
    </ul>
  </div>
  <!-- Menu: tab list / en -->

  <!-- Placeholder for the mobile menu -->
  <nav>
    <a href="#menu">Menu</a>
  </nav>
</div>

<!-- Menu: flyout for mobile / start -->
<nav id="menu">
  <div class="inner">
    <ul class="actions stacked hip-menu">
      <li><a href="<?php echo $root; ?>/hip.html" class="button fit">Home</a></li>
      <li><a href="<?php echo $root; ?>/hip/software.html">Software</a></li>
      <li><a href="<?php echo $root; ?>/hip/texts.html">Texte</a></li>
      <?php if (is_home() || is_front_page()): ?>
        <li><span class="fit active">Blog</span></li>
      <?php else: ?>
        <li><a href="./" class="fit active_tree">Blog</a></li>
        <?php endif; ?>
      <li><a href="<?php echo $root; ?>/hip/projects.html">Projekte</a></li>
      <li><a href="<?php echo $root; ?>/hip/person.html">Person</a></li>
    </ul>
  </div>
  <a class="close" href="#menu">Close</a>
</nav>
<!-- Menu: flyout for mobile / end -->
