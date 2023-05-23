<div>
    <div class="row">

        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <h4>Harga</h4>
                </div>
                <div class="card-body">
                    <label class="d-block">
                        <input type="radio" name="priceShort" wire:model="priceInput" value="high-to-low"> Tertinggi
                    </label>
                    <label class="d-block">
                        <input type="radio" name="priceShort" wire:model="priceInput" value="low-to-high"> Terendah
                    </label>
                </div>
            </div>
        </div>

        <div class="col-md-9">
            <div class="row">
                @forelse ($products as $productItem)
                <div class="col-md-3">
                    <div class="product-card">
                        <div class="product-card-img">
                            @if($productItem->quantity > 0)
                            <label class="stock bg-success">Tersedia</label>
                            @else
                            <label class="stock bg-secondary">Habis</label>
                            @endif

                            @if($productItem->productImages->count() > 0)
                            <a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}">
                                <img src="{{ asset($productItem->productImages[0]->image) }}" alt="{{ $productItem->nama }}">
                            </a>
                            @endif
                        </div>
                        <div class="product-card-body">
                            <h5 class="product-name">
                                <a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}">
                                    {{ $productItem->nama }}
                                </a>
                            </h5>
                            <div>
                                <span class="selling-price">Rp{{ $productItem->selling_price }}</span>
                                <span class="original-price">Rp{{ $productItem->original_price }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-md-12">
                    <div class="p-2">
                        <h4>No Product Available for {{ $category->nama }}</h4>
                    </div>
                </div>
                @endforelse
            </div>
        </div>
    </div>
</div>