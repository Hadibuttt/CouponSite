/******************************************
    File Name: custom.js
    Template Name: YourCoupon
    Created By: PSD Convert HTML Team
    Envato Profile: http://themeforest.net/user/psdconverthtml
    Website: https://psdconverthtml.com
    Version: 1.0
    Support: support@psdconverthtml.com
/******************************************/

(function($) {
    "use strict";

    // Coupon Code Jquery
    (function() {
        var coupon_list = $('.coupon-list');
        coupon_list.each(function() {
            var code_modal = $(this).find('.code-modal');
            var code_id = code_modal.attr('id');
            $(this).find('.coupon-wrapper .code-link').click(function() {
                var primary_link = $(location).attr('href');
                var ex_link = $(this).attr('data-ex-link');
                window.open('#' + code_id, '_blank');
                window.open(ex_link, '_self');
                $(code_modal).modal('show');
                return false;
            });
            var code_hash_tag = $(location).attr('hash');
            if (code_hash_tag == '#' + code_id) {
                $(code_modal).modal('show');
            }
        });
    })();

    // TOOLTIP
    $('[data-toggle="tooltip"]').tooltip()
    $('[data-toggle="popover"]').popover()

    // Coupon Code Tooltip
    $('.coupon-code').tooltip({
        trigger: 'click',
        placement: 'bottom'
    });

    function setTooltip(button, message) {
        $(button).tooltip('hide')
            .attr('data-original-title', message)
            .tooltip('show');
    }

    // Clipboard (Click and Copy)
    var clipboard = new Clipboard('.coupon-code');
    clipboard.on('success', function(e) {
        setTooltip(e.trigger, 'Copied!');
    });
    clipboard.on('error', function(e) {
        setTooltip(e.trigger, 'Failed!');
        hideTooltip(e.trigger);
    });

    // Ajax Search
    var typeahead = {
        typeaheadInit: function() {
            var jsonData = [{
                'id': 1,
                'name': 'MyLogo.com',
                'image': 'uploads/store_01.jpg'
            }, {
                'id': 2,
                'name': 'Parajanovs.com',
                'image': 'uploads/store_02.jpg'
            }, {
                'id': 3,
                'name': 'Giocondas.com',
                'image': 'uploads/store_03.jpg'
            }, {
                'id': 4,
                'name': 'Omegranate.com',
                'image': 'uploads/store_04.jpg'
            }, {
                'id': 5,
                'name': 'GeorgeMichael.com',
                'image': 'uploads/store_05.jpg'
            }];

            var productNames = [];
            $.each(jsonData, function(index, product) {
                productNames.push(product.name + "#" + product.image + "#" + product.id);
            });
            $('#typeahead').typeahead({
                source: productNames,
                highlighter: function(item) {
                    var parts = item.split('#'),
                        html = '<div><div class="typeahead-inner" id="' + parts[2] + '">';
                    html += '<div class="item-img" style="background-image: url(' + parts[1] + ')"></div>';
                    html += '<div class="item-body">';
                    html += '<h5 class="item-heading">' + parts[0] + '</h5>';
                    html += '</div>';
                    html += '</div></div>';

                    var query = this.query;
                    var reEscQuery = query.replace(/[\-\[\]\/\{\}\(\)\*\+\?\.\\\^\$\|]/g, "\\$&");
                    var reQuery = new RegExp('(' + reEscQuery + ')', "gi");
                    var jElem = $(html);
                    var textNodes = $(jElem.find('*')).add(jElem).contents().filter(function() {
                        return this.nodeType === 3;
                    });
                    textNodes.replaceWith(function() {
                        return $(this).text().replace(reQuery, '<strong>$1</strong>');
                    });

                    return jElem.html();
                },
                updater: function(selectedName) {
                    var name = selectedName.split('#')[0];
                    return name;
                }
            });
        },

        initialize: function() {
            var _this = this;
            _this.typeaheadInit();
        }
    };
    $(document).ready(function() {
        typeahead.initialize();
    });

})(jQuery);