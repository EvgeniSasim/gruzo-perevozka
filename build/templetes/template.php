<?php
/*
Template Name: Мой шаблон страницы
*/
?>
  <div class="main__contents__title"  id="main"></div>
        <div class="main__contents__descr">
          <div class="main__contents__descr__img">
            <img
              src="<?php the_field('img')?>"
              alt="Грузоперевозки по Минску"
            />
          </div>
          <div class="main__contents__descr__title">
            <span>Тариф</span>
            <span
              ><?php the_field('price_1000')?>
              руб/час</span
            >
          </div>
          <div class="main__contents__descr__item">
            <img
              src="<?php bloginfo( 'template_url' ); ?>/img/time_icon.webp"
              alt="clock icon"
            />
            <div class="urgent__car__call">
              <span>СРОЧНЫЙ ВЫЗОВ МАШИНЫ</span>
              <span>30 МИНУТ</span>
            </div>
          </div>
          <!-- <div class="main__contents__descr__text">
          </div> -->
        </div>
      </div>
      <div class="main__characteristics">
        <div class="main__characteristics__title">
          <h3>Характеристики автомобиля</h3>
        </div>
        <div class="main__characteristics__items">
          <div class="main__characteristics__items__item">
            <div class="volume">
              <span>3 палета</span>
              <span>9 м2</span>
            </div>
            <div class="main__characteristics__items__item__img">
              <div class="width__value"></div>
              <img
                src="<?php bloginfo( 'template_url' ); ?>/img/pallet_three.webp"
                alt="Объём доставки в палетах"
              />
            </div>
          </div>
          <div class="main__characteristics__items__item">
            <div class="table__items">
              <div class="table__items__item">Длина</div>
              <div class="table__items__item"></div>
              <div class="table__items__item">3.0 м</div>
            </div>
            <div class="table__items">
              <div class="table__items__item">Ширина</div>
              <div class="table__items__item"></div>
              <div class="table__items__item">1.7 м</div>
            </div>
            <div class="table__items">
              <div class="table__items__item">Высота</div>
              <div class="table__items__item"></div>
              <div class="table__items__item">1.7 м</div>
            </div>
            <div class="table__items">
              <div class="table__items__item">Объем</div>
              <div class="table__items__item"></div>
              <div class="table__items__item">9 м3</div>
            </div>
            <div class="table__items">
              <div class="table__items__item">Грузоподъемность</div>
              <div class="table__items__item"></div>
              <div class="table__items__item">1 000кг</div>
            </div>
            <div class="table__items">
              <div class="table__items__item">Пассажирские места</div>
              <div class="table__items__item"></div>
              <div class="table__items__item">2 места</div>
            </div>
          </div>
        </div>
      </div>
      <div class="main__characteristics additional-information">
        <div class="main__characteristics__title">
          <h3>Дополнительная информация</h3>
        </div>
        <div class="main__characteristics__items">
          <div
            class="
              main__characteristics__items__item
              right-additional-information
            "
          >
            <div class="table__items">
              <div class="table__items__item">Подача машины</div>
              <div class="table__items__item"></div>
              <div class="table__items__item"><?php the_field('podacha')?> руб.</div>
            </div>
            <div class="table__items">
              <div class="table__items__item">Минимальный заказ</div>
              <div class="table__items__item"></div>
              <div class="table__items__item"><?php the_field('min-price')?> часа</div>
            </div>
            <div class="table__items">
              <div class="table__items__item">за пределами Минска</div>
              <div class="table__items__item"></div>
              <div class="table__items__item"><?php the_field('za-minsk')?> руб./км</div>
            </div>
            <div class="table__items">
              <div class="table__items__item">Работа в ночное время</div>
              <div class="table__items__item"></div>
              <div class="table__items__item">+ <?php the_field('noch')?> руб.</div>
            </div>
          </div>
          <div class="main__characteristics__items__item yellow">
            <div class="table__items">
              <div class="table__items__item">Заказ на 2 ч по городу</div>
              <div class="table__items__item"></div>
              <div class="table__items__item"><?php the_field('2-city')?> руб.</div>
            </div>
            <div class="table__items">
              <div class="table__items__item">Заказ на 3 ч по городу</div>
              <div class="table__items__item"></div>
              <div class="table__items__item"><?php the_field('3-city')?> руб.</div>
            </div>
            <div class="table__items">
              <div class="table__items__item">Заказ на 4 ч по городу</div>
              <div class="table__items__item"></div>
              <div class="table__items__item"><?php the_field('4-city')?> руб.</div>
            </div>
          </div>
        </div>
      </div>
      <div class="main__characteristics important-information">
        <div class="main__characteristics__title">
          <h3>Важная информация</h3>
        </div>
        <div class="important-information__items">
          <div class="important-information__items__item">
            <div class="important-information__items__item_img">
              <img
                src="<?php bloginfo( 'template_url' ); ?>/img/location_icon.webp"
                alt="Цены на грузоперевозки"
              />
            </div>
            <div class="important-information__items__item__descr">
              Цены в тарифах актуальны при заказе с адреса на адрес
            </div>
          </div>
          <div class="important-information__items__item">
            <div class="important-information__items__item_img">
              <img
                src="<?php bloginfo( 'template_url' ); ?>/img/callback_icon.webp"
                alt="Закать грузоперевозки"
              />
            </div>
            <div class="important-information__items__item__descr">
              Если в заказе более двух адресов, сообщите об этом диспетеру
            </div>
          </div>
          <div class="important-information__items__item">
            <div class="important-information__items__item_img">
              <img
                src="<?php bloginfo( 'template_url' ); ?>/img/delivery_icon.webp"
                alt="Быстрая подача машины"
              />
            </div>
            <div class="important-information__items__item__descr">
              Подача машины на адрес осуществляется в течении 60 минут
            </div>
          </div>
        </div>
<!-- .post -->