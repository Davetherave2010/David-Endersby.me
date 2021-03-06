<?php
/*Template Name: About page */
?>
<?php get_header(); ?>

<header class="container">

  <section class="col-md-12 about-intro">
    <div class="card">
      <div class="about-intro-title">
        <h1>About</h1>
        <p>A little bit about me</p>
      </div>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>
    <?php endif; ?>
    </div>
  </section>

</header>
<main class="container content-wrapper">
  <section class="col-md-4 about-profile">
    <div class="card">
      <div class="col-sm-4 col-md-12">
        <img src="https://graph.facebook.com/10152555016045907/picture?type=large" itemprop="image"/>
      </div>
      <div class="col-sm-8 col-md-12">
      <h2>David Endersby</h2>
      <ul class="about-profile-intro">
        <li>
          <p>Junior Web Designer &amp; Developer
          <span>Universal Music UK</span></p> 
        </li>
        <li>
          <p>Geological &amp; Environmental Hazards MSc
          <span>Portsmouth University</span></p>
        </li>
        <li>
          <p>Geography BSc (Hons)
          <span>Plymouth University</span></p>
        </li>
      </ul>
      </div>
      <div class="about-profile-skills">
        <h3>Skills</h3>
        <ul>
          <li class="about-profile-html"><img src="<?php bloginfo('template_directory'); ?>/img/about/logos-html.svg" alt="HTML5 Logo"></li>
          <li class="about-profile-css"><img src="<?php bloginfo('template_directory'); ?>/img/about/logos-css.svg" alt="CSS3 Logo"></li>
          <li class="about-profile-sass"><img src="<?php bloginfo('template_directory'); ?>/img/about/logos-sass.svg" alt="Sass Logo"></li>
          <li class="about-profile-js"><img src="<?php bloginfo('template_directory'); ?>/img/about/logos-js.svg" alt="Javascript Logo"></li>
          <li class="about-profile-php"><img src="<?php bloginfo('template_directory'); ?>/img/about/logos-php.svg" alt="PHP Logo"></li>
          <li class="about-profile-wp"><img src="<?php bloginfo('template_directory'); ?>/img/about/logos-wp.svg" alt="Wordpress Logo"></li>
        </ul>
      </div>
      <div>
        <h3>Also interested in</h3>
        <ul>
          <li>Angular.js</li>
          <li>Node.js</li>
          <li>Security &amp; Encryption</li>
        </ul>
      </div>
    </div>
  </section>

  <section class="col-md-8 nojs-warning">
    <div class="card">
      <p>Sadly the next sections require Javascript. Turn it on to start seeing what it can do.</p>
    </div>
  </section>

  <section class="col-md-8 ajax about-treehouse">
    <div class="card">
      <h2>Treehouse</h2>
      <img class="loading" src="<?php echo get_template_directory_uri();?>/img/loading.gif" alt="Loading">
      <div class="block-footer">Data skillfully swiped from <a href="//teamtreehouse.com/davidendersby">my Treehouse profile</a> using the Treehouse API</div>
    </div>
  </section>

  <section class="col-md-8 ajax about-battlefield">
    <div class="card">
      <h2>Battlefield 4</h2>
      <img class="loading" src="<?php echo get_template_directory_uri();?>/img/loading.gif" alt="Loading">
      <div class="block-footer"><p>Data taken from <a href="http://battlelog.battlefield.com/bf4/soldier/Davetherave2010/stats/171303020/xboxone/" target="_blank">David Endersby's Battlefield 4 profile</a> using the <a href="http://bf4stats.com/xone/Davetherave2010" target="_blank">BF4stats API</a></p>
      </div>
    </div>
  </section>
</main>

<?php include_once ("footer.php"); ?>