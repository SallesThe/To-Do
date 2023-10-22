<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do | Login </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css" media="all">
</head>
<body style="background-color: #1C1D21;">
    
    <main class="main-container">
        
        <form action="" class="form-content">
            
            <h1>LOGIN</h1>

            <label for="email" class="form-label">Email: </label>
            <input type="email" class="form-control form-input" name="email">
            
            <label for="password" class="form-label">Senha: </label>
            <input type="password" class="form-control form-input" name="password" id="password">
            
            <div class="action-buttons">
                <input type="submit" class="form-control btn btn-success btn-submit" value="ENTRAR" name="submit">
                <a href="./pages/register.html" class="btn-register form-control btn btn-primary">Cadastre-se</a>
            </div>
            
        </form>
        
        <footer>
            <p>Version 1.0.0</p>
        </footer>
    </main>
    
</body>
</html>