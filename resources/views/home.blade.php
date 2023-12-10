<!DOCTYPE html>
<html lang="es">
<x-head/>
<body>
<x-navbar/>
<main>
    <div class="responsive-container">
        <div class="grid">
            @foreach ($data as $producto)
                <div class="grid-column">
                    <a class="product" href="/detalle/{{ $producto['id'] }}">
                        <div class="product-image">
                            <img src="{{ $producto['image_path'] }}" />
                        </div>
                        <div class="product-content">
                            <div class="product-info">
                                <h2 class="product-title">{{ $producto['name'] }}</h2>
                                <p class="product-price">$ {{ $producto['price'] }}</p>
                            </div>
                            <button class="product-action"><x-heroicon-o-heart /></button>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <x-footer/>
</main>
</body>
</html>
