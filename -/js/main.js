// head {
var __nodeId__ = "std_ui_flot__main";
var __nodeNs__ = "std_ui_flot";
// }

(function (__nodeNs__, __nodeId__) {
    $.widget(__nodeNs__ + "." + __nodeId__, $.ewma.node, {
        options: {},

        __create: function () {
            var w = this;
            var o = w.options;
            var $w = w.element;

            w.render();
        },

        render: function () {
            var w = this;
            var o = w.options;
            var $w = w.element;

            $.plot($w, o.data, o.options);
        }
    });
})(__nodeNs__, __nodeId__);
