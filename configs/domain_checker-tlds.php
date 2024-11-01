<?php
/**
*
* fieldconfig for whmcs-domain-checker/TLDs
*
* @package Whmcs_Domain_Checker
* @author Cmsbased info@cmsbased.net
* @license GPL-2.0+
* @link http://cmsbased.net/
* @copyright 2014 Cmsbased
*/


$group = array(
	'label' => __('TLDs','whmcs-domain-checker'),
	'id' => '13489011',
	'master' => 'include_tlds',
	'fields' => array(
		'include_tlds'	=>	array(
			'label'		=> 	__('TLDs','whmcs-domain-checker'),
			'caption'	=>	__('Offer extra TLDs in search results. Will output on the domain checker page.','whmcs-domain-checker'),
			'type'		=>	'textfield',
			'default'	=> 	'.com',
		),
	),
	'multiple'	=> true,
);

