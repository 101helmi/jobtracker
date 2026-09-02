<html>
<head>
    <title>Tambah Lamaran</title>
    <style>
        body {
            background-color: #aaaaaa;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="lamaran.php">Lamaran</a></li>
                <li><a href="tentang.php">Tentang</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Tambah Lamaran</h1>
        <a href="index.php"><button>Kembali</button></a>
        <button>Simpan</button>
        <br>
        <label for="perusahaan">Perusahaan *</label>
        <input type="text" id="perusahaan" name="perusahaan" placeholder="Masukkan nama perusahaan" required>
        <br>
        <label for="posisi">Posisi *</label>
        <input type="text" id="posisi" name="posisi" placeholder="Masukkan nama posisi" required>
        <br>
        <label for="lokasi">Lokasi *</label>
        <input type="text" id="lokasi" name="lokasi" placeholder="Masukkan lokasi" required>
        <br>
        <label for="portal">Portal *</label>
        <input type="text" id="portal" name="portal" placeholder="Masukkan nama portal" required>
        <br>
        <label for="tanggal_lamar">Tanggal Lamar *</label>
        <input type="date" id="tanggal_lamar" name="tanggal_lamar" placeholder="Pilih tanggal lamar" required>
        <br>
        <label for="tipe">Tipe:</label>
        <select id="tipe" name="tipe" placeholder="Pilih tipe" required>
            <option value="unknown">Pilih tipe</option>
            <option value="Internship">Internship</option>
            <option value="Contract">Contract</option>
            <option value="Part Time">Part Time</option>
            <option value="Full Time">Full Time</option>
            <option value="WFO">WFO</option>
            <option value="WFH">WFH/Remote</option>
            <option value="Hybrid">Hybrid</option>
        </select>
        <br>
        <label for="link_lowongan">Link Lowongan</label>
        <input type="url" id="link_lowongan" name="link_lowongan" placeholder="Masukkan link lowongan" required>
        <br>
        <label for="catatan">Catatan</label>
        <textarea id="catatan" name="catatan" placeholder="Isi catatan disini"></textarea>
    </main>
</body>
</html>