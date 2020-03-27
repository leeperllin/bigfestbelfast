<?php
session_start();
include("showerrors.php");
include("conn.php");

if (isset($_SESSION['userid_40245529'])) {
    $member = $_SESSION['userid_40245529'];
} else {
    $member = "guest";
}

$readquery = "SELECT * FROM `2020_member`WHERE mid='$member' ";

$readresult = $conn->query($readquery);

if (!$readresult) {
    echo $conn->error;
}
?>


<html>
<?php
include("layouts/head.php");
?>

<body>
    <?php include("components/navbar.php") ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 id="indexTitle" class="text-primary display-4 m-4">Bigfest Belfast</h1>
            </div>
        </div>
        <div class="row h-50">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="h-100 w-100" style="background: #222 url('https://wallpaperplay.com/walls/full/5/f/4/150693.jpg') center center no-repeat; background-size: cover;">
                            <div class="container">
                                <div class="row h-100">
                                    <div class="col-12 h-100 d-flex justify-content-center align-items-center display-4 text-light">
                                        <div>Find your perfect concert at our website</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="h-100 w-100" style="background: #222 url('https://cdn.hipwallpaper.com/i/99/15/H0Sftl.jpg') center center no-repeat; background-size: cover;">
                            <!-- <img src="https://www.itl.cat/pngfile/big/219-2191631_beautiful-lake-4k-wallpaper-depth-of-field-sample.jpg" alt=""> -->
                            <div class="container">
                                <div class="row h-100">
                                    <div class="col-12  text-light">
                                        <div class="display-4 p-5 m-5">Our Mission</div>
                                        <div>
                                            <h3>Is to give customers the most compelling event experience possible.</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="h-100 w-100" style="background: #222 url('https://images.wallpaperscraft.com/image/concert_performance_light_organ_137789_1920x1080.jpg') center center no-repeat; background-size: cover;">
                            <div class="container">
                                <div class="row h-100">
                                    <div class="col-12 h-100 display-4 text-light ">
                                        <div class="p-5 m-5">
                                            <div>Explore our latest events</div>
                                            <br>
                                            <a href="eventpage/index.php">
                                            <div class="btn btn-primary">All Events</div></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
        <div class="row p-5">
            <div class="col-12">
                <div class="row">
                    <div class="col-3">
                        <div class="row d-flex justify-content-center">
                            <img class="rounded-circle" src="https://scontent.fkul14-1.fna.fbcdn.net/v/t1.0-9/s960x960/64218610_2715758691785661_6978825039953002496_o.jpg?_nc_cat=107&_nc_sid=85a577&_nc_ohc=5BQkHNGy4JMAX8blBFl&_nc_ht=scontent.fkul14-1.fna&_nc_tp=7&oh=3130d5060f7073694e2491cd26c4161f&oe=5EA404C4" alt="Perl Lin Lee" style="width: 150px; height: 150px;">
                        </div>
                        <div class="row d-flex justify-content-center">
                            <h5 class="text-primary">Founder</h5>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <h4>Perl Lin Lee</h4>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="row d-flex justify-content-center">
                            <img class="rounded-circle" src="https://beta.ctvnews.ca/content/dam/ctvnews/images/2019/11/18/1_4691731.png?cache_timestamp=1574134871525" alt="Cat Meme" style="width: 150px; height: 150px; object-fit:cover;">
                        </div>
                        <div class="row d-flex justify-content-center">
                            <h5 class="text-primary">Partner with</h5>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <h4>Cat Meme</h4>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="row d-flex justify-content-center">
                            <img class="rounded-circle" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Bootstrap_logo.svg/1200px-Bootstrap_logo.svg.png" alt="Bootstrap" style="width: 150px; height: 150px; ">
                        </div>
                        <div class="row d-flex justify-content-center">
                            <h5 class="text-primary">Partner with</h5>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <h4>Bootstrap</h4>
                        </div>
                    </div>
                    <div class="col-3 h-100">
                        <div class="row h-50">
                            <h5 class="text-primary m-2">Follow Us</h5>
                        </div>
                        <div class="row h-50 d-flex">
                            <a href="https://www.facebook.com/"><i class="fa fa-facebook-official text-primary m-2" style="font-size:48px;"></i></a>
                            <a href="https://www.instagram.com/"> <i class="fa fa-instagram text-primary m-2" style="font-size:48px;"></i></a>
                            <a href="https://www.snapchat.com/"> <i class="fa fa-snapchat text-primary m-2" style="font-size:48px;"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include("components/footer.php");
    ?>
    <?php
    include("layouts/bodyjs.php");
    ?>
</body>

</html>