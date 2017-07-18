//Case study mjay's

$('#pum-318')
        .on('pumBeforeOpen', function () {
            var $popup = $(this);     $('body').prop('style','overflow:hidden;height:100%;');
            });
$('#pum-318')
        .on('pumAfterClose', function () {
            var $popup = $(this);     $('body').prop('style','overflow:auto;height:auto;');
            });
$('#pum-320')
        .on('pumBeforeOpen', function () {
            var $popup = $(this);     $('body').prop('style','overflow:hidden;height:100%;');
            }); 
            

$('#pum-320')
        .on('pumBeforeClose', function () {
            var $popup = $(this);     
            });
$('#pum-320')
        .on('pumAfterClose', function () {
        $(window).unbind('scroll');
        $('body').prop('style','overflow:auto;height:auto;');	
            window.scrollTo(0,$('#mjaysSpecialRow').offset().top);

            }); 

