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
        <!-- phone number input -->
        <div class="form-outline col-12">
            <input type="text" id="code" class="form-control" placeholder="Enter the verification code."/>
        </div>
    </div>

    <!-- Submit button -->
    <button type="button" onclick="submitForm()" class="btn btn-primary btn-block container">verify</button>
</form>

<script>
    console.log((new URL(document.location)).searchParams.get('phone'));

    function setCookie(cname, cvalue) {
        const d = new Date();
        d.setTime(d.getTime() + (5*24*60*60*1000));//5 day later
        let expires = "expires="+ d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    async function submitForm() {
        var data = new FormData();
        data.append('verify_code', document.getElementById("code").value)
        data.append('phone_number', ('+' + (new URL(document.location)).searchParams.get('phone')).replace(/\s+/g, ''))

        console.log(data.phone_number)

        let response = (await fetch("{{route('auth.verify-code')}}", {
            method: 'POST',
            body: data,
            headers: {
                'accept': 'application/json'
            }
        })).json();

        response.then(data => {
            console.log(data)
            setCookie('access_token',data.body.access_token);
            window.location.href= "{{ route('dashboard') }}";
        })

        response.catch(data => {
            console.log(data)
        })
    }
</script>
</body>
</html>
