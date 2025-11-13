<?php
$pageTitle = "Производство сварных балок — Технологии DoorHan";
$pageDescription = "Описание технологического процесса производства сварных двутавровых балок на заводах DoorHan. Используемые материалы, оборудование Corimpex, контроль качества.";
$pageKeywords = "производство сварных балок, завод по производству сварных балок, Corimpex, марки стали для сварных балок, контроль качества";
include 'includes/header.php';
?>

<div class="container">
    <h1>Производство</h1>
    <p class="lead">Наши заводы оснащены современным высокотехнологичным оборудованием для производства сварных двутавровых балок.</p>

    <!-- Equipment Section -->
    <div class="row align-items-center my-5">
        <div class="col-md-6">
            <h2>Технологическое оборудование Corimpex</h2>
            <p>Сердцем нашего производства являются автоматизированные сварочные линии от итальянской компании Corimpex. Эти линии обеспечивают:
                <ul>
                    <li>Высокую скорость и точность сборки</li>
                    <li>Идеальную геометрию балки</li>
                    <li>Качественный провар по всей длине шва</li>
                    <li>Минимальное термическое воздействие на металл</li>
                </ul>
            </p>
        </div>
        <div class="col-md-6">
            <img src="https://placehold.co/500x300.png?text=Линия+Corimpex" class="img-fluid" alt="Линия Corimpex по производству сварных балок">
        </div>
    </div>

    <!-- Materials Section -->
    <div class="row align-items-center my-5">
        <div class="col-md-6 order-md-2">
            <h2>Используемые материалы</h2>
            <p>Мы используем только сертифицированную сталь от ведущих российских производителей. Основные марки стали:
                <ul>
                    <li><strong>С245, С255:</strong> для конструкций с невысокой нагрузкой.</li>
                    <li><strong>С345, С355:</strong> оптимальное соотношение цены и прочности для большинства строительных задач.</li>
                    <li><strong>09Г2С, 12ГС:</strong> по специальному заказу для эксплуатации в условиях низких температур.</li>
                </ul>
                Каждая партия стали проходит входной контроль качества.
            </p>
        </div>
        <div class="col-md-6 order-md-1">
            <img src="https://placehold.co/500x300.png?text=Марки+стали" class="img-fluid" alt="Марки стали для сварных балок">
        </div>
    </div>

    <!-- Quality Control Section -->
    <div class="row my-5">
        <div class="col-lg-12">
            <h2 class="text-center">4-ступенчатый контроль качества</h2>
            <p>1. <strong>Входной контроль:</strong> Проверка сертификатов и химического состава металла.<br>
               2. <strong>Операционный контроль:</strong> Контроль геометрии и размеров на каждом этапе производства.<br>
               3. <strong>Сварочный контроль:</strong> Визуальный и ультразвуковой контроль сварных швов.<br>
               4. <strong>Выходной контроль:</strong> Финальная проверка готовой продукции перед отгрузкой.
            </p>
        </div>
    </div>

    <!-- Variable Section Beams -->
    <div class="row align-items-center my-5">
        <div class="col-md-6">
            <h2><a href="variable_section_beams" class="text-decoration-none">Балки переменного сечения</a></h2>
            <p>Технология, основанная на принципе равнопрочности, позволяет концентрировать материал в зонах максимальных напряжений, экономя до 30% металла без потери несущей способности.</p>
            <a href="variable_section_beams" class="btn btn-primary">Узнать больше</a>
        </div>
        <div class="col-md-6">
            <a href="variable_section_beams">
                <img src="https://placehold.co/500x300.png?text=Балка+переменного+сечения" class="img-fluid" alt="Балка переменного сечения">
            </a>
        </div>
    </div>

    <!-- Perforated Beams -->
    <div class="row align-items-center my-5">
        <div class="col-md-6 order-md-2">
            <h2><a href="perforated_beams" class="text-decoration-none">Перфорированные балки</a></h2>
            <p>Оптимизированная перфорация позволяет прокладывать коммуникации прямо сквозь балки, снижая массу конструкции до 15% и экономя строительную высоту здания.</p>
            <a href="perforated_beams" class="btn btn-primary">Узнать больше</a>
        </div>
        <div class="col-md-6 order-md-1">
            <a href="perforated_beams">
                <img src="https://placehold.co/500x300.png?text=Перфорированная+балка" class="img-fluid" alt="Перфорированная балка">
            </a>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
