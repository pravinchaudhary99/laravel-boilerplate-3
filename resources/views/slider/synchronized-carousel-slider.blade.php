@extends('layouts.header')

@section('title','synchronized Slider')

@section('content')
		<!-- Begin content -->
		<div id="page-content-wrapper" class="">
		    <div class="inner">
		        <!-- Begin main content -->
		        <div class="inner-wrapper">
		            <div class="sidebar-content fullwidth">
		                <div data-elementor-type="wp-page" data-elementor-id="8952" class="elementor elementor-8952" data-elementor-settings="[]">
		                    <div class="elementor-inner">
		                        <div class="elementor-section-wrap">
		                            <section
		                                class="elementor-section elementor-top-section elementor-element elementor-element-d29c0ae elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default"
		                                data-id="d29c0ae"
		                                data-element_type="section"
		                                data-settings='{"stretch_section":"section-stretched"}'
		                            >
		                                <div class="elementor-container elementor-column-gap-default">
		                                    <div class="elementor-row">
		                                        <div
		                                            class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-66d975f"
		                                            data-id="66d975f"
		                                            data-element_type="column"
		                                            data-settings='{"starto_ext_is_scrollme":"false","starto_ext_is_smoove":"false","starto_ext_is_parallax_mouse":"false","starto_ext_is_infinite":"false"}'
		                                        >
		                                            <div class="elementor-column-wrap elementor-element-populated">
		                                                <div class="elementor-widget-wrap">
		                                                    <div
		                                                        class="elementor-element elementor-element-2bd2df3 elementor-widget elementor-widget-starto-slider-synchronized-carousel"
		                                                        data-id="2bd2df3"
		                                                        data-element_type="widget"
		                                                        data-settings='{"starto_ext_is_scrollme":"false","starto_ext_is_smoove":"false","starto_ext_is_parallax_mouse":"false","starto_ext_is_infinite":"false"}'
		                                                        data-widget_type="starto-slider-synchronized-carousel.default"
		                                                    >
		                                                        <div class="elementor-widget-container">
		                                                            <div
		                                                                id="tg_synchronized_carousel_slider_2bd2df3"
		                                                                data-pagination="synchronized-carousel-pagination_2bd2df3"
		                                                                class="synchronized-carousel-slider-wrapper sliders-container"
		                                                                data-countslide="3"
		                                                                data-slidetitles='["Design is Everywhere","Culture shapes values","Rule of thumb for UX"]'
		                                                                data-slideimages='[
		                                                                "{{ asset('assets/upload\/collaboration-and-analysis-by-business-people-9QFGCXZ.jpg') }}",
		                                                                "{{ asset('assets/upload\/girl-in-a-brown-coat-a-brown-hat-PTP9T4D.jpg') }}",
		                                                                "{{ asset('assets/upload\/busy-business-people-on-stairs-in-modern-office-P9R9W22.jpg') }}"]'
		                                                                data-slidebuttontitles='["","",""]'
		                                                                data-slidebuttonurls='["","",""]'
		                                                            >
		                                                                <ul id="synchronized-carousel-pagination_2bd2df3" class="synchronized-carousel-pagination">
		                                                                    <li class="pagination-item"><a class="pagination-button"></a></li>
		                                                                    <li class="pagination-item"><a class="pagination-button"></a></li>
		                                                                    <li class="pagination-item"><a class="pagination-button"></a></li>
		                                                                </ul>
		                                                            </div>
		                                                            <br class="clear" />
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