 <?php
    session_start();
    include("../showerrors.php");
    include("../conn.php");

    if (isset($_SESSION['userid_40245529'])) {
        $member = $_SESSION['userid_40245529'];
    }

    ?>



 <html>
 <?php
    include("../layouts/sechead.php");
    ?>

 <body>
     <?php include("../components/secnavbar.php"); ?>
     <div class="container">
         <div class="d-flex justify-content-center text-center pt-3">
             <h1 class="text-dark pb-4">Contact Venue Manager</h1>
         </div>
         <form action='msginsert.php' method='POST'>
             <div class="input-group mb-3">
                 <div class="input-group-prepend">
                     <span class="input-group-text" id="inputGroup-sizing-default">TO</span>
                 </div>
                 <input type="text" class="form-control" placeholder='Insert Venue Manager ID' name='msgreceiver' aria-label="Default" aria-describedby="inputGroup-sizing-default">
             </div>
             <!-- <textarea class="rounded" name='msgcontent' style='height:300px'></textarea> -->

             <div class="form-group">
                 <textarea class="form-control" name='msgcontent' id="exampleFormControlTextarea1" placeholder='Type your message here.' rows="5"></textarea>
             </div>
             <div>
                 <input class="btn btn-primary" type='submit' value='Send Message' name='sendmessage'>
             </div>
         </form>
     </div>
     <?php
        include("../layouts/secbodyjs.php");
        ?>
 </body>

 </html>