<?php
  // Template de navigation du portfolio
  $prev_post = get_previous_post('true');
  $next_post = get_next_post('true');
  $tags = get_the_tags();
 ?>
 
<?php if ( $tags ) { ?>
<div class="tags">
  <p class="tags-title">
    <span class="fa fa-fw fa-tags fa-flip-horizontal"></span>
    <span class="title">&nbsp;Mots clés</span>
  </p>
  <p class="tags-content">
    <ul>
      <?php
        foreach ($tags as $key => $tag) {
          echo '<li><a href="#">' . $tag -> name . "</a></li>";
        } ?>

    </ul>
  </p>
</div>
<?php } ?>

<div class="nav">
  <p class="nav-title">
    <span class="title">&nbsp;Navigation</span>
  </p>
  <p class="nav-content">
    <?php if ($prev_post) { ?>
    <a href="<?php echo $prev_post -> guid ?>"><span class="fa fa-fw fa-arrow-circle-left" title="<?php echo $prev_post -> post_title ?>"></span></a>
    <?php } ?>
    <?php if ($next_post) { ?>
    <a href="<?php echo $next_post -> guid ?>"><span class="fa fa-fw fa-arrow-circle-right" title="<?php echo $next_post -> post_title ?>"></span></a>
    <?php } ?>
  </p>
</div>
