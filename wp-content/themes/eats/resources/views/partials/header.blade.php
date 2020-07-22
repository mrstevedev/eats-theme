<header class="banner">
  <nav class="navbar navbar-expand-lg">
  <button class="navbar-toggler hamburger hamburger--squeeze" type="button"
        aria-label="Menu" aria-controls="navigation" data-toggle="collapse" data-target="#eatsMenuToggler" aria-controls="eatsMenuToggler" aria-expanded="false" aria-label="Toggle navigation">
  <span class="hamburger-box">
    <span class="hamburger-inner"></span>
  </span>
</button>
<a class="navbar-brand" href="{{ home_url('/') }}">
  <img src="{{ get_bloginfo('template_url')}}/assets/images/logo.svg" alt="eats logo" />
  <span class="brand-title-text">{{ get_bloginfo('name', 'display') }}</span>
</a>   

 <div class="search-toggle-container">
  <a class="search-toggle-btn" href="">
    <img class="search-toggle-btn-img" src="{{ get_bloginfo('template_url')}}/assets/icons/search.svg" />   
  </a>
  <div class="search-form-dropdown-container">
    <?php get_search_form(); ?>
  </div>
 </div>
</nav>
</header>

<nav class="nav-primary navbar-expand-lg">
  <div class="collapse navbar-collapse" id="eatsMenuToggler">
  @if (has_nav_menu('primary_navigation'))
    {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'container_class' => 'sub-menu']) !!}
  @endif
  </div>
</nav>

