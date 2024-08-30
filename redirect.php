<!DOCTYPE html>
<html>

<head>
    <title>Logging In</title>
</head>

<body>
    redirecting to home in <span id="timer"></span>s
    <script>
        var timeout = 0;

        var ctr = 3;
        displaytimer();


        function displaytimer() {
            document.getElementById('timer').innerHTML = ctr;
            setTimeout(() => {
                ctr--;
                displaytimer();
            }, 1000);
        }



        setTimeout(() => {
            window.location.href = "http://localhost:8080/newCars/home.php";
        }, 3500);
    </script>
    </oody>

</html>