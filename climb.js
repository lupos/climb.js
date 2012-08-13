
// Climb
// jQuery extension to add additional dom traversal technique
// Climb up or down the dom tree n levels
// version 0.5 August 7th, 2012
// by Joseph Chagan

(function($) {
    $.climb = function(element, levels) {
       var plugin = this;
       var $element = $(element);
        plugin.init = function(){
            if(levels >= 0){
                for(i = 0; i < levels; i++){
                    $element = $element.parent();
                }

            } else {
                for(i = 0; i > levels; i--){
                    $element = $element.children();
                }
            }
            return $element;
        }
        return plugin.init();

    }
    $.fn.climb = function(levels) {
       return  new $.climb(this, levels);  
    }
})(jQuery);