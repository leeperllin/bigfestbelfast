<?php
if (isset($_SESSION['VMid_40245529'])) {
    $venuemanager = $_SESSION['VMid_40245529'];
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item pl-2">
                <a class="nav-link text-info" href="index.php">My Events <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item pl-2">
                <a class="nav-link text-info" href="vmedit.php">Edit Events</a>
            </li>
            <li class="nav-item pl-2">
                <a class="nav-link text-info" href="vmupload.php">Upload Events</a>
            </li>
            <li class="nav-item pl-2">
                <a class="nav-link text-info" href="vmdelete.php">Delete Events</a>
            </li>
        </ul>
        <div>Welcome back <?php echo "$venuemanager"; ?> !</div>
        <div class="nav-item dropdown pl-5 pr-3">
            <a class="nav-link dropdown-toggle text-info" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Account
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item text-info" href="#">Change Password</a>
                <a class="dropdown-item text-info" href="#">Logout</a>
            </div>
        </div>
    </div>
</nav>