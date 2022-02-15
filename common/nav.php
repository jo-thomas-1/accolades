<nav class="navbar sticky-top navbar-expand-md navbar-dark mb-5">
    <div class="container">
        <a class="navbar-brand pb-0" href="#">
            <img class="logo" style="height: 2.5em; width: auto;" src="images/logo_white.png" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggleContent" aria-controls="toggleContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="toggleContent">
            <ul class="navbar-nav ms-auto mt-3 mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link <?php if($current_page == 'report') print("active"); ?>" aria-current="page" href="index.php">Reports</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($current_page == 'project') print("active"); ?>" aria-current="page" href="project.php">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($current_page == 'task') print("active"); ?>" aria-current="page" href="task.php">Tasks</a>
                </li>
            </ul>
        </div>
    </div>
</nav>