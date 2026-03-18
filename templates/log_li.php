<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color: #000000;
            font-family: "Segoe UI", Arial, sans-serif;
            margin: 0;
            padding: 20px;
            color: #fff;
        }

        h1 {
            color: #ff4444;
            text-align: center;
            margin-bottom: 30px;
        }

        ul {
            list-style: none;
            padding: 0;
            text-align: center;
        }

        ul li {
            display: inline-block;
            margin: 0 15px;
        }

        ul li a {
            color: #00aaff;
            text-decoration: none;
            font-size: 18px;
            transition: color 0.3s;
        }

        ul li a:hover {
            color: #ffaa00;
        }

        .section {
            background: #1a1a1a;
            border-radius: 10px;
            padding: 20px;
            margin: 30px auto;
            max-width: 800px;
            box-shadow: 0 4px 10px rgba(255, 255, 255, 0.1);

            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .section-content {
            flex: 1;
            color: #ffaa00;
        }

        .section img {
            width: 120px;
            height: auto;
            border-radius: 8px;
            margin-left: 20px;
        }

        .section p {
            color: #ccc;
        }

        button {
            padding: 8px 20px;
            font-size: 15px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            background: #00aaff;
            color: #fff;
            transition: background 0.3s;
        }

        button:hover {
            background: #ffaa00;
        }

        .footer {
            text-align: center;
            margin-top: 40px;
        }
    </style>
</head>

<body>
    <header>
        <h2>這是我的神奇區域~嘿嘿~</h2>
    </header>

    <!-- PHP 登入檢查 -->
    <div class="section">
        <?php
        if (isset($_POST["pwd"]) && $_POST["pwd"] === "10082") {
            echo "<p style='color:lime;'>登入成功！</p>";
        } else {
            echo "<p style='color:red;'>密碼錯誤！</p>";
        }
        ?>
    </div>

   
    <div class="section">
        <div class="section-content">
            <h2>放好看的圖片</h2>
            <button onclick="window.location.href='/pic'">gogogo</button>
            <del><h5>非請勿入</h5></del>
        </div>
    </div>

    <!-- 返回區塊 -->
    <div class="section">
        <div class="section-content">
            <h2>沒啥好說的就是回去</h2>
            <button onclick="window.location.href='/list'">回去!</button>
        </div>
    </div>

</body>
</html>
