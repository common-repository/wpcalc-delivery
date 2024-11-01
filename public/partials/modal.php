<?php
		$options = get_option('wpcmf_c');		
		$calc = '';
		$calc .= '<noindex>';
		$calc .= '<div id="wpcalc_calc">';	
		$calc .= '<div class="overlaywpcalcmf"></div>';
		$calc .= '<div class="wpcalcmf wpcalcinmodal">'; 
		$calc .= '<div class="wpcmf">';		
		if ($options[title_display] == 1)
			$calc .= '<h2>'.$options['title'].'</h2>';
		if ($options[text_display] == 1)
			$calc .= $options['text'];
		$calc .= '<div id="result_wpcalc_calc"></div>';		
		if ($options[textarea_display] == 1)
			$calc .= '<textarea class="textarea" placeholder="'.$options['textarea'].'"></textarea>';
		if ($options[name_display] == 1)
			$calc .= '<input class="name" type="text" placeholder="'.$options['name'].'">';
		if ($options[email_display] == 1)
			$calc .= '<input class="email" type="text" placeholder="'.$options['email'].'">';
		if ($options[phone_display] == 1)
			$calc .= '<input class="phone" type="text" placeholder="'.$options['phone'].'">';
		$calc .= '<input type="hidden" name="message" class="message" value="">';
		$calc .= '<input type="button" onclick="wpcmf(4);" value="'.$options[button_send].'">';
		$calc .= '</div>';				
		$calc .= '<span class="wpcalcmfclose"></span>';
		$calc .= '</div>';
		$calc .= '</div>';
		$calc .= '</noindex>';		
		echo $calc;  
?>


