<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
  <head>
    <title>Jerome</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  </head>

  <body class="py-4 bg-body-tertiary">
    <header>
      <!-- place navbar here -->
    </header>
    <main class="form-signin w-100 d-block mx-auto text-center">

    <?php 
        if (empty($_POST['userEmail'])) {
            $message = "Veuillez saisir votre adresse mail";
        } elseif (empty($_POST['userPassword'])) {
            $message = "Veuillez saisir votre mot de passe";
        } else {
            $userEmail = $_POST['userEmail'];
            $userPassword = $_POST['userPassword'];
           if (isset($userEmail) && isset($userPassword)) {
            $emailValidate = "test@email.re";
            $passwordValidate = "passwordtest";

            if ($userEmail === $emailValidate && $userPassword === $passwordValidate) {
                header("Location: pageSecrete.php");
                session_start();
                $_SESSION['userEmail'] = $userEmail;
                $_SESSION['connected'] = true;
            } else {
                echo 'Pas accès à la page secrète';
            }
           }
        }
    ?>
      <form class="w-100" method="POST" action="connexion.php">
        <h1 class="h3 mb-3 fw-normal">Log In</h1>

        <!-- Input Email -->
        <div class="form-floating  mx-auto w-25">
          <input
            type="email"
            class="form-control"
            id="floatingInput"
            placeholder="name@example.com"
            name="userEmail"
          />
          <label for="floatingEmail">Email</label>
        </div>

        <!-- Input password -->
        <div class="form-floating mx-auto w-25">
          <input
            type="password"
            class="form-control"
            id="floatingPassword"
            placeholder="Password"
            name="userPassword"
          />
          <label for="floatingPassword">Mot de passe</label>
        </div>

        <small> <?php $message ?> </small>
        
        <!-- Submit button -->
        <button class="btn btn-primary py-2 mt-2" value="enregistrer" type="submit">
          Se Connecter
        </button>


      </form>
    </main>
    <footer>
      <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>


    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
      integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
      crossorigin="anonymous"
    ></script>
    <script>
          // Activation des popovers bootstrap
        const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
        const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
    </script>
  </body>
</html>
