<header class="header">
	<div class="header-content">
		<div class="header-logo">
            <a href="/"><h1 class="logo">PWA Store</h1></a>
		</div>
		<nav class="header-navigation">
			<a href="/">Inicio</a>
			<!-- Visible en todos menos celular -->
            <a href="/carrito" class="link-button cart-button d-none d-sm-block"><label class="cart-label">Mi carrito</label><x-bx-cart class="icon-cart" /></a>
            <!-- Visible solo en celular -->
            <a href="/carrito" class="link-button cart-button d-sm-none"> <x-bx-cart class="icon-cart" /> </a>
		</nav>
	</div>
</header>