<?php
get_header();
?>
<section class="main-section">
  <div class="container">
  <div class="left-sitebar">
  <div class="left-sitebar__widget">
    <div class="left-sitebar__widget__title">
      <h3>Основные тарифы</h3>
    </div>
    <div class="left-sitebar__widget__items">
      <div class="left-sitebar__widget__items__item">
        <div class="left-sitebar__widget__items__item__img">
          <img
            src="<?php bloginfo( 'template_url' ); ?>/img/car_twenty.webp"
            alt="Iveco"
          />
        </div>
        <div class="left-sitebar__widget__items__item__title">ТАРИФ</div>
        <div class="left-sitebar__widget__items__item__descr">
          <span
            ><?php the_field('tarif_1000', 'option')?>
            руб/час</span
          >
          <span>1000 кг/10м3</span>
        </div>
        <a class="btn" href="/">Подробнее</a>
      </div>
      <div class="left-sitebar__widget__items__item">
        <div class="left-sitebar__widget__items__item__img">
          <img
            src="<?php bloginfo( 'template_url' ); ?>/img/car_twenty_five.webp"
            alt="Iveco"
          />
        </div>
        <div class="left-sitebar__widget__items__item__title">ТАРИФ</div>
        <div class="left-sitebar__widget__items__item__descr">
          <span
            ><?php the_field('tarif_2000', 'option')?>
            руб/час</span
          >
          <span>2000 кг/10м3</span>
        </div>
        <a class="btn" href="/gruzoperevozka-do-2-tonn/">Подробнее</a>
      </div>
      <div class="left-sitebar__widget__items__item">
        <div class="left-sitebar__widget__items__item__img">
          <img
            src="<?php bloginfo( 'template_url' ); ?>/img/car_thirty.webp"
            alt="Iveco"
          />
        </div>
        <div class="left-sitebar__widget__items__item__title">ТАРИФ</div>
        <div class="left-sitebar__widget__items__item__descr">
          <span
            ><?php the_field('tarif_3000', 'option')?>
            руб/час</span
          >
          <span>3000 кг/10м3</span>
        </div>
        <a class="btn" href="/gruzoperevozka-do-3-tonn/">Подробнее</a>
      </div>
    </div>
  </div>
  <div class="left-sitebar__widget">
    <div class="left-sitebar__widget__title">
      <h3>Тарифы на вывоз мусора</h3>
    </div>
    <div class="left-sitebar__widget__items">
      <div class="left-sitebar__widget__items__item">
        <div class="left-sitebar__widget__items__item__img">
          <img
            src="<?php bloginfo( 'template_url' ); ?>/img/car_twenty.webp"
            alt="Iveco"
          />
        </div>
        <div class="left-sitebar__widget__items__item__title">ТАРИФ</div>
        <div class="left-sitebar__widget__items__item__descr">
          <span
            ><?php the_field('musor_1000', 'option')?>
            руб/час</span
          >
          <span>до 1000 кг/10м3</span>
        </div>
        <a class="btn" href="/vuvoz-do-1-tonnu/">Подробнее</a>
      </div>
      <div class="left-sitebar__widget__items__item">
        <div class="left-sitebar__widget__items__item__img">
          <img
            src="<?php bloginfo( 'template_url' ); ?>/img/car_twenty_five.webp"
            alt="Iveco"
          />
        </div>
        <div class="left-sitebar__widget__items__item__title">ТАРИФ</div>
        <div class="left-sitebar__widget__items__item__descr">
          <span
            ><?php the_field('musor_2000', 'option')?>
            руб/час</span
          >
          <span>до 2000 кг/10м3</span>
        </div>
        <a class="btn" href="/vuvoz-do-2-tonnu/">Подробнее</a>
      </div>
      <div class="left-sitebar__widget__items__item">
        <div class="left-sitebar__widget__items__item__img">
          <img
            src="<?php bloginfo( 'template_url' ); ?>/img/car_thirty.webp"
            alt="Iveco"
          />
        </div>
        <div class="left-sitebar__widget__items__item__title">ТАРИФ</div>
        <div class="left-sitebar__widget__items__item__descr">
          <span
            ><?php the_field('musor_3000', 'option')?>
            руб/час</span
          >
          <span>до 3000 кг/10м3</span>
        </div>
        <a class="btn" href="/vuvoz-do-3-tonnu/">Подробнее</a>
      </div>
    </div>
  </div>
  <div class="left-sitebar__widget">
    <div class="left-sitebar__widget__title">
      <h3>Тарифы на вынос мусора</h3>
    </div>
    <div class="left-sitebar__widget__items">
      <div class="left-sitebar__widget__items__item trash">
        <div class="left-sitebar__widget__items__item__img">
          <img
            src="<?php bloginfo( 'template_url' ); ?>/img/loading_trash.webp"
            alt="Загрузка в мешки для мусора"
          />
        </div>
        <div class="left-sitebar__widget__items__item__title">ТАРИФ</div>
        <div class="left-sitebar__widget__items__item__descr">
          <span
            ><?php the_field('pogruzka', 'option')?>
            руб/час</span
          >
          <span>загрузка в мешки и вынос</span>
        </div>
        <a class="btn" href="/zagruzka-musora/">Подробнее</a>
      </div>
      <div class="left-sitebar__widget__items__item trash">
        <div class="left-sitebar__widget__items__item__img">
          <img
            src="<?php bloginfo( 'template_url' ); ?>/img/taking_trash.webp"
            alt="Вынос строительного мусора мусора"
          />
        </div>
        <div class="left-sitebar__widget__items__item__title">ТАРИФ</div>
        <div class="left-sitebar__widget__items__item__descr">
          <span
            ><?php the_field('vunos', 'option')?>
            руб/час</span
          >
          <span>вынос мешков</span>
        </div>
        <a class="btn" href="/vunos-musora/">Подробнее</a>
      </div>
    </div>
  </div>
  <div class="left-sitebar__widget">
    <!-- <div class="left-sitebar__widget__title">
        <h3>Тарифы на вынос мусора</h3>
      </div> -->
    <div class="left-sitebar__widget__items">
      <div class="left-sitebar__widget__items__item bags">
        <div class="left-sitebar__widget__items__item__img">
          <img
            src="<?php bloginfo( 'template_url' ); ?>/img/bags.webp"
            alt="Мешки для строительного мусора"
          />
        </div>
        <div class="left-sitebar__widget__items__item__contents">
          <div class="left-sitebar__widget__items__item__title">Стоимость</div>
          <div class="left-sitebar__widget__items__item__descr">
            <span
              >от
              <?php the_field('price', 'option')?>
              руб/шт</span
            >
            <span>предоставляем мешки для бытового и строительного мусора</span>
          </div>
        </div>
        <!-- <a class="btn" href="/">Подробнее</a> -->
      </div>
    </div>
  </div>
