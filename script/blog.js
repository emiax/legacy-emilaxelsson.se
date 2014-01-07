var more;

function init() {
    more = $('#more');
    var moreLink = $('#more a');

    if (moreLink.length) {
        var href = moreLink.attr('href');
        var strStart = href.indexOf('?start=') + '?start='.length;
        var i = href.substr(strStart);
        
        moreLink.click(function (evt) {
            evt.preventDefault();
            $.ajax({
                url: 'more.php',
                data: {start: i},
                success: recieveMore,
                dataType: 'html'
            });
        });
    }

    var togglables = $('.togglable');
    togglables.each(function () {
        var elem = $(this);
        var id = elem.attr('id');
        
        var showButton = $('#' + id + "Show");
        var hideButton = $('#' + id + "Hide");

        function setVisible(visible) {
            if (visible) {
                elem.removeClass('hidden');
                showButton.addClass('hidden');
                hideButton.removeClass('hidden');
            } else {
                elem.addClass('hidden');
                showButton.removeClass('hidden');
                hideButton.addClass('hidden');
            }
        }

        showButton.unbind();
        hideButton.unbind();
        
        showButton.click(function (evt) {
            evt.preventDefault();
            setVisible(true);
        });

        hideButton.click(function (evt) {
            evt.preventDefault();
            setVisible(false);
        });

    });
    SyntaxHighlighter.highlight();
}

function recieveMore(html) {
    more.replaceWith(html);
    init();
}

init();
