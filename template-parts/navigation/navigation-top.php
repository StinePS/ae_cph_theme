<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.2
 */
?>
<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e(
    'Top Menu',
    'twentyseventeen'
); ?>">
    <button id="burgermenu" class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
        <svg class="burgerlogo icon icon-bars" aria-hidden="true" role="img">
            <use href="#icon-bars" xlink:href="#icon-bars"></use>
        </svg>
        <svg class="burgerlogo icon icon-close" aria-hidden="true" role="img">
            <use href="#icon-close" xlink:href="#icon-close"></use>
        </svg>
    </button>

    <div id="top-menu" class="menu">
        <ul class="nav-menu">

            <li class="page_item page-item-9">
                <a href="https://stineplejdrup.dk/kea/10_eksamen/ae_cph/produkter/">Shop</a>
            </li>

            <li class="page_item page-item-6"><a href="https://stineplejdrup.dk/kea/10_eksamen/ae_cph/galleri/">Galleri</a>
            </li>

            <li class="page_item page-item-11">
                <a href="https://stineplejdrup.dk/kea/10_eksamen/ae_cph/om/">Om AE Cph</a>
            </li>

            <li class="page_item page-item-15 current_page_item">
                <a href="https://stineplejdrup.dk/kea/10_eksamen/ae_cph/kontakt/" aria-current="page">Kontakt</a>
            </li>
            <li id="searchbar">
                <form role="search" method="get" class="search-form" action="https://stineplejdrup.dk/kea/10_eksamen/ae_cph/">
	                <input type="search" placeholder="Søg …" value="" name="s">
	                <button type="submit" class="search-submit">
                        <svg class="icon icon-search" aria-hidden="true" role="img">
                        <use href="#icon-search" xlink:href="#icon-search">
                        </use>
                        </svg>
                        <span class="screen-reader-text">Search</span>
                    </button>
                </form>
            </li>
        </ul>
    </div>

</nav><!-- #site-navigation -->

<script>
    //Lyt efter klik på burgermenu
	document.querySelector("#burgermenu").addEventListener("click", toggleMenu);

    //Toggle klassen .toggle på #menupunkter, så burgermenu åbner
	function toggleMenu() {
		console.log("toggleMenu");
		document.querySelector("#site-navigation").classList.toggle("toggled-on");
	}
</script>