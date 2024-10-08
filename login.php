<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Login</title>
    <style>
        body {
            background-image: url('https://wallpapers.com/images/hd/library-background-zp3y3gk7am2pnsar.jpg'); /* Ganti dengan URL gambar latar belakang perpustakaan */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .card {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            box-shadow: 0px 0px 10px 0px #000;
        }
        .form-label {
            color: #2c3e50;
        }
        .btn-primary {
            background-color: #2c3e50;
            border-color: #2c3e50;
        }
        .btn-primary:hover {
            background-color: #1a252f;
            border-color: #1a252f;
        }
    </style>
</head>
<body>
<!-- Section: Design Block -->
<section class="">
  <!-- Jumbotron -->
  <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: rgba(255, 255, 255, 0.8);">
    <div class="container">
      <div class="row gx-lg-5 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <h1 class="my-5 display-3 fw-bold ls-tight">
          Perpustakaan Bersama <br />
            <span class="text-primary">Login agar bisa menikmati bacaan yang anda inginkan</span>
          </h1>
          <p style="color: hsl(217, 10%, 50.8%)">
          Dengan adanya website ini, diharapkan bisa menambahkan minat membaca masyarakat dan pengetahuan masyarakat. (website ini masih dalam pengembangan, maaf masih  banyak error dan bug. terlebih website ini hanya bisa diakses di lokal saja, belum bisa online)
          </p>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card">
            <div class="card-body py-5 px-md-5">
              <!-- Corrected Form Starts Here -->
              <form action="proses_login.php" method="post">
                <!-- Name input -->
               
                <!-- Username input -->
                <div class="form-outline mb-4">
                  <input type="text" name="username" class="form-control" required />
                  <label class="form-label" >Username</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" name="password" class="form-control" required />
                  <label class="form-label">Password</label>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">
                  Log in
                </button>
              </form>
              <!-- Form Ends Here -->
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>
