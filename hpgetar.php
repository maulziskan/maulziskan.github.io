<!DOCTYPE html>
<html>
<head>
    <title>Tutorial HTML5 Vibration API</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script type="text/javascript">
        // fungsi ini akan kita panggil saat tombol diklik
        function buatGetaran(pola){
            var getaran = window.navigator.vibrate(pola);

            // tampilkan hasilnya ke console
            // kalau true berarti browser mendukung untuk membuat getaran
            // tapi kalau false browser tidak mendukung
            console.log(getaran);
        }
    </script>
</head>
<body>
    <p>Coba klik tombol berikut:</p>
    <button onclick="buatGetaran(1000)">Bergetar!!!</button>

    <button onclick="buatGetaran([1000, 500, 1000])">Bergetar 2x!!!</button>

    <button onclick="buatGetaran([200, 500, 300, 100, 400])">Bergetar 3x!!!</button>
</body>
</html>