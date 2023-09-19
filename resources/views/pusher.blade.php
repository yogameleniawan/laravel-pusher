<!DOCTYPE html>
<head>
  <title>Pusher Test</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet">

</head>
<body id="body">

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

  <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
  <script>

    var pusher = new Pusher('292d67a9aa3b42a7bf93', {
      cluster: 'ap1'
    });

    var channel = pusher.subscribe('channel-color');
    channel.bind('broadcast-color', function(data) {
        $('#body').css('background-color', data.color)
    });
  </script>
</body>
