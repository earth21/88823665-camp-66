<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สูตรคูณ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <style>
        body {
            background: linear-gradient(135deg,rgb(56, 2, 4),rgb(175, 34, 34));
            font-family: 'Poppins', sans-serif;
            color: #333;
        }
        h1, .h2 {
            color: #444;
        }
        .container {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            padding: 30px;
            max-width: 600px;
            margin: 50px auto;
        }
        .btn-success {
            background-color: #4caf50;
            border-color: #4caf50;
        }
        .btn-success:hover {
            background-color: #45a049;
            border-color: #45a049;
        }
        .border-dark {
            background: rgba(255, 255, 255, 0.9);
        }
        .alert-danger {
            color: #fff;
            background-color: #ff5252;
            border-color: #ff5252;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center mb-4">สูตรคูณ</h1>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">กรอกตัวเลข:</label>
                <input name="detail" type="number" class="form-control" id="exampleFormControlInput2" placeholder="กรอกตัวเลขเพื่อแสดงสูตรคูณ">
            </div>
            <div class="d-grid">
                <button class="btn btn-success" type="submit">แสดงสูตรคูณ</button>
            </div>
        </form>
        <div class="mt-4">
            <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
                <?php if (!empty($_POST["detail"])): ?>
                    <?php $mul = (int)$_POST["detail"]; ?>
                    <div class="border rounded p-3 mt-3 border-dark border-3">
                        <h2 class="text-center">สูตรคูณแม่ <?= $mul ?></h2>
                        <?php for ($i = 1; $i <= 12; $i++): ?>
                            <div class="h5 text-start">
                                <?= "$mul x $i = " . ($mul * $i) ?>
                            </div>
                        <?php endfor; ?>
                    </div>
                <?php else: ?>
                    <div class="alert alert-danger mt-3">โปรดกรอกตัวเลข</div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
