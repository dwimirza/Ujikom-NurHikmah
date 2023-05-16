<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eg: Create Exam</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!--Icon from Bootstap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">


    <script>
        function displayDateTime() {
            var options = {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            };
            var dateTimeString = new Date().toLocaleDateString('en-US', options);
            document.getElementById("datetime").innerHTML = dateTimeString;
        }

        setInterval(displayDateTime, 1000);

    </script>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,700,900');

        :root {
            --bg-layout: #FAFAF9;
            --bg-green-nh: #0FA958;
        }

        * {
            font-family: 'Poppins', sans-serif;
        }

    </style>

</head>

<body class="vh-100" style="background-color: var(--bg-layout); display: flex; flex-direction: column;">

    <nav class="navbar" style="border-bottom: 1px solid #dddddd;">
        <div class="container pt-3 pb-3">
            <span class="navbar-brand mb-0 h1">@yield('title', 'Buat Ujian')</span>
            <div class="py-2 px-3" style="background-color: #EDEDED;">
                <div id="datetime"></div>
            </div>
        </div>
    </nav>

    <main class="py-4">
            @yield('content')
        </main>
</body>

</html>