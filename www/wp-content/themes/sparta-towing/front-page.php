<?php

/**
 * Template Name: Homepage
 *
 * This is the template that displays homepage by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sparta_Towing
 */

get_header();
?>

<!-- About section - starts -->
<section class="container py-8 sm:py-16 lg:py-32">
	<div class="flex max-lg:flex-col justify-between">
		<div class="flex flex-row-reverse justify-center items-end max-sm:relative max-sm:pt-24 max-sm:pb-20 w-full h-full lg:max-w-[611px] max-lg:mb-5 lg:mr-8 xl:mr-0">
			<div class="flex flex-col h-full justify-between items-end max-sm:pb-14">
				<figure>
					<img src="<?php echo get_theme_file_uri('assets/images/welcome-to-sparta-towing-2.png'); ?>" alt="Man towing truck" width="431" height="450" loading="lazy">
				</figure>
				<div class="flex flex-row-reverse items-center max-sm:absolute bottom-0 left-1/2 max-sm:-translate-x-1/2 pt-[18px] pb-[10px] sm:pr-[14px] [&_p]:text-sm [&_p]:leading-[1.14] [&_p]:mb-0 lg:-mr-12 xl:mr-0">
					<p>
						<span class="font-lead text-ss-dark font-semibold leading-[1.1] text-lg">
							2500+
						</span><br />
						Happy Clients
					</p>
					<div class="flex">
						<figure class="-ml-[18px]">
							<img src="<?php echo get_theme_file_uri('assets/images/client-4.png'); ?>" alt="Client 4" width="52" height="52" loading="lazy">
						</figure>
						<figure class="-ml-[18px]">
							<img src="<?php echo get_theme_file_uri('assets/images/client-3.png'); ?>" alt="Client 3" width="52" height="52" loading="lazy">
						</figure>
						<figure class="-ml-[18px]">
							<img src="<?php echo get_theme_file_uri('assets/images/client-2.png'); ?>" alt="Client 2" width="52" height="52" loading="lazy">
						</figure>
						<figure class="-ml-[18px]">
							<img src="<?php echo get_theme_file_uri('assets/images/client-1.png'); ?>" alt="Client 1" width="52" height="52" loading="lazy">
						</figure>
					</div>
				</div>
			</div>
			<div class="flex flex-col h-full -mr-[145px] relative">
				<div class="flex items-center max-w-[215px] mb-4 sm:mb-8 bg-white px-5 py-4 rounded-xl shadow-[0_4px_24px_0] shadow-[#1c3a4f1a] text-ss-dark font-medium text-xl leading-[1.1]">
					<span class="font-lead font-bold text-[54px] text-primary mr-4 leading-none">10</span>
					<span>Years of experience</span>
				</div>
				<figure>
					<img src="<?php echo get_theme_file_uri('assets/images/welcome-to-sparta-towing-1.png'); ?>" alt="Man fixing tire" width="325" height="372" loading="lazy">
				</figure>
			</div>
		</div>
		<div class="flex flex-col justify-center [&_h2]:mb-5 [&_h2]:text-ss-dark lg:max-w-[480px] xl:max-w-[572px] max-lg:text-center">
			<h2>Welcome to <span class="text-primary">Sparta Towing</span></h2>
			<p>Your dependable partner in the Plano, TX area for all your towing needs. We pride ourselves on being a reliable and affordable towing service catering to both light and heavy-duty vehicles. Whether you're stranded on the side of the road or need a vehicle transported across long distances, Sparta Towing is here to assist you.</p>
			<p>At Sparta Towing, we understand that emergencies can happen at any time, which is why our team operates <a href="#">24/7, 365 days a year</a>. Our prompt and professional service ensures that you're never left stranded for long. With a fleet of state-of-the-art tow trucks and equipment, we're equipped to handle a wide range of towing needs, from light-duty vehicles to heavy-duty machinery.</p>
			<a href="tel:9728003448" class="btn btn-primary mt-4 lg:mt-8 py-2 px-6 rounded-lg flex justify-between w-full max-w-[216px] max-lg:mx-auto">
				<span class="rounded-lg p-2 bg-white/[0.17]">
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
	</div>
</section>
<!-- About section - ends -->

