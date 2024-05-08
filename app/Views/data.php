<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Data Siswa</title>
</head>
<body>
  


<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-2 text-center">Data Siswa</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Nama</th>
      <th scope="col">Nis</th>
      <th scope="col">Kelas</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Alamat</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Agama</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td><?=$nama;?></td>
      <td><?=$nis;?></td>
      <td><?=$kelas;?></td>
      <td><?=$jeniskelamin;?></td>
      <td><?=$alamat;?></td>
      <td><?=$ttl;?></td>
      <td><?=$agama;?></td>
    </tr>
  </tbody>
</table>
        </div>
    </div>
</div>

<button class="btn btn-outline-success w-100"><a href="/siswa" class="text-decoration-none text-dark">Kembali Keform</a></button>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>