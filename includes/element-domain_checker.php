<div class="ce-row domainchecker">
<h<?php echo implode(", ", (array)$atts['header_text_size']); ?> style="margin-top:10px; color:<?php echo implode(", ", (array)$atts['text_color']); ?>"><?php echo implode(", ", (array)$atts['heading_text']); ?></h<?php echo implode(", ", (array)$atts['header_text_size']); ?>>
<form action="<?php echo implode(", ", (array)$atts['url']); ?>domainchecker.php" method="post"><input type="hidden" name="token" value="">
<div class="input-group <?php echo implode(", ", (array)$atts['input_form_size']); ?>">
<input type="hidden" name="direct" value="true">
<?php if("enable" == $atts['tlds']){ ?>
<?php foreach((array) $groups['include_tlds'] as $increment=>$context){ ?>
<input type="hidden" name="tlds[]" value="<?php echo $context['include_tlds']; ?>">
<?php } ?>
<?php } ?>
<input class="form-control" type="text" name="domain" placeholder="<?php echo implode(", ", (array)$atts['input_box_placeholder']); ?>"><span class="input-group-btn"><button class="btn btn-light" type="submit"><?php echo implode(", ", (array)$atts['button_text']); ?></button></span></div>
</form>
</div>