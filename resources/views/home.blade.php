<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMS Gateway Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"></script>
</head>
<body class="container" style="font-family: 'Nunito', sans-serif">
<form class="col-5 mx-auto my-5">
    @csrf
    <h2 class="text-secondary mb-3 text-center">SMS GATEWAY</h2>
    <div class="input-group mb-3">
        <select class="form-select col-2" aria-label="country code" id="country_code">
            @foreach( countryCodeArray() as $code )
                <option @if($code->dial_code == '+98') selected
                        @endif value="{{ $code->dial_code }}"> {{ $code->dial_code }}</option>
            @endforeach
        </select>

        <!-- phone number input -->
        <div class="form-outline col-9">
            <input type="text" id="phone_number" class="form-control" placeholder="your phone number"/>
        </div>
    </div>

    <!-- Submit button -->
    <button type="submit" onclick="submitForm()" class="btn btn-primary btn-block container">send code</button>
</form>

<script>
    async function submitForm() {
        var data = new FormData();
        let phone_number = document.getElementById("country_code").value + '-' + document.getElementById("phone_number").value;
        data.append('phone_number', phone_number)

        let response = (await fetch("{{route('auth.login-or-sign-up')}}", {
            method: 'POST',
            body: data,
            headers: {
                'accept': 'application/json'
            }
        })).json();

        response.then(data => {
            window.location.href = "{{ route('verify') }}?phone=" + phone_number    ;
        })
    }
</script>
</body>
</html>
