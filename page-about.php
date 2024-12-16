<?php 
/*
 * Template Name: Об оранизации
 */
?>
<?php get_header();?>
    <main class="subpage subpage--about">
      <script>var mapsDelay = 100;</script>
      <div class="about-wrap" id="about">
        <div class="about-container container">
          <div class="about">
            <h2 class="section__title section__title--left about__title">Сведения об образовательной организации</h2>
            <p class="regular-text about__text">Академия развития инновационных технологий (АРИТ). АРИТ — это место, где помогают людям разных профессий повысить квалификацию или пройти полную профессиональную переподготовку. В академии свои знания и опыт  передают команда профессоров, докторов наук, специалистов практиков с выдающимися результатами в своих областях. </p>
            <p class="regular-text about__text">Достаточно выбрать одно из 100 направлений.</p>
            <p class="regular-text about__text">Теоретические знания вы можете получать дистанционно, в удобное для Вас время. А практика всегда проходит в оборудованных высокотехнологичных классах. Поэтому у вас нет необходимости надолго отрываться от работы ради обучения.</p>
            <p class="regular-text about__text">Врачи, геодезисты, строители, проектировщики, педагоги, средний медперсонал и люди других профессий, — получают дополнительное образование в нашей Академии.<span> На базе АРИТ обучаются до 15 тысяч специалистов ежемесячно со всей России. </span></p>
            <p class="regular-text about__text">Если у вас уже есть базовое образование, но вы хотите стать более востребованным специалистом ,то мы ждем вас в АРИТ. </p>
          </div>
          <picture class="about-picture about-page-hero">
            <source srcset="<?php echo get_template_directory_uri() ?>/img/pages/about/about-page-hero.webp 1x,<?php echo get_template_directory_uri()?>/img/pages/about/about-page-hero@2x.webp 2x" type="image/webp"/><img style="object-fit: cover;" src="<?php echo get_template_directory_uri() ?>/img/pages/about/about-page-hero.png" srcset="<?php echo get_template_directory_uri() ?>/img/pages/about/about-page-hero@2x.png 2x"/>
          </picture>
        </div>
        <picture class="about-picture__left">
          <source srcset="<?php echo get_template_directory_uri() ?>/img/3-about/horse-l.webp 1x,<?php echo get_template_directory_uri()?>/img/3-about/horse-l@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri() ?>/img/3-about/horse-l.png" srcset="<?php echo get_template_directory_uri() ?>/img/3-about/horse-l@2x.png 2x"/>
        </picture>
        <picture class="about-picture__right">
          <source srcset="<?php echo get_template_directory_uri() ?>/img/3-about/apolo-r.webp 1x,<?php echo get_template_directory_uri()?>/img/3-about/apolo-r@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri() ?>/img/3-about/apolo-r.png" srcset="<?php echo get_template_directory_uri() ?>/img/3-about/apolo-r@2x.png 2x"/>
        </picture>
      </div>
    </main>
<?php get_footer();?>
