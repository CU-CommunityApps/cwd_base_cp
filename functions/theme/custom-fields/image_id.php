<?php

// Custom image field
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_60af88ab3499d',
	'title' => 'Image',
	'fields' => array(
		array(
			'key' => 'field_60af88b5744d7',
			'label' => 'Image',
			'name' => 'image_id',
			'type' => 'image',
			'instructions' => 'If there is no featured (header) image chosen for this post, you can add an image here which will be used for the thumbnail image in all archive listings and search results. If left blank, the default Cornell insignia will be used instead.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'uploader' => '',
			'acfe_thumbnail' => 0,
			'return_format' => 'id',
			'preview_size' => 'thumbnail',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
			'library' => 'all',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '!=',
				'value' => 'news',
			),
			array(
				'param' => 'post_type',
				'operator' => '!=',
				'value' => 'events',
			),
			array(
				'param' => 'post_type',
				'operator' => '!=',
				'value' => 'slider',
			),
			array(
				'param' => 'post_type',
				'operator' => '!=',
				'value' => 'frm_display',
			),
			array(
				'param' => 'post_type',
				'operator' => '!=',
				'value' => 'galleries',
			),
			array(
				'param' => 'post_type',
				'operator' => '!=',
				'value' => 'testimonials',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'acfe_display_title' => '',
	'acfe_autosync' => '',
	'acfe_form' => 0,
	'acfe_meta' => '',
	'acfe_note' => '',
));

endif;