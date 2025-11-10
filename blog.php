<?php
$pageTitle = "Блог — Статьи о сварных балках и металлоконструкциях";
$pageDescription = "Полезные статьи и материалы о проектировании, расчете и применении сварных двутавровых балок. Сравнение с прокатной балкой, расчет металлоемкости.";
$pageKeywords = "как рассчитать металлоемкость, сварная или прокатная балка, проектирование металлоконструкций, применение сварных балок";
include 'includes/header.php';
?>

<div class="container">
    <h1>Блог</h1>
    <p class="lead">Полезная информация для проектировщиков, инженеров и строителей.</p>

    <div class="row">
        <!-- Article 1 -->
        <div class="col-md-6 mb-4">
            <div class="card h-100">
                <img src="images/blog-article1.jpg" class="card-img-top" alt="Расчет металлоемкости сварной балки">
                <div class="card-body">
                    <h5 class="card-title">Как рассчитать металлоемкость сварной балки?</h5>
                    <p class="card-text">В статье мы разбираем методику расчета и оптимизации веса сварной балки по сравнению со стандартными прокатными профилями. Приводим примеры реальной экономии на проектах.</p>
                    <a href="blog/article1.php" class="btn btn-primary">Читать далее</a>
                </div>
            </div>
        </div>

        <!-- Article 2 -->
        <div class="col-md-6 mb-4">
            <div class="card h-100">
                <img src="images/blog-article2.jpg" class="card-img-top" alt="Сварная балка для моста">
                <div class="card-body">
                    <h5 class="card-title">Что лучше для моста: сварная или прокатная балка?</h5>
                    <p class="card-text">Сравнительный анализ преимуществ и недостатков использования сварных и прокатных балок в мостостроении. Рассматриваем факторы долговечности, стоимости и скорости монтажа.</p>
                    <a href="blog/article2.php" class="btn btn-primary">Читать далее</a>
                </div>
            </div>
        </div>

        <!-- Article 3 -->
        <div class="col-md-6 mb-4">
            <div class="card h-100">
                <img src="https://placehold.co/600x400/003366/FFFFFF?text=DoorHan" class="card-img-top" alt="Преимущества балок переменного сечения">
                <div class="card-body">
                    <h5 class="card-title">Преимущества балок переменного сечения</h5>
                    <p class="card-text">Узнайте, как использование балок переменного сечения может снизить вес конструкции на 20-30% без потери несущей способности, и в каких типах зданий это наиболее эффективно.</p>
                    <a href="blog/article3.php" class="btn btn-primary">Читать далее</a>
                </div>
            </div>
        </div>

        <!-- Article 4 -->
        <div class="col-md-6 mb-4">
            <div class="card h-100">
                <img src="https://placehold.co/600x400/003366/FFFFFF?text=DoorHan" class="card-img-top" alt="Горячее цинкование">
                <div class="card-body">
                    <h5 class="card-title">Горячее цинкование как метод защиты от коррозии</h5>
                    <p class="card-text">Подробно о технологии горячего цинкования, ее преимуществах перед окрашиванием и других методах, а также о влиянии на срок службы металлоконструкций.</p>
                    <a href="blog/article4.php" class="btn btn-primary">Читать далее</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
