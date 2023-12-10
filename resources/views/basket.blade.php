<!-- resources/views/carrito.blade.php -->

<!DOCTYPE html>
<html lang="es">
<x-head/>
<body>
    <x-navbar/>
    <main class="responsive-container">
        <div class="mt-4">
            @if (!empty($data) && count($data) > 0)
                <h2 class="mb-4">Carrito de Compras</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $producto)
                            <tr>
                                <td>{{ $producto['name'] }}</td>
                                <td>${{ $producto['price'] }}</td>
                                <td>{{ $producto['quantity'] }}</td>
                                <td>${{ $producto['price'] * $producto['quantity'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="total mt-3">
                    <h4>Total: ${{ $total }}</h4>
                </div>
                <div class="buttons mt-3">
                    <a href="/realizar-compra" class="btn btn-success mx-2">Realizar Compra</a>
                    <a href="/" class="btn btn-outline-primary mx-2">Seguir Comprando</a>
                </div>
            @else
                <p class="mt-4">Tu carrito está vacío.</p>
                <div class="buttons mt-3">
                    <a href="/" class="btn btn-outline-primary">Seguir Comprando</a>
                </div>
            @endif
        </div>
        <x-footer/>
    </main>
</body>
</html>
