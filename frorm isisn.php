<!DOCTYPE html>
<html lang="en">
<head>
<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
  </nav>
</div>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <title>Formulir Isian</title>
</head>
<body>

<div class="container mt-5">
  <form>
    <div class="form-group">
      <label for="nama">Nama:</label>
      <input type="text" class="form-control" id="nama" placeholder="Masukkan nama">
    </div>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Masukkan email">
    </div>

    <div class="form-group">
      <label>Hobi:</label>
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="hobi1">
        <label class="form-check-label" for="hobi1">Volly</label>
      </div>
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="hobi2">
        <label class="form-check-label" for="hobi2">Bermain Game</label>
      </div>
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="hobi3">
        <label class="form-check-label" for="hobi3">Futsal</label>
      </div>
    </div>

    <div class="form-group">
      <label for="komentar">Komentar:</label>
      <textarea class="form-control" id="komentar" rows="3" placeholder="Tulis komentar"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
