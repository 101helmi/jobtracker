<html>
<head>
    <title>Tambah Lamaran</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #d6dfff;
        }

        nav {
            background-color: #ffffff;
            border-bottom: 1px solid #d4d4d4;

            display: flex;
            justify-content: space-between;
            /* gap: 600px; */    
            padding: 0px 50px 0px 50px;

            align-items: center;
        }

        nav ul {
            list-style-type: none;
            display: flex;
            flex-direction: row;
            gap: 20px;
            /* justify-content: flex-end; */
        }

        nav ul li a {
            text-decoration: none;
            color: #000;
        }

        main {
            padding: 0px 50px 0px 50px;
        }

        .main-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        button {
            background-color: #000000;
            color: white;
            padding: 5px 10px;
            text-align: center;
            font-size: 14px;
            cursor: pointer;
        }

        .form-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .form-group {
            display: flex;
            gap: 50px;
        }

        .form-item {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        label {display: block;}

        input[type=text], select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=date] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=url] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        textarea {
            width: 200%;
            height: 150px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            text-align: left;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <h2>Job Tracker</h2>
            </div>
            <div class="nav-items">
                <ul>
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="index.php">Lamaran</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="main-header">
            <div class="main-header-title">
                <h1>Tambah Lamaran</h1>
            </div>
            <div class="main-header-button">
                <a href="index.php"><button>Kembali</button></a>
                <button>Simpan</button>
            </div>
        </div>
        <div class="form-container">
            <div class="form-group">
                <div class="form-item">
                    <label for="perusahaan">Perusahaan *</label>
                    <input type="text" id="perusahaan" name="perusahaan" placeholder="Masukkan nama perusahaan" required>
                </div>
                <div class="form-item">
                    <label for="posisi">Posisi *</label>
                    <input type="text" id="posisi" name="posisi" placeholder="Masukkan nama posisi" required>
                </div>
            </div>
            <div class="form-group">
                <div class="form-item">
                    <label for="lokasi">Lokasi *</label>
                    <input type="text" id="lokasi" name="lokasi" placeholder="Masukkan lokasi" required>
                </div>
                <div class="form-item">
                    <label for="portal">Portal *</label>
                    <input type="text" id="portal" name="portal" placeholder="Masukkan nama portal" required>
                </div>
            </div>
            <div class="form-group">
                <div class="form-item">
                    <label for="tanggal_lamar">Tanggal Lamar *</label>
                    <input type="date" id="tanggal_lamar" name="tanggal_lamar" placeholder="Pilih tanggal lamar" required>
                </div>
            </div>
            <div class="form-group">
                <div class="form-item">
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
                </div>
            </div>
            <div class="form-group">
                <div class="form-item">
                    <label for="link_lowongan">Link Lowongan</label>
                    <input type="url" id="link_lowongan" name="link_lowongan" placeholder="Masukkan link lowongan" required>
                </div>
                <div class="form-item">
                    <label for="catatan">Catatan</label>
                    <textarea id="catatan" name="catatan" placeholder="Isi catatan disini"></textarea>
                </div>
            </div>
        </div>
    </main>
</body>
</html>