<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sparta_Towing
 */

?>

</main><!-- #main -->

<footer class="site-footer bg-ss-dark">
	<div class="container py-6 sm:py-12 lg:pt-20 lg:pb-16">
		<div class="flex max-lg:flex-col justify-between items-center lg:space-x-24 max-lg:space-y-4">
			<figure>
				<img src="<?php echo get_theme_file_uri('assets/images/map.png'); ?>" alt="Location Map" width="635" height="532" loading="lazy">
			</figure>
			<div class="form-outline">
				<div class="text-white/70">
					<h2 class="text-4xl lg:text-[40px]/tight text-white">Get In Touch With Us</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<?php echo do_shortcode('[gravityform id="2" title="false" description="false" ajax=true]'); ?>
			</div>
		</div>
		<ul class="list-none w-full max-sm:flex-col pt-4 sm:pt-8 lg:pt-16 flex flex-wrap justify-center gap-4 lg:gap-x-[70px]">
			<li>
				<a href="tel:9728003448" class="info-link group">
					<span class="border-white/20 info-link__icon-ring group-hover:border-primary/75 focus:border-primary/75">
						<span class="bg-white/20 info-link__icon group-hover:bg-primary/75 focus:bg-primary/75">
							<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
								<g clip-path="url(#clip0_2644_3583)">
									<path d="M15.8517 12.0696L13.6949 9.91289C12.9247 9.14263 11.6152 9.45076 11.3071 10.4521C11.0761 11.1453 10.3058 11.5305 9.61257 11.3764C8.07205 10.9913 5.99234 8.98858 5.60721 7.37103C5.37614 6.67777 5.83829 5.90751 6.53153 5.67646C7.53286 5.36836 7.84097 4.05891 7.07071 3.28865L4.91398 1.13193C4.29777 0.592744 3.37346 0.592744 2.83428 1.13193L1.37078 2.59542C-0.0927101 4.13594 1.52484 8.21832 5.14506 11.8385C8.76528 15.4588 12.8477 17.1534 14.3882 15.6128L15.8517 14.1493C16.3909 13.5331 16.3909 12.6088 15.8517 12.0696Z" fill="white" />
								</g>
								<defs>
									<clipPath id="clip0_2644_3583">
										<rect width="15.4545" height="15.4545" fill="white" transform="translate(0.818359 0.727539)" />
									</clipPath>
								</defs>
							</svg>
						</span>
					</span>
					<span class="info-link__text group-hover:text-primary/75">
						972-800-3448
					</span>
				</a>
			</li>
			<li>
				<a href="mailto:spartatowing@outlook.com" class="info-link group">
					<span class="info-link__icon-ring border-white/20 group-hover:border-primary/75">
						<span class="info-link__icon bg-white/20 group-hover:bg-primary/75 focus:bg-primary/75">
							<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M15.75 3.375H2.25C2.10082 3.375 1.95774 3.43426 1.85225 3.53975C1.74676 3.64524 1.6875 3.78832 1.6875 3.9375V13.5C1.6875 13.7984 1.80603 14.0845 2.017 14.2955C2.22798 14.5065 2.51413 14.625 2.8125 14.625H15.1875C15.4859 14.625 15.772 14.5065 15.983 14.2955C16.194 14.0845 16.3125 13.7984 16.3125 13.5V3.9375C16.3125 3.78832 16.2532 3.64524 16.1477 3.53975C16.0423 3.43426 15.8992 3.375 15.75 3.375ZM15.1875 13.5H2.8125V5.21648L8.61961 10.5398C8.72338 10.6351 8.85913 10.688 9 10.688C9.14087 10.688 9.27662 10.6351 9.38039 10.5398L15.1875 5.21648V13.5Z" fill="white" />
							</svg>
						</span>
					</span>
					<span class="info-link__text group-hover:text-primary/75">
						spartatowing@outlook.com
					</span>
				</a>
			</li>
			<li>
				<a href="https://maps.app.goo.gl/pppZNMibHDhHmGP97" target="_black" class="info-link group">
					<span class="info-link__icon-ring border-white/20 group-hover:border-primary/75 focus:border-primary/75">
						<span class="info-link__icon bg-white/20 group-hover:bg-primary/75 focus:bg-primary/75">
							<svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M8.5 8.69922C7.97904 8.69922 7.47942 8.50167 7.11104 8.15004C6.74267 7.79841 6.53571 7.3215 6.53571 6.82422C6.53571 6.32694 6.74267 5.85002 7.11104 5.49839C7.47942 5.14676 7.97904 4.94922 8.5 4.94922C9.02096 4.94922 9.52058 5.14676 9.88896 5.49839C10.2573 5.85002 10.4643 6.32694 10.4643 6.82422C10.4643 7.07045 10.4135 7.31426 10.3148 7.54175C10.216 7.76924 10.0714 7.97593 9.88896 8.15004C9.70656 8.32415 9.49002 8.46227 9.2517 8.55649C9.01338 8.65072 8.75795 8.69922 8.5 8.69922ZM8.5 1.57422C7.04131 1.57422 5.64236 2.12734 4.61091 3.11191C3.57946 4.09647 3 5.43183 3 6.82422C3 10.7617 8.5 16.5742 8.5 16.5742C8.5 16.5742 14 10.7617 14 6.82422C14 5.43183 13.4205 4.09647 12.3891 3.11191C11.3576 2.12734 9.95869 1.57422 8.5 1.57422Z" fill="white" />
							</svg>
						</span>
					</span>
					<span class="info-link__text group-hover:text-primary/75">
						20 Cooper Square, New York, NY 10003
					</span>
				</a>
			</li>
		</ul>
	</div>
	<div class="border-t border-t-white/20 [&_p]:mb-0">
		<div class="container flex max-sm:flex-col max-sm:space-y-2 justify-between items-center py-3">
			<figure>
				<img src="<?php echo site_url(); ?>/wp-content/uploads/sparta-towing-logo.png" alt="Sparta Towing Logo" width="150" height="80" loading="lazy">
			</figure>
			<div class="text-white/50 text-center text-sm leading-[1.55] tracking-[0.28px]">
				<p>Copyright &copy; <?php echo date('Y'); ?> All Rights Reserved.</p>
			</div>
		</div>
	</div>
