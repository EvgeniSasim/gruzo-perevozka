<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="shortcut icon" href="<?php bloginfo( 'template_url' ); ?>/img/favicons/favicon.svg" type="image/svg+xml" />
	<?php wp_head(); ?>
</head>
<body>
<header class="header">
      <div class="container">
        <div class="header__logo">
          <a href="/">
            <img
              src="<?php bloginfo( 'template_url' ); ?>/img/logo.webp"
              alt="Logo"
              id="headerLogo"
            />
          </a>
        </div>
        <div class="working-hours">
          <img
            src="<?php bloginfo( 'template_url' ); ?>/img/clock_icon.webp"
            alt="Время работы"
            width="38px"
            height="32px"
          />
          <div class="working-hours__text">
            <?php the_field('working_hours', 'option'); ?>
          </div>
        </div>
        <div class="header__contacts">
          <div class="header__mail">
            <img
              src="<?php bloginfo( 'template_url' ); ?>/img/mail_icon.webp"
              alt="E-mail"
              width="38px"
              height="38px"
            />
            <a href="mailto:<?php the_field('e_mail', 'option'); ?>"
              ><?php the_field('e_mail', 'option'); ?></a
            >
          </div>
          <div class="header__tel-numbers">
            <img
              src="<?php bloginfo( 'template_url' ); ?>/img/phone_icon.webp"
              alt="Номер телефона"
              width="42px"
              height="42px"
            />
            <ul>
              <li>
                <a
                  href="tel:<?php the_field('phone_number_one', 'option'); ?>"
                  id="tell-first"
                  ><?php the_field('phone_number_one', 'option'); ?></a
                >
                <ul class="tell-second">
                  <li>
                    <a
                      href="tel:<?php the_field('phone_number_two', 'option'); ?>"
                      ><?php the_field('phone_number_two', 'option'); ?></a
                    >
                  </li>
                  <li>
                    <a
                      href="tel:<?php the_field('phone_number_three', 'option'); ?>"
                      ><?php the_field('phone_number_three', 'option'); ?></a
                    >
                  </li>
                </ul>
              </li>
            </ul>
            <img
              src="<?php bloginfo( 'template_url' ); ?>/img/polygon_icon.webp"
              alt="Polygon"
              id="img_polygon"
              width="9px"
              height="6px"
            />
          </div>
        </div>
      </div>
    </header>
  </body>
</html>
