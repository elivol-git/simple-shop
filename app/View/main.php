<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>My shop</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/fontawesome.css">
    <link rel="stylesheet" href="/public/css/main.css">
    <link rel="stylesheet" href="/public/css/owl.css">

</head>
<body>

<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/"><h2>Eli's <em>shop</em></h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item  <?php echo empty($_REQUEST['path'])?'active':'';?>">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item  <?php echo (@$_REQUEST['path']==='products-list'?'active':'');?>">
                        <a class="nav-link" href="products-list">Our Products</a>
                    </li>
                    <li class="nav-item <?php echo (@$_REQUEST['path']==='add-product'?'active':'');?>">
                        <a class="nav-link" href="new-product">Add product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

    <?php require_once($page.'.php'); ?>
<footer>
    <p>&copy; Eli's shop, all rights reserved 2022</p>
</footer>
<script
        src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>
<script src="/public/js/custom.js"></script>
<script src="/public/js/slick.js"></script>
<script src="/public/js/isotope.js"></script>
<script src="/public/js/accordions.js"></script>
</body>
</html>