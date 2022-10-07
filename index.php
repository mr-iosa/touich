<?php include("data.php"); ?>
<!DOCTYPE html>
<html class="tw-root--theme-dark">
    <head>
        <title>Touich - <?php echo $streamerName; ?></title>
        <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon-32-e29e246c157142c94346.png"><link rel="icon" type="image/png" sizes="16x16" href="assets/favicon-16-52e571ffea063af7a7f4.png">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script src="assets/js/script.js"></script>
        <link rel="stylesheet" type="text/css" href="assets/css/color.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="assets/css/dark-theme.css">
    </head>
    <body>
        <div id="root" class="root">
            <div class="bGJmZt">
                <div class="bSuLAT">
                    <?php
                        include("header.php");
                    ?>
                    <div class="hVqkZv">
                        <?php
                            include("sidebar.php");
                        ?>
                        <main class="ZNmIY">
                            <div>
                                <div class="simplebar-scroll-content">
                                    <div class="simplebar-content channel-root__container--with-chat">
                                        <div>
                                            <div class="channel-root__player-container">
                                                <?php
                                                    include("video.php");
                                                ?>
                                                <?php
                                                    include("info.php");
                                                ?>
                                            </div>
                                            <?php
                                                include("chat.php");
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>