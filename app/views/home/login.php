<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>login</title>
</head>


<body>
    <div class="container">
        <div class="row">
            <?php if (!empty($error)) : ?>
                <div style="background-color: rgba(255,0,0, .1); ">
                    <h5>Alert!</h5>
                    <?php foreach ($error as $e) {
                        echo "<p> - $e </p>";
                    }
                    ?>
                </div>
            <?php endif; ?>
            <div class="col-md-4">
                <form action="postLogin" method="POST" class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="email">
                    <input type="password" name="password" class="form-control" placeholder="password">
                    <input type="submit" name="login" class="btn btn-success" value="sign in">
                    <div>
                        <a href='register'>Register a new membership</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
</body>

</html>