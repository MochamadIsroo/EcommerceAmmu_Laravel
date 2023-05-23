<div>

  <div class="py-3 py-md-5">
    <div class="container">
      <div class="row">
        <div class="col-md-5 mt-3">
          <div class="bg-white border">
            <img src="{{ asset($product->productImages[0]->image) }}" class="w-100" alt="Img">
          </div>
        </div>
        <div class="col-md-7 mt-3">
          <div class="product-view">
            <p class="product-path">
              Home / {{ $product->category->nama }} / {{ $product->nama }}
            </p>
            <hr>
            <h4 class="product-name">
              {{ $product->nama }}
            </h4>

            <div class="mb-3">
              <span class="original-price">Rp {{ $product->original_price }}</span>
              <span class="selling-price">Rp {{ $product->selling_price }}</span>
            </div>
            <div>
              @if($product->productColors->count() > 0)
              @if($product->productColors)
              @foreach($product->productColors as $colorItem)
              <!-- <input type="radio" name="colorSelection" value="{{ $colorItem->id }}"> {{ $colorItem->color->nama }} -->
              <label class="colorSelectionLabel" wire:click="colorSelected({{ $colorItem->id }})">
                {{ $colorItem->color->nama }}
              </label>
              @endforeach
              @endif
              <div>
                @if($this->prodColorSelectedQuantity == 'habis')
                <label class="btn-sm py-1 mt-2 text-white bg-secondary">Habis</label>
                @elseif($this->prodColorSelectedQuantity > 0)
                <label class="btn-sm py-1 mt-2 text-white bg-success">Tersedia</label>
                @endif
              </div>
              @else
              @if($product->quantity)
              <label class="btn-sm py-1 mt-2 text-white bg-success">Tersedia</label>
              @else
              <label class="btn-sm py-1 mt-2 text-white bg-secondary">Habis</label>
              @endif
              @endif
            </div>
            <div class="mt-2">
              <div class="input-group">
                <span class="btn btn1" wire:click="decrementQuantiry"><i class="fa fa-minus"></i></span>
                <input type="text" value="1" wire:model="quantityCount" value="{{ $this->quantityCount }}" class="input-quantity fs-5" />
                <span class="btn btn1" wire:click="incrementQuantiry"><i class="fa fa-plus"></i></span>
              </div>
            </div>
            <div class="mt-2">
              <a href="" class="btn btn1"> <i class="fa fa-shopping-cart"></i> Add To Cart</a>
              <a href="" class="btn btn1"> <i class="fa fa-heart"></i> Add To Wishlist </a>
            </div>
            <div class="mt-3">
              <h5 class="mb-0">Small Description</h5>
              <p>
                {{ $product->small_deskripsi }}
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mt-3">
          <div class="card">
            <div class="card-header bg-white">
              <h4>Description</h4>
            </div>
            <div class="card-body">
              <p>
                {{ $product->deskripsi }}
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>