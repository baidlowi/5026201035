<!DOCTYPE html>
<html>
    <head>
        <title>JAM</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="index.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>

    <body>
        <div class="container-sm">
            <div class="blur">
            <?php 
            //buat Function
            jamsekarang();

            //Function jam sekarang
            function jamsekarang() {
                date_default_timezone_set("Asia/Jakarta");

                //buat variabel waktu
                $tanggal = getdate();
                $jam = $tanggal["hours"];
                $menit = $tanggal["minutes"];
                $detik = $tanggal["seconds"];
                $waktu = " $jam:$menit:$detik";
                print "<h1><b>".$waktu."</b></h1>";
            }
            ?>
            </div>
            <div class="border">
                <div class="ketikan">
                    Bagaimana Kabarmu Hari Ini?
                </div>
            </div>
        </div>
    </body>
</html>
