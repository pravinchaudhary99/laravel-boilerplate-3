<div class="portfolio-grid-overlay-container tilt">
<?php
	$widget_id = $this->get_id();
	$slides = $this->get_settings('slides');
	$count_slides = count($slides);
	
	if(!empty($slides))
	{		
		//Get all settings
		$settings = $this->get_settings();
		
		//Get spacing class
		$spacing_class = '';
		if($settings['spacing'] != 'yes')
		{
			$spacing_class = 'has-no-space';
		}
		
		//Get entrance animation option
		$smoove_animation_attr = '';
		switch($settings['entrance_animation'])
		{
			case 'slide-up':
			default:
				$smoove_animation_attr = 'data-move-y="60px"';
				
			break;
			
			case 'popout':
				$smoove_animation_attr = 'data-scale="0"';
				
			break;
			
			case 'fade-in':
				$smoove_animation_attr = 'data-opacity="0"';
				
			break;
		}
		
		$column_class = 1;
		$thumb_image_name = 'starto-album-grid';
		if(isset($settings['image_dimension']) && !empty($settings['image_dimension']))
		{
			$thumb_image_name = $settings['image_dimension'];
		}
		
		//Start displaying gallery columns
		switch($settings['columns']['size'])
		{
			case 1:
		   		$column_class = 'starto-one-col';
		   	break;
		   	
			case 2:
		   		$column_class = 'starto-two-cols';
		   	break;
		   	
		   	case 3:
		   	default:
		   		$column_class = 'starto-three-cols';
		   	break;
		   	
		   	case 4:
		   		$column_class = 'starto-four-cols';
		   	break;
		   	
		   	case 5:
		   		$column_class = 'starto-five-cols';
		   	break;
		   	
		   	case 6:
		   		$column_class = 'tg_six_cols';
		   	break;
		}
		
		$filterable_class = 'no_filter';
		
		if($settings['filterable'] == 'yes')
		{
			//Get filterable tags
			$filterable_tags = array();
			foreach ( $slides as $slide ) 
			{
				$filterable_tags[] = ltrim($slide['slide_tag']);
			}
			$filterable_tags = array_unique($filterable_tags);
			
			if(!empty($filterable_tags) && $settings['filterable'] == 'yes')
			{
				$filterable_class = 'filterable';
?>
<div class="starto-portfolio-filter-wrapper">
		<a class="filter-tag-btn active" href="javascript:;" data-rel="all" data-cols="<?php echo esc_attr($settings['columns']['size']); ?>"><?php echo __( 'All', 'starto-elementor' ); ?></a>
	<?php
		foreach ( $filterable_tags as $filterable_tag ) 
		{
	?>
		<a class="filter-tag-btn" href="javascript:;" data-rel="<?php echo starto_sanitize_title($filterable_tag); ?>" data-cols="<?php echo esc_attr($settings['columns']['size']); ?>"><?php echo esc_html($filterable_tag); ?></a>
	<?php
		}
	?>
</div>
<?php
			}
		}
?>
<div class="portfolio-grid-content-wrapper portfolio_grid_overlay layout-<?php echo esc_attr($column_class); ?> <?php echo esc_attr($spacing_class); ?>" data-cols="<?php echo esc_attr($settings['columns']['size']); ?>">
<?php		
		$animation_class = '';
		if(isset($settings['disable_animation']))
		{
			$animation_class = 'disable_'.$settings['disable_animation'];
		}
		
		$smoove_min_width = 1;
		switch($settings['disable_animation'])
		{
			case 'none':
				$smoove_min_width = 1;
			break;
			
			case 'tablet':
				$smoove_min_width = 769;
			break;
			
			case 'mobile':
				$smoove_min_width = 415;
			break;
			
			case 'all':
				$smoove_min_width = 5000;
			break;
		}
	
		$last_class = '';
		$count = 1;
		
		foreach ( $slides as $slide ) 
		{
			$last_class = '';
			if($count%$settings['columns']['size'] == 0)
			{
				$last_class = 'last';
			}
			
			if(is_numeric($slide['slide_image']['id']) && !empty($slide['slide_image']['id']))
			{
				if(is_numeric($slide['slide_image']['id']) && (!isset($_GET['elementor_library']) OR empty($_GET['elementor_library'])))
				{
					$image_url = wp_get_attachment_image_src($slide['slide_image']['id'], $thumb_image_name, true);
				}
				else
				{
					$image_url[0] = $slide['slide_image']['url'];
				}
				
				//Get image meta data
				$image_alt = get_post_meta($slide['slide_image']['id'], '_wp_attachment_image_alt', true);
			}
			else
			{
				$image_url[0] = $slide['slide_image']['url'];
				$image_alt = '';
			}
			
			$target = $slide['slide_link']['is_external'] ? 'target="_blank"' : '';
			
			//Calculate slide tags
			$slide_tags = '';
			$slide_tags_arr = explode(',', $slide['slide_tag']);
			
			if(is_array($slide_tags_arr) && count($slide_tags_arr) > 1)
			{
				foreach($slide_tags_arr as $slide_tag)
				{
					$slide_tags.= starto_sanitize_title(ltrim($slide_tag)).' ';
				}
			}
			else
			{
				$slide_tags.= starto_sanitize_title(ltrim($slide['slide_tag']));
			}
			
			//Calculation for animation queue
			if(!isset($queue))
			{
				$queue = 1;	
			}
			
			if($queue > $settings['columns']['size'])
			{
				$queue = 1;
			}
?>
		<div class="portfolio-grid-wrapper-overlay grid_tilt <?php echo esc_attr($column_class); ?> <?php echo esc_attr($last_class); ?>  portfolio-<?php echo esc_attr($count); ?> tile scale-anm <?php echo esc_attr($slide_tags); ?> all <?php echo esc_attr($filterable_class); ?> smoove <?php echo esc_attr($animation_class); ?> <?php echo esc_attr($settings['entrance_animation']); ?>" data-delay="<?php echo intval($queue*150); ?>" data-minwidth="<?php echo esc_attr($smoove_min_width); ?>" <?php echo $smoove_animation_attr; ?>>
			<div class="portfolio-grid-img">
				<img src="<?php echo esc_url($image_url[0]); ?>" alt="<?php echo esc_attr($image_alt);?>" />
			</div>

			<div class="figcaption">
				<div class="border-overlay"></div>
				<div class="portfolio-grid-content">
					<div class="portfolio-grid-content-inner">
						<h3 class="portfolio_grid_title"><?php echo esc_html($slide['slide_title']); ?></h3>
						<div class="portfolio-grid-subtitle"><?php echo esc_html($slide['slide_subtitle']); ?></div>
					</div>
				</div>
			</div>
			
			<a href="<?php echo esc_url($slide['slide_link']['url']); ?>" <?php echo esc_attr($target); ?> ></a>
		</div>
<?php
			$count++;
			$queue++;
		}
?>
<?php
	if($settings['spacing'] == 'yes')
	{
?>
<br class="clear"/>
<?php
	}
?>
</div>
<?php
	}
?>
</div>