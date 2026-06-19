<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลการแปลงหน่วย</title>

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, sans-serif;
            background: linear-gradient(135deg, #6dd5fa, #ffffff);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
            text-align: center;
            width: 300px;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .result {
            font-size: 18px;
            margin: 10px 0;
            color: #555;
        }

        .highlight {
            font-weight: bold;
            color: #007BFF;
            font-size: 22px;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            text-decoration: none;
            background: #007BFF;
            color: white;
            border-radius: 8px;
            transition: 0.3s;
        }

        a:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>

<?php
$Km = $_POST["Km"];
$total = $Km / 1.609;
?>

<div class="card">
    <h2>ผลการแปลงหน่วย</h2>

    <div class="result">
        กิโลเมตร: <span class="highlight"><?php echo $Km; ?></span>
    </div>

    <div class="result">
        ไมล์: <span class="highlight"><?php echo number_format($total, 2); ?></span>
    </div>

    <a href="index.php">← กลับหน้าแรก</a>
</div>

</body>
</html>