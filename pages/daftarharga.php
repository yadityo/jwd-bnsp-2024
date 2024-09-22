<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Harga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php include_once '../includes/header.php'; ?>

    <main>
        <div class="container my-5">

            <h2 class="mb-3 text-center">Harga Kamar</h4>

                <hr class="my-4">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Tipe Kamar</th>
                            <th scope="col">Nama Kamar</th>
                            <th scope="col">Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="https://asset.kompas.com/crops/o1nOE7_VXW4A5TVv-rxFPr5h7VM=/22x0:733x473/750x500/data/photo/2022/06/11/62a450487247f.jpg" alt="standard" class="rounded" style="width: 200px;"></td>
                            <td>Standard</td>
                            <td>Rp. 350.000</td>
                        </tr>
                        <tr>
                            <td><img src="https://d2ile4x3f22snf.cloudfront.net/wp-content/uploads/sites/191/2017/09/03063253/grandkemang-Jakarta-Rooms-Deluxe-Twin-800x509.jpg" alt="deluxe" class="rounded" style="width: 200px;"></td>
                            <td>Deluxe</td>
                            <td>Rp. 700.000</td>
                        </tr>
                        <tr>
                            <td><img src="https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/166/2023/12/27083205/Executive-King-370x276.jpg" alt="executive" class="rounded" style="width: 200px;"></td>
                            <td>Executive</td>
                            <td>Rp. 1.250.000</td>
                        </tr>
                    </tbody>
                </table>
        </div>
    </main>
</body>

</html>