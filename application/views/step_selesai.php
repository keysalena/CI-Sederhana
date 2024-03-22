<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo base_url() ?>style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <script src="script.js" defer></script> -->
    <title>Registration Form</title>
</head>

<body>
    <form action="<?php echo base_url() ?>sekolah/tambah" method="post" class="form">
        <!-- Progress bar -->
        <h1 class="text-center">Form Pendaftaran</h1>

        <div class="progressbar">
            <div class="progress" id="progress"></div>

            <div class="progress-step progress-step-active" data-title="Siswa"></div>
            <div class="progress-step" data-title="Orang Tua (Ayah)"></div>
            <div class="progress-step" data-title="Orang Tua (Ibu)"></div>
            <div class="progress-step" data-title="Jurusan"></div>
            <div class="progress-step" data-title="Selesai"></div>
        </div>

        <div class="form-step">
            <!-- Isi langkah pertama formulir di sini -->
        </div>

        <div class="form-step">
            <!-- Isi langkah kedua formulir di sini -->
        </div>

        <div class="form-step">
            <!-- Isi langkah ketiga formulir di sini -->
        </div>

        <div class="form-step">
            <!-- Isi langkah keempat formulir di sini -->
        </div>
        <style>
            .form-step-active .input-group {
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .input-group {
                text-align: center;
            }

            .fa-check-circle {
                font-size: 100px;
                color: green;
            }
        </style>

        <div class="form-step form-step-active">
            <div class="input-group">
                <i class="fa fa-check-circle"></i>
            </div>
        </div>


        <script>
            const progressSteps = document.querySelectorAll(".progress-step");
            const progress = document.getElementById("progress");

            progress.style.width = "100%";

            progressSteps.forEach((progressStep) => {
                progressStep.classList.add("progress-step-active");
            });
        </script>
    </form>
</body>

</html>