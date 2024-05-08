<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
   <h1 class="text-center text-success">FORM DATA</h1>
   <div class="container w-50 m-auto">
   <form action="<?= base_url('siswa/save') ?>" method="post">
   <?=csrf_field();?>
   <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">NAMA</label>
  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Nama" name="nama">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Nis</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Input Nis" name="nis">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Kelas</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Input Kelas" name="kelas">
</div>
<!-- tanggal lahir -->
<!-- <div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Tanggal Lahir</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="dd-mm-yyyy" name="ttl">
</div> -->
<!-- <div class="col-lg-3 col-sm-6">
            <label for="startDate">Tanggal Lahir</label>
            <input id="startDate" class="form-control" type="date" name='ttl' />
            <span id="startDateSelected"></span>
</div> -->
<div>
<input id="startDate" class="form-control" type="date" name='ttl' />
</div>
<!-- <div class="container shadow min-vh-100 py-2">
    <h5>Bootstrap 5 date picker</h5>
    <div class="row justify-content-center"> -->
        <!-- <div class="col-lg-3 col-sm-6">
            <label for="startDate">Start</label>
            <input id="startDate" class="form-control" type="date" />
            <span id="startDateSelected"></span>
        </div> -->
        <!-- <div class="col-lg-3 col-sm-6">
            <label for="endDate">End</label>
            <input id="endDate" class="form-control" type="date" />
            <span id="endDateSelected"></span>
        </div> -->
    <!-- </div>
</div> -->
<!-- tanggal lahir -->
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Alamat</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="alamat" name="alamat">
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="jeniskelamin" id="flexRadioDefault1" value="laki-laki">
  <label class="form-check-label" for="flexRadioDefault1">
    Laki-laki
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="jeniskelamin" id="flexRadioDefault2" checked value="perempuan">
  <label class="form-check-label" for="flexRadioDefault2">
    Perempuan
  </label>
</div>
<select class="form-select" aria-label="Default select example" name="agama">
  <option selected>Agama</option>
  <option value="islam">Islam</option>
  <option value="Katolik">Katolik</option>
  <option value="Hindu">Hindu</option>
  <option value="Budha">Budha</option>
  <option value="islam">Islam</option>
  <option value="Katolik">Katolik</option>
  <option value="Hindu">Konghucu</option>
</select>
<button type="submit" class="btn btn-outline-success mt-4">Submit</button>
   </form>
   </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
      // let endDate = document.getElementById('endDate')
      let startDate = document.getElementById('startDate')
      startDate.addEventListener('change',(e)=>{
      let startDateVal = e.target.value
      document.getElementById('startDateSelected').innerText = startDateVal})

      // endDate.addEventListener('change',(e)=>{
      // let endDateVal = e.target.value
      // document.getElementById('endDateSelected').innerText = endDateVal})  
    </script>
  </body>
</html>