
<header class="banner">

    <div class="brand">

      <a class="navbar-brand" href="{{ home_url('/') }}">

          {!! App::logo() !!}

      </a>

    </div>

    <nav class="nav-primary navbar-expand navbar-light" role="navigation">

      <div class="collapse navbar-collapse">

        @if (has_nav_menu('primary_navigation'))

          {!! wp_nav_menu($primarymenu) !!}

        @endif

      </div>

    </nav>

    <div class="right">

      <a href="@option('header_link')" class="btn btn-primary d-none d-sm-block">

        @option('header_cta')

      </a>

      <a href="#0" class="menu-toggle d-flex d-sm-none">
        <div>
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
      </a>

    </div>

</header>
