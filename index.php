
  
<body>
    <div class="bg-pattern"></div>
    <button class="btn btn-outline-primary mode-toggle" id="modeToggle">
        <i class="bi bi-sun-fill"></i>
    </button>

    <?php
    include_once('layouts/header.php');
    include_once('config/function.php');
    ?>

    <div class="container mt-4">
        <div class="jumbotron">
            <h1 class="display-4"><?php echo $companyProfile['name']; ?></h1>
            <p class="lead"><?php echo $companyProfile['description']; ?></p>
        </div>

        <section class="mb-5">
            <h2 class="mb-4">Founding Team</h2>
            <ul class="list-group">
                <li class="list-group-item">CEO: <?php echo $companyProfile['foundingTeam']['CEO']; ?></li>
                <li class="list-group-item">CPO: <?php echo $companyProfile['foundingTeam']['CPO']; ?></li>
            </ul>
        </section>

        <section class="mb-5">
            <div class="row">
                <div class="col-md-4">
                    <img src="asset/images/28.png" alt="education issue" class="img-fluid">
                </div>
                <div class="col-md-8">
                    <h2 class="mb-3"><?php echo $companyProfile['educationIssue']['title']; ?></h2>
                    <p class="lead"><?php echo $companyProfile['educationIssue']['content']; ?></p>
                </div>
            </div>
        </section>

        <section class="mb-5">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="mb-3"><?php echo $companyProfile['background']['title']; ?></h2>
                    <p class="lead"><?php echo $companyProfile['background']['content']; ?></p>
                </div>
                <div class="col-md-4">
                    <img src="asset/images/33.png" alt="background" class="img-fluid">
                </div>
            </div>
        </section>

        <section class="mb-5">
            <div class="row">
                <div class="col-md-4">
                    <img src="asset/images/vision.png" alt="vision" class="img-fluid">
                </div>
                <div class="col-md-8">
                    <h2 class="mb-3">Visi</h2>
                    <p class="lead"><?php echo $companyProfile['vision']; ?></p>
                </div>
            </div>
        </section>

        <section class="mb-5">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="mb-3">Misi</h2>
                    <ul class="list-group">
                        <?php foreach ($companyProfile['mission'] as $mission): ?>
                            <li class="list-group-item"><?php echo $mission; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="col-md-4">
                    <img src="asset/images/mission.png" alt="mission" class="img-fluid">
                </div>
            </div>
        </section>

        <section class="mb-5">
            <h2 class="mb-4">Statistik Luarsekolah</h2>
            <div class="row">
                <div class="col-md-3 col-sm-6 mb-3">
                    <div class="card stat-card">
                        <div class="card-body text-center">
                            <div class="counter">0</div>
                            <p class="card-text">Total User</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-3">
                    <div class="card stat-card">
                        <div class="card-body text-center">
                            <div class="counter">0</div>
                            <p class="card-text">Total Trainers</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-3">
                    <div class="card stat-card">
                        <div class="card-body text-center">
                            <div class="counter">0</div>
                            <p class="card-text">Instagram Followers</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-3">
                    <div class="card stat-card">
                        <div class="card-body text-center">
                            <div class="counter">0</div>
                            <p class="card-text">Total Classes</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-5">
            <h2 class="mb-3">Mitra</h2>
            <ul class="list-group">
                <li class="list-group-item"><?php echo $companyProfile['partnerships']['company']; ?></li>
                <li class="list-group-item"><?php echo $companyProfile['partnerships']['university']; ?></li>
            </ul>
        </section>
    </div>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p class="mb-0">Thank you for visiting Luarsekolah's company profile.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="config/script.js"></script>
</body>
