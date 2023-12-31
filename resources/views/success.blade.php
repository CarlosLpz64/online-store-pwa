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
            <form id="carritoForm" action="/carrito" method="POST">
                @csrf
                <div class="buttons mt-3">
                    <button type="submit" class="btn btn-success mx-2">Ir al Carrito</button>
                    <a href="/" class="btn btn-outline-primary mx-2">Seguir Comprando</a>
                </div>
            </form>
        </div>
        <x-footer/>

        <script>
            // Obtener la variable basketIds del localStorage
            // let basketIds = JSON.parse(localStorage.getItem('basketIds')) || [];

            // Agregar los IDs al formulario antes de enviar
            const carritoForm = document.getElementById('carritoForm');
            basketIds.forEach(id => {
                const input = document.createElement('input');
                input.type = 'hidden';
                input.name = 'basketIds[]';
                input.value = id;
                carritoForm.appendChild(input);
            });
        </script>
    </main>
</body>
</html>