<!-- 24/7 Towing section starts -->
<section class="py-14 md:py-16 lg:py-20 bg-[#e1b4b4] bg-opacity-[0.1] relative">
	<div class="absolute inset-0 -z-10" style="background: url(./assets/images/top-left-graphic.png) no-repeat left top, url(./assets/images/bottom-right-graphic.png) no-repeat right bottom;"></div>
	<div class="container text-center">
		<h2 class="font-lead text-[40px] font-medium leading-[50px] text-ss-dark pb-10"><span class="text-primary">24/7</span> Towing and Roadside Help</h2>
		<div class="flex flex-wrap gap-y-7 -mx-5"><!-- Card-Wraper -->
			<div class="px-5 w-full sm:w-1/2 lg:w-1/3">
				<div class="bg-white rounded-xl [&_p]:px-5 sm:[&_p]:px-8 md:[&_p]:px-10 lg:[&_p]:px-12 [&_p]:pb-[26px] h-full"><!-- Card -->
					<figure class="justify-center flex p-5">
						<img src="<?php echo get_theme_file_uri('assets/images/light_duty.jpg'); ?>" alt="Card Image" width="560" height="220" loading="lazy">
					</figure>
					<h3 class="h4 text-ss-dark pt-5 mb-4">Light Duty</h3>
					<p>We offer professional light-duty towing for cars, SUVs, motorcycles, and
						small trucks.</p>
				</div>
			</div><!-- Card -->
			<div class="px-5 w-full sm:w-1/2 lg:w-1/3">
				<div class="bg-white rounded-xl [&_p]:px-5 sm:[&_p]:px-8 md:[&_p]:px-10 lg:[&_p]:px-12 [&_p]:pb-[26px] h-full"><!-- Card -->
					<figure class="justify-center flex p-5">
						<img src="<?php echo get_theme_file_uri('assets/images/heavy-duty.jpg'); ?>" alt="Card Image" width="560" height="220" loading="lazy">
					</figure>
					<h3 class="h4 text-ss-dark pt-5 mb-4">Heavy Duty</h3>
					<p>We specialize in heavy-duty towing, providing reliable and efficient solutions for large vehicles and equipment.</p>
				</div>
			</div><!-- Card -->
			<div class="px-5 w-full sm:w-1/2 lg:w-1/3">
				<div class="bg-white rounded-xl [&_p]:px-5 sm:[&_p]:px-8 md:[&_p]:px-10 lg:[&_p]:px-12 [&_p]:pb-[26px] h-full"><!-- Card -->
					<figure class="justify-center flex p-5">
						<img src="<?php echo get_theme_file_uri('assets/images/jump_starts.png'); ?>" width="560" height="220" loading="lazy">
					</figure>
					<h3 class="h4 text-ss-dark pt-5 mb-4">Jump Starts</h3>
					<p>Fast and reliable jump start servicesb to get you back on the road Quickly.</p>
				</div>
			</div><!-- Card -->
			<div class="px-5 w-full sm:w-1/2 lg:w-1/3">
				<div class="bg-white rounded-xl [&_p]:px-5 sm:[&_p]:px-8 md:[&_p]:px-10 lg:[&_p]:px-12 [&_p]:pb-[26px] h-full"><!-- Card -->
					<figure class="justify-center flex p-5">
						<img src="<?php echo get_theme_file_uri('assets/images/tire-changes.png'); ?>" width="560" height="220" loading="lazy">
					</figure>
					<h3 class="h4 text-ss-dark pt-5 mb-4">Tire Changes</h3>
					<p>We provide swift and dependable tire change assistance. If you have a flat tire or a blowout, our expert team is on call 24/7 to get you back on the road safely.</p>
				</div>
			</div><!-- Card -->
			<div class="px-5 w-full sm:w-1/2 lg:w-1/3">
				<div class="bg-white rounded-xl [&_p]:px-5 sm:[&_p]:px-8 md:[&_p]:px-10 lg:[&_p]:px-12 [&_p]:pb-[26px] h-full"><!-- Card -->
					<figure class="justify-center flex p-5">
						<img src="<?php echo get_theme_file_uri('assets/images/lock-outs.png'); ?>" width="560" height="220" loading="lazy">
					</figure>
					<h3 class="h4 text-ss-dark pt-5 mb-4">Lock Outs</h3>
					<p>Locked out of your vehicle? At Sparta Towing we offer prompt & reliable lockout assistance to get you back inside your car quickly & safely.</p>
				</div>
			</div><!-- Card -->
			<div class="px-5 w-full sm:w-1/2 lg:w-1/3">
				<div class="bg-white rounded-xl [&_p]:px-5 sm:[&_p]:px-8 md:[&_p]:px-10 lg:[&_p]:px-12 [&_p]:pb-[26px] h-full"><!-- Card -->
					<figure class="justify-center flex p-5">
						<img src="<?php echo get_theme_file_uri('assets/images/Long-distance-towing.png'); ?>" width="560" height="220" loading="lazy">
					</figure>
					<h3 class="h4 text-ss-dark pt-5 mb-4">Long Distance Towing</h3>
					<p>Whether you're relocating or need to transport your vehicle across state lines, our experienced team can help you with all of your long distance towing needs.</p>
				</div>
			</div><!-- Card -->
			<div class="w-full flex justify-center">
				<a href="tel:9728003448" class="btn btn-primary mt-3">Call Us today</a>
			</div>
		</div>
	</div>
