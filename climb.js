
// Climb
// jQuery extension to add additional dom traversal technique
// Climb up or down the dom tree n levels
// version 0.6 August 14th, 2012
// by Joseph Chagan

(function($) {
    $.climb = function(element, levels, options) {
        var defaults = {
            swatchName : '.swatch'
        },
        plugin = this,
        $element = $(element);
        plugin.init = function(){
            if(levels >= 0){
                for(i = 0; i < levels; i++){
                    $element = $element.parent();
                }
            }
            return $element;
        }
        return plugin.init();
    }
    $.fn.climb = function(levels, options) {
       return  new $.climb(this, levels, options);  
    }
})(jQuery);