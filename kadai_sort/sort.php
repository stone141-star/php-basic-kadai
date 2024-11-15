<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>
<body>
    <p>
        <?php
        function sort_2way($order) {
            $nums = array("15", "4", "18", "23", "10");

            if ($order === TRUE) {
                sort($nums);
                echo "<br>昇順にソートします。<br>";
            } else {
                rsort($nums);
                echo "<br>降順にソートします。<br>";
            }

            foreach($nums as $key => $val) {
                echo "{$val}<br>";
            }
        }

        // 関数を呼び出す例
        sort_2way(TRUE); // 昇順にソート
        sort_2way(FALSE); // 降順にソート
        ?>
    </p>
</body>
</html>
