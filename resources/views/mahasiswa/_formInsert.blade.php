<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('cdn')
    <title>Tambah Data</title>
</head>

<body>
    <div class="container mt-4">
        <a href="{{ url('mahasiswa') }}" data-toggle="tooltip" data-placement="top" title="Kembali"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
          </svg></a>
        <h1 class="my-4">Tambah Data</h1>
        <form action="{{ url('save') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="exampleInputnim1" class="form-label">NIM</label>
                <input type="text" name="nim" class="form-control" id="exampleInputnim1" aria-describedby="nimHelp" required maxlength="10">
            </div>
            <div class="mb-3">
                <label for="exampleInputnama1" class="form-label">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" id="exampleInputnama1" required maxlength="128">
            </div>
            <div class="mb-3">
                <label for="exampleInputprodi1" class="form-label">Program Studi</label>
                <input type="text" name="prodi" class="form-control" id="exampleInputprodi1" required maxlength="64">
            </div>
            <div class="mb-3">
                <label for="exampleInputdob1" class="form-label">Tahun lahir</label>
                <input type="text" name="dob" class="form-control" id="exampleInputdob1" required maxlength="4">
                <div id="nimHelp" class="form-text">Masukan tahun lahirnya saja. Contoh: 1999</div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>
