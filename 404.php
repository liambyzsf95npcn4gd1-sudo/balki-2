<?php
$pageTitle = "Страница не найдена — 404";
$pageDescription = "Запрашиваемая страница не существует. Ошибка 404.";
$pageKeywords = "404, ошибка, страница не найдена, DoorHan";
include 'includes/header.php';
?>

<div class="container text-center py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="display-1">404</h1>
            <h2 class="mb-4">Страница не найдена</h2>
            <p class="lead mb-4">
                К сожалению, запрашиваемая вами страница не существует или была перемещена.
            </p>
            <img src="https://placehold.co/150.png?text=404" alt="Иконка ошибки 404" class="img-fluid my-4" style="max-width: 150px;">
            <div class="mt-4">
                <a href="index" class="btn btn-primary btn-lg">Вернуться на главную</a>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
