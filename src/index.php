<?php
get_header();
?>
<section class="main-section">
  <div class="container">
  @@include('components/bem-blocks/_left-sitebar.html')
    <div class="main">
      <div class="main__contents">
	  <?php
	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'templetes/template', get_post_type() );
		}
	}
	?>
      </div>
    </div>
    @@include('components/bem-blocks/_right-sitebar.html')
  </div>
</section>
@@include('components/bem-blocks/_article-section.html')
<?php
get_footer();