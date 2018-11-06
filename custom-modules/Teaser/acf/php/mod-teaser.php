<?php

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
    'key' => 'group_5ba8e7535935d',
    'title' => 'Teaser Block',
    'fields' => array(
	array(
	    'key' => 'field_5ba8e7536891b',
	    'label' => 'Columns',
	    'name' => 'index_columns',
	    'type' => 'select',
	    'instructions' => '',
	    'required' => 1,
	    'conditional_logic' => 0,
	    'wrapper' => array(
		'width' => '',
		'class' => '',
		'id' => '',
	    ),
	    'choices' => array(
		'grid-md-12' => '1',
		'grid-md-6' => '2',
		'grid-md-4' => '3',
	    ),
	    'default_value' => array(
		0 => 'grid-md-12',
	    ),
	    'allow_null' => 0,
	    'multiple' => 0,
	    'ui' => 0,
	    'ajax' => 0,
	    'return_format' => 'value',
	    'placeholder' => '',
	),
	array(
	    'key' => 'field_5ba8e75368989',
	    'label' => 'Teaser Block',
	    'name' => 'teaser',
	    'type' => 'repeater',
	    'instructions' => '',
	    'required' => 1,
	    'conditional_logic' => 0,
	    'wrapper' => array(
		'width' => '',
		'class' => '',
		'id' => '',
	    ),
	    'collapsed' => '',
	    'min' => 1,
	    'max' => 0,
	    'layout' => 'block',
	    'button_label' => 'Lägg till rad',
	    'sub_fields' => array(
		array(
		    'key' => 'field_5ba8e75373e32',
		    'label' => 'Upload image',
		    'name' => 'image',
		    'type' => 'image',
		    'instructions' => '',
		    'required' => 1,
		    'conditional_logic' => 0,
		    'wrapper' => array(
			'width' => '75',
			'class' => '',
			'id' => '',
		    ),
		    'return_format' => 'object',
		    'preview_size' => 'thumbnail',
		    'library' => 'all',
		    'min_width' => '',
		    'min_height' => '',
		    'min_size' => '',
		    'max_width' => '',
		    'max_height' => '',
		    'max_size' => '',
		    'mime_types' => '',
		),
		array(
		    'key' => 'field_5ba8e75373eaa',
		    'label' => 'Titel',
		    'name' => 'title',
		    'type' => 'text',
		    'instructions' => '',
		    'required' => 1,
		    'conditional_logic' => 0,
		    'wrapper' => array(
			'width' => '',
			'class' => '',
			'id' => '',
		    ),
		    'default_value' => '',
		    'placeholder' => '',
		    'prepend' => '',
		    'append' => '',
		    'maxlength' => 40,
		),
		array(
		    'key' => 'field_5ba8e75373fac',
		    'label' => 'Ingress (250)',
		    'name' => 'lead',
		    'type' => 'textarea',
		    'instructions' => '',
		    'required' => 1,
		    'conditional_logic' => 0,
		    'wrapper' => array(
			'width' => '',
			'class' => '',
			'id' => '',
		    ),
		    'default_value' => '',
		    'placeholder' => '',
		    'maxlength' => 250,
		    'rows' => '',
		    'new_lines' => '',
		),
		array(
		    'key' => 'field_5ba8e75373c48',
		    'label' => 'Link type',
		    'name' => 'link_type',
		    'type' => 'radio',
		    'instructions' => '',
		    'required' => 1,
		    'conditional_logic' => 0,
		    'wrapper' => array(
			'width' => '',
			'class' => '',
			'id' => '',
		    ),
		    'choices' => array(
			'internal' => 'Internal',
			'external' => 'External',
		    ),
		    'allow_null' => 0,
		    'other_choice' => 0,
		    'save_other_choice' => 0,
		    'default_value' => '',
		    'layout' => 'horizontal',
		    'return_format' => 'value',
		),
		array(
		    'key' => 'field_5ba8e75373cd3',
		    'label' => 'Page',
		    'name' => 'link_url',
		    'type' => 'page_link',
		    'instructions' => '',
		    'required' => 1,
		    'conditional_logic' => array(
			array(
			    array(
				'field' => 'field_5ba8e75373c48',
				'operator' => '==',
				'value' => 'internal',
			    ),
			),
		    ),
		    'wrapper' => array(
			'width' => '',
			'class' => '',
			'id' => '',
		    ),
		    'post_type' => array(
			0 => 'page',
		    ),
		    'taxonomy' => array(
		    ),
		    'allow_null' => 0,
		    'allow_archives' => 1,
		    'multiple' => 0,
		),
		array(
		    'key' => 'field_5ba8e75373d46',
		    'label' => 'Link url',
		    'name' => 'link_url',
		    'type' => 'url',
		    'instructions' => '',
		    'required' => 1,
		    'conditional_logic' => array(
			array(
			    array(
				'field' => 'field_5ba8e75373c48',
				'operator' => '==',
				'value' => 'external',
			    ),
			),
		    ),
		    'wrapper' => array(
			'width' => '',
			'class' => '',
			'id' => '',
		    ),
		    'default_value' => '',
		    'placeholder' => '',
		),
		array(
		    'key' => 'field_5ba8e75374025',
		    'label' => 'Färg',
		    'name' => 'color',
		    'type' => 'select',
		    'instructions' => '',
		    'required' => 1,
		    'conditional_logic' => 0,
		    'wrapper' => array(
			'width' => '',
			'class' => '',
			'id' => '',
		    ),
		    'choices' => array(
			'red' => 'Red',
			'blue' => 'Blue',
			'green' => 'Green',
                        'yellow' => 'Yellow',
		    ),
		    'default_value' => array(
			0 => 'blue',
		    ),
		    'allow_null' => 0,
		    'multiple' => 0,
		    'ui' => 0,
		    'ajax' => 0,
		    'return_format' => 'value',
		    'placeholder' => '',
		),
	    ),
	),
    ),
    'location' => array(
	array(
	    array(
		'param' => 'post_type',
		'operator' => '==',
		'value' => 'mod-teaser',
	    ),
	),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => array(
	0 => 'permalink',
	1 => 'the_content',
	2 => 'excerpt',
	3 => 'discussion',
	4 => 'comments',
	5 => 'revisions',
	6 => 'slug',
	7 => 'author',
	8 => 'format',
	9 => 'page_attributes',
	10 => 'featured_image',
	11 => 'categories',
	12 => 'tags',
	13 => 'send-trackbacks',
    ),
    'active' => 1,
    'description' => '',
));

endif;
