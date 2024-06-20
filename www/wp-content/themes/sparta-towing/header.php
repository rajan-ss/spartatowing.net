<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sparta_Towing
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site-wrapper">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'sparta-towing'); ?></a>

		<header class="site-header bg-ss-dark w-full py-7 shadow-md shadow-black/25 z-10 absolute top-0 left-0 right-0 before:absolute before:inset-0 before:bg-primary/20 before:-z-[1]">
			<div class="container flex justify-between items-center [&_p]:mb-0 [&_p]:uppercase [&_p]:text-white [&_p]:text-4xl [&_p]:font-lead [&_p]:font-light [&_p]:leading-10 [&_p]:-tracking-[1.08px]">
				<figure>
					<img src="<?php echo site_url(); ?>/wp-content/uploads/sparta-towing-logo.png" alt="Sparta Towing Logo" width="150" height="80" loading="lazy">
				</figure>
				<ul class="list-none h-full flex gap-4 md:gap-12">
					<li>
						<a href="mailto:spartatowing@outlook.com" class="info-link group">
							<span class="info-link__icon-ring border-primary group-hover:border-primary/75 focus:border-primary/75">
								<span class="info-link__icon bg-primary group-hover:bg-primary/75 focus:bg-primary">
									<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M15.75 3.375H2.25C2.10082 3.375 1.95774 3.43426 1.85225 3.53975C1.74676 3.64524 1.6875 3.78832 1.6875 3.9375V13.5C1.6875 13.7984 1.80603 14.0845 2.017 14.2955C2.22798 14.5065 2.51413 14.625 2.8125 14.625H15.1875C15.4859 14.625 15.772 14.5065 15.983 14.2955C16.194 14.0845 16.3125 13.7984 16.3125 13.5V3.9375C16.3125 3.78832 16.2532 3.64524 16.1477 3.53975C16.0423 3.43426 15.8992 3.375 15.75 3.375ZM15.1875 13.5H2.8125V5.21648L8.61961 10.5398C8.72338 10.6351 8.85913 10.688 9 10.688C9.14087 10.688 9.27662 10.6351 9.38039 10.5398L15.1875 5.21648V13.5Z" fill="white" />
									</svg>
								</span>
							</span>
							<span class="info-link__text max-md:hidden  group-hover:text-primary focus:text-primary">
								spartatowing@outlook.com
							</span>
						</a>
					</li>
					<li>
						<a href="tel:9728003448" class="info-link group">
							<span class="info-link__icon-ring border-primary group-hover:border-primary/75 focus:border-primary/75">
								<span class="info-link__icon bg-primary group-hover:bg-primary/75 focus:bg-primary">
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
							<span class="info-link__text group-hover:text-primary max-md:hidden focus:text-primary">
								972-800-3448
							</span>
						</a>
					</li>
				</ul>
			</div>
		</header>
		<!-- Header - ends -->
		<main id="primary" class="site-content headerSpace">
			<section class="bg-ss-dark bg-no-repeat bg-center bg-cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/hero-bg.png')">
				<div class="container flex max-lg:flex-col items-center max-lg:max-w-xl">
					<div class="text-white/90 lg:w-1/2 xl:w-[65%] lg:mr-28 pt-12 pb-8 lg:py-36 [&_h1]:text-white [&_h1]:uppercase lg:[&_p]:mb-10 max-lg:text-center">
						<h1>
							Reliable <span class="text-primary">Towing</span> and Roadside Assistance in Your Area
							<figure class="inline-block [&_img]:inline-block">
								<img src="<?php echo get_theme_file_uri('assets/images/image-in-heading.png'); ?>" alt="" width="137" height="55" loading="lazy">
							</figure>
						</h1>
						<p>Sparta Towing is your one stop shop for all your towing needs. Don't be stranded on the side of the road. Call us today!</p>
						<a href="tel:9728003448" class="btn bg-white/10 hover:bg-white/50 py-2 px-6 rounded-lg flex justify-between max-w-[216px] border-none max-lg:mx-auto">
							<span class="rounded-lg p-2 bg-white/40">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M14.3519 2.00793C14.1289 1.97595 13.9048 2.04191 13.7265 2.18381C13.5433 2.32771 13.4287 2.53557 13.4038 2.76841C13.3511 3.23908 13.6907 3.66479 14.1607 3.71776C17.4024 4.07951 19.922 6.60477 20.2865 9.85654C20.3353 10.2922 20.7008 10.621 21.137 10.621C21.1699 10.621 21.2018 10.619 21.2346 10.615C21.4627 10.59 21.6658 10.4771 21.8093 10.2972C21.9517 10.1174 22.0164 9.89351 21.9905 9.66467C21.5364 5.60746 18.3963 2.45862 14.3519 2.00793ZM14.4181 5.48994C13.942 5.402 13.5048 5.70579 13.4142 6.17047C13.3236 6.63515 13.6283 7.08884 14.0914 7.17978C15.4857 7.45159 16.5623 8.53085 16.8351 9.92989V9.93089C16.9128 10.3336 17.2674 10.6264 17.6757 10.6264C17.7305 10.6264 17.7852 10.6214 17.841 10.6114C18.3041 10.5185 18.6088 10.0658 18.5182 9.60012C18.1109 7.51055 16.5025 5.89666 14.4181 5.48994ZM16.0001 15.0912C16.4515 14.8309 16.9615 14.5369 17.6047 14.6737C18.1873 14.7966 20.1731 16.4085 20.7169 16.9671C21.0734 17.3329 21.2716 17.7106 21.3025 18.0883C21.3562 19.5703 19.3425 21.2622 18.976 21.473C18.489 21.8238 17.9224 22.0007 17.286 22.0007C16.6357 22.0007 15.9106 21.8158 15.1199 21.447C10.8296 19.6563 4.27553 13.2317 2.54266 8.9746C1.82362 7.38968 1.81864 6.08258 2.53071 5.10026C2.81454 4.63957 4.43288 2.71389 5.88192 2.77485C6.26733 2.80783 6.64179 3.00569 7.00928 3.36545C7.56499 3.91007 9.13653 5.90171 9.25803 6.4863C9.39247 7.13586 9.09769 7.6525 8.83576 8.10619C8.7799 8.20372 8.70463 8.31946 8.62217 8.44626C8.3092 8.92748 7.89264 9.568 8.04004 9.97691C9.09669 12.5711 11.5376 14.8346 14.133 15.8978C14.5343 16.0437 15.1745 15.6242 15.6542 15.3098C15.7791 15.2279 15.8932 15.1532 15.9893 15.0974L16.0001 15.0912Z" fill="white" />
								</svg>
							</span>
							<span class="text-white text-left leading-normal">
								Call Now <br />
								<span class="font-bold">972-800-3448</span>
							</span>
						</a>
					</div>
					<div id="heroForm" class="hero-form bg-white rounded-3xl p-2 mb-10 lg:my-10">
						<div class="bg-ss-off-white rounded-2xl pt-[14px] pb-px text-center [&_p]:mb-[14px] px-8 mb-10">
							<h2 class="text-ss-dark text-2xl font-medium">Get a Free Quote</h2>
							<p>Share your problem with us and we will be right back to you with the solution of your problem.</p>
						</div>
						<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax=true]'); ?>
					</div>
				</div>
			</section>
			<!-- Hero - ends -->