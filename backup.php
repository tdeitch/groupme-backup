<?php
    $json_string = file_get_contents($_SERVER['NFSN_SITE_ROOT']."protected/info.json");
    $info = json_decode($json_string,true);
	$logfile = $_SERVER['NFSN_SITE_ROOT'].$info["logfile"];

    $message = stripslashes($_REQUEST['Body']);

    preg_match("/^(?P<from>[A-Za-z]+): (?P<body>.*)$/", $message, $matches);
    if (!empty($matches)) {
        $fh = fopen($logfile, 'a');
        $stringData = "<tr><td class=\"author\"><img src=\"images/".$matches[from].".jpg\"><br>$matches[from]</td><td class=\"message-text\">".stripslashes($matches[body])."<div class=\"date\">".date('D, d M Y H:i:s')." UTC</div></td></tr>\n";
        fwrite($fh, $stringData);
        fclose($fh);
    } else {
        $fh = fopen($logfile, 'a');
        $stringData = "<tr><td class=\"author\"></td><td class=\"message-text\">".stripslashes($message)."<div class=\"date\">".date('D, d M Y H:i:s')." UTC</div></td></tr>\n";
        fwrite($fh, $stringData);
        fclose($fh);
    }

    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>

<Response>
</Response>
