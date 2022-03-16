<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">SAHP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item <?php if($currentPage == 'forside'){echo 'active';}?>">
                <a class="nav-link" href="home.php">Forside<span class="sr-only">(cuccrent)</span></a>
            </li>
            <?php
            $staffPerms = $_SESSION['perms'];
            switch ($staffPerms) {
                case $staffPerms['superUser'] == '1':
                    echo "<li class='nav-item'><a class='nav-link' href=\"staff.php\">Politi Betjente</a></li>";
                case $staffPerms["superUser"] == 1 || $staffPerms["betjent"] == 1:
                    echo "<li class='nav-item'><a class='nav-link' href=\"wanted.php\">Eftersøgte</a></li>"; 
                case $staffPerms["superUser"] == 1 || $staffPerms["betjent"] == 1:
                    echo "<li class='nav-item'><a class='nav-link' href=\"driverlicense.php\">Licenser</a></li>";	
                case $staffPerms["superUser"] == 1 || $staffPerms["betjent"] == 1:
                    echo "<li class='nav-item'><a class='nav-link' href=\"numberplate.php\">Motorregister</a></li>";														
                case $staffPerms["superUser"] == 1 || $staffPerms["betjent"] == 1: 
                    echo "<li class='nav-item'><a class='nav-link' href=\"calculator.php\">Lommeregner</a></li>";
                case $staffPerms["superUser"] == 1 || $staffPerms["betjent"] == 1: 
                    echo "<li class='nav-item'><a class='nav-link' href=\"cpr.php\">CPR Register</a></li>";						
                case $staffPerms["superUser"] == 1 || $staffPerms["betjent"] == 1: 
                    echo "<li class='nav-item'><a class='nav-link' href=\"reports.php\">Politi Raporter</a></li>";	
                case $staffPerms["superUser"] == 1 || $staffPerms["betjent"] == 1: 
                    echo "<li class='nav-item'><a class='nav-link' href=\"meeting.php\" class='isDisable'>Møde</a></li>";
                case $staffPerms["superUser"] == 1 || $staffPerms["betjent"] == 1:
                    echo "<li class'nav-item'><a class='nav-link' href=\"mdt.php\">MDT</a></li>";					
            }
            ?>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Log Ud</a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="nav-item dropdown">
            <?php
            if(isset($_SESSION['logged'])) {
                echo "<a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>".$_SESSION['user']."</a>";
                echo "<div class='dropdown-menu' aria-labelledby='navbarDropdown'>";
                echo "<a class='dropdown-item' href='#'>Action</a>";
                echo "<a class='dropdown-item' href='#'>Another action</a>";
                echo "<div class='dropdown-divider'></div>";
                echo "<a class='dropdown-item' href='#'>Something else here</a>";
                echo "</div>";
            }
            ?>
                <a href="profile.php" class="btn btn-warning" role="button">Profil</a>
                <a href="information.php" class="btn btn-danger" role="button">Panel Information</a>
            </li>
        </ul>
    </div>
</nav>