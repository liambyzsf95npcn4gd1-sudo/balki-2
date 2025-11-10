<?php
session_start();
// Generate CSRF token
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
$csrf_token = $_SESSION['csrf_token'];

$pageTitle = "Контакты — Свяжитесь с нами | DoorHan";
$pageDescription = "Контактная информация концерна DoorHan. Адреса и телефоны заводов в Можайске, Казани, Воронеже, Новосибирске. Форма обратной связи для ваших вопросов.";
$pageKeywords = "контакты дорхан, doorhan адрес, телефон doorhan, оставить заявку, рассчитать стоимость";
include 'includes/header.php';
?>

<div class="container">
    <h1>Контакты</h1>
    <div class="row">
        <!-- Contact Info -->
        <div class="col-md-6">
            <h2>Главный офис</h2>
            <p><strong>Адрес:</strong> г. Одинцово, Московская обл.</p>
            <p><strong>Телефон:</strong> +7 (495) 933-24-00</p>
            <p><strong>Email:</strong> info@doorhan.ru</p>
            <hr>
            <h2>Заводы</h2>
            <p><strong>Можайск:</strong> +7 (495) 111-11-11</p>
            <p><strong>Казань:</strong> +7 (843) 765-43-21</p>
            <p><strong>Воронеж:</strong> +7 (473) 222-22-22</p>
            <p><strong>Новосибирск:</strong> +7 (383) 123-45-67</p>
        </div>

        <!-- Contact Form -->
        <div class="col-md-6">
            <h2>Форма обратной связи</h2>
            <?php if (isset($_GET['status']) && $_GET['status'] == 'success'): ?>
                <div class="alert alert-success">Сообщение успешно отправлено!</div>
            <?php elseif (isset($_GET['status']) && $_GET['status'] == 'error'): ?>
                 <div class="alert alert-danger">Ошибка отправки. Пожалуйста, попробуйте еще раз.</div>
            <?php endif; ?>

            <form action="handle_form.php" method="POST">
                <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
                <div class="mb-3">
                    <label for="name" class="form-label">Имя</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Телефон</label>
                    <input type="tel" class="form-control" id="phone" name="phone">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Сообщение</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Отправить</button>
            </form>
        </div>
    </div>

</div>

<?php include 'includes/footer.php'; ?>
