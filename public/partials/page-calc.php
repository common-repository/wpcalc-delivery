<?php $options = get_option('wpc_delivery'); ?> 
<div class="wpcmfcalc" id="wpcmfcalc">
<div class="wpcmf-col">
<div class="wpcmf-col-5"><input type="text" placeholder="<?php echo $options[k1]; ?>" name="start"  id="start" value='<?php echo $options[k3]; ?>'/></div><div class="wpcmf-col-2" >
</div><div class="wpcmf-col-5" >
<input type="text" name="end" placeholder="<?php echo $options[k2]; ?>"  id="end"  value='<?php echo $options[k4]; ?>'/></div>
</div>
<div class="wpcmf-col">
<div class="wpcmf-col-5"><input type="text" placeholder="<?php echo $options[k5]; ?>" name="wpd-ves"  id="wpd-ves" onkeyup="return proverka(this);"/></div><div class="wpcmf-col-2" ></div><div class="wpcmf-col-5">
<input type="text"  id="wpd-ob" name="wpd-ob" placeholder="<?php echo $options[k6]; ?>" onkeyup="return proverka(this);"/></div>
</div>

<div id="wpcmf_result_send">
<div class="wpcmf_result_send">
<div id="departure"></div> - <div id="arrival"></div>;
<div id="wpd-weight"></div> kg - <div id="wpd-vol"></div> m<sup>3</sup>;
</div>
<center><div id="result_wpcalc_delivery"></div><center>
</div>

<div class="wpcmf-col button_zakaz">
<div class="wpcmf-col-12"><center><input type="button" onclick="calcRoute();" value="<?php echo $options[k10]; ?>"></center></div>

</div>

</div>


