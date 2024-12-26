<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odd and Even Numbers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <style>
        body {
            background: linear-gradient(135deg,rgb(3, 20, 47),rgb(69, 92, 186));
            font-family: 'Poppins', sans-serif;
            color: #333;
        }
        h1 {
            text-align: center;
            color: #444;
            font-weight: bold;
            text-shadow: 2px 2px #ccc;
            margin-bottom: 30px;
        }
        .container {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            padding: 30px;
            max-width: 600px;
            margin: 50px auto;
        }
        .btn-success {
            background-color: #5cb85c;
            border: none;
        }
        .btn-success:hover {
            background-color: #4cae4c;
        }
        .border-dark {
            background: rgba(255, 255, 255, 0.9);
        }
        .even {
            color: #007bff;
            font-weight: bold;
        }
        .odd {
            color: #e83e8c;
            font-weight: bold;
        }
        .alert-danger {
            color: #fff;
            background-color: #f86c6b;
            border: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Odd and Even Numbers</h1>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">Enter a number</label>
                <input name="detail" type="number" class="form-control" id="exampleFormControlInput2" placeholder="Enter a number to display odd and even">
            </div>
            <div class="d-grid">
                <button class="btn btn-success" type="submit">Submit</button>
            </div>
        </form>
        <div class="mt-4">
            <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
                <?php if (!empty($_POST["detail"])): ?>
                    <?php $num = (int)$_POST["detail"]; ?>
                    <div class="border rounded p-3 mt-3 border-dark border-3">
                        <h2 class="text-center mb-3">Results for <?= $num ?></h2>
                        <?php for ($i = 1; $i <= $num; $i++): ?>
                            <div class="h5 text-start">
                                <?= "$i is an " ?>
                                <span class="<?= $i % 2 == 0 ? 'even' : 'odd' ?>">
                                    <?= $i % 2 == 0 ? "even" : "odd" ?>
                                </span>
                                number
                            </div>
                        <?php endfor; ?>
                    </div>
                <?php else: ?>
                    <div class="alert alert-danger mt-3">Please fill in the required field.</div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
