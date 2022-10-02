<?php include "errordb.php"?>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        $stmt = $pdo->prepare("SELECT * FROM member");
        $stmt->execute();
        while ($row = $stmt->fetch()):
    ?>
        ชื่อสมาชิก : <?=$row ["name"]?><br>
        ที่อยู่ : <?=$row ["address"]?><br>
        อีเมล์ :<?=$row ["email"]?><br>
        <div>
            <img src="member_photo/<?=$row ["username"]?>.jpg">
        </div>
        <hr><br>
        <?php endwhile;?>
</body>
</html>