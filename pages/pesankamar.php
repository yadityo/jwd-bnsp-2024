<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Kamar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php include_once '../includes/header.php'; ?>

    <main>
        <div class="container py-5">
            <div class="row g-5 justify-content-center">

                <div class="col-md-7 col-lg-8">
                    <h2 class="mb-3 text-center">Pembayaran</h4>

                        <hr class="my-4">

                        <h4 class="mb-3">Data Diri</h4>
                        <form action="prosespembayaran.php" method="POST">
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <label for="nama" class="form-label">Nama Tamu</label>
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="masukkan nama" value="" required>
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <label for="nik" class="form-label">NIK Tamu</label>
                                    <input name="nik" type="number" class="form-control" id="nik" placeholder="masukkan 16 digit NIK" maxlength="16" oninput="if(this.value.length > 16) this.value = this.value.slice(0, 16);">
                                </div>

                                <div class="col-12">
                                    <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="laki-laki" name="jeniskelamin" id="jeniskelamin" checked>
                                        <label class="form-check-label" for="laki">
                                            Laki-laki
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="perempuan" name="jeniskelamin" id="jeniskelamin">
                                        <label class="form-check-label" for="perempuan">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>

                                <hr class="my-4">

                                <h4 class="mb-3">Pesan Kamar</h4>


                                <div class="col-6">
                                    <label for="tipe" class="form-label">Tipe Kamar</label>
                                    <select class="form-select" name="tipe" id="tipe" onchange="SetHarga()" required="">
                                        <option value="">---</option>
                                        <option>Standard</option>
                                        <option>Deluxe</option>
                                        <option>Executive</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a valid country.
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <label for="harga" class="form-label">Harga Kamar</label>
                                    <input class="form-control" type="number" id="harga" value="" aria-label="readonly input example" readonly>
                                </div>

                                <div class="col-sm-6">
                                    <label for="tgl" class="form-label">Tanggal Pesan Kamar</label>
                                    <input type="date" class="form-control" id="tgl">
                                </div>

                                <div class="col-sm-6">
                                    <label for="durasi" class="form-label">Durasi Menginap</label>
                                    <input type="number" class="form-control" name="durasi" id="durasi" onchange="SetHarga2(event); " value="1" min="1" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                </div>

                                <div class="col-sm-12 mb-4">
                                    <input type="text" class="form-control" name="discount" value="0" id="discount" hidden>
                                </div>

                                <div class="col-sm-12 mb-4">
                                    <label for="total" class="form-label">Total Harga</label>
                                    <input class="form-control" type="text" name="total" id="total" value="" aria-label="readonly input example" hidden readonly>
                                    <input class="form-control" type="text" name="total1" id="total1" value="" aria-label="readonly input example" readonly>
                                </div>

                                <hr class="">

                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="sarapan" onclick="SetHarga2(event);">
                                    <label class="form-check-label" for="sarapan">Include Breakfast</label>
                                </div>

                                <hr class="my-4">

                                <button class="w-100 btn btn-primary btn-lg" type="submit" name="Submit" onclick="return empty()">Selesaikan pembayaran</button>

                        </form>
                </div>
            </div>
        </div>
    </main>


    <script src="../assets/js/hitungharga.js"></script>
</body>

</html>