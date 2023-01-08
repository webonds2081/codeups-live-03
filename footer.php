<?php
$home = esc_url( home_url( '/' ) );
$news = esc_url( home_url( '/news/' ) );
$service = esc_url( home_url( '/service/' ) );
$works = esc_url( home_url( '/works/' ) );
$company = esc_url( home_url( '/company/' ) );
$recruit = esc_url( home_url( '/recruit/' ) );
$contact = esc_url( home_url( '/contact/' ) );
?>

<section class="l-contact p-contact">
  <div class="p-contact__inner l-inner">
    <div class="p-contact__title c-section-header">
      <h2 class="c-section-header__engtitle">CONTACT</h2>
      <p class="c-section-header__jatitle">お問い合わせ</p>
    </div>
    <div class="p-contact__contents">
      <div class="p-contact__text-block">
        <p class="p-contact__text">Webサイトの制作のご依頼やお見積りなど、<br>お気軽にご相談ください。</p>
      </div>
      <div class="p-contact__btn">
        <a href="<?php echo $contact; ?>" class="c-button">more</a>
      </div>
    </div>
  </div>
</section>

<div class="c-to-top">
  <a href="#top"><span></span></a>
</div>

<footer class="l-footer p-footer">
  <div class="p-footer__inner">

    <nav class="p-footer__nav p-footer-nav">
      <ul class="p-footer-nav__items">
        <li class="p-footer-nav__item">
          <a href="<?php echo $home; ?>">HOME</a>
        </li>
        <li class="p-footer-nav__item">
          <a href="<?php echo $news; ?>">NEWS</a>
        </li>
        <li class="p-footer-nav__item">
          <a href="<?php echo $service; ?>">SERVICE</a>
        </li>
        <li class="p-footer-nav__item">
          <a href="<?php echo $works; ?>">WORKS</a>
        </li>
        <li class="p-footer-nav__item">
          <a href="<?php echo $company; ?>">COMPANY</a>
        </li>
        <li class="p-footer-nav__item">
          <a href="<?php echo $recruit; ?>">RECRUIT</a>
        </li>
        <li class="p-footer-nav__item">
          <a href="<?php echo $contact; ?>">CONTACT</a>
        </li>
      </ul>
    </nav>
    <div class="p-footer__copyright">
      <small>&copy; CodeUps</small>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>