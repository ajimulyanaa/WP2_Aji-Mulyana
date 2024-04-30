<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
   <h1 class="text-center text-success">FORM MATA KULIAH</h1>
   <div class="container w-50 m-auto">
    <!-- validate -->
    <?php if (!empty(session()->getFlashdata('error'))) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <h4>Periksa Entrian Form</h4>
                        </hr />
                        <?php echo session()->getFlashdata('error'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
    <!-- validate -->
   <form action="<?= base_url('matakuliah/save') ?>" method="post">
   <?=csrf_field();?>
   <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Mata kuliah</label>
  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="WEB PROGRAMMING 2" name="nama">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Kelas</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="17.6j.01" name="kode">
</div>
<select class="form-select" aria-label="Default select example" name="sks">
  <option selected>SKS</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select>
<button type="submit" class="btn btn-outline-success mt-4">Submit</button>
   </form>
   </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>