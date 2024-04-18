<?php
include_once('top.php');
include_once('menu.php');
?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Registrasi </h1>

        <fieldset class="my-5 border p-2">
            <legend>Form Registrasi Puskesmas</legend>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

            <form action="proses_registrasi_admin_puskesmas.php" method="POST">
                <div class="form-group row">
                    <label for="nip" class="col-4 col-form-label">NIP</label>
                    <div class="col-8">
                        <input id="nip" name="nip" type="text" required="required" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                    <div class="col-8">
                        <input id="nama" name="nama" type="text" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Jenis Kelamin</label>
                    <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="Laki-Laki" required="required">
                            <label for="jk_0" class="custom-control-label">Laki-Laki</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="Perempuan" required="required">
                            <label for="jk_1" class="custom-control-label">Perempuan</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kota" class="col-4 col-form-label">Kota</label>
                    <div class="col-8">
                        <select id="kota" name="kota" class="custom-select" required="required">
                            <option value="Jakarta">Jakarta</option>
                            <option value="Bogor">Bogor</option>
                            <option value="Depok">Depok</option>
                            <option value="Tanggerang">Tanggerang</option>
                            <option value="Bekasi">Bekasi</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                </div>
                <!-- Tambahan informasi yang relevan -->
                <div class="form-group row">
                    <label for="telepon" class="col-4 col-form-label">Nomor Telepon</label>
                    <div class="col-8">
                        <input id="telepon" name="telepon" type="text" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-4 col-form-label">Alamat</label>
                    <div class="col-8">
                        <textarea id="alamat" name="alamat" class="form-control" required="required"></textarea>
                    </div>
                </div>
                <!-- Akhir tambahan informasi -->
                <div class="form-group row">
                    <label for="email" class="col-4 col-form-label">Email</label>
                    <div class="col-8">
                        <input id="email" name="email" type="text" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </fieldset>
    </div>
</main>

<?php
include_once('buttom.php');
?>
