<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        $nums = array(15, 4, 18, 23, 10 );
        sort($nums);
        foreach ($nums as $key => $val) {
            
        }

        echo "<br>昇順にソートします。<br>{$nums[0]}<br>{$nums[1]}<br>{$nums[2]}<br>{$nums[3]}<br>{$nums[4]}";
        $nums = array(15, 4, 18, 23, 10 );
        rsort($nums);
        foreach ($nums as $key => $val) {
            
        }

        echo "<br>降順にソートします。<br>{$nums[0]}<br>{$nums[1]}<br>{$nums[2]}<br>{$nums[3]}<br>{$nums[4]}";
        ?>
    </p>
</body>

</html>
