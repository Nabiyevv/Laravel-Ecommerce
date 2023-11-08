<nav class="site-navigation text-md-center text-right" role="navigation">
  <div class="navbar-container" x-data="{ path: window.location.pathname }">
    <ul class="js-clone-nav custom-categorybar list-unstyled" >
      @foreach ($categories as $item)
      <li x-bind:class="{'active': path.includes('/shop/{{ $item->id }}')}"><a href="{{ route('shopView',[$item->id,preg_replace(['/[^a-zA-Z0-9]+/', '/&/'], ['-', '-'], $item->name)]) }} ">{{ $item->name }}</a></li>
      @endforeach
    </ul>
  </div>
</nav>