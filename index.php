<html>
<head>
    <title>Daftar Lamaran</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #aaaaaa;
        }

        nav {
            background-color: #f2f2f2;

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
            <h1>Daftar Lamaran</h1>
            <a href="tambah.php"><button>Tambah Lamaran</button></a>
        </div>
        <div>
            <table border="1">
                <tr>
                    <th><input type="checkbox"></th>
                    <th>Perusahaan</th>
                    <th>Posisi</th>
                    <th>Lokasi</th>
                    <th>Tipe</th>
                    <th>Status</th>
                    <th>Tanggal Lamar</th>
                    <th>Portal</th>
                    <th>Aksi</th>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>John Doe</td>
                    <td>john.doe@example.com</td>
                    <td>Web Developer</td>
                    <td>Remote</td>
                    <td>Open</td>
                    <td>2023-01-01</td>
                    <td>LinkedIn</td>
                    <td><button>View</button> <button>Timeline</button> <a href="edit.php"><button>Edit</button></a> <button>Hapus</button> <button>Link</button></td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>John Doe</td>
                    <td>john.doe@example.com</td>
                    <td>Web Developer</td>
                    <td>Remote</td>
                    <td>Open</td>
                    <td>2023-01-01</td>
                    <td>LinkedIn</td>
                    <td><button>View</button> <button>Timeline</button> <a href="edit.php"><button>Edit</button></a> <button>Hapus</button> <button>Link</button></td>
                </tr>
            </table>
        </div>
    </main>
</body>
</html>