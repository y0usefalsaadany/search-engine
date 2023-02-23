<?php
session_start();
$_SESSION['token'] = md5(uniqid(mt_rand(),true));
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <!-- Title Page -->
        <title>MaJoeSearch</title>
        <!-- Important Meta -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Search the world's information, including webpages, images, videos and more. MoJoeSearch has many special features to help you find exactly what you're looking for.">
        <meta name="keywords" content="search searchbar MaJoeSearch MaJoe Mo Joe Search SEARCH">
        <!-- <meta http-equiv="refresh" content="0; url=http://example.com"> -->
        <!-- Icon Page -->
        <link rel="icon" href="./public/images/logo.jpeg">
        <!-- Styles Files -->
        <link rel="stylesheet" href="./public/plugin/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.1/css/all.min.css" integrity="sha512-3M00D/rn8n+2ZVXBO9Hib0GKNpkm8MSUU/e2VNthDyBYxKWG+BftNYYcuEjXlyrSO637tidzMBXfE7sQm0INUg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Min Style -->
        <link rel="stylesheet" href="./public/css/main.css">
    </head>
    <body>
        <!-- Creative Txt -->
        <!-- Start Search -->
        <section class="container">
            <div class="text d-flex justify-content-center">
                <h3 data-text="MoJoeSearch.">MaJoeSearch.</h3>
            </div>
            <form action="app/client.php" method="post">
                <div class="wrapper d-flex justify-content-center align-items-center">
                    <div class="search-input">
                        <a href="" target="_blank" hidden></a>
                        <input type="text" name="search" placeholder="Type to search.." >
                        <input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>" required><br>
                        <div class="autocom-box">
                            <!-- here list are inserted from javascript -->
                        </div>
                        <div class="icon"><i class="fas fa-search"></i></div>
                    </div>
                </div>
            </form>
        </section>

        <!-- End Search -->


        <!-- Toggle Them Start - light and Dark -->
        <div class="toggle-them">
            <i class="fas"></i>
        </div>
        <!-- Toggle Them End - light and Dark -->

        <!-- Scripts Files -->
        <script src="./public/plugin/jQuery.3.5.0.min.js"></script>
        <script src="./public/plugin/bootstrap.bundle.min.js"></script>
        <script src="./public/plugin/bootstrap.min.css"></script>
        <script src="./public/plugin/suggestions.js"></script>
        <!-- Main Script -->
        <script src="./public/js/main.js"></script>
    </body>
</html>