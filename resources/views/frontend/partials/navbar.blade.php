<nav class="site-navigation text-md-center text-right" role="navigation">
  <div class="navbar-container" x-data="{ path: window.location.pathname }">
    <ul class="js-clone-nav custom-categorybar list-unstyled" >
      {{-- <li class="has-children" x-bind:class="{'active':  path == '/'}">
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
      </li> --}}
      {{-- <li class="has-children" x-bind:class="{'active':  path == '/about'}">
        <a href="{{ route('aboutView') }}">About</a>
        <ul class="dropdown">
          <li><a href="#">Menu One</a></li>
          <li><a href="#">Menu Two</a></li>
          <li><a href="#">Menu Three</a></li>
        </ul>
      </li> --}}
      @foreach ($categories as $item)
      <li x-bind:class="{'active': path.includes('/shop/{{ $item->id }}')}"><a href="{{ route('shopView',[$item->id,preg_replace(['/[^a-zA-Z0-9]+/', '/&/'], ['-', '-'], $item->name)]) }} ">{{ $item->name }}</a></li>
      @endforeach
      {{-- <li x-bind:class="{'active':  path == '/shop'}"><a href="{{ route('shopView') }} ">Woman</a></li>
      <li x-bind:class="{'active':  path == '/woman'}"><a href="{{ route('shopView') }}">Man</a></li>
      <li x-bind:class="{'active':  path == '/man'}"><a href="{{ route('shopView') }}">Mother & Child</a></li>
      <li x-bind:class="{'active':  path == '/dsad'}"><a href="{{ route('shopView') }}">Home & Furniture</a></li>
      <li x-bind:class="{'active':  path == '/dsa'}"><a href="{{ route('shopView') }}">Supermarket</a></li>
      <li x-bind:class="{'active':  path == '/fa'}"><a href="{{ route('shopView') }}">Cosmetics</a></li>
      <li x-bind:class="{'active':  path == '/sda'}"><a href="{{ route('shopView') }}">Shoes & Bags</a></li>
      <li x-bind:class="{'active':  path == '/wq'}"><a href="{{ route('shopView') }}">Electronics</a></li>
      <li x-bind:class="{'active':  path == '/dsa'}"><a href="{{ route('shopView') }}">Sports & Outdoor</a></li>
      <li x-bind:class="{'active':  path == '/a'}"><a href="{{ route('shopView') }}">Best Sellers</a></li>
      <li x-bind:class="{'active':  path == '/sd'}"><a href="{{ route('shopView') }}">Flash Products</a></li>

      <li x-bind:class="{'active':  path == '/shop'}"><a href="{{ route('shopView') }}">Shop</a></li>
      <li><a href="#">Catalogue</a></li>
      <li x-bind:class="{'active':  path == '/contact'}"><a href="{{ route('contactView') }}">Contact</a></li> --}}
    </ul>
  </div>
</nav>