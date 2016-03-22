<!DOCTYPE html>
<html lang="pt-br" class="mdl-js">
  <head>
    <head>
      <title>Hello</title>
      <meta charset="utf-8">
      <meta name="theme-color" content="#004a7f">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.5, user-scalable=yes">
      <meta name="description" content="description">
      <meta name="keywords" content="keywords">
      <meta name="author" content="author">
      <meta name="robots" content="index, follow">
      <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/main.css">
      
    </head>
  </head>
  <body>
    <div class="mdl-layout mdl-js-layout">
      <div class="mdl-layout__drawer">
        <nav class="mdl-navigation"><a href="#" class="mdl-navigation__link"><i class="material-icons"></i>link</a><a href="#" class="mdl-navigation__link"><i class="material-icons"></i>link</a><a href="#" class="mdl-navigation__link"><i class="material-icons"></i>link</a><a href="#" class="mdl-navigation__link"><i class="material-icons"></i>link</a><a href="#" class="mdl-navigation__link"><i class="material-icons"></i>link</a><a href="#" class="mdl-navigation__link"><i class="material-icons"></i>link</a><a href="#" class="mdl-navigation__link"><i class="material-icons"></i>link</a><a href="#" class="mdl-navigation__link"><i class="material-icons"></i>link</a>
        </nav>
      </div>
      <div class="mdl-layout__content">
        <div class="header mdl-color--blue-500 mdl-shadow--2dp">
          <div class="buttons">
            <form action="#" method="get">
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                <label for="query" class="mdl-button mdl-button--icon"><i class="material-icons">search</i></label>
                <div class="mdl-textfield__expandable-holder">
                  <input type="text" name="s" id="query" class="mdl-textfield__input">
                  <label for="query" class="mdl-textfield__label">Pesquisar:</label>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div id="parallax" class="wow fadeIn">
          <div class="parallax-item background">
            <div class="container items">
              <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--6-col"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="AcerteaConta.com.br" class="logo"></div>
                <div class="mdl-cell mdl-cell--6-col mdl-cell--middle description">
                  <p>Blog para contadores, estudantes e empreendedores.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="news-search mdl-shadow--2dp">
          <div class="container">
            <div class="mdl-grid">
              <div data-wow-delay="2s" class="wow bounce mdl-cell mdl-cell--12-col"><a class="newsletter mdl-button mdl-js-button mdl-js-ripple-effect">newsletter<i class="material-icons mdl-color-text--lime">mail_outline</i></a></div>
            </div>
          </div>
        </div>
        <div id="top" class="mdl-color--grey-50">
          <div class="mdl-grid">
            <?php echo get_template_part('partials/card.home', 'destaq'); ?>
          </div>


          <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">

            <div class="mdl-tabs__tab-bar">
              <a href="#categoria01" class="mdl-tabs__tab is-active">últimos posts</a>
              <a href="#categoria02" class="mdl-tabs__tab">Os Mais lidos</a>
            </div>
            <div id="categoria01" class="mdl-tabs__panel is-active">
              <div class="mdl-grid">
                <?php echo get_template_part('partials/card.home','theLast'); ?>
              </div>
            </div>
            <div id="categoria02" class="mdl-tabs__panel">
              <div class="mdl-grid">
                <?php echo get_template_part('partials/card.home','mostVisited'); ?>
              </div>
            </div>
          </div>
        </div><a href="#top" class="float-button mdl-button mdl-button--fab mdl-button--mini-fab mdl-button--colored"><i class="material-icons">expand_less</i></a>
        <footer class="main-footer mdl-mega-footer">
          <div class="bg-black">
            <div class="mdl-mega-footer__top-section">
              <div class="mdl-grid">
                <div class="mdl-cell-mdl-cell--12-col social"><a href="#" class="link mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored"><i class="social-icons">facebook</i></a><a href="#" class="link mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored"><i class="social-icons">twitter</i></a><a href="#" class="link mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored"><i class="social-icons">instagram</i></a><a href="#" class="link mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored"><i class="social-icons">linkedin</i></a><a href="#" class="link mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored"><i class="social-icons">youtube</i></a>
                </div>
              </div>
            </div>
            <div class="mdl-mega-footer__middle-section"><a href="#" class="social-links"><i class="social-icons">facebook</i></a><a href="#" class="social-links"><i class="social-icons">twitter    </i></a><a href="#" class="social-links"><i class="social-icons">instagram    </i></a><a href="#" class="social-links"><i class="social-icons">linkedin</i></a><a href="#" class="social-links"><i class="social-icons">youtube</i></a></div>
            <div class="mdl-mega-footer__bottom-section"><img src="./assets/images/logo.png" height="20" class="logo-footer">
              <ul class="mdl-mega-footer__link-list mdl-color-text--white">
                <li><a href="#">Home</a></li>
                <li><a href="#">Categorias</a></li>
                <li><a href="#">Séries</a></li>
                <li><a href="#">Tags</a></li>
                <li><a href="#">Sobre Nós          </a></li>
              </ul>
            </div>
          </div>
        </footer>
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/main.js">    </script>
      </div>
    </div>
  </body>
</html>
