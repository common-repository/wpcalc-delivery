  jQuery(document).ready(function($){      
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

});
