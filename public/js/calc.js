     var directionDisplay;
     var directionsService = new google.maps.DirectionsService();
     var map;
     var geocoder;
     var gl_start;
     var gl_end;
     function initialize() {
        {
             var input = document.getElementById('start');
             var options = {
                 types: ['geocode']
                 };
            autocomplete = new google.maps.places.Autocomplete(input, options);
            
            var input = document.getElementById('end');
            var options = {
                types: ['geocode']
                };
            autocomplete = new google.maps.places.Autocomplete(input, options);
        } 
        
        geocoder = new google.maps.Geocoder();
        directionsDisplay = new google.maps.DirectionsRenderer();
        map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
        directionsDisplay.setMap(map);
    }
    
    function calcRoute() {
        gl_start = null;
        gl_end = null;
        jQuery('#start').css('border', 'black 1px solid');
        var start = document.getElementById("start").value;        
        geocoder.geocode( { 'address': start}, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                gl_start = results[0].geometry.location;
                map.setCenter(results[0].geometry.location);
                var marker = new google.maps.Marker({
                    map: map, 
                    position: results[0].geometry.location
                });
                checkArgs(); 
                
            } 
            else {
                jQuery('#start').css('border', 'red 1px solid');
                jQuery('#start').focus();                
                }
        });    
        
        var end = document.getElementById("end").value;
        geocoder.geocode( { 'address': end}, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                gl_end = results[0].geometry.location;
                var marker = new google.maps.Marker({
                    map: map, 
                    position: results[0].geometry.location
                });
                checkArgs();
                jQuery('#end').css('border', 'black 1px solid');
            } 
            else {
                jQuery('#end').css('border', 'red 1px solid');
                jQuery('#end').focus();
                }
        });
    }
  
    function checkArgs () {
        if (gl_start == null || gl_end == null) {
            return;
        }
        
        var waypts = [];
        
        var request = {
            origin: gl_start,
            destination: gl_end,
            waypoints: waypts,
            optimizeWaypoints: true,
            travelMode: google.maps.DirectionsTravelMode.DRIVING
        };
        
        directionsService.route(request, function(response, status) {
            if (status == google.maps.DirectionsStatus.OK) {
                directionsDisplay.setDirections(response);
                var route = response.routes[0];
                for (var i = 0; i < route.legs.length; i++) {
                    var routeSegment = i + 1;
                    distance = route.legs[i].distance.value;
                   wpcalcdata();
                    
                }      
            }
        });
  }

jQuery(document).ready(function() {	
	initialize();
	
	
});


function wpcalcdata(){
    var way = distance;
    var ves = jQuery("#wpd-ves").val();
    var ob = jQuery("#wpd-ob").val();
    if ( ves == 0){
        jQuery('#wpd-ves').css('border', 'red 1px solid');
        jQuery('#wpd-ves').focus();
    }    
    else {
        jQuery('#wpd-ves').css('border', 'black 1px solid');
        var data = {
            'action': 'send_wpcalc_delivery',
            way:way,
            ves:ves,
            ob:ob
        };
        jQuery.post(wpcal_delivery.ajaxurl, data, function(calcdata) {
            jQuery('#result_wpcalc_delivery').html(calcdata);
		});
		var start = jQuery("#start").val();	
		var end = jQuery("#end").val();	
		jQuery('#departure').html(start);
		jQuery('#arrival').html(end);
		jQuery('#wpd-weight').html(ves);
		jQuery('#wpd-vol').html(ob); 
	
		
	}
    
    
}



