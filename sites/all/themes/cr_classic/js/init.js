Drupal.behaviors.init = {
	attach: function (context, settings) {
		
		jQuery('.view-paintings .file').each(function(index) {
    	
    	var path = jQuery('> a', this).attr('href');
    	var link = '<a href="' + path + '" />';
    	jQuery('img', this).wrap(link);
    	
    	//console.log(jQuery('> a', this).attr('href'));
    	
    	
    	
		});
		
	}	
}
