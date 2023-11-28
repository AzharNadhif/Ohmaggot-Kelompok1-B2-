<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page</title>
</head>
<body>
    <input type="text" id="namaproduk" placeholder="Harga" value="{{$produk->name}}">
    <input type="text" id="harga" placeholder="Harga" value="{{$produk->harga}}" disabled>
    <input type="number" id="quantity" placeholder="Quantity">
    <button onclick="hitung()">Hitung</button>
    <p>Total Harga: <span id="totalHarga"></span></p>

    <script>
        function hitung() {
            var harga = document.getElementById('harga').value;
            var quantity = document.getElementById('quantity').value;

            // Periksa apakah harga dan quantity berisi angka
            if (isNaN(harga) || isNaN(quantity)) {
                alert('Harga dan Quantity harus berupa angka.');
                return;
            }

            // Hitung total
            var total = harga * quantity;

            // Tampilkan hasil di dalam span dengan id totalHarga
            document.getElementById('totalHarga').innerText = total;
        }
    </script>

</body>
</html>
