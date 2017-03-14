<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>
<div id="page-full-width" role="main">

	<img src="<?php bloginfo('template_directory'); ?>/assets/images/slide.png" class="thumbnail" alt="">

	<div class="agenda">
		<h2>AGENDA DÉTAILLÉ</h2>
			<div class="row small-up-1 medium-up-2 large-up-3">
			  <div class="column column-block">
					<h6>MER 3 MAI</h6>
					<h6>18:00 Médiathèque</h6>
					<h5>CIE OUÏE/DIRE <br />
					Vous disiez phonographie ?</h5>
					<img src="//placehold.it/260x115" class="thumbnail" alt="">
			  </div>

			  <div class="column column-block">
					<h6>MER 3 MAI</h6>
					<h6>18:00 Médiathèque</h6>
					<h5>CIE OUÏE/DIRE <br />
					Vous disiez phonographie ?</h5>
					<img src="//placehold.it/260x115" class="thumbnail" alt="">
			  </div>

			  <div class="column column-block">
					<h6>MER 3 MAI</h6>
					<h6>18:00 Médiathèque</h6>
					<h5>CIE OUÏE/DIRE <br />
					Vous disiez phonographie ?</h5>
					<img src="//placehold.it/260x115" class="thumbnail" alt="">
			  </div>

			  <div class="column column-block">
					<h6>MER 3 MAI</h6>
					<h6>18:00 Médiathèque</h6>
					<h5>CIE OUÏE/DIRE <br />
					Vous disiez phonographie ?</h5>
					<img src="//placehold.it/260x115" class="thumbnail" alt="">
			  </div>

			  <div class="column column-block">
					<h6>MER 3 MAI</h6>
					<h6>18:00 Médiathèque</h6>
					<h5>CIE OUÏE/DIRE <br />
					Vous disiez phonographie ?</h5>
					<img src="//placehold.it/260x115" class="thumbnail" alt="">
			  </div>

			  <div class="column column-block">
					<h6>MER 3 MAI</h6>
					<h6>18:00 Médiathèque</h6>
					<h5>CIE OUÏE/DIRE <br />
					Vous disiez phonographie ?</h5>
					<img src="//placehold.it/260x115" class="thumbnail" alt="">
			  </div>
			</div>
	</div>



			<div class="row small-up-1 medium-up-1 large-up-2">
			  <div class="column column-block">
					<h3>BILLETTERIE</h3>
					<h4>ABONNEMENTS</h4>
					<h4>BILLETTERIE INDIVIDUELLE</h4>
			  </div>

			  <div class="column column-block">
					<h3>INFOS PRATIQUES</h3>
					<h4>ACCUEIL, RÉSERVATIONS</h4>
					<h4>POUR S'Y RENDRE</h4>
					<h4>LES LIEUX DU FESTIVAL</h4>
				</div>
			</div>

			<div class="row small-up-1 medium-up-1 large-up-1">
			  <div class="column column-block">
					<h3>LABEL</h3>
					<p>Vand'Oeuvre est le label discographique du CCAM de Vandœuvre-lès-Nancy (et donc du festival Musique Action). Dès le lancement du projet musical de Vandœuvre, il est apparu indispensable de mettre en mémoire les événements musicaux produits par le CCAM, et de les mettre à disposition du plus grand nombre. L'idée de cette collection discographique constituée d'exclusivités était née.</p>
			  </div>
			</div>


	<div class="formulaire">
			<h3>CONTACT</h3>
			<form id="formulaire" action="index.php" method="post">
			  <div class="small-12 large-6 columns">
			      <label for="nom">NOM PRÉNOM</label>
			      <input type="text" id="nom" />
			  </div>

			  <div class="small-12 large-6 columns">
			      <label for="telephone">MAIL</label>
			      <input type="email" id="email" />
			  </div>
			  <div class="small-6 columns">
			      <label for="message">Message</label>
			      <textarea id="message"></textarea>
			  </div>

			  <div class="large-4 large-offset-10 columns">
			    <a href="about.html" type="submit" class="button">ENVOI</a>
			  </div>
			</form>
	</div>

</div>
<?php get_footer();
