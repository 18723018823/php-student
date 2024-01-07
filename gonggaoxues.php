<?php
$file = fopen("1.txt", "r"); // 打开文件
if ($file) {
    echo "<div style='text-align:center;'>";
    $colors = array("#ffcc33", "#ff9933", "#ff6600"); // 定义渐变颜色数组
    $i = 0; // 初始化颜色数组下标
    while (($line = fgets($file)) !== false) { // 逐行读取文件内容
        $bg_color = $colors[$i % count($colors)]; // 根据下标获取当前渐变颜色
        echo "<div style='display:block; text-align:center; border:1px solid black; padding:10px; margin:10px auto; background: linear-gradient(to bottom, #ffffcc, $bg_color);'>".trim($line)."</div>"; // 输出每行内容并用框框起来并居中并添加渐变背景颜色
        $i++; // 下标自增
    }
    echo "</div>";
    fclose($file); // 关闭文件
} else {
    echo "无法打开文件";
}
?>
