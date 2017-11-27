/*
 * ================================================================
 * 处理cookie
 * 序列化cookie
 * $.cookie(key)        读取cookie
 * $.cookie(key, value) 设置cookie
 * $.cookie(key, null)  删除cookie
 * ================================================================
 */
+ function (window, $) {
    'use strict';

    function Cookie(key, value) {
        this.data = {};
        this.init();
    }
    Cookie.prototype.init = function () {
        var _this      = this,
            cookie     = document.cookie,
            arr        = cookie.split('; ');

        for (var i = 0; i < arr.length; i ++) {
            _this.data[arr[i].split('=')[0]] = arr[i].split('=')[1];
        }
    }

    Cookie.prototype.hasCookie = function (key) {
        var _this = this;

        return (_this.data[key] === undefined) ? false : true;
    }

    Cookie.prototype.addCookie = function (key, value) {
        var _this = this;

        document.cookie = key + "=" + value;

        _this.init();
    }

    Cookie.prototype.getCookie = function (key) {
        var _this = this;

        return _this.hasCookie(key) ? _this.data[key] : null;
    }

    Cookie.prototype.removeCookie = function (key) {
        var _this = this;

        if (_this.hasCookie(key)) {
            document.cookie = key + "=" + '';
        }
        _this.init();
    }
    $.extend({
        cookie: function (key, value) {
            var cookie = new Cookie(key, value);

            if (value === undefined) {
                return cookie.getCookie(key);
            } else if (value === null){
                cookie.removeCookie(key);
                return null;
            } else {
                cookie.addCookie(key, value);
                return cookie.getCookie(key);
            }
        }
    });

}(window, jQuery);

/*
 * ================================================================
 * toast提示框
 * ================================================================
 */
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