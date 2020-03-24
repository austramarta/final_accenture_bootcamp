
//chat

$('#message').keyup(function (e) {
    /* var currentText = $(this).val()
       $('#chat-box').html(currentText) */
    if (e.keyCode === 13) {
       var text = $('#message').val()
       var username = $('#username').val()
       var date = new Date()
       var dateFormat = date.getDate() + '.' + date.getMonth() + '.' + date.getFullYear() + ' ' + ' ' + date.getHours() + ':' + date.getMinutes() + ':' + date.getSeconds()
       var paragraph = $('<p class="chat-txt-green">' + username + '  ' + '<small class="chat-txt-green">' + dateFormat + '</small>' + '</p>' + '<p class="chat-txt">' + text + '</p>')
       $('#chat-box').append(paragraph) &&
          $(this).val('');
    };
    if (e.keyCode === 27) {
       $(this).val('');
    };
 });
 
 $('#send-btn').click(function (e) {
    var text = $('#message').val()
    var username = $('#username').val()
    var date = new Date();
    var dateFormat = date.getDate() + '.' + date.getMonth() + '.' + date.getFullYear() + '.' + date.getHours() + ':' + date.getMinutes() + ':' + date.getSeconds()
    var paragraph = $('<p class="chat-txt-green">' + username + '  ' + '<small class="chat-txt">' + dateFormat + '</small>' + '</p>' + '<p class="chat-txt">' + text + '</p>')
    $('#chat-box').append(paragraph) &&
       $('#message').val('');
 })