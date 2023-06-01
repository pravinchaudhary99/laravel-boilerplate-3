@extends('layouts.header')

@section('title','3D Room Slider')

@section('content')
<!-- Begin content -->
<div id="page-content-wrapper" class="">
	<div class="inner">
		<!-- Begin main content -->
		<div class="inner-wrapper">
			<div class="sidebar-content fullwidth">
				<div data-elementor-type="wp-page" data-elementor-id="8865" class="elementor elementor-8865" data-elementor-settings="[]">
					<div class="elementor-inner">
						<div class="elementor-section-wrap">
							<section
								class="elementor-section elementor-top-section elementor-element elementor-element-f291439 elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default"
								data-id="f291439"
								data-element_type="section"
								data-settings='{"stretch_section":"section-stretched"}'
							>
								<div class="elementor-container elementor-column-gap-default">
									<div class="elementor-row">
										<div
											class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-af457e8"
											data-id="af457e8"
											data-element_type="column"
											data-settings='{"starto_ext_is_scrollme":"false","starto_ext_is_smoove":"false","starto_ext_is_parallax_mouse":"false","starto_ext_is_infinite":"false"}'
										>
											<div class="elementor-column-wrap elementor-element-populated">
												<div class="elementor-widget-wrap">
													<div
														class="elementor-element elementor-element-e7bdd57 elementor-widget elementor-widget-starto-slider-room"
														data-id="e7bdd57"
														data-element_type="widget"
														data-settings='{"starto_ext_is_scrollme":"false","starto_ext_is_smoove":"false","starto_ext_is_parallax_mouse":"false","starto_ext_is_infinite":"false"}'
														data-widget_type="starto-slider-room.default"
													>
														<div class="elementor-widget-container">
															<div class="room-slider-wrapper">
																<div class="bg-overlay"></div>

																<div class="container">
																	<div class="scroller">
																		<div class="room room--current">
																			<div class="room-side room-side--back">
																				<img class="room-img" src="{{ asset('assets/upload/man-contemplating-in-office-N3MWYN4-768x1151.jpg') }}" alt="" />
																				<img class="room-img" src="{{ asset('assets/upload/beautiful-young-woman-sitting-on-bed-working-home-PRB7JFX-768x1154.jpg') }}" alt="" />
																			</div>
																			<div class="room-side room-side--left">
																				<img class="room-img" src="{{ asset('assets/upload/woman-connection-computer-networking-wireless-P4J66NR-768x768.jpg') }}" alt="" />
																				<img class="room-img" src="{{ asset('assets/upload/business-people-together-communication-concept-PJ7TQ69-768x768.jpg') }}" alt="" />
																				<img class="room-img" src="{{ asset('assets/upload/smiling-woman-paying-for-coffee-by-credit-card-3GBX6JQ-768x512.jpg') }}" alt="" />
																			</div>
																			<div class="room-side room-side--right">
																				<img class="room-img" src="{{ asset('assets/upload/attractive-photographer-with-a-retro-camera-G8F7U3Q-768x512.jpg') }}" alt="" />
																				<img class="room-img" src="{{ asset('assets/upload/coworkers-in-office-PJZUWUT-768x512.jpg') }}" alt="" />
																				<img class="room-img" src="{{ asset('assets/upload/office-building-7N38UK2-768x513.jpg') }}" alt="" />
																			</div>
																			<div class="room-side room-side--bottom"></div>
																		</div>
																		<div class="room">
																			<div class="room-side room-side--back">
																				<img class="room-img" src="{{ asset('assets/upload/woman-checking-planner-app-5P6FGW6-768x512.jpg') }}" alt="" />
																				<img class="room-img" src="{{ asset('assets/upload/close-up-of-customer-at-checkout-of-organic-farm-9TXEEBB-768x512.jpg') }}" alt="" />
																			</div>
																			<div class="room-side room-side--left">
																				<img class="room-img" src="{{ asset('assets/upload/close-up-of-customer-at-checkout-of-organic-farm-9TXEEBB-1-768x512.jpg') }}" alt="" />
																				<img class="room-img" src="{{ asset('assets/upload/young-woman-paying-with-credit-card-in-cafe-MDTQN5U-1-768x513.jpg') }}" alt="" />
																				<img class="room-img" src="{{ asset('assets/upload/woman-enjoying-warm-coffee-7JY97D8-768x512.jpg') }}" alt="" />
																			</div>
																			<div class="room-side room-side--right">
																				<img class="room-img" src="{{ asset('assets/upload/girl-in-a-brown-coat-a-brown-hat-PTP9T4D-768x512.jpg') }}" alt="" />
																				<img class="room-img" src="{{ asset('assets/upload/busy-business-people-on-stairs-in-modern-office-P9R9W22-768x468.jpg') }}" alt="" />
																				<img class="room-img" src="{{ asset('assets/upload/people-in-workplace-P9BTZXM-768x512.jpg') }}" alt="" />
																			</div>
																			<div class="room-side room-side--bottom"></div>
																		</div>
																	</div>
																</div>

																<div class="content">
																	<div class="slides">
																		<div class="slide">
																			<h2 class="slide-name">Design is Everywhere</h2>
																			<div class="slide-title">
																				The creators of the theme are happy with the response and have vowed to create further themes
																			</div>
																			<p class="slide-date"><a class="button" href="single-portfolio-1.html">View Project</a></p>
																		</div>
																		<div class="slide">
																			<h2 class="slide-name">Rule of thumb for UX</h2>
																			<div class="slide-title">
																				Our mission is to produce the highest quality work for every client, on every project learn more about how we work
																			</div>
																			<p class="slide-date"><a class="button" href="single-portfolio-1.html">View Project</a></p>
																		</div>
																	</div>
																	<nav class="nav">
																		<button class="btn btn--nav btn--nav-left">
																			<i class="fas fa-long-arrow-alt-left"></i>
																		</button>
																		<button class="btn btn--nav btn--nav-right">
																			<i class="fas fa-long-arrow-alt-right"></i>
																		</button>
																	</nav>
																</div>
																<div class="overlay overlay--loader overlay--active">
																	<div class="loader">
																		<div></div>
																		<div></div>
																		<div></div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
					</div>
				</div>
				<div class="comment_disable_clearer"></div>
			</div>
		</div>
		<!-- End main content -->
	</div>
</div>

@endsection
@section('script')
<script type="text/javascript" src="{{ asset('assets/js/plugins/starto-elementor/assets/js/anime.min.js') }}" id="anime-js"></script>
@endsection