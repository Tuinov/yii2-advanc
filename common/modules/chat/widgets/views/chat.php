<script>
    var conn = new WebSocket('ws://localhost:8080');
    var idMessages = 'chatMessages';

    conn.message = function (e) {
        var $el = $('li.messages-menu ul.menu li:first').clone();
        $el.find('p').text(e.data);
        $el.find('h4').text('Websocket user');
        $el.prependTo('li.messages-menu ul.menu');

        var cnt = $('li.messages-menu ul.menu li').length;
        $('li.messages-menu span.label-success').text(cnt);
        $('li.messages-menu li.header').text('You have ' + cnt + ' messages');
    };

</script>
<textarea name="" id="chatMessages" cols="70" rows="10"></textarea>
