<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tambah Data Mata Kuliah</title>
  </head>
  <body>
    <h1>Tambah Data Mata Kuliah</h1>
    <form>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Kode Mata Kuliah</label>
            <input class="form-control" id="exampleFormControlInput1" placeholder="masukkan kode mata kuliah...">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Nama Mata Kuliah</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="masukkan nama mata kuliah..."></textarea>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">SKS Mata Kuliah</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="masukkan jumlah sks mata kuliah..."></textarea>
          </div>
          <div class="col-auto">
              <button type="submit" class="btn btn-primary mb-3">Simpan</button>
          </div>
    </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>