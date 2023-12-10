<main class="responsive-container">
    <!-- ... Otro código HTML ... -->

    <header class="header">
        <div class="header-content">
            <div class="header-logo">
                <a href="/"><h1 class="logo">PWA Store</h1></a>
            </div>
            <nav class="header-navigation">
                <a href="/" style="padding-right: 10px">Inicio</a>

                <!-- Formulario para enviar el carrito -->
                <form id="carritoFormDesktop" action="/carrito" method="POST">
                    @csrf
                    <button type="submit" class="link-button cart-button d-none d-sm-block">
                        <label class="cart-label">Mi carrito</label>
                        <x-bx-cart class="icon-cart" />
                    </button>
                </form>

                <!-- Botón visible solo en celular -->
                <form id="carritoFormMobile" action="/carrito" method="POST">
                    @csrf
                    <button type="submit" class="link-button cart-button d-sm-none">
                        <x-bx-cart class="icon-cart" />
                    </button>
                </form>
            </nav>
        </div>
    </header>

    <script>
        // Obtener la variable basketIds del localStorage
        let basketIds = JSON.parse(localStorage.getItem('basketIds')) || [];

        // Agregar los IDs al formulario antes de enviar (Desktop)
        const carritoFormDesktop = document.getElementById('carritoFormDesktop');
        basketIds.forEach(id => {
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'basketIds[]';
            input.value = id;
            carritoFormDesktop.appendChild(input);
        });

        // Agregar los IDs al formulario antes de enviar (Mobile)
        const carritoFormMobile = document.getElementById('carritoFormMobile');
        basketIds.forEach(id => {
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'basketIds[]';
            input.value = id;
            carritoFormMobile.appendChild(input);
        });
    </script>
</main>
