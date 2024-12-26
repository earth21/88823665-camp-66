<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เลขคู่และคี่</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <style>
        body {
            background: linear-gradient(to right,rgb(0, 0, 0),rgb(10, 36, 80));
            color: #fff;
            font-family: 'Poppins', sans-serif;
            text-align: center;
        }
        h1 {
            margin: 20px 0;
            font-size: 2.5rem;
            font-weight: bold;
            text-shadow: 2px 2px #000;
        }
        .number-container {
            background: rgba(255, 255, 255, 0.1);
            padding: 15px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            margin: 10px auto;
            width: 60%;
        }
        .even {
            color: #28a745;
            font-weight: bold;
        }
        .odd {
            color: #ff073a;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1><i class="bi bi-list-ol"></i> เลขคู่และคี่</h1>
    <div>
        <?php for ($i = 1; $i <= 100; $i++): ?>
            <div class="number-container">
                <?= "$i เป็นเลข " ?> 
                <span class="<?= $i % 2 == 0 ? 'even' : 'odd' ?>">
                    <?= $i % 2 == 0 ? "คู่" : "คี่" ?>
                </span>
            </div>
        <?php endfor; ?>
    </div>
</body>
</html>
