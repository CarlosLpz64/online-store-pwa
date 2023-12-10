<!-- resources/views/productos/agregado.blade.php -->

<!DOCTYPE html>
<html lang="es">
<x-head/>
<body>
    <x-navbar/>
    <main class="responsive-container text-center">
        <div class="mt-4">
            <h2 class="mt-3">¡Producto agregado al carrito exitosamente!</h2>
            <br>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3b/Eo_circle_green_checkmark.svg/1200px-Eo_circle_green_checkmark.svg.png" alt="Producto Agregado" style="max-width: 200px; height: auto; margin: 0 auto;">
            <br>
            <div class="buttons mt-3">
                <a href="/carrito" class="btn btn-success mx-2">Ir al Carrito</a>
                <a href="/" class="btn btn-outline-primary mx-2">Seguir Comprando</a>
            </div>
        </div>
        <x-footer/>
    </main>
</body>
</html>
