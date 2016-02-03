(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter22208978 = new Ya.Metrika({id:22208978,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
          w.yaCounter = w.yaCounter22208978;
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");

    $('.trigger').popover({
        trigger: 'hover'
    });
    $('.trigger-right').popover({
        trigger: 'hover',
        placement: 'right'
    });
    $(function () {
        $('.ckeditor table').addClass('table table-striped');
        $('.ckeditor img').css('margin', "0 25px 5px 5px");
    });