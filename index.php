<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แปลงกิโลเมตรเป็นไมล์</title>

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
            width: 320px;
        }

        h1 {
            font-size: 18px;
            margin-bottom: 20px;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #555;
        }

        input {
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #ccc;
            margin-bottom: 15px;
            font-size: 16px;
        }

        input:focus {
            outline: none;
            border-color: #007BFF;
        }

        button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            background: #007BFF;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>

<div class="card">
    <h1>แปลงกิโลเมตรเป็นไมล์</h1>

    <form action="result.php" method="post">
        <label>กรอกกิโลเมตร</label>
        <input type="number" step="0.001" name="Km" required>

        <button type="submit">คำนวณ</button>
    </form>
</div>

</body>
</html>