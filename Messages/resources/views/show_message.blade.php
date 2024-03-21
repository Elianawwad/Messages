<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>message</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    label {
        font-weight: bold;
    }
</style>
</head>
<body>
<div class="container content">
<h1 class="d-flex my-5 justify-content-center align-items-center">
    message from : {{ $message->name }}

    <a href="{{ route('messages')}}" class="btn btn-success ms-auto">
        back
    </a>
</h1>


<form method="post">


    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Name</label>
        <input disabled type="text" value="{{$message->name}}" class="form-control" id="exampleFormControlInput1" >
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea3" class="form-label">Email</label>
        <input disabled class="form-control" id="exampleFormControlTextarea3" value="{{$message->email}}" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea3" class="form-label">Subject</label>
        <input disabled class="form-control" id="exampleFormControlTextarea3" value="{{$message->subject}}" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">message Details</label>
        <textarea disabled class="form-control" id="exampleFormControlTextarea1" rows="10">{{$message->message}}</textarea>
    </div>

</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script>
        document.addEventListener('submit', function(event) {
            var form = event.target;
            var submitButton = form.querySelector('[type="submit"]');

            if (submitButton) {
                submitButton.setAttribute('disabled', 'disabled');
            }
        });
    </script>
</body>
</html>