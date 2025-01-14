<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <style>
        body {
            background: linear-gradient(135deg, #ff9a9e, #fad0c4);
            font-family: 'Poppins', sans-serif;
            color: #fff;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .container {
            max-width: 700px;
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
        }
        h2 {
            color: #ff6f61;
            font-weight: bold;
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.2);
        }
        .form-label {
            color: #333;
            font-weight: bold;
        }
        .btn-submit {
            background: linear-gradient(135deg, #ff6f61, #ff9a9e);
            color: #fff;
            border: none;
            font-size: 1.2rem;
            padding: 10px 20px;
            border-radius: 50px;
            transition: 0.3s;
        }
        .btn-submit:hover {
            background: linear-gradient(135deg, #ff9a9e, #ff6f61);
            box-shadow: 0 5px 15px rgba(255, 105, 97, 0.4);
        }
        .border-dark {
            background-color: rgba(109, 1, 1, 0.9);
            border: 2px solid #ff6f61;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .alert-danger {
            background: #ff6f61;
            color: #fff;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <form method="POST" action="{{url('/mylaravel')}}">
            @csrf
            <h2 class="text-center mb-4">✨ Multiplication Table ✨</h2>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Enter your number:</label>
                <input name="myinput" type="number" class="form-control" id="exampleFormControlInput2" placeholder="Type a number">
            </div>
            <div class="text-center">
                <button class="btn btn-submit" type="submit">Show Table</button>
            </div>
        </form>
        <div class="mt-4">
            <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
                <?php if (!empty($_POST["myinput"])): ?>
                    <?php $mul = $_POST["myinput"]; ?>
                    <div class="border-dark mt-3">
                        <h2 class="text-center">Table of <?= $mul ?></h2>
                        <?php for ($i = 1; $i <= 12; $i++): ?>
                            <p class="text-center h5">
                                <?= "$mul x $i = " . ($mul * $i) ?>
                            </p>
                        <?php endfor; ?>
                    </div>
                <?php else: ?>
                    <div class="alert alert-danger mt-3">⚠️ Please enter a number! ⚠️</div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
