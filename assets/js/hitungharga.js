var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0');
var yyyy = today.getFullYear();

today = yyyy + '-' + mm + '-' + dd;

document.getElementById('tgl').setAttribute("min", today);

function SetHarga() {
    tipe = document.getElementById('tipe').value;
    if (tipe == 'Standar') {
        document.getElementById('harga').value = 350000;
    } else if (tipe == 'Deluxe') {
        document.getElementById('harga').value = 700000;
    } else {
        document.getElementById('harga').value = 1250000;
    }
};


function SetHarga2(e) {
    durasi = document.getElementById('durasi').value;
    harga = document.getElementById('harga').value;
    total = durasi * harga;

    if (durasi > 3) {
        disc = total * 0.1;
        total = total - disc;
        document.getElementById('discount').value = 'Yes';
    } else {
        document.getElementById('discount').value = 'No';
    }

    if (document.getElementById('sarapan').checked) {
        nyarap = 80000;
        total = total + nyarap;
    }

    totalbayar = total;
    document.getElementById('total1').value = (totalbayar.toLocaleString());
    document.getElementById('total').value = totalbayar;
};

function empty() {
    var x;
    x = document.getElementById("nama").value.trim();
    if (x == "") {
        alert("Nama Tidak Boleh Blank");
        return false;
    }
};