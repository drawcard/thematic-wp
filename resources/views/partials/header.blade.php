<header class="banner">
  <nav id="navbar-top" class="uk-navbar-container uk-padding-small" uk-navbar>
      <div class="uk-navbar-left">
        <a class="brand" href="{{ home_url('/') }}">
          <img src="@asset('images/logo.svg')">
        </a>
      </div>
      <div class="uk-navbar-center">
        ...
         <nav class="nav-primary">
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
          @endif
         </nav>
      </div>
      <div class="uk-navbar-right">
        ...
    </div>
  </nav>
</header>
