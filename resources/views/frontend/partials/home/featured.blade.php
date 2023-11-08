<div class="site-section block-3 site-blocks-2 bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-7 site-section-heading pt-4 text-center">
        <h2>Featured Products</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="nonloop-block-3 owl-carousel">
          @foreach ($featuredProducts as $product)
            <div class="item">
              <div class="block-4 text-center">
                <figure class="block-4-image" style="">
                  <img src="{{ Storage::url($product->image) }}" alt="Image placeholder" class="img-fluid" 
                  style="max-height: 300px !important; min-height: 300px">
                </figure>
                <div class="block-4-text p-4">
                  <h3><a href="#">{{ substr($product->name,0,18) }}</a></h3>
                  <p class="mb-0">{{ $product->description }}</p>
                  <p class="text-primary font-weight-bold">$50</p>
                </div>
              </div>
            </div>   
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
