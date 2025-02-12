<?php
	if(empty($settings['default'])){
		$settings['default'] = '*true||'.__('On', 'whmcs-domain-checker').',false||'.__('Off', 'whmcs-domain-checker');
		if(empty($value)){
			$value = $settings['default'];
		}
	}
	$parts = explode(',', $settings['default']);
	$default = null;
?>
<span class="toggle-group">
	<span class="toggle-group-buttons whmcs_domain_checker-toggle-group-buttons">
		<?php foreach($parts as $part){
				$toggle = explode('||', $part);
				$isSet = '';
				if(!isset($toggle[1])){
					$toggle[1] = $toggle[0];
				}
				if( false !== strpos($part, '*')){
					// this is the default
					$toggle[0] = str_replace('*', '', $toggle[0]);
					$default = $toggle[0];
					if( $settings['default'] === $value){
						$value = $toggle[0];
					}
				}
				// is there a true value set
				if($value == $toggle[0]){
					$default = $value;
					$isSet = ' button-primary';
				}
				echo '<span class="button'.$isSet.'" data-value="'.sanitize_text_field($toggle[0]).'">'.$toggle[1].'</span>';
			}
		?>
	</span>
	<input name="<?php echo $name; ?>" class="whmcs_domain_checker_toggle_field" type="hidden" ref="<?php echo $groupid; ?>" id="<?php echo $id; ?>" value="<?php echo sanitize_text_field( $value ); ?>">
</span>
