@extends('layouts.header')

@section('title','Slice Slider')

@section('content')
<!-- Begin content -->
<div id="page-content-wrapper" class="">
	<div class="inner">
		<!-- Begin main content -->
		<div class="inner-wrapper">
			<div class="sidebar-content fullwidth">
				<div data-elementor-type="wp-page" data-elementor-id="8989" class="elementor elementor-8989" data-elementor-settings="[]">
					<div class="elementor-inner">
						<div class="elementor-section-wrap">
							<section
								class="elementor-section elementor-top-section elementor-element elementor-element-8182b83 elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default"
								data-id="8182b83"
								data-element_type="section"
								data-settings='{"stretch_section":"section-stretched"}'
							>
								<div class="elementor-container elementor-column-gap-default">
									<div class="elementor-row">
										<div
											class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8445e2a"
											data-id="8445e2a"
											data-element_type="column"
											data-settings='{"starto_ext_is_scrollme":"false","starto_ext_is_smoove":"false","starto_ext_is_parallax_mouse":"false","starto_ext_is_infinite":"false"}'
										>
											<div class="elementor-column-wrap elementor-element-populated">
												<div class="elementor-widget-wrap">
													<div
														class="elementor-element elementor-element-90cd832 elementor-widget elementor-widget-starto-slider-slice"
														data-id="90cd832"
														data-element_type="widget"
														data-settings='{"starto_ext_is_scrollme":"false","starto_ext_is_smoove":"false","starto_ext_is_parallax_mouse":"false","starto_ext_is_infinite":"false"}'
														data-widget_type="starto-slider-slice.default"
													>
														<div class="elementor-widget-container">
															<section class="slice-slide-container slides">
																<section class="slides-nav">
																	<nav class="slides-nav-nav">
																		<button class="slides-nav__prev js-prev">Prev</button>
																		<button class="slides-nav__next js-next">Next</button>
																	</nav>
																</section>
																<section class="slide is-active">
																	<div class="slide-content">
																		<figure class="slide-figure">
																			<div class="slide-img" style="background-image: url(upload/girl-in-a-brown-coat-a-brown-hat-PTP9T4D.jpg);"></div>
																		</figure>

																		<header class="slide-header">
																			<h2 class="slide-title">
																				<span class="title-line"><span>Design is Everywhere</span></span>
																			</h2>
																			<a class="slice-slide-link" href="single-portfolio-1.html"></a>
																		</header>
																	</div>
																</section>
																<section class="slide">
																	<div class="slide-content">
																		<figure class="slide-figure">
																			<div class="slide-img" style="background-image: url(upload/woman-using-credit-card-and-smartphone-for-9SGFRT6.jpg);"></div>
																		</figure>

																		<header class="slide-header">
																			<h2 class="slide-title">
																				<span class="title-line"><span>Rule of thumb for UX</span></span>
																			</h2>
																			<a class="slice-slide-link" href="single-portfolio-2.html"></a>
																		</header>
																	</div>
																</section>
															</section>
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