<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <meta name="description" content="<?php echo $pageDescription; ?>">
    <meta name="keywords" content="<?php echo $pageKeywords; ?>">
    <base href="/balki/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php $currentPage = basename($_SERVER['PHP_SELF']); ?>
<header class="sticky-top">
    <div class="top-bar bg-light text-dark py-2">
        <div class="container-fluid d-flex justify-content-end">
            <span class="me-3"><a href="mailto:info@doorhan.ru" class="text-dark" style="text-decoration: none;">info@doorhan.ru</a></span>
            <span><a href="tel:+74959332400" class="text-dark" style="text-decoration: none;">+7 (495) 933-24-00</a></span>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">DoorHan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link <?php if ($currentPage == 'about.php') echo 'active'; ?>" href="about.php">О компании</a></li>
                    <li class="nav-item"><a class="nav-link <?php if ($currentPage == 'products.php') echo 'active'; ?>" href="products.php">Продукция</a></li>
                    <li class="nav-item"><a class="nav-link <?php if ($currentPage == 'services.php') echo 'active'; ?>" href="services.php">Услуги</a></li>
                    <li class="nav-item"><a class="nav-link <?php if ($currentPage == 'production.php') echo 'active'; ?>" href="production.php">Производство</a></li>
                    <li class="nav-item"><a class="nav-link <?php if ($currentPage == 'standards.php') echo 'active'; ?>" href="standards.php">ГОСТы и стандарты</a></li>
                    <li class="nav-item"><a class="nav-link <?php if ($currentPage == 'geography.php') echo 'active'; ?>" href="geography.php">География поставок</a></li>
                    <li class="nav-item"><a class="nav-link <?php if ($currentPage == 'contacts.php') echo 'active'; ?>" href="contacts.php">Контакты</a></li>
                    <li class="nav-item"><a class="nav-link <?php if ($currentPage == 'blog.php') echo 'active'; ?>" href="blog.php">Блог</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<main class="container mt-4">
