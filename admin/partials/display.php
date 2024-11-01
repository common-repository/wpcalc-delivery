 <script>
      
jQuery(document).ready(function(){
    totalRows = jQuery("#kolvo").val(); 
    
})    
function ac_addRow(){    
    Row=totalRows;
    totalRows++;
    jQuery("#ac_table").append('<tr id="ac_row['+Row+']"><td><input type="number" step="0.01" name="delivery_weight['+Row+']" value=""/></td><td><input type="number" step="0.01" name="delivery_price['+Row+']" value=""/></td></tr>')
}
function ac_delRow(){
    Rows=totalRows-1;
    jQuery("#weight_row_"+Rows).remove();  
    jQuery("#price_row_"+Rows).remove();
    totalRows--;
}


</script>
<a href="http://wpcalc.com/" target="_blank"><img src="<?php echo plugins_url('knowhow-logo.png', __FILE__); ?>"></a>

<form method="post" name="delivery_options" action="options.php">
<?php wp_nonce_field('update-options'); ?>
<?php $options = get_option('wpc_delivery'); ?> 
<?php $options_weight = get_option('delivery_weight'); ?> 
<?php $options_price = get_option('delivery_price'); ?> 


 <h2>Setting Calculator delivery</h2>

   <div class="wpcmfadmintext">  
<p/>
To integrate the shipping calculator in the page or post using shortcode <b>[wpcdelivery]</b>. If you have any questions, please contact ad@wpcalc.com. <a href="http://wpcalc.com/">wpcalc.com</a>

Features of the paid version can be viewed here <a href="http://wpcalc.com/en/plugin-delivery/">http://wpcalc.com/en/plugin-delivery/</a>

</div>    

<div class="metabox-holder" id="poststuff">
<div class="meta-box-sortables">
<script>
jQuery(document).ready(function($) {
	$('.postbox').children('h3, .handlediv').click(function(){ $(this).siblings('.inside').toggle();});
});
</script>

<div class="postbox">
    <div title="<?php _e("Click to open/close", "wp-favorite-posts"); ?>" class="handlediv">
      <br>
    </div>
    <h3 class="hndle"><span>Options calculator</span></h3>
    <div class="inside" style="display: block;">
    
    <h4><span>The cost per kilometer</span></h4>
    
    
    <table>
<tr><th><b>Weight</b>  </th><th> <b>The cost of 1 km</b></th></tr>
<tbody id="ac_table">
<tr><td>
<table>


<?php 
  foreach($options_weight as $key => $value) 
  { 
     echo '<tr id="weight_row_'.$key.'"><td><input type="number" step="0.01" name="delivery_weight['.$key.']" value="'.$value.'"/></td></tr>'; 
  } 
?>
</table></td>
<td>
<table>
<?php 
  foreach($options_price as $key => $value) 
  { 
     echo '<tr id="price_row_'.$key.'"><td><input type="number" step="0.01" name="delivery_price['.$key.']" value="'.$value.'"/> </td></tr>'; 
  } 
?>
</table>
</td>
</tr>
</tbody>

<tr><td><input type="button" onclick="ac_addRow();" value="Add"/></td><td><input type="button" onclick="ac_delRow();" value="Delete"/></td></tr>


</table>

<h4><span>Settings form</span></h4>
<table>
<tr><td>Departure</td><td> <input type="text" name="wpc_delivery[k1]" value="<?php echo sanitize_text_field ( $options['k1'] ); ?>" /></td></tr>
<tr><td>Arrival</td><td> <input type="text" name="wpc_delivery[k2]" value="<?php echo sanitize_text_field ( $options['k2'] ); ?>" /></td></tr>

<tr><td>Place Departure</td><td> <input type="text" name="wpc_delivery[k3]" value="<?php echo sanitize_text_field ( $options['k3'] ); ?>" /></td></tr>
<tr><td>Place Arrival</td><td> <input type="text" name="wpc_delivery[k4]" value="<?php echo sanitize_text_field ( $options['k4'] ); ?>" /></td></tr>

<tr><td>Weight</td><td> <input type="text" name="wpc_delivery[k5]" value="<?php echo sanitize_text_field ( $options['k5'] ); ?>" /></td></tr>
<tr><td>Volume</td><td> <input type="text" name="wpc_delivery[k6]" value="<?php echo sanitize_text_field ( $options['k6'] ); ?>" /></td></tr>
<tr><td>1 cubic meter</td><td> <input type="number" step="0.01" name="wpc_delivery[k13]" value="<?php echo sanitize_text_field ( $options['k13'] ); ?>" /> <?php esc_attr_e("kg", "wpcalc-delivery") ?></td></tr>
<tr><td>Currency</td><td> <input type="text" name="wpc_delivery[k12]" value="<?php echo sanitize_text_field ( $options['k12'] ); ?>" /></td></tr>

<tr><td>Text button "Calculate"</td><td> <input type="text" name="wpc_delivery[k10]" value="<?php echo sanitize_text_field ( $options['k10'] ); ?>" /></td></tr>

<tr><td>Text button "Order"</td><td> <input type="text" name="wpc_delivery[k11]" value="<?php echo sanitize_text_field ( $options['k11'] ); ?>" /></td></tr>

<tr><td>Price size</td><td> <input type="number" name="wpc_delivery[k7]" value="<?php echo sanitize_text_field ( $options['k7'] ); ?>" /> px</td></tr>
<tr><td>Color Price</td><td> <input type="text" name="wpc_delivery[k8]" value="<?php echo sanitize_text_field ( $options['k8'] ); ?>" class="colorbox"/> </td></tr>
<tr><td>Text error - max weight</td><td> <input type="text" name="wpc_delivery[k9]" value="<?php echo sanitize_text_field ( $options['k9'] ); ?>"/> </td></tr>
</table>
  
<input type="hidden" name="kolvo" id="kolvo" value="<?php echo count($options_weight);?>"/>
<input type="hidden" name="action" value="update" />
<input type="hidden" name="page_options" value="wpc_delivery,delivery_weight,delivery_price" />
<p class="submit"><input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" /></p>
</form>
            </div>
</div>

<iframe src="http://wpcalc.com/plug/" width="100%" height="550px"></iframe>
</div>
</div>

