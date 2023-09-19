<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Change Color</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <div class="d-flex flex-column align-items-center">
        <h1 for="color" class="form-label">Color picker</h1>
        <input type="color" onchange="changeColor(this)" class="form-control form-control-color" id="color" value="#563d7c" title="Choose your color">
    </div>
    <script>
        function changeColor(e) {
            $.ajax({
                async: true,
                url: `{{ route('change') }}`,
                type: "POST",
                dataType: "json",
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                data: {
                    'color': $(e).val()
                },
                success: function(response) {
                    $('#message').html(`<div class="alert alert-success" role="alert">${response.message} </div>`)
                },
                error: function(error) {
                    alert('Error')
                }
            })
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
</body>
</html>
