<?php
$pageTitle = "Сварные балки в Казани от производителя DoorHan";
$pageDescription = "Производство и продажа сварных двутавровых балок в Казани. Завод ДорХан в Казани. Быстрые сроки, доставка по региону.";
$pageKeywords = "сварная балка казань, двутавровая балка казань, производство двутавров казань, завод doorhan казань";
include 'includes/header.php';
?>

<div class="container">
    <!-- Hero Block -->
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Сварные двутавровые балки в Казани — производство и поставки от ДорХан</h1>
            <p class="col-md-8 fs-4">Производство на местном заводе в Казани. Короткие сроки поставки по Татарстану.</p>
            <img src="https://placehold.co/1200x400/003366/FFFFFF?text=Завод+в+Казани" class="img-fluid my-4" alt="Производство сварных балок DoorHan в Казани">
            <a href="#contact-form" class="btn btn-primary btn-lg">Рассчитать стоимость в Казани</a>
            <button class="btn btn-secondary btn-lg" type="button" onclick="location.href='contacts'">Получить общую консультацию</button>
        </div>
    </div>

    <!-- Advantages Block -->
    <div class="row text-center my-5">
        <h2 class="text-center mb-4">Преимущества работы с заводом в Казани</h2>
        <div class="col-md-3">
            <h3>📐 Любые размеры</h3>
            <p>Изготовление балок по индивидуальным чертежам под ваш проект.</p>
        </div>
        <div class="col-md-3">
            <h3>🚚 Быстрая доставка</h3>
            <p>Оперативная логистика и доставка по всему Татарстану.</p>
        </div>
        <div class="col-md-3">
            <h3>📍 Завод в Казани</h3>
            <p>Прямые поставки с нашего производственного комплекса в Казани.</p>
        </div>
        <div class="col-md-3">
            <h3>🛡️ Антикоррозийная защита</h3>
            <p>Горячее цинкование для максимальной долговечности конструкций.</p>
        </div>
    </div>

    <!-- Application Cases -->
    <div class="row my-5 d-flex">
        <h2 class="text-center mb-4">Кейсы применения</h2>
        <!-- Content reused from index, as it's general -->
        <div class="col-md-3">
            <div class="card h-100">
                <img src="https://placehold.co/600x400/003366/FFFFFF?text=Кейс+1" class="card-img-top" alt="Сварные балки для строительных конструкций">
                <div class="card-body">
                    <h5 class="card-title">Строительные металлоконструкции</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card h-100">
                <img src="https://placehold.co/600x400/003366/FFFFFF?text=Кейс+2" class="card-img-top" alt="Двутавры для мостовых сооружений">
                <div class="card-body">
                    <h5 class="card-title">Мостовые сооружения</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card h-100">
                <img src="https://placehold.co/600x400/003366/FFFFFF?text=Кейс+3" class="card-img-top" alt="Балки для складов и ангаров">
                <div class="card-body">
                    <h5 class="card-title">Склады и ангары</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card h-100">
                <img src="https://placehold.co/600x400/003366/FFFFFF?text=Кейс+4" class="card-img-top" alt="Двутавры для технологических этажерок">
                <div class="card-body">
                    <h5 class="card-title">Технологические этажерки</h5>
                </div>
            </div>
        </div>
    </div>

    <!-- Contacts and Map -->
    <div class="row my-5">
        <h2 class="text-center mb-4">Контакты завода в Казани</h2>
        <div class="col-md-6">
            <h3>Адрес производства:</h3>
            <p>г. Казань, ул. Промышленная, д. 3 (уточняйте)</p>
            <h3>Телефон:</h3>
            <p>+7 (843) 123-45-67 (уточняйте)</p>
            <h3>Email:</h3>
            <p>kazan@doorhan.ru (уточняйте)</p>
        </div>
        <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d143336.483984444!2d49.07348931328125!3d55.78255490000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x415ead2b7c7a03b5%3A0x334620ca4531a182!2z0JrQsNC30LDQvdGMLCDQoNC-0YHRgdC40Y8sINCg0L7RgdGB0LjRjw!5e0!3m2!1sru!2sus!4v1678886400000!5m2!1sru!2sus" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <!-- Contact Form -->
    <div id="contact-form" class="row my-5 justify-content-center">
        <div class="col-md-8">
            <h2 class="text-center mb-4">Отправить заявку в Казани</h2>
            <form action="handle_form" method="post">
                <input type="hidden" name="region" value="Kazan">
                <div class="mb-3">
                    <label for="name" class="form-label">Ваше имя</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Телефон</label>
                    <input type="tel" class="form-control" id="phone" name="phone" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Ваш вопрос или заявка</label>
                    <textarea class="form-control" id="message" name="message" rows="4"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Отправить заявку</button>
            </form>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