</div>

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
    <div class="right-sitebar">
  <div class="right-sitebar__title">
    <h3>Дополнительные услуги</h3>
  </div>
  <div class="right-sitebar__first-widget">
    <div class="right-sitebar__first-widget__price-block">
      <div class="right-sitebar__first-widget__price-block__price">
        <div>
          УСЛУГИ<br />
          ГРУЗЧИКОВ
        </div>
        <div>
          <span><?php the_field('gruzchiki', 'option')?></span> руб/час
        </div>
      </div>
      <div class="right-sitebar__first-widget__price-block__img">
        <img
          src="<?php bloginfo( 'template_url' ); ?>/img/movers.webp"
          alt="Услиги грузчиков"
        />
      </div>
    </div>
    <div class="right-sitebar__first-widget__descr">
      <p>Минимальный заказ: 2 часа</p>
      <p>При безналичном расчёте: 3 часа</p>
    </div>
  </div>
  <div class="right-sitebar__first-widget">
    <div class="right-sitebar__first-widget__price-block">
      <div class="right-sitebar__first-widget__price-block__img reverce">
        <img
          src="<?php bloginfo( 'template_url' ); ?>/img/rigging_works.webp"
          alt="Такелажные работы"
        />
      </div>
      <div class="right-sitebar__first-widget__price-block__price reverce">
        <div>ТАКЕЛАЖНЫЕ РАБОТЫ</div>
        <div>
          <span><?php the_field('takelaj', 'option')?></span> руб/час
        </div>
      </div>
    </div>
    <div class="right-sitebar__first-widget__descr">
      <p>Минимальный заказ: 2 часа</p>
      <p>При безналичном расчёте: 3 часа</p>
    </div>
  </div>
  <div class="right-sitebar__first-widget">
    <div class="right-sitebar__first-widget__price-block">
      <div class="right-sitebar__first-widget__price-block__price">
        <div>
          ПОДЪЕМ<br />
          СТРОЙМАТЕРИАЛОВ<br />
          НА ЭТАЖ
        </div>
        <div><?php the_field('podem', 'option')?></div>
      </div>
      <div class="right-sitebar__first-widget__price-block__img">
        <img
          src="<?php bloginfo( 'template_url' ); ?>/img/lifting_building_materials.webp"
          alt="Подъём строительных материалов на этаж"
        />
      </div>
    </div>
    <div class="right-sitebar__first-widget__descr"></div>
  </div>
  <div class="right-sitebar__first-widget">
    <div class="right-sitebar__first-widget__price-block">
      <div class="right-sitebar__first-widget__price-block__img reverce">
        <img
          src="<?php bloginfo( 'template_url' ); ?>/img/dismantling_works.webp"
          alt="Демонтажные работы"
        />
      </div>
      <div class="right-sitebar__first-widget__price-block__price reverce">
        <div>ДЕМОНТАЖНЫЕ РАБОТЫ</div>
        <div><?php the_field('demontaj', 'option')?></div>
      </div>
    </div>
    <div class="right-sitebar__first-widget__descr"></div>
  </div>
