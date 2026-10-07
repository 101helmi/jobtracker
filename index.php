<html>
<head>
    <title>Daftar Lamaran</title>
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

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;

            background-color: #ffffff;
        }

        th {
            background-color: #e1e1e1;
        }

        button {
            background-color: #000000;
            color: white;
            padding: 5px 10px;
            text-align: center;
            font-size: 14px;
            cursor: pointer;
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
                <h1>Daftar Lamaran</h1>
            </div>
            <div class="main-header-button">
                <button onclick="hapusLocalStorage()">Hapus LocalStorage</button>
                <button onclick="testJavaScript()">Tes JavaScript</button>
                <a href="tambah.php"><button>Tambah Lamaran</button></a>
            </div>
        </div>
        <div>
            <table border="1">
                <thead>
                    <tr>
                        <th><input type="checkbox"></th>
                        <th class="perusahaan">Perusahaan</th>
                        <th class="posisi">Posisi</th>
                        <th class="lokasi">Lokasi</th>
                        <th class="tipe">Tipe</th>
                        <th class="status">Status</th>
                        <th class="tanggal_lamar">Tanggal Lamar</th>
                        <th class="portal">Portal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody></tbody>
                <?php
                // test
                ?>
            </table>
            <p>localStorage 'nama': <span id="nama"></span></p>
        </div>
    </main>
    <script>
        function testJavaScript() {
            alert("JavaScript berhasil dijalankan!");
        }
        
        document.getElementById("nama").textContent = localStorage.getItem("nama");

        function hapusLocalStorage() {
            localStorage.removeItem("nama");
            document.getElementById("nama").textContent = localStorage.getItem("nama");
            // alert("LocalStorage 'nama' telah dihapus.");
        }

        // document.getElementById("demo").innerHTML = "<h2>Hello World</h2>";
        // document.write("<p>Saya sedang belajar Javascript</p>");

        const data = [
            { perusahaan: "PT. ABC", posisi: "Software Engineer", lokasi: "Jakarta", tipe: "Full Time", status: "Pending", tanggal_lamar: "2023-08-01", portal: "JobStreet", link: "https://www.jobstreet.com/id" },
            { perusahaan: "PT. XYZ", posisi: "Data Analyst", lokasi: "Bandung", tipe: "Internship", status: "Accepted", tanggal_lamar: "2023-07-15", portal: "LinkedIn", link: "https://www.linkedin.com/jobs/" },
            { perusahaan: "PT. DEF", posisi: "UI/UX Designer", lokasi: "Surabaya", tipe: "Contract", status: "Rejected", tanggal_lamar: "2023-06-20", portal: "Indeed", link: "https://www.indeed.com/jobs" }
        ];

        const tbody = document.querySelector("tbody");
        data.forEach((item, index) => {
            const tr = document.createElement("tr");
            tr.dataset.index = index;
            tr.innerHTML = `
                <td><input type="checkbox"></td>
                <td>${item.perusahaan}</td>
                <td>${item.posisi}</td>
                <td>${item.lokasi}</td>
                <td>${item.tipe}</td>
                <td>${item.status}</td>
                <td>${item.tanggal_lamar}</td>
                <td>${item.portal}</td>
                <td><button>Edit</button> <button>Hapus</button> <a href="${item.link}" target="_blank"><button>Link</button></a></td>
            `;
            tbody.appendChild(tr);
        });
    </script>
</body>
</html>