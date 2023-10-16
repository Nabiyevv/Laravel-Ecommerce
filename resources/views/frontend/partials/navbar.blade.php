<nav class="site-navigation text-md-center text-right" role="navigation">
  <div class="container">
    <ul class="site-menu js-clone-nav d-none d-md-block">
      <li class="has-children active">
        <a href="{{ route('homeView') }}">Home</a>
        <ul class="dropdown">
          <li><a href="#">Menu One</a></li>
          <li><a href="#">Menu Two</a></li>
          <li><a href="#">Menu Three</a></li>
          <li class="has-children">
            <a href="#">Sub Menu</a>
            <ul class="dropdown">
              <li><a href="#">Menu One</a></li>
              <li><a href="#">Menu Two</a></li>
              <li><a href="#">Menu Three</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="has-children">
        <a href="about.html">About</a>
        <ul class="dropdown">
          <li><a href="#">Menu One</a></li>
          <li><a href="#">Menu Two</a></li>
          <li><a href="#">Menu Three</a></li>
        </ul>
      </li>
      <li><a href="{{ route('shopView') }}">Shop</a></li>
      <li><a href="#">Catalogue</a></li>
      <li><a href="#">New Arrivals</a></li>
      <li><a href="contact.html">Contact</a></li>
    </ul>
  </div>
</nav>
