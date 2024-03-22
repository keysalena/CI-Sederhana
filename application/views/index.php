<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo base_url() ?>style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <script src="script.js" defer></script> -->
    <title>Registraion Form</title>
</head>

<body>
    <form action="<?php echo base_url() ?>sekolah/tambah" method="post" class="form">
        <h1 class="text-center">Form Pendaftaran</h1>
        <!-- Progress bar -->
        <div class="progressbar">
            <div class="progress" id="progress"></div>

            <div class="progress-step progress-step-active" data-title="Siswa"></div>
            <div class="progress-step" data-title="Orang Tua (Ayah)"></div>
            <div class="progress-step" data-title="Orang Tua (Ibu)"></div>
            <div class="progress-step" data-title="Jurusan"></div>
            <div class="progress-step" data-title="Selesai"></div>
        </div>

        <!-- Siswa -->
        <div class="form-step form-step-active">
            <input type="hidden" name="next_step" value="1">
            <div class="input-group">
                <label for="nisn">NISN</label>
                <input type="text" name="nisn" id="nisn" required />
            </div>
            <div class="input-group">
                <label for="nama_siswa">Nama Siswa</label>
                <input type="text" name="nama_siswa" id="nama_siswa" required />
            </div>
            <div class="input-group">
                <label for="tempat_lahir">Tempat Tanggal Lahir</label>
                <div class="input-wrapper">
                    <input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" required />
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" required />
                </div>
            </div>
            <div class="input-group">
                <label for="agama">Agama</label>
                <select name="agama" id="agama" required>
                    <option disabled selected>-Pilih Agama-</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Konghucu">Konghucu</option>
                </select>
            </div>

            <label for="jenis_kelamin">Jenis Kelamin</label>
            <div class="input-group1">
                <div class="radio-container">
                    <input type="radio" id="laki_laki" name="jenis_kelamin" value="Laki-laki" required>
                    <label for="laki_laki">Laki-laki</label>
                </div>
                <div class="radio-container">
                    <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" required>
                    <label for="perempuan">Perempuan</label>
                </div>
            </div>

            <div class="input-group">
                <label for="asal_sekolah">Asal Sekolah</label>
                <input type="text" name="asal_sekolah" id="asal_sekolah" required />
            </div>
            <div class="input-group">
                <label for="no_hp_siswa">No Handphone</label>
                <input type="text" name="no_hp_siswa" id="no_hp_siswa" required />
            </div>
            <div class="btns-group">
                <a href="#" class="btn btn-next">Next</a>
            </div>
        </div>

        <!-- Ayah -->
        <div class="form-step">
            <div class="input-group">
                <label for="nama_ayah">Nama Ayah</label>
                <input type="text" name="nama_ayah" id="nama_ayah" />
            </div>
            <div class="input-group">
                <label for="alamat_ayah">Alamat Domisili</label>
                <textarea name="alamat_ayah" id="alamat_ayah"></textarea>
            </div>
            <div class="input-group">
                <label for="no_hp_ayah">No Handphone</label>
                <input type="text" name="no_hp_ayah" id="no_hp_ayah" />
            </div>
            <div class="input-group">
                <label for="pekerjaanayah">Pekerjaan</label>
                <select name="pekerjaanayah" id="pekerjaanayah" required onchange="showHideForm1()">
                    <option disabled selected>-Pilih Pekerjaan-</option>
                    <option value="PNS">PNS</option>
                    <option value="Polri / TNI">Polri / TNI</option>
                    <option value="Karyawan">Karyawan</option>
                    <option value="Wiraswasta">Wiraswasta</option>
                    <option value="Buruh">Buruh</option>
                    <option value="Petani">Petani</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </div>

            <div class="input-group" id="form-pekerjaanayah-lainnya" style="display: none;">
                <label for="pekerjaanayah_lainnya">Pekerjaan Lainnya</label>
                <input type="text" name="pekerjaanayah_lainnya" id="pekerjaanayah_lainnya">
            </div>

            <div class="btns-group">
                <a href="#" class="btn btn-prev">Previous</a>
                <a href="#" class="btn btn-next">Next</a>
            </div>
        </div>

        <!-- Ibu -->
        <div class="form-step">
            <div class="input-group">
                <label for="nama_ibu">Nama Ibu</label>
                <input type="text" name="nama_ibu" id="nama_ibu" />
            </div>
            <div class="input-group">
                <label for="alamat_ibu">Alamat Domisili</label>
                <textarea name="alamat_ibu" id="alamat_ibu"></textarea>
            </div>
            <div class="input-group">
                <label for="no_hp_ibu">No Handphone</label>
                <input type="text" name="no_hp_ibu" id="no_hp_ibu" />
            </div>
            <div class="input-group">
                <label for="pekerjaanibu">Pekerjaan</label>
                <select name="pekerjaanibu" id="pekerjaanibu" required onchange="showHideForm()">
                    <option disabled selected>-Pilih Pekerjaan-</option>
                    <option value="PNS">PNS</option>
                    <option value="Polri / TNI">Polri / TNI</option>
                    <option value="Karyawan">Karyawan</option>
                    <option value="Wiraswasta">Wiraswasta</option>
                    <option value="Buruh">Buruh</option>
                    <option value="Petani">Petani</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </div>

            <div class="input-group" id="form-pekerjaanibu-lainnya" style="display: none;">
                <label for="pekerjaanibu_lainnya">Pekerjaan Lainnya</label>
                <input type="text" name="pekerjaanibu_lainnya" id="pekerjaanibu_lainnya">
            </div>

            <div class="btns-group">
                <a href="#" class="btn btn-prev">Previous</a>
                <a href="#" class="btn btn-next">Next</a>
            </div>
        </div>

        <!-- Jurusan -->
        <div class="form-step">
            <div class="input-group">
                <label for="jurusan1">Pilihan Pertama</label>
                <select name="jurusan1" id="jurusan1" required onchange="updateJurusanOptions(this, 'jurusan2', 'jurusan3')">
                    <option disabled selected>-Pilih Jurusan-</option>
                    <option value="Kriya Kayu">Kriya Kayu</option>
                    <option value="Kriya Keramik">Kriya Keramik</option>
                    <option value="Kriya Tekstil">Kriya Tekstil</option>
                    <option value="Tata Busana">Tata Busana</option>
                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                    <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                    <option value="Animasi">Animasi</option>
                    <option value="Multimedia">Multimedia</option>
                </select>
            </div>
            <div class="input-group">
                <label for="jurusan2">Pilihan Kedua</label>
                <select name="jurusan2" id="jurusan2" required onchange="updateJurusanOptions(this, 'jurusan3', 'jurusan1')">
                    <option disabled selected>-Pilih Jurusan-</option>
                </select>
            </div>
            <div class="input-group">
                <label for="jurusan3">Pilihan Ketiga</label>
                <select name="jurusan3" id="jurusan3" required>
                    <option disabled selected>-Pilih Jurusan-</option>
                </select>
            </div>
            <div class="btns-group">
                <a href="#" class="btn btn-prev">Previous</a>
                <input type="submit" value="Submit" class="btn" />
            </div>
        </div>
    </form>

    <!-- Selesai -->
    <div class="form-step form-step-finish" style="display: none;" id="form-step-finish">
        <div class="input-group">
            <i class="fa fa-check-circle" style="font-size:72px;color:red"></i>
        </div>
    </div>
    <script>
        function updateJurusanOptions(selectElement, nextDropdownId, lastDropdownId) {
            const selectedJurusan = selectElement.value;
            const nextDropdown = document.getElementById(nextDropdownId);
            const lastDropdown = document.getElementById(lastDropdownId);

            nextDropdown.innerHTML = '<option disabled selected>-Pilih Jurusan-</option>';

            const options = [
                "Kriya Kayu", "Kriya Keramik", "Kriya Tekstil", "Tata Busana",
                "Rekayasa Perangkat Lunak", "Teknik Komputer dan Jaringan",
                "Animasi", "Multimedia"
            ];

            options.forEach(option => {
                if (option !== selectedJurusan && option !== lastDropdown.value) {
                    nextDropdown.innerHTML += `<option value="${option}">${option}</option>`;
                }
            });
        }

        updateJurusanOptions(document.getElementById('jurusan1'), 'jurusan2', 'jurusan3');
    </script>

    <script>
        function showHideForm1() {
            var selectedValue = document.getElementById("pekerjaanayah").value;

            var formPekerjaanLainnya = document.getElementById("form-pekerjaanayah-lainnya");

            if (selectedValue === "Lainnya") {
                formPekerjaanLainnya.style.display = "block";
                inputPekerjaanLainnya.required = true;
            } else {
                formPekerjaanLainnya.style.display = "none";
                inputPekerjaanLainnya.required = false;
            }
        }
    </script>

    <script>
        function showHideForm() {
            var selectedValue = document.getElementById("pekerjaanibu").value;

            var formPekerjaanLainnya = document.getElementById("form-pekerjaanibu-lainnya");
            var inputPekerjaanLainnya = document.getElementById("pekerjaanibu_lainnya");

            if (selectedValue === "Lainnya") {
                formPekerjaanLainnya.style.display = "block";
                inputPekerjaanLainnya.required = true;
            } else {
                formPekerjaanLainnya.style.display = "none";
                inputPekerjaanLainnya.required = false;
            }
        }
    </script>
    <script>
        // document.addEventListener("DOMContentLoaded", function() {
        // 	const btnNext = document.querySelector('.btn-next');
        // 	btnNext.addEventListener('click', function(e) {
        // 		const formStep = e.target.closest('.form-step');
        // 		const requiredInputs = formStep.querySelectorAll('input[required], select[required]');
        // 		let isValid = true;
        // 		requiredInputs.forEach(function(input) {
        // 			if (!input.value.trim()) {
        // 				isValid = false;
        // 				input.classList.add('input-error');
        // 			} else {
        // 				input.classList.remove('input-error');
        // 			}
        // 		});

        // 		if (!isValid) {
        // 			e.preventDefault();
        // 			alert('Mohon lengkapi semua input yang diperlukan.');
        // 		}
        // 	});
        // });

        const prevBtns = document.querySelectorAll(".btn-prev");
        const nextBtns = document.querySelectorAll(".btn-next");
        const progress = document.getElementById("progress");
        const formSteps = document.querySelectorAll(".form-step");
        const progressSteps = document.querySelectorAll(".progress-step");

        let formStepsNum = 0;

        nextBtns.forEach((btn) => {
            btn.addEventListener("click", () => {
                formStepsNum++;
                updateFormSteps();
                updateProgressbar();
            });
        });

        prevBtns.forEach((btn) => {
            btn.addEventListener("click", () => {
                formStepsNum--;
                updateFormSteps();
                updateProgressbar();
            });
        });

        function updateFormSteps() {
            formSteps.forEach((formStep) => {
                formStep.classList.contains("form-step-active") &&
                    formStep.classList.remove("form-step-active");
            });

            formSteps[formStepsNum].classList.add("form-step-active");

            // Hide the 'Selesai' form-step if it's not the last step
            if (formStepsNum < formSteps.length - 1) {
                document.querySelector(".form-step-finish").style.display = "none";
            } else {
                document.querySelector(".form-step-finish").style.display = "block";
            }
        }

        function updateProgressbar() {
            progressSteps.forEach((progressStep, idx) => {
                if (idx < formStepsNum + 1) {
                    progressStep.classList.add("progress-step-active");
                } else {
                    progressStep.classList.remove("progress-step-active");
                }
            });

            const progressActive = document.querySelectorAll(".progress-step-active");

            progress.style.width =
                ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%";
        }
    </script>
</body>

</html>