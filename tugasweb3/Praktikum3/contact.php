<?php include 'navbar.php'; ?>

<div class="container my-5">
    <h1 class="text-center mb-4">Hubungi Saya</h1>
    <div class="row">
        <div class="col-md-6">
            <!-- Form akan mengarahkan ke process_contact.php -->
            <form action="process_contact.php" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama Anda" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email Anda" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Pesan</label>
                    <textarea class="form-control" id="message" name="message" rows="5" placeholder="Masukkan pesan Anda" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Kirim Pesan</button>
            </form>
        </div>
        <div class="col-md-6">
            <h3>Informasi Kontak</h3>
            <p><strong>Email:</strong> rezam4105@gmail.com</p>
            <p><strong>Telepon:</strong> +62 896 526 112 66</p>
            <p><strong>Alamat:</strong> Jln.RTM Kelapadua Tugu Cimanggis Depok</p>
        </div>
    </div>
</div>

<?php include 'bottom.php'; ?>