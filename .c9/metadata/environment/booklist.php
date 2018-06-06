{"filter":false,"title":"booklist.php","tooltip":"/booklist.php","undoManager":{"mark":45,"position":45,"stack":[[{"start":{"row":0,"column":0},"end":{"row":20,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Booklist</title>","    </head>","    <body>","        <a href=\"booklist.php\"><h1>Booklist</h1></a>","        <h2>書籍の登録フォーム</h2>","        <form action=\"booklist.php\" method=\"POST\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","            <li>はじめてのWebアプリケーション</li>","            <li>かんたん！PHPプログラミング</li>","            <li>PHP+MySQLで作るWebアプリケーション</li>","        </ul>","    </body>","</html>"],"id":1}],[{"start":{"row":0,"column":0},"end":{"row":20,"column":7},"action":"remove","lines":["<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Booklist</title>","    </head>","    <body>","        <a href=\"booklist.php\"><h1>Booklist</h1></a>","        <h2>書籍の登録フォーム</h2>","        <form action=\"booklist.php\" method=\"POST\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","            <li>はじめてのWebアプリケーション</li>","            <li>かんたん！PHPプログラミング</li>","            <li>PHP+MySQLで作るWebアプリケーション</li>","        </ul>","    </body>","</html>"],"id":2}],[{"start":{"row":0,"column":0},"end":{"row":27,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Booklist</title>","    </head>","    <body>","<?php","    // フォームデータ送受信確認用コード（本番では削除）","    print '<div style=\"background-color: skyblue;\">';","    print '<p>動作確認用:</p>';","    print_r($_POST);","    print '</div>';","?>","        <a href=\"booklist.php\"><h1>Booklist</h1></a>","        <h2>書籍の登録フォーム</h2>","        <form action=\"booklist.php\" method=\"POST\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","            <?php // 登録された書籍タイトルの数だけループ 開始 ?>","                <li><?php // print 書籍タイトル; ?></li>","            <?php // ループ 終了 ?>","        </ul>","    </body>","</html>"],"id":3}],[{"start":{"row":0,"column":0},"end":{"row":27,"column":7},"action":"remove","lines":["<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Booklist</title>","    </head>","    <body>","<?php","    // フォームデータ送受信確認用コード（本番では削除）","    print '<div style=\"background-color: skyblue;\">';","    print '<p>動作確認用:</p>';","    print_r($_POST);","    print '</div>';","?>","        <a href=\"booklist.php\"><h1>Booklist</h1></a>","        <h2>書籍の登録フォーム</h2>","        <form action=\"booklist.php\" method=\"POST\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","            <?php // 登録された書籍タイトルの数だけループ 開始 ?>","                <li><?php // print 書籍タイトル; ?></li>","            <?php // ループ 終了 ?>","        </ul>","    </body>","</html>"],"id":4}],[{"start":{"row":0,"column":0},"end":{"row":0,"column":1},"action":"insert","lines":["<"],"id":5},{"start":{"row":0,"column":1},"end":{"row":0,"column":2},"action":"insert","lines":["?"]},{"start":{"row":0,"column":2},"end":{"row":0,"column":3},"action":"insert","lines":["p"]}],[{"start":{"row":0,"column":3},"end":{"row":0,"column":4},"action":"insert","lines":["h"],"id":6},{"start":{"row":0,"column":4},"end":{"row":0,"column":5},"action":"insert","lines":["p"]}],[{"start":{"row":0,"column":5},"end":{"row":1,"column":0},"action":"insert","lines":["",""],"id":7},{"start":{"row":1,"column":0},"end":{"row":1,"column":1},"action":"insert","lines":[" "]},{"start":{"row":1,"column":1},"end":{"row":1,"column":2},"action":"insert","lines":[" "]}],[{"start":{"row":1,"column":2},"end":{"row":2,"column":19},"action":"insert","lines":["$username = 'root';","    $password = '';"],"id":8}],[{"start":{"row":2,"column":19},"end":{"row":3,"column":0},"action":"insert","lines":["",""],"id":9},{"start":{"row":3,"column":0},"end":{"row":3,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":3,"column":4},"end":{"row":3,"column":5},"action":"insert","lines":["$"],"id":10}],[{"start":{"row":3,"column":5},"end":{"row":3,"column":6},"action":"insert","lines":["d"],"id":11},{"start":{"row":3,"column":6},"end":{"row":3,"column":7},"action":"insert","lines":["a"]},{"start":{"row":3,"column":7},"end":{"row":3,"column":8},"action":"insert","lines":["t"]},{"start":{"row":3,"column":8},"end":{"row":3,"column":9},"action":"insert","lines":["a"]},{"start":{"row":3,"column":9},"end":{"row":3,"column":10},"action":"insert","lines":["b"]},{"start":{"row":3,"column":10},"end":{"row":3,"column":11},"action":"insert","lines":["a"]}],[{"start":{"row":3,"column":11},"end":{"row":3,"column":12},"action":"insert","lines":["s"],"id":12},{"start":{"row":3,"column":12},"end":{"row":3,"column":13},"action":"insert","lines":["e"]}],[{"start":{"row":3,"column":13},"end":{"row":3,"column":14},"action":"insert","lines":[" "],"id":13}],[{"start":{"row":3,"column":14},"end":{"row":3,"column":15},"action":"insert","lines":["="],"id":14}],[{"start":{"row":3,"column":15},"end":{"row":3,"column":16},"action":"insert","lines":[" "],"id":15},{"start":{"row":3,"column":16},"end":{"row":3,"column":17},"action":"insert","lines":["n"]},{"start":{"row":3,"column":17},"end":{"row":3,"column":18},"action":"insert","lines":["e"]},{"start":{"row":3,"column":18},"end":{"row":3,"column":19},"action":"insert","lines":["w"]}],[{"start":{"row":3,"column":19},"end":{"row":3,"column":20},"action":"insert","lines":[" "],"id":16}],[{"start":{"row":3,"column":20},"end":{"row":3,"column":21},"action":"insert","lines":["P"],"id":17},{"start":{"row":3,"column":21},"end":{"row":3,"column":22},"action":"insert","lines":["O"]},{"start":{"row":3,"column":22},"end":{"row":3,"column":23},"action":"insert","lines":["D"]}],[{"start":{"row":3,"column":23},"end":{"row":3,"column":25},"action":"insert","lines":["()"],"id":18}],[{"start":{"row":3,"column":24},"end":{"row":3,"column":98},"action":"insert","lines":["'mysql:host=localhost;dbname=booklist;charset=UTF8;', $username, $password"],"id":19}],[{"start":{"row":3,"column":99},"end":{"row":3,"column":100},"action":"insert","lines":[";"],"id":20}],[{"start":{"row":3,"column":100},"end":{"row":4,"column":0},"action":"insert","lines":["",""],"id":21},{"start":{"row":4,"column":0},"end":{"row":4,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":4,"column":4},"end":{"row":4,"column":59},"action":"insert","lines":["$sql = 'SELECT * FROM books ORDER BY created_at DESC'; "],"id":22}],[{"start":{"row":4,"column":59},"end":{"row":5,"column":0},"action":"insert","lines":["",""],"id":23},{"start":{"row":5,"column":0},"end":{"row":5,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":5,"column":4},"end":{"row":5,"column":40},"action":"insert","lines":["$statement = $database->query($sql);"],"id":24}],[{"start":{"row":5,"column":40},"end":{"row":6,"column":0},"action":"insert","lines":["",""],"id":25},{"start":{"row":6,"column":0},"end":{"row":6,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":6,"column":4},"end":{"row":6,"column":38},"action":"insert","lines":["$records = $statement->fetchAll();"],"id":26}],[{"start":{"row":6,"column":38},"end":{"row":7,"column":0},"action":"insert","lines":["",""],"id":27},{"start":{"row":7,"column":0},"end":{"row":7,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":7,"column":4},"end":{"row":7,"column":5},"action":"insert","lines":["$"],"id":28},{"start":{"row":7,"column":5},"end":{"row":7,"column":6},"action":"insert","lines":["s"]},{"start":{"row":7,"column":6},"end":{"row":7,"column":7},"action":"insert","lines":["t"]},{"start":{"row":7,"column":7},"end":{"row":7,"column":8},"action":"insert","lines":["a"]},{"start":{"row":7,"column":8},"end":{"row":7,"column":9},"action":"insert","lines":["t"]},{"start":{"row":7,"column":9},"end":{"row":7,"column":10},"action":"insert","lines":["e"]},{"start":{"row":7,"column":10},"end":{"row":7,"column":11},"action":"insert","lines":["m"]}],[{"start":{"row":7,"column":11},"end":{"row":7,"column":12},"action":"insert","lines":["e"],"id":29},{"start":{"row":7,"column":12},"end":{"row":7,"column":13},"action":"insert","lines":["n"]},{"start":{"row":7,"column":13},"end":{"row":7,"column":14},"action":"insert","lines":["t"]}],[{"start":{"row":7,"column":14},"end":{"row":7,"column":15},"action":"insert","lines":[" "],"id":30},{"start":{"row":7,"column":15},"end":{"row":7,"column":16},"action":"insert","lines":["="]},{"start":{"row":7,"column":16},"end":{"row":7,"column":17},"action":"insert","lines":["N"]},{"start":{"row":7,"column":17},"end":{"row":7,"column":18},"action":"insert","lines":["U"]}],[{"start":{"row":7,"column":18},"end":{"row":7,"column":19},"action":"insert","lines":["L"],"id":31},{"start":{"row":7,"column":19},"end":{"row":7,"column":20},"action":"insert","lines":["L"]}],[{"start":{"row":7,"column":20},"end":{"row":7,"column":21},"action":"insert","lines":[";"],"id":32}],[{"start":{"row":7,"column":21},"end":{"row":8,"column":0},"action":"insert","lines":["",""],"id":33},{"start":{"row":8,"column":0},"end":{"row":8,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":8,"column":4},"end":{"row":8,"column":5},"action":"insert","lines":["$"],"id":34},{"start":{"row":8,"column":5},"end":{"row":8,"column":6},"action":"insert","lines":["d"]},{"start":{"row":8,"column":6},"end":{"row":8,"column":7},"action":"insert","lines":["a"]},{"start":{"row":8,"column":7},"end":{"row":8,"column":8},"action":"insert","lines":["t"]}],[{"start":{"row":8,"column":8},"end":{"row":8,"column":9},"action":"insert","lines":["a"],"id":35},{"start":{"row":8,"column":9},"end":{"row":8,"column":10},"action":"insert","lines":["b"]},{"start":{"row":8,"column":10},"end":{"row":8,"column":11},"action":"insert","lines":["a"]},{"start":{"row":8,"column":11},"end":{"row":8,"column":12},"action":"insert","lines":["s"]},{"start":{"row":8,"column":12},"end":{"row":8,"column":13},"action":"insert","lines":["e"]}],[{"start":{"row":8,"column":13},"end":{"row":8,"column":14},"action":"insert","lines":[" "],"id":36},{"start":{"row":8,"column":14},"end":{"row":8,"column":15},"action":"insert","lines":["+"]},{"start":{"row":8,"column":15},"end":{"row":8,"column":16},"action":"insert","lines":["N"]},{"start":{"row":8,"column":16},"end":{"row":8,"column":17},"action":"insert","lines":["U"]}],[{"start":{"row":8,"column":17},"end":{"row":8,"column":18},"action":"insert","lines":["L"],"id":37},{"start":{"row":8,"column":18},"end":{"row":8,"column":19},"action":"insert","lines":["L"]}],[{"start":{"row":8,"column":18},"end":{"row":8,"column":19},"action":"remove","lines":["L"],"id":38},{"start":{"row":8,"column":17},"end":{"row":8,"column":18},"action":"remove","lines":["L"]},{"start":{"row":8,"column":16},"end":{"row":8,"column":17},"action":"remove","lines":["U"]},{"start":{"row":8,"column":15},"end":{"row":8,"column":16},"action":"remove","lines":["N"]},{"start":{"row":8,"column":14},"end":{"row":8,"column":15},"action":"remove","lines":["+"]}],[{"start":{"row":8,"column":14},"end":{"row":8,"column":15},"action":"insert","lines":["="],"id":39},{"start":{"row":8,"column":15},"end":{"row":8,"column":16},"action":"insert","lines":["N"]},{"start":{"row":8,"column":16},"end":{"row":8,"column":17},"action":"insert","lines":["U"]}],[{"start":{"row":8,"column":17},"end":{"row":8,"column":18},"action":"insert","lines":["L"],"id":40},{"start":{"row":8,"column":18},"end":{"row":8,"column":19},"action":"insert","lines":["L"]},{"start":{"row":8,"column":19},"end":{"row":8,"column":20},"action":"insert","lines":[";"]}],[{"start":{"row":8,"column":20},"end":{"row":9,"column":0},"action":"insert","lines":["",""],"id":41},{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"remove","lines":["    "],"id":42},{"start":{"row":8,"column":20},"end":{"row":9,"column":0},"action":"remove","lines":["",""]},{"start":{"row":8,"column":19},"end":{"row":8,"column":20},"action":"remove","lines":[";"]},{"start":{"row":8,"column":18},"end":{"row":8,"column":19},"action":"remove","lines":["L"]}],[{"start":{"row":8,"column":18},"end":{"row":8,"column":19},"action":"insert","lines":["L"],"id":43},{"start":{"row":8,"column":19},"end":{"row":8,"column":20},"action":"insert","lines":[";"]}],[{"start":{"row":8,"column":20},"end":{"row":9,"column":0},"action":"insert","lines":["",""],"id":44},{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":9,"column":4},"end":{"row":9,"column":5},"action":"insert","lines":["?"],"id":45},{"start":{"row":9,"column":5},"end":{"row":9,"column":6},"action":"insert","lines":[">"]}],[{"start":{"row":9,"column":6},"end":{"row":10,"column":0},"action":"insert","lines":["",""],"id":46},{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"insert","lines":["    "]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":10,"column":4},"end":{"row":10,"column":4},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1526629524235,"hash":"6c42a41429ecc07d91f9fe5adb14f97a09adf67a"}