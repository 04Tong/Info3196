<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />
	
	<!-- PAGE TITLE HERE ============================================= -->
	<title>Sysco </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<div class="wrapper">
        <div class="logo">
            <img src="../images/logo.png" alt="" style="">
        </div>
        <div class="text-center mt-4 name">
            Création de compte
        </div>
        <form class="p-3 mt-3" method="POST" action="php/inscription.php">
            
        <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text"  id="userName" name="matricule" placeholder="Matricule" required>
            </div>
            
            <div class="form-field d-flex align-items-center" style="margin-top:20px">
                <span class="far fa-user"></span>
                <input type="text"  id="userName" name="login" placeholder="Username" required>
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password"  id="pwd" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn mt-3">S'enregistrer</button>
        </form>
        <div class="text-center fs-6">
            Déja un compte ? <a href="index.html">Se connecter</a>
        </div>
    </div>

    <script src="js/jquery.js"></script>
</body>
</html>