<?php
    $json_string = file_get_contents($_SERVER['NFSN_SITE_ROOT']."protected/info.json");
    $info = json_decode($json_string,true);
    $profiles = $info["profiles"];

    foreach ($profiles as $filename => $profilename) {
        file_put_contents("images/".$filename.".jpg", file_get_contents("http://graph.facebook.com/".$profilename."/picture?type=large"));
    }
?>