@extends('layout.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('public/css/404.css' )}}">
@endsection


@section('content')
<body marginwidth="0" marginheight="0">
    <div id="block_error">
        <div>
         <h2>Error 404. &nbspMaaf halaman yang anda cari tidak ada.</h2>
        <p>
        Klik link berikut untuk kembali ke <a href="{{ url('/') }}">halaman utama</a>.
        Atau pilih halaman lainnya melalui navigasi di sebelah kiri.
        </p>
        </div>
    </div>
</body>
@endsection