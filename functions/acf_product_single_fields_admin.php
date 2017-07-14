<?php

if(function_exists("register_field_group")) {

	register_field_group(array (
		'id' => 'acf_additional_acf',
		'title' => 'additional_messages',
		'fields' => array (
			array (
				'key' => 'field_vid',
				'label' => 'Video',
				'name' => 'vid',
				'instructions' => 'copy / paste youtube url here',
				'type' => 'wysiwyg',
				'toolbar' => 'full',
				'media_upload' => 'no',
			),
			array (
				'key' => 'field_additional_message',
				'label' => 'Additional Message',
				'name' => 'additional_message',
				'instructions' => 'Enter Message, delayed delivery, no stock. Message is large and purple by default',
				'type' => 'textarea',
				'toolbar' => 'full',
				'media_upload' => 'no',
			),
			array (
				'key' => 'field_acf_colors',
				'label' => 'Product Colors',
				'name' => 'acf_colors',
				'instructions' => 'New Colors Field: displayed to the user ie: blue, red, green. First this field checks to see if any colors are in the old color field. If the old field is empty this new color field is used for the color dsplay',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'product',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}

?>
