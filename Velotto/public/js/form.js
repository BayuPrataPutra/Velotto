document.getElementById('formPembayaran').style.display = 'none';
document.getElementById('formPemesanan').style.display = 'block';

document.getElementById('button-toggle').addEventListener('click', function() {
    var buttonToggle = document.getElementById('button-toggle');
    var formPembayaran = document.getElementById('formPembayaran');
    var formPemesanan = document.getElementById('formPemesanan');

    if (formPembayaran.style.display === 'none') {
        formPembayaran.style.display = 'block';
        formPemesanan.style.display = 'none';
        buttonToggle.innerText = 'Go to Form Pemesanan';
    } else {
        formPembayaran.style.display = 'none';
        formPemesanan.style.display = 'block';
        buttonToggle.innerText = 'Go to Form Pembayaran';
    }
});