+ function (window, $) {
    'use strict';

    /*
     * 默认参数
     */
    var defaults = {
        type: 'success',
        message: '打开了',
        duration: 1000,
    };

    /*
     * 构造函数
     * @param options
     */
    function Toast(options) {
        this.options = $.extend(defaults, options || {});
        this.init();
    }
    
    Toast.prototype.init = function () {
        
    }

    Toast.prototype.createDOM = function () {
        var _this   = this,
            options = _this.options,
            type    = options.type,
            message = options.message;

        _this.$toast = $('<div class="toast ' + type + ' clearfix"><p >' + message + '</p><a href="javascript:;" class="fa fa-close"></a></div>');
    }


}(window, jQuery);