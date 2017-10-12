<!DOCTYPE html>
<html lang="en">
<head>
    <title>CollegeProject</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="./semantic/dist/semantic.min.css" rel="stylesheet">
    <link href="./assets/css/styles.css" rel="stylesheet">
</head>
<body style="background:url(https://source.unsplash.com/random);background-size: cover;">

<?php

    include_once('./views/common/header.php');

    if ( isset($_GET['page']) ) {

        switch($_GET['page']) {
            case 'tricklining':
                include('./views/pages/tricklining/tricklining.php');
                break;
            case 'longlining':
                include('./views/pages/longlining/longlining.php');
                break;
            case 'gettingstarted':
                include('./views/pages/getting-started/gettingStarted.php');
                break;
            default:
                header('location: /slackline');
                break;
        }

    } else {
        include('./views/pages/home/home.php');
    }

    include_once('./views/common/footer.php');

?>

<script type="application/javascript" src="semantic/dist/semantic.min.js"></script>
</body>
</html>