<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>
<div id="single_background">
<div class="wrap single_wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<article class="single_article grid-2">
				<div class="grid-image">
					<img class="single_pic" src="" alt="Produktfoto" width="578" height="578">
				</div>

				<div class="grid-text">
					<h1 class="single_h1"></h1>
					<p class="descrip"></p>
					<p class="wood"></p>
					<p class="metal"></p>
					<p class="category"></p>
					<p class="price"></p>
					<button class="button">Læg i kurv</button>
				</div>
			

			</article>
	</div>
	</div>
		</main><!-- #main -->


		<script>
		//Variabler
		let produktID = <?php echo get_the_ID(); ?>;
		let produkt;

		//Konstanter
		const dbUrl = "/kea/10_eksamen/ae_cph/wp-json/wp/v2/produkter/" + produktID;
		const produktUrl = "/kea/10_eksamen/ae_cph/wp-json/wp/v2/produkter?per_page=100";

		const container = document.querySelector(".container");

		//Asynkron funktion til hentning af JSON-data
		async function getJson() {
			const data = await fetch(dbUrl);
			produkt = await data.json();

			showProduct();
		}

		function showProduct() {
			console.log("showProduct");
			console.log(produkt.navn);
			document.querySelector(".single_h1").innerHTML = produkt.navn;
			document.querySelector(".descrip").innerHTML = produkt.beskrivelse;
			document.querySelector(".wood").innerHTML = "Træ: " + produkt.trae;
			document.querySelector(".metal").innerHTML = "Metal: " + produkt.metal;
			document.querySelector(".category").innerHTML = "Kategori: " + produkt.kategori;
			document.querySelector(".price").innerHTML = "Kr. " + produkt.pris;
			document.querySelector(".single_pic").src = produkt.billeder[0].guid;
		}

		//Sortér episoder efter udgivelsesdato, nyeste først
		/* function sortMoreEpisodes() {
			const sort = moreEpisodes.sort((a, b) => {
				let da = new Date(a.udgivelses_date),
					db = new Date(b.udgivelses_date);
				return db - da;
			});
			showMoreEpisodes(sort);
		} */

		getJson();

		</script>


	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