</section>
<!-- 24/7 Towing section ends-->

<!-- Towing Choice section starts -->
<section class="bg-ss-dark overflow-hidden">
	<div class="relative before:absolute before:w-[622px] before:h-[622px] before:bg-primary before:opacity-[0.4] before:blur-[277px] before:rounded-[622px] before:-left-[6rem] before:-top-[16rem] after:absolute after:w-[622px] after:h-[622px] after:bg-primary after:opacity-[0.4] after:blur-[277px] after:rounded-[622px] after:left-[80rem] after:top-[15rem] pt-20 pb-24">
		<div class="container text-white text-center relative z-10">
			<div class="text-center [&_p]:text-xl [&_p]:leading-5">
				<p>Why We're Your Best Towing Choice</p>
				<h2 class="font-lead px-5 sm:px-8 xl:px-[200px] font-medium leading-[50px] pb-16">We believe that quality <span class="text-primary">Towing and Roadside</span> Assistance should be accessible to everyone.</h2>
			</div><!-- Heading Text -->
			<div class="flex flex-wrap sm:justify-center gap-y-7">
				<div class="w-full sm:w-1/2 md:w-1/3 md:border-r md:border-ss-grey border-opacity-[0.5]">
					<div class="leading-6 flex justify-center">
						<h2 class="text-[26px] font-medium leading-[50px] font-lead bg-primary rounded-lg w-12 h-12">01</h2>
					</div>
					<div class="[&_p]:text-xl [&_p]:font-semibold pt-3">
						<p>Fast Response Time</p>
					</div>
				</div><!-- Card -->
				<div class="w-full sm:w-1/2 md:w-1/3 md:border-r md:border-ss-grey border-opacity-[0.5]">
					<div class="leading-6 flex justify-center">
						<h2 class="text-[26px] font-medium leading-[50px] font-lead bg-primary rounded-lg w-12 h-12">02</h2>
					</div>
					<div class="[&_p]:text-xl [&_p]:font-semibold pt-3">
						<p>24/7 Availability</p>
					</div>
				</div><!-- Card -->
				<div class="w-full sm:w-1/2 md:w-1/3">
					<div class="leading-6 flex justify-center">
						<h2 class="text-[26px] font-medium leading-[50px] font-lead bg-primary rounded-lg w-12 h-12">03</h2>
					</div>
					<div class="[&_p]:text-xl [&_p]:font-semibold pt-3">
						<p>Customer Satisfaction</p>
					</div>
				</div><!-- Card -->
			</div><!-- Card Wrapper -->
		</div>
	</div>
</section>
<!-- Towing Choice section ends -->

<!-- Expert assistance section starts -->
<div class="container text-center py-20 md:py-24 lg:py-28 xl:py-32 relative z-[1] before:absolute before:bg-primary before:w-[755px] before:h-[53px] before:rounded-[755px] before:opacity-[0.7] before:blur-[117px] before:flex before:left-[21%] before:top-[65%] before:-z-[1]">
	<h2 class="font-lead lg:px-24 xl:px-[333px] text-ss-dark leading-[56px]">Expert Assistance For Your Unexpected Best Towing Choice</h2>
	<div class="w-full flex justify-center">
		<a href="tel:9728003448" class="btn btn-primary mt-8">Call Us today</a>
	</div>
</div>
<!-- Expert assistance section ends -->

<?php
get_footer();
