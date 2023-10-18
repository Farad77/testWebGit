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
      <form class="w-100" method="GET" action="cibleJerome.php">
        
      <input type="password" name="motdepasse">
        
        <!-- Submit button -->
        <button class="btn btn-primary py-2 mt-2" value="signUp" type="submit">
          Se connecter
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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
      integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
      crossorigin="anonymous"
    ></script>
    <script>
      // SweetAlert2 + animate.css
        // Swal.fire({
        //     title: 'Bonjour tout le monde ! Ce message disparaitra automatiquement après 4 secondes, ou bien clique sur OK',
        //     timer: 4000,
        //     timerProgressBar: true,
        //     showClass: {
        //       popup: 'animate__animated animate__fadeInDown'
        //     },
        //     hideClass: {
        //       popup: 'animate__animated animate__fadeOutUp'
        //     }
        //   })

          // Activation des popovers bootstrap
        const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
        const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
    </script>
  </body>
</html>
