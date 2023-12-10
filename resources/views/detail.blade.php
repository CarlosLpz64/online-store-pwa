<!DOCTYPE html>
<html lang="es">
<x-head/>
<body>
    <x-navbar/>
    <main class="responsive-container">
        @if ($data)
            <div class="card mt-4 shadow">
                <img src="{{ $data['image_path'] }}" class="card-img-top" alt="{{ $data['name'] }}" style="max-height: 300px; object-fit: cover;">
                <div class="card-body text-center">
                    <h2 class="card-title">{{ $data['name'] }}</h2>
                    <p class="card-text text-muted">{{ $data['description'] }}</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Precio:</strong> ${{ $data['price'] }}</li>
                        <li class="list-group-item"><strong>Stock:</strong> {{ $data['stock'] }}</li>
                        <li class="list-group-item"><strong>Categoría:</strong> {{ $data['category']['name'] }}</li>
                        <li class="list-group-item"><strong>Marca:</strong> {{ $data['brand']['name'] }}</li>
                    </ul>
                    <div class="buttons mt-3 d-flex justify-content-center">
                        <a href="/" class="btn btn-outline-primary mx-2">Regresar</a>
                        <a href="/agregar/{{ $data['id'] }}" class="btn btn-success mx-2">Agregar al Carrito <x-bx-cart class="icon-cart" /></a>
                    </div>
                </div>
            </div>
        @else
            <p class="mt-4">Producto no encontrado.</p>
        @endif
        <x-footer/>
    </main>
</body>
</html>
