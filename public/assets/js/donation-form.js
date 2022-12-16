/* ===================================================================
    
    Author          : Valid Theme
    Template Name   : Digilab - SEO & Digital Marketing Agency Template
    Version         : 1.0
    
* ================================================================= */

(function($) {
    "use strict";

    $(document).on('ready', function() {


        $('.form-btn').click(function(){
		    $('.form-btn').removeClass('active').addClass('inactive');
		    $(this).removeClass('inactive').addClass('active');
	    });
      

    }); // end document ready function
})(jQuery); // End jQuery