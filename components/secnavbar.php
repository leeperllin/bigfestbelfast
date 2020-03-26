<?php
include("../showerrors.php");
include("../conn.php");

if (isset($_SESSION['userid_40245529'])) {
    $navmember = $_SESSION['userid_40245529'];
} else {
    $navmember = "guest";
}

$navreadquery = "SELECT * FROM `2020_member`WHERE mid='$navmember' ";

$navreadresult = $conn->query($navreadquery);

if (!$navreadresult) {
    echo $conn->error;
}
?>
<?php
while ($navrowread = $navreadresult->fetch_assoc()) {

    $navrowid2 = $navrowread['mid'];
    $navmfirstname2 = $navrowread['mfirstname'];
    $navmlastname2 = $navrowread['mlastname'];
    $navmemail2 = $navrowread['memail'];
    $navmpass2 = $navrowread['mpass'];
}
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a id="secNavbarLogo" class="navbar-brand" href="../index.php">Bigfest</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link text-light d-flex align-items-center" href="../index.php">
                    <svg class="bi bi-house " width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 00.5.5h9a.5.5 0 00.5-.5V7h1v6.5a1.5 1.5 0 01-1.5 1.5h-9A1.5 1.5 0 012 13.5zm11-11V6l-2-2V2.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5z" clip-rule="evenodd" />
                        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 011.414 0l6.647 6.646a.5.5 0 01-.708.708L8 2.207 1.354 8.854a.5.5 0 11-.708-.708L7.293 1.5z" clip-rule="evenodd" />
                    </svg>
                    <div class="pl-1">Home</div>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light d-flex align-items-center" href="../eventpage/index.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg class="bi bi-calendar" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M14 0H2a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V2a2 2 0 00-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" clip-rule="evenodd" />
                        <path fill-rule="evenodd" d="M6.5 7a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                    </svg>
                    <div class="pl-1">All Event</div>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <?php
                    $showoptionquery = "SELECT * FROM 2020_eventcat ORDER BY etname ";
                    $showoptionresult = $conn->query($showoptionquery);
                    while ($row = $showoptionresult->fetch_assoc()) {
                        $navcatname2 = $row['etname'];
                        $navcatid2 = $row['etid'];
                    ?>
                        <a class="dropdown-item text-primary" href="../eventpage/eventcategory.php?eventcategory=<?php echo $navcatid2; ?>"><?php echo $navcatname2; ?></a>
                    <?php
                    }
                    ?>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light d-flex align-items-center" href="../venuepage/index.php"><svg class="bi bi-geo-alt" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 002 6c0 4.314 6 10 6 10zm0-7a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                    </svg>
                    <div class="pl-1">Venue</div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="../supportpage/index.php"><svg class="bi bi-heart" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 01.176-.17C12.72-3.042 23.333 4.867 8 15z" clip-rule="evenodd" />
                    </svg>
                    Support Us
                </a>
            </li>
        </ul>
        <?php
        if ($navmember !== "guest") { ?>
            <div id="navDropdown" class="nav-item dropdown pl-5 pr-3">
                <a class="nav-link dropdown-toggle text-light d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg class="bi bi-person" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 00.014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 00.022.004zm9.974.056v-.002.002zM8 7a2 2 0 100-4 2 2 0 000 4zm3-2a3 3 0 11-6 0 3 3 0 016 0z" clip-rule="evenodd" />
                    </svg>
                    <div><?php echo $navmember; ?></div>
                </a>
                <div id="navDropdownMenu" class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="nav-link text-primary" href='../mydetails.php?memberid=<?php echo $navrowid2; ?>'>My Profile</a>
                    <a class="nav-link text-primary" href='../messagesystem/messagebox.php'>Inbox</a>
                    <a class="nav-link text-primary" href='../changepass.php'>Change Password</a>
                    <a class="nav-link text-primary " href='../logout.php'>
                        <svg class="bi bi-box-arrow-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M11.646 11.354a.5.5 0 010-.708L14.293 8l-2.647-2.646a.5.5 0 01.708-.708l3 3a.5.5 0 010 .708l-3 3a.5.5 0 01-.708 0z" clip-rule="evenodd" />
                            <path fill-rule="evenodd" d="M4.5 8a.5.5 0 01.5-.5h9a.5.5 0 010 1H5a.5.5 0 01-.5-.5z" clip-rule="evenodd" />
                            <path fill-rule="evenodd" d="M2 13.5A1.5 1.5 0 01.5 12V4A1.5 1.5 0 012 2.5h7A1.5 1.5 0 0110.5 4v1.5a.5.5 0 01-1 0V4a.5.5 0 00-.5-.5H2a.5.5 0 00-.5.5v8a.5.5 0 00.5.5h7a.5.5 0 00.5-.5v-1.5a.5.5 0 011 0V12A1.5 1.5 0 019 13.5H2z" clip-rule="evenodd" />
                        </svg> Logout
                    </a>
                </div>
            </div>
        <?php  } else { ?>
            <a class="nav-link text-light" href='../signin.php'>Sign In</a>
        <?php
        }
        ?>
    </div>
</nav>