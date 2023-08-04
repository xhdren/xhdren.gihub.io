<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 获取表单数据
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // 设置收件人电子邮件地址
    $to = "278804214@qq.com";

    // 设置电子邮件主题
    $email_subject = "新的表单提交：$subject";

    // 构造电子邮件正文
    $email_body = "姓名：$name\n";
    $email_body .= "电子邮件：$email\n";
    $email_body .= "主题：$subject\n";
    $email_body .= "留言：\n$message";

    // 设置附加标头
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    // 发送电子邮件
    mail($to, $email_subject, $email_body, $headers);

    // 重定向到感谢页面或显示成功消息
    header("Location: thank-you.html");
    exit;
}
?>