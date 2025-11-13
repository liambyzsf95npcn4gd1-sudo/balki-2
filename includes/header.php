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
<?php
$currentPage = pathinfo(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), PATHINFO_FILENAME);
if (empty($currentPage)) {
    $currentPage = 'index';
}
?>
<header class="sticky-top">
    <div class="top-bar bg-light text-dark py-2">
        <div class="container d-flex justify-content-end">
            <span class="me-3"><a href="mailto:info@doorhan.ru" class="text-dark" style="text-decoration: none;">info@doorhan.ru</a></span>
            <span><a href="tel:+74959332400" class="text-dark" style="text-decoration: none;">+7 (495) 933-24-00</a></span>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index">DoorHan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link <?php if ($currentPage == 'about' || $currentPage == 'index') echo 'active'; ?>" href="about">О компании</a></li>
                    <li class="nav-item"><a class="nav-link <?php if ($currentPage == 'products') echo 'active'; ?>" href="products">Продукция</a></li>
                    <li class="nav-item"><a class="nav-link <?php if ($currentPage == 'services') echo 'active'; ?>" href="services">Услуги</a></li>
                    <li class="nav-item"><a class="nav-link <?php if ($currentPage == 'production') echo 'active'; ?>" href="production">Производство</a></li>
                    <li class="nav-item"><a class="nav-link <?php if ($currentPage == 'gosts') echo 'active'; ?>" href="gosts">ГОСТы</a></li>
                    <li class="nav-item"><a class="nav-link <?php if ($currentPage == 'geography') echo 'active'; ?>" href="geography">География поставок</a></li>
                    <li class="nav-item"><a class="nav-link <?php if ($currentPage == 'contacts') echo 'active'; ?>" href="contacts">Контакты</a></li>
                    <li class="nav-item"><a class="nav-link <?php if ($currentPage == 'spravka') echo 'active'; ?>" href="spravka">Справка</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<main class="container mt-4">
