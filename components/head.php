<?php function renderHead($title) { ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/logo.svg" sizes="any" type="image/svg+xml" />
    <!-- This logo is designed by using icons from "https://icons8.com/icons". -->
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <title><?php echo $title ?></title>
</head>

<?php } ?>