<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ActivID - Konser Ticketing</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <!-- 1. Search Event/Konser -->
  <div class="container my-5">
    <h2>Cari Event/Konser</h2>
    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Cari nama konser atau artis...">
      <button class="btn btn-primary">Cari</button>
    </div>
    <div class="row" id="event-list">
      <!-- Card Event Dummy -->
      <div class="col-md-4">
        <div class="card">
          <img src="https://via.placeholder.com/300x150" class="card-img-top" alt="Konser">
          <div class="card-body">
            <h5 class="card-title">Judul Konser</h5>
            <p class="card-text">Artis: Nama Artis<br>Tanggal: 12 Agustus 2025<br>Lokasi: Jakarta</p>
            <a href="#detail-event" class="btn btn-outline-primary">Lihat Detail</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- 2. Detail Event -->
  <div class="container my-5" id="detail-event">
    <h2>Detail Event</h2>
    <img src="https://via.placeholder.com/800x300" class="img-fluid mb-3">
    <h4>Judul Konser - Nama Artis</h4>
    <p>Tanggal: 12 Agustus 2025<br>Waktu: 19.00 WIB<br>Lokasi: Stadion ABC, Jakarta</p>
    <p>Deskripsi: Konser spektakuler dari artis favorit Anda!</p>
    <p>Harga Tiket: VIP - Rp500.000 | Reguler - Rp200.000</p>
    <a href="#form-pesan" class="btn btn-success">Pesan Tiket</a>
  </div>

  <!-- 3. Form Pemesanan Tiket -->
  <div class="container my-5" id="form-pesan">
    <h2>Form Pemesanan Tiket</h2>
    <form>
      <div class="mb-3">
        <label for="kategori" class="form-label">Kategori Tiket</label>
        <select class="form-select" id="kategori">
          <option value="VIP">VIP</option>
          <option value="Reguler">Reguler</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="jumlah" class="form-label">Jumlah Tiket</label>
        <input type="number" class="form-control" id="jumlah" value="1" min="1">
      </div>
      <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" class="form-control">
      </div>
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control">
      </div>
      <div class="mb-3">
        <label class="form-label">No HP</label>
        <input type="text" class="form-control">
      </div>
      <a href="#pembayaran" class="btn btn-primary">Lanjut ke Pembayaran</a>
    </form>
  </div>

  <!-- 4. Pembayaran -->
  <div class="container my-5" id="pembayaran">
    <h2>Pembayaran Tiket</h2>
    <p><strong>Rincian:</strong> 2 Tiket VIP x Rp500.000 = Rp1.000.000</p>
    <div class="mb-3">
      <label for="metode" class="form-label">Pilih Metode Pembayaran</label>
      <select class="form-select" id="metode">
        <option value="transfer">Transfer Bank</option>
        <option value="ewallet">E-Wallet</option>
        <option value="kartu">Kartu Kredit</option>
      </select>
    </div>
    <button class="btn btn-success">Bayar Sekarang</button>
  </div>

  <!-- 5. Dashboard User -->
  <div class="container my-5">
    <h2>Dashboard Pengguna</h2>
    <div class="card mb-3">
      <div class="card-body">
        <h5 class="card-title">Nama Pengguna</h5>
        <p>Email: email@example.com</p>
        <p>No HP: 08123456789</p>
      </div>
    </div>
    <h4>Tiket Saya</h4>
    <ul class="list-group">
      <li class="list-group-item">Judul Konser - VIP x2 (E-Ticket: <a href="#">Download</a>)</li>
    </ul>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>