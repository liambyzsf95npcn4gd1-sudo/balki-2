<?php
$pageTitle = "Балки переменного сечения - производство DoorHan";
$pageDescription = "Узнайте о технологии производства балок переменного сечения от DoorHan. Экономия металла до 30% при сохранении несущей способности.";
$pageKeywords = "балки переменного сечения, равнопрочность, экономия металла, производство балок, DoorHan";
include 'includes/header.php';
?>

<div class="container mt-5">
    <h1 class="mb-4">Балки переменного сечения</h1>
    <div class="row">
        <div class="col-lg-8">
            <img src="https://placehold.co/800x400/003366/FFFFFF?text=Балка+переменного+сечения" class="img-fluid mb-4 rounded" alt="Сварная балка переменного сечения">

            <h2>Экспертное описание</h2>
            <p class="lead">Технология переменного сечения основана на принципе равнопрочности. Вместо равномерного распределения материала мы концентрируем его в зонах максимальных напряжений. Для балки длиной 12 метров это дает экономию 15-30% в зависимости от схемы нагружения.</p>

            <p>Этот подход позволяет значительно снизить вес конструкции без потери ее несущей способности. Балки проектируются таким образом, чтобы их высота была максимальной в местах, где действуют наибольшие изгибающие моменты, и уменьшалась к опорам. Это не только экономит материал, но и открывает новые архитектурные возможности.</p>
        </div>

        <div class="col-lg-4">
            <div class="card bg-light">
                <div class="card-body">
                    <h5 class="card-title text-primary">Пример расчета</h5>
                    <p class="card-text">Сравнение для балки пролетом 12 метров:</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <strong>Типовая балка:</strong><br>
                            H=800 мм (постоянное сечение)<br>
                            Масса: <span class="fw-bold">4.2 тонны</span>
                        </li>
                        <li class="list-group-item">
                            <strong>Наша разработка:</strong><br>
                            H=600-800-600 мм (переменное сечение)<br>
                            Масса: <span class="fw-bold">3.1 тонны</span>
                        </li>
                        <li class="list-group-item bg-success text-white">
                            <strong>Экономия:</strong><br>
                            <span class="display-6 fw-bold">26%</span><br>
                            металла при сохранении несущей способности.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
