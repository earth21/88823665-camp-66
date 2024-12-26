<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สูตรคูณแม่ 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <style>
        body {
            background: linear-gradient(135deg,rgb(41, 2, 60),rgb(95, 3, 118));
            color: #fff;
            font-family: 'Poppins', sans-serif;
            text-align: center;
        }
        h1 {
            margin-top: 20px;
            font-size: 2.5rem;
            font-weight: bold;
            text-shadow: 2px 2px #ff6f61;
        }
        .table {
            margin: auto;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(5px);
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        .table div {
            margin: 10px 0;
            font-size: 1.5rem;
        }
    </style>
</head>
<body>
    <h1><i class="bi bi-calculator"></i> สูตรคูณแม่ 2</h1>
    <div class="table">
        <?php for ($i = 1; $i <= 12; $i++): ?>
            <div class="row">
                <div class="col">
                    <?= "2 x $i = " . (2 * $i) ?>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</body>
</html>
