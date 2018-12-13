<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="application-name" content="php-saml-ds">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discovery Service for eduVPN</title>
    <link rel="stylesheet" type="text/css" href="css/screen.css">
    <?php if ($useLogos): ?>
        <link rel="stylesheet" type="text/css" href="logo/idp/<?=$this->e($encodedEntityID); ?>.css?mTime=<?=$this->e($mTime); ?>">
    <?php endif; ?>
    <link rel="stylesheet" type="text/css" href="css/eduVPN/eduvpn.css"> <!-- eduVPN branding -->
    <script type="text/javascript" src="js/filter.js"></script>
</head>
<body>
    <div class="header">
        <?=$this->section('header'); ?>
    </div> <!-- header -->
    <div class="container">
        <?=$this->section('container'); ?>
    </div> <!-- container -->

    <div class="footer">
        Discovery Service for <a href="https://eduvpn.org/">eduVPN</a>
    </div> <!-- footer -->
</body>
</html>
