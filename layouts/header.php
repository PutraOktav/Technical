<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="asset/images/LS-logogram-master.png" type="image/png">
    <title>Luar Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            transition: background-color 0.3s, color 0.3s;
        }
        .jumbotron {
            background-color: rgba(248, 249, 250, 0.8);
            padding: 2rem 1rem;
            margin-bottom: 2rem;
            border-radius: .3rem;
        }
        .stat-card {
            background-color: #007bff;
            color: white;
            transition: transform 0.3s ease-in-out;
        }
        .stat-card:hover {
            transform: translateY(-5px);
        }
        .dark-mode {
            background-color: #333;
            color: #f8f9fa;
        }
        .dark-mode .jumbotron {
            background-color: rgba(52, 58, 64, 0.8);
            color: #f8f9fa;
        }
        .dark-mode .list-group-item {
            background-color: #444;
            color: #f8f9fa;
            border-color: #666;
        }
        .dark-mode .stat-card {
            background-color: #0056b3;
        }
        .mode-toggle {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1000;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="asset/images/LS-logo-master.png" alt="Luar Sekolah" width="60" height="30" class="d-inline-block align-text-top">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="programDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Program
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="programDropdown">
                                <li><a class="dropdown-item" href="https://luarsekolah.com/prakerja">Prakerja</a></li>
                                <li><a class="dropdown-item" href="https://magang.luarsekolah.com/">Magang+</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex ms-2" role="search">
                        <input class="form-control me-2" type="search" placeholder="Cari kelas yang ingin kamu pelajari" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                        <div class="d-flex ms-2">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                Profil
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="profileDropdown">
                                <li><a class="dropdown-item" href="https://luarsekolah.com/member/profile">Profil Saya</a></li>
                                <li><a class="dropdown-item" href="https://luarsekolah.com/member/profile">Pengaturan</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="https://luarsekolah.com">Keluar</a></li>
                            </ul>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <div class="bg-pattern"></div>
</body>
</html>
