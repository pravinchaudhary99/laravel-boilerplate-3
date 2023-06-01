@extends('layouts.header')

@section('title','split Slider')

@section('content')
		<!-- Begin content -->
		<div id="page-content-wrapper" class="">
		    <div class="inner">
		        <!-- Begin main content -->
		        <div class="inner-wrapper">
		            <div class="sidebar-content fullwidth">
		                <div data-elementor-type="wp-page" data-elementor-id="8969" class="elementor elementor-8969" data-elementor-settings="[]">
		                    <div class="elementor-inner">
		                        <div class="elementor-section-wrap">
		                            <section
		                                class="elementor-section elementor-top-section elementor-element elementor-element-f4a9548 elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default"
		                                data-id="f4a9548"
		                                data-element_type="section"
		                                data-settings='{"stretch_section":"section-stretched"}'
		                            >
		                                <div class="elementor-container elementor-column-gap-default">
		                                    <div class="elementor-row">
		                                        <div
		                                            class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-36d7934"
		                                            data-id="36d7934"
		                                            data-element_type="column"
		                                            data-settings='{"starto_ext_is_scrollme":"false","starto_ext_is_smoove":"false","starto_ext_is_parallax_mouse":"false","starto_ext_is_infinite":"false"}'
		                                        >
		                                            <div class="elementor-column-wrap elementor-element-populated">
		                                                <div class="elementor-widget-wrap">
		                                                    <div
		                                                        class="elementor-element elementor-element-760b956 elementor-widget elementor-widget-starto-slider-split-carousel"
		                                                        data-id="760b956"
		                                                        data-element_type="widget"
		                                                        data-settings='{"starto_ext_is_scrollme":"false","starto_ext_is_smoove":"false","starto_ext_is_parallax_mouse":"false","starto_ext_is_infinite":"false"}'
		                                                        data-widget_type="starto-slider-split-carousel.default"
		                                                    >
		                                                        <div class="elementor-widget-container">
		                                                            <div class="split-carousel-slider-wrapper carousel" data-fullscreen="1">
		                                                                <div class="carousel-control"></div>

		                                                                <div class="carousel-stage">
		                                                                    <div class="spinner spinner--left">
		                                                                        <div class="spinner-face js-active" data-bg="#ffffff">
		                                                                            <div class="content">
		                                                                                <div class="content-left" style="background-image: url({{ asset('assets/upload/attractive-photographer-with-a-retro-camera-G8F7U3Q.jpg') }});">
		                                                                                    <h1>Design is Everywhere</h1>
		                                                                                </div>

		                                                                                <div class="content-right">
		                                                                                    <div class="content-main">
		                                                                                        <p>
		                                                                                            Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, PBR 3 wolf
		                                                                                            moon beard Helvetica. Salvia esse nihil, flexitarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat
		                                                                                            kogi. Et leggings fanny pack.
		                                                                                        </p>
		                                                                                        <p>
		                                                                                            <a class="split-carousel-slide-content-link" href="single-portfolio-5.html">View Project</a>
		                                                                                        </p>
		                                                                                    </div>
		                                                                                </div>
		                                                                            </div>
		                                                                        </div>
		                                                                        <div class="spinner-face" data-bg="#ffffff">
		                                                                            <div class="content">
		                                                                                <div class="content-left" style="background-image: url({{ asset('assets/upload/office-building-7N38UK2.jpg') }});">
		                                                                                    <h1>Culture shapes values</h1>
		                                                                                </div>

		                                                                                <div class="content-right">
		                                                                                    <div class="content-main">
		                                                                                        <p>
		                                                                                            Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, PBR 3 wolf
		                                                                                            moon beard Helvetica. Salvia esse nihil, flexitarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat
		                                                                                            kogi. Et leggings fanny pack.
		                                                                                        </p>
		                                                                                        <p>
		                                                                                            <a class="split-carousel-slide-content-link" href="single-portfolio-4.html">View Project</a>
		                                                                                        </p>
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