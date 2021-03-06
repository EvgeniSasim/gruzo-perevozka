
	
	<footer class="footer">
    <section class="footer-info">
      <div class="container">
        <div class="footer-navi">
          <div class="footer-navi__title">УСЛУГИ</div>
          <?php 
            wp_nav_menu( [
    'theme_location'  =>
          'footer', 'container' => 'nav', 'container_class' =>
          'footer-navi__list', 'echo' => true, 'fallback_cb' => 'wp_page_menu',
          'items_wrap' => '
          <ul id="%1$s" class="%2$s">
            %3$s
          </ul>
          ', 'depth' => 1, ] ); ?>
        </div>
        <div class="footer-contacts">
          <div class="footer-contacts__title">Контакты</div>
          <div class="footer-contacts__list">
            <a href="tel:<?php the_field('phone_number_one', 'option');?>"
              ><?php the_field('phone_number_one', 'option'); ?></a
            >
            <a href="tel:<?php the_field('phone_number_two', 'option');?>"
              ><?php the_field('phone_number_two', 'option'); ?></a
            >
            <a href="tel:<?php the_field('phone_number_three', 'option'); ?>"
              ><?php the_field('phone_number_three', 'option'); ?></a
            >
            <a href="mailto:<?php the_field('e_mail', 'option');?>"
              ><?php the_field('e_mail', 'option'); ?></a
            >
          </div>
        </div>
        <div class="footer-adress">
          <div class="footer-adress__title">Адрес</div>
          <div class="footer-adress__location">
            <?php the_field('address', 'option');?>
          </div>
        </div>
        <div class="footer-socials">
          <div class="footer-socials__title">ПОДПИСЫВАЙТЕСЬ</div>
          <div class="footer-socials__icons">
            <a href="#"
              ><img
                src="<?php bloginfo( 'template_url' ); ?>/img/instagram_icon.webp"
                alt="Instagram"
            /></a>
            <a href="#"
              ><img
                src="<?php bloginfo( 'template_url' ); ?>/img/vk_icon.webp"
                alt="VK"
            /></a>
            <a href="#"
              ><img
                src="<?php bloginfo( 'template_url' ); ?>/img/fb_icon.webp"
                alt="FaceBook"
            /></a>
          </div>
        </div>
      </div>
    </section>
    <section class="footer-section">
      <span>Copyright © 2021 Все права защищены</span>
    </section>
  </footer>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/main.min.js"></script>
  <?php wp_footer(); ?>
  </body>
  </html>  
<?php wp_footer(); ?>
</body>
</html>