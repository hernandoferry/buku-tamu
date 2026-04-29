<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Buku-Tamu') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <link href="{{ asset ('css/styles.css') }}" rel="stylesheet" />

        <!-- Styles / Scripts -->
       
    </head>
    <body class="container-fluid">
        
         <div class="container justify-content-center">
                <div class="card text-dark bg-light mb-3" style="max-width: 100rem; margin-top:9vh;">
                    <div class="card-header"><h1 class="display-5 text-center">Buku Tamu</h1></div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="fName" placeholder="Jhon Aritoningrat">
                        </div>
                        <div class="mb-3">
                            <label for="nomorTelpon" class="form-label">Nomor Telepon/HP</label>
                            <input class="form-control" id="noTlpon"  placeholder="ex:087234987888">
                        </div>
                        <div class="mb-3">
                            <label for="nomorTelpon" class="form-label">Email</label>
                            <input class="form-control" type="email" id="mail"  placeholder="ex:contoh@email.co.id">
                        </div>
                        <div class="mb-3">
                            <label for="inputGroupSelect01" class="form-label">Keperluan</label>
                            <select class="form-select" id="inputGroupSelect01">
                                <option selected>-- Pilih salah satu --</option>
                                <option value="1">Interview</option>
                                <option value="2">Meeting</option>
                                <option value="3">Mengantar Dokumen</option>
                                <option value="">Perbaikan Gedung/AC/Air</option>
                            </select>
                        </div>

                        <div class="container">
                            <table>
                                <tr><td colspan="4"><label class="form-label">Foto Diri &nbsp;</label><span class="text-danger fw-lighter text-center">( * Untuk mengambil ulang Foto klik kembali tombol Ambil Foto )</span></td></tr>
                                <tr>
                                    <td id="my_camera" class="img-thumbnail"></td>
                                    <td style="padding:11px;"> <button type="button" class="btn btn-danger btn-sm" onClick="take_snapshot()">Ambil Foto</button></td>
                                    <td><div class="img-thumbnail mx-auto d-block" id="results" style="min-width:100%;"></div></td>
                                </tr>
                            </table>
                           
                        <div class="row" style="margin-top:9px;">
                            <button type="button" class="btn btn-secondary btn-lg">Simpan</button>
                        </div>
    
    </body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/webcam.min.js') }}"></script>
    <script language="JavaScript">

        Webcam.set({

            width: 250,

            height: 250,

            image_format: 'jpeg',

            jpeg_quality: 90

        });

        Webcam.attach( '#my_camera' );

        if (Webcam.getCameraList().length === 0) {
            alert("Webcam tidak terdeteksi");
        }
    

        function take_snapshot() {

            Webcam.snap( function(data_uri) {

                $(".image-tag").val(data_uri);

                document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';

            } );

        }
    </script>
</html>