</footer>
<div class="sticky-footer">
	<a href="tel:9728003448" class="btn btn-primary btn-block flex justify-center items-center rounded-none">
		<span class="inline-block mr-2">
			<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
				<g clip-path="url(#clip0_2644_3583)">
					<path d="M15.8517 12.0696L13.6949 9.91289C12.9247 9.14263 11.6152 9.45076 11.3071 10.4521C11.0761 11.1453 10.3058 11.5305 9.61257 11.3764C8.07205 10.9913 5.99234 8.98858 5.60721 7.37103C5.37614 6.67777 5.83829 5.90751 6.53153 5.67646C7.53286 5.36836 7.84097 4.05891 7.07071 3.28865L4.91398 1.13193C4.29777 0.592744 3.37346 0.592744 2.83428 1.13193L1.37078 2.59542C-0.0927101 4.13594 1.52484 8.21832 5.14506 11.8385C8.76528 15.4588 12.8477 17.1534 14.3882 15.6128L15.8517 14.1493C16.3909 13.5331 16.3909 12.6088 15.8517 12.0696Z" fill="white" />
				</g>
				<defs>
					<clipPath id="clip0_2644_3583">
						<rect width="15.4545" height="15.4545" fill="white" transform="translate(0.818359 0.727539)" />
					</clipPath>
				</defs>
			</svg>
		</span>
		<span class="info-link__text">
			972-800-3448
		</span>
	</a>
</div>
</div> <!-- /.site-wrapper -->

<?php wp_footer(); ?>

</body>

</html>