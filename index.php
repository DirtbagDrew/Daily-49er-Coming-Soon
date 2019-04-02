<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){
     if($_POST['email']!=""){
        $data = $_POST['email'];
        $data .= "; ";
        $ret = file_put_contents('emails.txt', $data, FILE_APPEND | LOCK_EX);
        if($ret === false) {
            die('There was an error writing this file');
        }
        else {
        }
    
        }}
?>
<!DOCTYPE html>
<script>
function checkEmpty() {
    var x = document.forms["myForm"]["email"].value;
    if (x == "") {
        return false;
        document.getElementById("fail").style.visibility = "visible";
    }

}
</script>
<html style="background: url(./background.png) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  height: 100vh;">

<head lang="en">
    <meta charset="UTF-8" />
    <title>Daily 49er</title>
    <link rel="stylesheet" href="bower_components/FlipClock/compiled/flipclock.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css" />
    <script src="jquery-3.3.1.min.js"></script>
</head>

<body ng-app="angular-flipclock" style="background:none;width: 100%;">
    <div class="container" style="width:100%;">
        <div class="row">
            <div class=" col-md-1 col-lg-1"></div>
            <div class="col-xs-11 col-sm-12 col-md-8 col-lg-6" style="margin-top:15%;">
                <div style="width: 100%;text-align:center">
                    <div style="display:inline-block;">
                        <flip-clock
                            style="font-size:200%;zoom:1;margin-left: 0; display: inline-block; text-align:center">
                        </flip-clock>
                    </div>
                    <div style="background:white; border-radius: 10px;">
                        <div style="margin:15px;">
                            <form name="myForm"
                                style="margin: 0;zoom:1.5;display: inline-block,"
                                method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
                                onsubmit="return checkEmpty()">

                                <div class=" form-group form-group-lg" style="background:none">
                                    <label for="exampleInputEmail1">Be the first to know when the new Daily 49er website
                                        launches!</label>
                                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                        name="email" placeholder="Enter email" />
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <?php 
                                if($_SERVER["REQUEST_METHOD"] == "POST"){
                                    if($_POST['email']!=""){
                                        echo '<div class="alert alert-success" role="alert" id="success" style="margin:7px auto;">Submission Successful!</div>';
                                    }
                                }
                            ?>
                            </form>
                        </div>
                        <div style="background-color:#f7c309; width:100%; border-radius: 0 0 10px 10px; margin-top:10px; padding:2px;">
                            <h1 style="margin-top:0;font-family:Helvetica Neue,Helvetica,Arial,sans-serif; font-size:20px; font-weight:700">Don't forget to follow us on social media!</h1>
                            <a href="https://twitter.com/daily49er" target="_blank" style="margin:4px; color:black;"><i class="fab fa-twitter fa-lg"></i></a>
                            <a href="https://www.instagram.com/daily49er/" target="_blank" style="margin:4px; color:black;"><i class="fab fa-instagram fa-lg"></i></a>
                            <a href="https://www.facebook.com/daily49er" target="_blank" style="margin:4px; color:black;"><i class="fab fa-facebook-f fa-lg"></i></a>
                            <a href="https://www.youtube.com/user/videod49er/" target="_blank" style="margin:4px; color:black;"><i class="fab fa-youtube fa-lg"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-lg-1"></div>
            <div class="col-xs-11 col-sm-12 col-md-8 col-lg-5"></div>
        </div>
    </div>

    <script src="bower_components/jquery/dist/jquery.js"></script>
    <script src="bower_components/angular/angular.js"></script>
    <script src="bower_components/FlipClock/compiled/flipclock.js"></script>
    <script src="angular-flipclock.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>

</html>