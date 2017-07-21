var img = jQuery(".single-post img.wp-post-image")[0]; // Get my img elem
var pic_real_width, pic_real_height;
jQuery("<img/>") // Make in memory copy of image to avoid css issues
    .prop("src", jQuery(img).prop("src"))
    .load(function() {
        jQuery(img).width( this.width);   // Note: $(this).width() will not
        jQuery(img).height(this.height); // work for in memory images.
    });
