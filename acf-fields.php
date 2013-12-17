<?php if(function_exists("register_field_group")) {register_field_group(array (
		'id' => 'acf_cateogry-settings',
		'title' => 'Cateogry Settings',
		'fields' => array (
			array (
				'key' => 'field_529ad2d1f7eca',
				'label' => 'Customise',
				'name' => 'customise',
				'type' => 'true_false',
				'message' => 'Customise the category view',
				'default_value' => 0,
			),
			array (
				'key' => 'field_529ad2477e44f',
				'label' => 'Header Colour',
				'name' => 'colour',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_529ad2d1f7eca',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '234f65',
				'placeholder' => '',
				'prepend' => '#',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_529ad2697e450',
				'label' => 'Background Image',
				'name' => 'background_image',
				'type' => 'image',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_529ad2d1f7eca',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'ef_taxonomy',
					'operator' => '==',
					'value' => 'category',
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
	));register_field_group(array (
		'id' => 'acf_details',
		'title' => 'Details',
		'fields' => array (
			array (
				'key' => 'field_52940601974d5',
				'label' => 'Subtitle',
				'name' => 'subtitle',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5297a948512f9',
				'label' => 'Message Box',
				'name' => 'show_message_box',
				'type' => 'true_false',
				'message' => 'Show the message box',
				'default_value' => 0,
			),
			array (
				'key' => 'field_5297a994be3f0',
				'label' => 'Message Title',
				'name' => 'message_title',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_5297a948512f9',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5297a9aabe3f1',
				'label' => 'Message Text',
				'name' => 'message_text',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_5297a948512f9',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => 100,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'adventure',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
				0 => 'the_content',
				1 => 'author',
			),
		),
		'menu_order' => 0,
	));register_field_group(array (
		'id' => 'acf_display-settings',
		'title' => 'Display Settings',
		'fields' => array (
			array (
				'key' => 'field_52954a2131b2e',
				'label' => 'Title',
				'name' => 'title',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_52954411104ce',
				'label' => 'Description',
				'name' => 'description',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'no',
			),
			array (
				'key' => 'field_52954426104cf',
				'label' => 'Aside',
				'name' => 'aside',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'no',
			),
			array (
				'key' => 'field_52953d2c3cfc3',
				'label' => 'Feature Area',
				'name' => 'feature_area',
				'type' => 'true_false',
				'message' => 'Show \'Just launched\' adventures.',
				'default_value' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'ef_taxonomy',
					'operator' => '==',
					'value' => 'adventure_category',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));register_field_group(array (
		'id' => 'acf_layout',
		'title' => 'Layout',
		'fields' => array (
			array (
				'key' => 'field_5296c59c0b325',
				'label' => 'Layout',
				'name' => 'layout',
				'type' => 'flexible_content',
				'instructions' => 'Displayed as a wide content block.',
				'layouts' => array (
					array (
						'label' => 'Content Block',
						'name' => 'content_block',
						'display' => 'row',
						'min' => '',
						'max' => '',
						'sub_fields' => array (
							array (
								'key' => 'field_5296c5b40b326',
								'label' => 'Content',
								'name' => 'content',
								'type' => 'wysiwyg',
								'column_width' => '',
								'default_value' => '',
								'toolbar' => 'full',
								'media_upload' => 'no',
							),
						),
					),
					array (
						'label' => 'Meta',
						'name' => 'meta',
						'display' => 'row',
						'min' => '',
						'max' => '',
						'sub_fields' => array (
							array (
								'key' => 'field_5296c602cf242',
								'label' => 'Social Buttons',
								'name' => 'social_buttons',
								'type' => 'text',
								'column_width' => '',
								'default_value' => 'Invite a Friend',
								'placeholder' => '',
								'prepend' => 'Title',
								'append' => '',
								'formatting' => 'html',
								'maxlength' => '',
							),
							array (
								'key' => 'field_5296c62ecf243',
								'label' => 'Register Text',
								'name' => 'register_text',
								'type' => 'text',
								'column_width' => '',
								'default_value' => 'Register Now',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'html',
								'maxlength' => '',
							),
						),
					),
					array (
						'label' => 'Image Bar',
						'name' => 'image_bar',
						'display' => 'row',
						'min' => '',
						'max' => '',
						'sub_fields' => array (
							array (
								'key' => 'field_5296c645cf245',
								'label' => 'Images',
								'name' => 'images',
								'type' => 'repeater',
								'column_width' => '',
								'sub_fields' => array (
									array (
										'key' => 'field_5296c655cf246',
										'label' => 'Image',
										'name' => 'image',
										'type' => 'image',
										'column_width' => '',
										'save_format' => 'object',
										'preview_size' => 'thumbnail',
										'library' => 'uploadedTo',
									),
								),
								'row_min' => 1,
								'row_limit' => 4,
								'layout' => 'table',
								'button_label' => 'Add Image',
							),
						),
					),
					array (
						'label' => 'Columns',
						'name' => 'columns',
						'display' => 'row',
						'min' => '',
						'max' => '',
						'sub_fields' => array (
							array (
								'key' => 'field_5296c67d8c6c9',
								'label' => 'Columns',
								'name' => 'columns',
								'type' => 'repeater',
								'column_width' => '',
								'sub_fields' => array (
									array (
										'key' => 'field_5296c6998c6ca',
										'label' => 'Content Areas',
										'name' => 'column',
										'type' => 'wysiwyg',
										'column_width' => '',
										'default_value' => '',
										'toolbar' => 'full',
										'media_upload' => 'no',
									),
								),
								'row_min' => 1,
								'row_limit' => 4,
								'layout' => 'table',
								'button_label' => 'Add Column',
							),
						),
					),
				),
				'button_label' => 'Add New',
				'min' => '',
				'max' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'adventure',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'the_content',
				1 => 'author',
			),
		),
		'menu_order' => 0,
	));register_field_group(array (
		'id' => 'acf_settings',
		'title' => 'Settings',
		'fields' => array (
			array (
				'key' => 'field_529404ba87bb9',
				'label' => 'Trip Date',
				'name' => 'date',
				'type' => 'date_picker',
				'date_format' => 'yymmdd',
				'display_format' => 'dd/mm/yy',
				'first_day' => 1,
			),
			array (
				'key' => 'field_52940786b53aa',
				'label' => 'Partner Organisation',
				'name' => 'partner_organisation',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_529aa1c8a689a',
				'label' => 'Partner Website',
				'name' => 'partner_website',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_529407accaac8',
				'label' => 'Brand Colour',
				'name' => 'brand_colour',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => 'FFFFFF',
				'prepend' => '#',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => 7,
			),
			array (
				'key' => 'field_52943a4b820b2',
				'label' => 'Contrast Colour',
				'name' => 'contrast_colour',
				'type' => 'text',
				'default_value' => 'FFFFFF',
				'placeholder' => '',
				'prepend' => '#',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_529409340ae30',
				'label' => 'Brand Logo',
				'name' => 'brand_logo',
				'type' => 'image',
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'uploadedTo',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'adventure',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'side',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));register_field_group(array (
		'id' => 'acf_form-settings',
		'title' => 'Form Settings',
		'fields' => array (
			array (
				'key' => 'field_5297ab8e2e52a',
				'label' => 'Visibility',
				'name' => 'show',
				'type' => 'true_false',
				'message' => 'Show the form area',
				'default_value' => 1,
			),
			array (
				'key' => 'field_5296c6ef68d88',
				'label' => 'Title',
				'name' => 'form_title',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5296c6f968d89',
				'label' => 'Content',
				'name' => 'form_content',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'basic',
				'media_upload' => 'no',
			),
			array (
				'key' => 'field_529bf60cb7099',
				'label' => 'Salesforce Program',
				'name' => 'salesforce',
				'type' => 'text',
				'instructions' => 'Please enter the Salesforce Program assigned for this adventure (e.g. Trek for Animals)',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_529c03f3e1b31',
				'label' => 'Thankyou Title',
				'name' => 'form_thankyou_title',
				'type' => 'text',
				'default_value' => 'Thanks for your enquiry',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_529c0419e1b32',
				'label' => 'Thankyou Content',
				'name' => 'form_thankyou_content',
				'type' => 'wysiwyg',
				'default_value' => 'Thanks you for your enquiry. We will be in touch with more information.',
				'toolbar' => 'basic',
				'media_upload' => 'no',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'adventure',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
				0 => 'the_content',
				1 => 'author',
			),
		),
		'menu_order' => 1,
	));register_field_group(array (
		'id' => 'acf_related-adventures',
		'title' => 'Related Adventures',
		'fields' => array (
			array (
				'key' => 'field_5297bf32b28f3',
				'label' => 'Visibility',
				'name' => 'show_related',
				'type' => 'true_false',
				'message' => 'Show related adventures',
				'default_value' => 0,
			),
			array (
				'key' => 'field_5296c73e1a104',
				'label' => 'Title',
				'name' => 'related_title',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_5297bf32b28f3',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => 'Other Adventures',
				'placeholder' => 'Other Adventures',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5296c74b1a105',
				'label' => 'Adventures',
				'name' => 'related_adventures',
				'type' => 'relationship',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_5297bf32b28f3',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'return_format' => 'object',
				'post_type' => array (
					0 => 'adventure',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'filters' => array (
					0 => 'search',
				),
				'result_elements' => array (
					0 => 'featured_image',
					1 => 'post_type',
					2 => 'post_title',
				),
				'max' => 4,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'adventure',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
				0 => 'the_content',
				1 => 'custom_fields',
				2 => 'author',
			),
		),
		'menu_order' => 2,
	));}