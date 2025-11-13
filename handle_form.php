<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // CSRF Token Validation
    if (!isset($_POST['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
        header("Location: contacts?status=error");
        exit;
    }

    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    $to = 'info@doorhan.ru'; // Destination email address
    $subject = 'Новая заявка с сайта';
    $body = "Имя: $name\nEmail: $email\nТелефон: $phone\n\nСообщение:\n$message";
    $headers = "From: $email";

    // Handle quote form specific fields
    if (isset($_POST['form_type']) && $_POST['form_type'] === 'quote') {
        $subject = 'Новая заявка на расчет стоимости';
        if (isset($_FILES['attachment']) && $_FILES['attachment']['error'] == 0) {
            $allowed_types = ['application/pdf', 'image/jpeg', 'image/png', 'application/dxf', 'application/octet-stream'];
            if (in_array($_FILES['attachment']['type'], $allowed_types) && $_FILES['attachment']['size'] < 5000000) {
                $upload_dir = 'uploads/';
                if (!is_dir($upload_dir)) {
                    mkdir($upload_dir, 0755, true);
                }
                $file_path = $upload_dir . basename($_FILES['attachment']['name']);
                if (move_uploaded_file($_FILES['attachment']['tmp_name'], $file_path)) {
                    $body .= "\n\nПрикреплен файл: " . basename($_FILES['attachment']['name']);
                }
            }
        }
    }

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        header("Location: contacts?status=success");
    } else {
        header("Location: contacts?status=error");
    }
} else {
    // Not a POST request
    header("Location: contacts");
}
exit;
?>
