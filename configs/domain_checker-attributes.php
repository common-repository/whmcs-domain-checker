<?php
/**
*
* fieldconfig for whmcs-domain-checker/Attributes
*
* @package Whmcs_Domain_Checker
* @author Cmsbased info@cmsbased.net
* @license GPL-2.0+
* @link http://cmsbased.net/
* @copyright 2014 Cmsbased
*/


$group = array(
	'label' => __('Attributes','whmcs-domain-checker'),
	'id' => '2401018',
	'master' => 'heading_text',
	'fields' => array(
		'heading_text'	=>	array(
			'label'		=> 	__('Heading Text','whmcs-domain-checker'),
          'caption'   =>  '',
			'type'		=>	'textfield',
			'default'	=> 	'Domains starting at $9.99.',
		),
		'header_text_size'	=>	array(
			'label'		=> 	__('Header Text Size','whmcs-domain-checker'),
			'caption'	=>	__('Header Size (H1-H6)','whmcs-domain-checker'),
			'type'		=>	'slider',
			'default'	=> 	'1,6|4',
			'inline'	=> 	true,
		),
		'text_color'	=>	array(
			'label'		=> 	__('Header Text Color','whmcs-domain-checker'),
          'caption'   =>  '',
			'type'		=>	'colorpicker',
			'default'	=> 	'#333333',
		),
		'input_form_size'	=>	array(
			'label'		=> 	__('Input Form Size','whmcs-domain-checker'),
          'caption'   =>  '',
			'type'		=>	'onoff',
			'default'	=> 	'input-group-sm||Small,*input-group-default||Normal,input-group-lg||Large',
			'inline'	=> 	true,
		),
		'input_box_placeholder'	=>	array(
			'label'		=> 	__('Input Box Placeholder','whmcs-domain-checker'),
          'caption'   =>  '',
			'type'		=>	'textfield',
			'default'	=> 	'Enter domain here',
		),
		'button_text'	=>	array(
			'label'		=> 	__('Button Text','whmcs-domain-checker'),
          'caption'   =>  '',
			'type'		=>	'smalltextfield',
			'default'	=> 	'Search',
		),
		'button_text_color'	=>	array(
			'label'		=> 	__('Button Text Color','whmcs-domain-checker'),
          'caption'   =>  '',
			'type'		=>	'colorpicker',
			'default'	=> 	'#333333',
		),
		'button_color'	=>	array(
			'label'		=> 	__('Button Color','whmcs-domain-checker'),
          'caption'   =>  '',
			'type'		=>	'colorpicker',
			'default'	=> 	'#DDDDDD',
		),
		'url'	=>	array(
			'label'		=> 	__('URL','whmcs-domain-checker'),
			'caption'	=>	__('WHMCS URL','whmcs-domain-checker'),
			'type'		=>	'textfield',
			'default'	=> 	'http://www.example.com/whmcs/',
		),
		'tlds'	=>	array(
			'label'		=> 	__('TLDs','whmcs-domain-checker'),
			'caption'	=>	__('TLDs in search. TLDs can be added in TLDs tab.','whmcs-domain-checker'),
			'type'		=>	'onoff',
			'default'	=> 	'*enable||Enable,disable||Disable',
			'inline'	=> 	true,
		),
	),
	'styles'	=> array(
		'simple-slider.css',
		'minicolors.css',
		'toggles.css',
	),
	'scripts'	=> array(
		'simple-slider.min.js',
		'minicolors.js',
		'toggles.min.js',
	),
	'multiple'	=> false,
);

