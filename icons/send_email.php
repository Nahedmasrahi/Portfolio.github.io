<?php
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // استلام بيانات النموذج
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // إعدادات البريد الإلكتروني
    $to = "nahedmansourmasrahi@gmail.com";  // ضع إيميلك هنا
    $headers = "From: $email\r\n";  // البريد المرسل
    $headers .= "Reply-To: $email\r\n";  // الرد على المرسل
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";  // تحديد نوع المحتوى
    $body = "Name: $name\nEmail: $email\nSubject: $subject\nMessage:\n$message";  // محتوى الرسالة

    // إرسال الرسالة
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>
