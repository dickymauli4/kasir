<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Tambah Data barang</title>
  </head>
  <body>
    <h1 class="text-center mb-4"> Tambah data barang</h1>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8"></div>
           <div class="card">
            <div class="card-body">
                <form action="/insertdata" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">nama barang</label>
                      <input type="text" class="form-control" name="nama_barang" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">stok</label>
                        <input type="text" class="form-control" name="stok" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>

                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">harga</label>
                        <input type="text" class="form-control" name="harga" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>

                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">kode</label>
                        <input type="text" class="form-control" name="id_jenis_barang" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>

                     

                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
           </div>
        </div>
    </div>
