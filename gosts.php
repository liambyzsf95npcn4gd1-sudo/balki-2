<?php
$pageTitle = "ГОСТы на сварные балки — DoorHan";
$pageDescription = "Нормативная база и стандарты, регулирующие производство сварных двутавровых балок. ГОСТ Р 58966-2020, ГОСТ 23118-2019, марки стали по ГОСТ 27772-2021.";
$pageKeywords = "ГОСТ Р 58966-2020, сварные балки гост, сталь С345, ГОСТ 23118-2019, марки стали, СП 53-101-98";
include 'includes/header.php';
?>

<div class="container">
    <h1>ГОСТы</h1>
    <p class="lead">Вся продукция DoorHan производится в строгом соответствии с действующей нормативной базой Российской Федерации.</p>

    <div class="accordion" id="standardsAccordion">
        <!-- GOST R 58966-2020 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    ГОСТ Р 58966-2020 «Двутавры стальные сварные с перфорированной стенкой. Технические условия»
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#standardsAccordion">
                <div class="accordion-body">
                    Основной стандарт, регулирующий производство сварных балок, в том числе с перфорацией. Определяет требования к геометрии, материалам, качеству сварных швов и методам контроля.
                </div>
            </div>
        </div>

        <!-- GOST 23118-2019 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    ГОСТ 23118-2019 «Конструкции стальные строительные. Общие технические условия»
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#standardsAccordion">
                <div class="accordion-body">
                    Устанавливает общие требования к стальным строительным конструкциям, включая балки, в части проектирования, изготовления, монтажа и контроля качества.
                </div>
            </div>
        </div>

        <!-- GOST 27772-2021 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    ГОСТ 27772-2021 «Прокат для строительных стальных конструкций. Общие технические условия»
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#standardsAccordion">
                <div class="accordion-body">
                    Регламентирует требования к маркам стали, используемым в строительстве. Мы используем:
                    <ul>
                        <li><strong>С245/С255:</strong> для ненагруженных элементов.</li>
                        <li><strong>С345:</strong> как основной материал с оптимальным соотношением прочности и стоимости.</li>
                        <li><strong>С355:</strong> для особо ответственных конструкций.</li>
                    </ul>
                </div>
            </div>
        </div>

         <!-- SP 53-101-98 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    СП 53-101-98 «Изготовление и контроль качества стальных строительных конструкций»
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#standardsAccordion">
                <div class="accordion-body">
                    Свод правил, детализирующий процессы изготовления и контроля качества стальных конструкций, включая требования к сварочным работам и защите от коррозии.
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4">
        <h3>Сертификаты</h3>
        <p>Вся продукция имеет необходимые сертификаты соответствия Ростехнадзора. Копии сертификатов предоставляются по запросу.</p>
        <a href="contacts" class="btn btn-primary">Запросить сертификаты</a>
    </div>

</div>

<?php include 'includes/footer.php'; ?>
