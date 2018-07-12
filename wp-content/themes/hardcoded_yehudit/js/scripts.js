jQuery(document).ready(function ($){

	var data={
	    class_filter: 'all',
	    model_filter: 'all',
	    action: 'filter_action'
	}

	jQuery( "form .form-group #model" ).change(function() {
	  	data.model_filter = jQuery(this).attr('value');
	  	sendData();
	});

	jQuery( "form .form-group #class" ).change(function() {
	  	data.class_filter = jQuery(this).attr('value');
	  	sendData();
	});

	function sendData(){
		jQuery.post(myajax.url, data,function(data){
		    jQuery('.posts_filters').html(data);
		});
	}

	sendData();	

});

