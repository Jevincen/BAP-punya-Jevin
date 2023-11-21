<!-- resources/views/invoice.blade.php -->

<h3>{{ $informasi_perusahaans->nama }}</h3>

<p>{{ $informasi_perusahaans->alamat }}</p>
<p>{{ $informasi_perusahaans->email }}</p>


<p>Pelanggan: {{ $informasi_pelanggan->nama }}</p>

<p>Alamat: {{ $informasi_pelanggan->Alamat }}</p>
<p>Notelp: {{ $informasi_pelanggan->Notelp }}</p>
<p>Email: {{ $informasi_pelanggan->Email }}</p>

@foreach ($daftarproduk as $daftarproduks)

    <p>{{ $daftarproduks->nama }} ({{ $daftarproduks->jumlah }} pcs) = {{ $daftarproduks->harga * $daftarproduks->jumlah }}</p>

@endforeach


<p>Total: {{ $total }}</p>