</div>

  </div>
</section>
<section class="article-section">
  <div class="container">
    <div class="article-section__title">
      <h2>Грузоперевозки в Минске и Минской области</h2>
    </div>
    <div class="article-section__contents">
      <div class="accordion">
        <div class="accordion__item accordion__item-active">
          <div class="accordion__item-trigger">
            <div class="trigger__img">
              <span class="line1"></span>
              <span class="line2"></span>
            </div>
            <div class="trigger__text">
              Что такое грузовое такси и для чего оно нужно?
            </div>
          </div>
          <div class="accordion__item-content">
            <div class="content__text">
              Грузовое такси служит для перевозки вещей и грузов по принципу от
              двери до двери. Вы заказываете машину на удобное вам время,
              указываете начальный и конечный пункт назначения, а все заботы по
              перевозке груза наша компания берет на себя.
            </div>
          </div>
        </div>
        <div class="accordion__item">
          <div class="accordion__item-trigger">
            <div class="trigger__img">
              <span class="line1"></span>
              <span class="line2"></span>
            </div>
            <div class="trigger__text">Как оформить заказ?</div>
          </div>
          <div class="accordion__item-content">
            <div class="content__text">
              Оформить заказ можно через диспетчера, позвонив по телефон, также
              вы можете нам написать в удобном для вас мессенджере или в
              социальных сетях. Все номера и ссылки указаны на нашем сайте.
            </div>
          </div>
        </div>
        <div class="accordion__item">
          <div class="accordion__item-trigger">
            <div class="trigger__img">
              <span class="line1"></span>
              <span class="line2"></span>
            </div>
            <div class="trigger__text">Нужна ли предоплата?</div>
          </div>
          <div class="accordion__item-content">
            <div class="content__text">
              Нет, предоплата не обязательна. Вы можете произвести расчет с
              водителем наличными деньгами в день заказа перед выгрузкой вещей
              из машины. Также вы можете оплатить заказ заранее в офисе
            </div>
          </div>
        </div>
        <div class="accordion__item">
          <div class="accordion__item-trigger">
            <div class="trigger__img">
              <span class="line1"></span>
              <span class="line2"></span>
            </div>
            <div class="trigger__text">
              С какого момента начинается отсчет времени выполнения заказа?
            </div>
          </div>
          <div class="accordion__item-content">
            <div class="content__text">
              Да, мы можем разработать сценарий индивидуально под вас.
            </div>
          </div>
        </div>
        <div class="accordion__item">
          <div class="accordion__item-trigger">
            <div class="trigger__img">
              <span class="line1"></span>
              <span class="line2"></span>
            </div>
            <div class="trigger__text">
              Может ли отличаться итоговая стоимость от цены указанной на сайте
              или в рекламе?
            </div>
          </div>
          <div class="accordion__item-content">
            <div class="content__text">
              Итоговая стоимость заказа складывается с учетом времени выполнения
              заказа, характеристик груза, расстояния между адресами и прочих
              факторов. Цена на сайте или в рекламе является, как правило,
              усредненной по аналогичным параметрам, либо указана в чистом виде,
              без учета дополнительных услуг.
            </div>
          </div>
        </div>
        <div class="accordion__item">
          <div class="accordion__item-trigger">
            <div class="trigger__img">
              <span class="line1"></span>
              <span class="line2"></span>
            </div>
            <div class="trigger__text">
              Могу ли я поехать вместе со своими вещами?
            </div>
          </div>
          <div class="accordion__item-content">
            <div class="content__text">
              Да, такая возможность существует. Вы можете сопровождать свои вещи
              на пассажирском сиденье. Количество пассажирских мест Вы можете
              узнать у наших диспетчеров при заказе или на нашем сайте в разделе
              тарифа “Характеристики автомобиля”.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();