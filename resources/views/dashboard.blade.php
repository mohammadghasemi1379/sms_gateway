<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMS Gateway - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"></script>
</head>
<body class="container" style="font-family: 'Nunito', sans-serif">
<h2 class="text-secondary mb-3 mt-2">dashboard</h2>
<hr>
<div class="row mt-3 ">

    <div class="card col mx-1 text-bg-dark">
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <p>total sms count</p>
                <footer class="blockquote-footer text-white" id="total_count">0</footer>
            </blockquote>
        </div>
    </div>

    <div class="card col mx-1 text-bg-danger">
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <p>total failed count</p>
                <footer class="blockquote-footer text-white" id="failed_count">0</footer>
            </blockquote>
        </div>
    </div>

    <div class="card col mx-1 text-bg-success">
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <p>total sent count</p>
                <footer class="blockquote-footer text-white" id="sent_count">0</footer>
            </blockquote>
        </div>
    </div>

    <div class="card col mx-1 text-bg-warning">
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <p>total pending count</p>
                <footer class="blockquote-footer" id="pending_count">0</footer>
            </blockquote>
        </div>
    </div>

</div>
<hr>
<div class="row mt-3">
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">receiver number</th>
            <th scope="col">status</th>
            <th scope="col">message</th>
        </tr>
        </thead>

        <tbody id="table_body"></tbody>
    </table>
</div>

<script>
    function getCookie(name) {
        // Split cookie string and get all individual name=value pairs in an array
        var cookieArr = document.cookie.split(";");

        // Loop through the array elements
        for (var i = 0; i < cookieArr.length; i++) {
            var cookiePair = cookieArr[i].split("=");

            /* Removing whitespace at the beginning of the cookie name
            and compare it with the given string */
            if (name == cookiePair[0].trim()) {
                // Decode the cookie value and return
                return decodeURIComponent(cookiePair[1]);
            }
        }

        // Return null if not found
        return null;
    }

    window.onload = async () => {
        let reports = (await fetch("{{route('sms.summery')}}", {
            method: 'GET',
            headers: {
                'accept': 'application/json',
                'Authorization': 'Bearer ' + getCookie('access_token'),
            }
        })).json();

        reports.then(data => {
            document.getElementById('failed_count').innerHTML = data.body.total_failed_count;
            document.getElementById('total_count').innerHTML = data.body.total_count;
            document.getElementById('pending_count').innerHTML = data.body.total_pending_count;
            document.getElementById('sent_count').innerHTML = data.body.total_sent_count;
        })

        let history = (await fetch("{{route('sms.history')}}", {
            method: 'GET',
            headers: {
                'accept': 'application/json',
                'Authorization': 'Bearer ' + getCookie('access_token'),
            }
        })).json();

        // @todo: do pagination
        history.then(data => {
            if (data.body.length > 0) {
                var temp = "";
                data.body.forEach((itemData) => {
                    temp += "<tr>";
                    temp += "<td>" + itemData.id + "</td>";
                    temp += "<td>" + itemData.receiver_number + "</td>";
                    temp += "<td>" + itemData.status + "</td>";
                    temp += "<td>" + (itemData.message).slice(0, 20).concat('...') + "</td></tr>";
                });
                document.getElementById('table_body').innerHTML = temp;
            }
        });

        console.log(reports, history);
    };
</script>
</body>
</html>
