<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Register</title>
</head>
<body>
    
<div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <div class="container-fluid">
                    <h1 class="display-6">Register</h1>
                    <form action="register.act.php" method="POST">

                        <div class="mb-3">
                            <label for="nome" class="form-label">Name</label>
                            <input type="text" class="form-control"  name="nome">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control"  name="email">
                        </div>

                        <div class="mb-3">
                            <label for="senha" class="form-label">Password</label>
                            <input type="password" class="form-control" name="senha">
                        </div>

                        <div class="col-12">
                    <button type="submit" class="btn btn-outline-primary">Register</button>
                        </div>

                        
    
</body>
</html>