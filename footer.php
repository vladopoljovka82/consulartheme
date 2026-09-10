<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
*
*	------------- old code ----------
*-    <div class="footer-container">
*        <div class="footer-grid">
*            <?php dynamic_sidebar( 'footer-widgets' ); ?>
*        </div>
*    </div>


 */


?>
<footer class="footer">
	<div class="fcontent">

			<section class="f-wrap">
				<div class="three-col f3-1">
					<h3 class="sec-naslov">O nama</h3>
					<p>Slovan Progres Selenča je kompanija osnovana 1980. godine kao građevinsko zanatska zadruga od strane šest osnivača . U početku je bilo uposleno svega petnaest zaposlenih. Danas kompanija zapošljava oko 250 ljudi. Svoje aktivnosti Slovan Progres ispoljava kroz više delatnosti: građevinarstvo, kao prvu i osnovnu granu u okviru koje vrši izvođenje građevinskih radova, proizvodnju i distribuciju betona i betonske galanterije i proizvodnju aluminijske i PVC stolarije, trgovinu, ugostiteljstvo i poljoprivredu.</p>

				</div>

				<div class="three-col f3-2-2">
					<div class="first-row">
							<h3 class="sec-naslov">Kontakt</h3>
					</div>


					<div class="two-col f2-1">
						<h4>Adresa:</h4>
						<p>Maršala Tita 102</br>
						Selenča</br>Srbija</p>

					</div>

					<div class="two-col f2-2">
						<h4>Telefon:</h4>
						<p>
							<span class="pozivni">+381 21</span>
							<span class="broj prvibroj"><a href="tel:0038121774000">774 000</a></span>
							<span class="broj"><a href="tel:0038121774005">774 005</a></span>

						</p>

						<h4>E-mail:</h4>
						<p>
							<div><a href="mailto:office@slovan.co.rs">office@slovan.co.rs</a></div>
							<div><a href="mailto:gradjevina@slovan.co.rs">gradjevina@slovan.co.rs</a></div>
<div><a target="_blank" href="https://remote.slovan.co.rs/owa">web mail</a></div>

						</p>
					</div>

				</div>



			</section>

	</div>


<div class="copyrights">© 2021 - sva prava zadržana slovan.co.rs</div>
</footer>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
