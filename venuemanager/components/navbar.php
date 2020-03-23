<?php
if (isset($_SESSION['VMid_40245529'])) {
    $venuemanager = $_SESSION['VMid_40245529'];
}
?>
<nav id="vmNav" class="navbar navbar-expand-lg navbar-info bg-info">

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item pl-2">
                <a class="nav-link text-light" href="index.php">My Events <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item pl-2">
                <a class="nav-link text-light" href="vmedit.php">Edit Events</a>
            </li>
            <li class="nav-item pl-2">
                <a class="nav-link text-light" href="vmupload.php">Upload Events</a>
            </li>
            <li class="nav-item pl-2">
                <a class="nav-link text-light" href="vmdelete.php">Delete Events</a>
            </li>
        </ul>
        <h5 class="text-warning m-0">Welcome back <?php echo "$venuemanager"; ?> !</h5>
        <div id="vmNavDropdown" class="nav-item dropdown pl-5 pr-3">
            <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Account
            </a>
            <div id="vmNavDropdownMenu" class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item text-info" href="vmchangepass.php">Change Password</a>
                <a class="dropdown-item text-info" href="vmlogout.php">Logout</a>
            </div>
        </div>
    </div>
</nav>