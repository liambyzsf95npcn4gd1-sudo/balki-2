<?php
$pageTitle = "География поставок — Заводы DoorHan в России";
$pageDescription = "Наши производственные мощности расположены в Новосибирске, Казани, Можайске и Воронеже, что позволяет осуществлять быструю доставку сварных балок по всей России.";
$pageKeywords = "сварные балки в Новосибирске, производство двутавров в Казани, купить сварной двутавр в Можайске, завод ДорХан Воронеж";
include 'includes/header.php';
?>

<div class="container">
    <h1>География поставок</h1>
    <p class="lead">Четыре современных завода в ключевых регионах России для удобной логистики.</p>

    <!-- Map Placeholder -->
    <div class="my-4 text-center">
        <img src="https://placehold.co/1200x600/e3e3e3/000000?text=Карта+России" class="img-fluid" alt="Карта заводов DoorHan в России">
    </div>

    <div class="row">
        <!-- Novosibirsk -->
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card h-100">
                <img src="https://placehold.co/600x400/003366/FFFFFF?text=Новосибирск" class="card-img-top" alt="Завод в Новосибирске">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Новосибирск</h5>
                    <p class="card-text">Завод в Новосибирске обеспечивает потребности Сибирского и Дальневосточного федеральных округов.</p>
                    <a href="novosibirsk.php" class="btn btn-primary mt-auto">Подробнее</a>
                </div>
            </div>
        </div>

        <!-- Kazan -->
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card h-100">
                <img src="https://placehold.co/600x400/003366/FFFFFF?text=Казань" class="card-img-top" alt="Завод в Казани">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Казань</h5>
                    <p class="card-text">Производственная площадка в Казани ориентирована на Поволжский и Уральский регионы.</p>
                    <a href="kazan.php" class="btn btn-primary mt-auto">Подробнее</a>
                </div>
            </div>
        </div>

        <!-- Mozhaysk -->
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card h-100">
                <img src="https://placehold.co/600x400/003366/FFFFFF?text=Можайск" class="card-img-top" alt="Завод в Можайске">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Можайск</h5>
                    <p class="card-text">Завод в Можайске обслуживает Центральный федеральный округ, включая Москву и Московскую область.</p>
                    <a href="mozhaisk.php" class="btn btn-primary mt-auto">Подробнее</a>
                </div>
            </div>
        </div>

        <!-- Voronezh -->
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card h-100">
                <img src="https://placehold.co/600x400/003366/FFFFFF?text=Воронеж" class="card-img-top" alt="Завод в Воронеже">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Воронеж</h5>
                    <p class="card-text">Площадка в Воронеже покрывает потребности Южного и Северо-Кавказского федеральных округов.</p>
                    <a href="voronezh.php" class="btn btn-primary mt-auto">Подробнее</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
