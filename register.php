<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manajemen Data Mahasiswa | Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <main class="container-fluid min-vh-100 d-flex align-items-center justify-content-center py-5">
        <div class="row w-100 justify-content-center">
            <div class="col-11 col-sm-9 col-md-7 col-lg-5 col-xl-4">
                <div class="card shadow-lg">
                    <div class="card-body p-4 p-md-5">
                        <!-- eror saat php menangkap args get error -->
                        <?php
                        if (isset($_GET['error'])) {
                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <div>' . $_GET['error'] . '</div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' . '</div>';
                        }
                        ?>
                        <div class="text-center mb-4">
                            <h1 class="h4 mb-1">Daftar Akun</h1>
                            <p class="text-body-secondary mb-0">Buat akun baru untuk melanjutkan</p>
                        </div>

                        <form class="needs-validation" novalidate action="proses_registrasi.php" method="post">
                            <!-- Nama -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Lengkap</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="name"
                                    name="name"
                                    placeholder="Nama lengkap"
                                    required
                                    autocomplete="name" />
                                <div class="invalid-feedback">Nama tidak boleh kosong.</div>
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="username"
                                    name="username"
                                    placeholder="jokela123"
                                    required
                                    autocomplete="username" />
                                <div class="invalid-feedback">Masukkan email yang valid.</div>
                            </div>

                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Kata Sandi</label>
                                <div class="input-group">
                                    <input
                                        type="password"
                                        class="form-control"
                                        id="password"
                                        name="password"
                                        placeholder="••••••••"
                                        required
                                        minlength="6" />
                                    <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                        <span id="toggleIcon">Tampilkan</span>
                                    </button>
                                    <div class="invalid-feedback">Kata sandi minimal 6 karakter.</div>
                                </div>
                            </div>

                            <!-- Konfirmasi Password -->
                            <div class="mb-3">
                                <label for="confirmPassword" class="form-label">Konfirmasi Kata Sandi</label>
                                <input
                                    type="password"
                                    class="form-control"
                                    id="confirmPassword"
                                    name="confirmPassword"
                                    placeholder="Ulangi kata sandi"
                                    required
                                    minlength="6" />
                                <div class="invalid-feedback">Ulangi kata sandi dengan benar.</div>
                            </div>

                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="1" id="agree" name="agree" required />
                                <label class="form-check-label" for="agree">Saya setuju dengan <a href="#" class="link-primary text-decoration-none">syarat & ketentuan</a></label>
                                <div class="invalid-feedback">Harap menyetujui syarat & ketentuan.</div>
                            </div>

                            <button class="btn btn-success w-100 py-2" type="submit">Daftar Sekarang</button>
                        </form>

                        <hr class="my-4" />
                        <p class="text-center mb-0 small">
                            Sudah punya akun? <a href="login.php" class="link-primary text-decoration-none">Login di sini</a>
                        </p>
                    </div>
                </div>

                <p class="text-center text-body-secondary small mt-3 mb-0">&copy; <span id="year"></span> Aplikasi Anda</p>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="js/register.js"></script>
</body>

</html>