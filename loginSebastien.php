<!DOCTYPE html>
<html lang="en">
<!--https://codepen.io/hexagoncircle/pen/XWJGQqy pour l'effet-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        html,
        body {
            height: 100%;
        }

        .form-signin {
            max-width: 330px;
            padding: 1rem;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        @import url("https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap");
:root {
  --space-root: 1rem;
  --space-xs: calc(var(--space-root) / 2);
  --space-s: calc(var(--space-root) / 1.5);
  --space-m: var(--space-root);
  --space-l: calc(var(--space-root) * 1.5);
  --space-xl: calc(var(--space-root) * 2);
  --color-primary: mediumslateblue;
  --color-secondary: black;
  --color-tertiary: rgb(38, 172, 205);
  --base-border-radius: 0.25rem;
  --ease: cubic-bezier(0.075, 0.82, 0.165, 1);
  --duration: 350ms;
  --font-family: "Roboto", sans-serif;
  --font-size: 1.25rem;
}

* {
  box-sizing: border-box;
}

body {
  display: grid;
  place-items: center;
  margin: 0;
  height: 100vh;
  padding: var(--space-m);
  font-size: var(--font-size);
  font-family: var(--font-family);
  line-height: 1.2;
  background-color: var(--color-tertiary);
}

a {
  color: var(--color-primary);
}
a:focus {
  color: var(--color-secondary);
}

h2 {
  font-weight: 700;
  font-size: calc(var(--font-size) * 1.5);
}

.form {
  position: relative;
  width: 100%;
  max-width: 450px;
  margin: 0 auto;
  transform: skewY(-5deg) translateY(10%) scale(0.94);
  transition: box-shadow var(--duration) var(--ease), transform var(--duration) var(--ease);
}
.form:before, .form:after {
  content: "";
  position: absolute;
  pointer-events: none;
  background-color: #ebebeb;
  width: 25%;
  height: 100%;
  transition: background-color var(--duration) var(--ease), transform var(--duration) var(--ease);
}
.form:before {
  top: 0;
  right: calc(100% - 1px);
  transform-origin: 100% 100%;
  transform: skewY(-35deg) scaleX(-1);
  z-index: -1;
}
.form:after {
  top: 0;
  left: calc(100% - 1px);
  transform-origin: 0 0;
  transform: skewY(-35deg) scaleX(-1);
  z-index: 2;
}
.form:hover, .form:focus-within {
  transform: scale(1.0001);
  box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.1);
}
.form:hover:before, .form:hover:after, .form:focus-within:before, .form:focus-within:after {
  background-color: white;
  transform: skewY(0);
}

.form-inner {
  padding: var(--space-xl);
  background-color: white;
  z-index: 1;
}
.form-inner > * + * {
  margin-top: var(--space-xl);
}

.input-wrapper:focus-within label {
  color: var(--color-secondary);
}
.input-wrapper:focus-within .icon {
  background-color: var(--color-secondary);
}
.input-wrapper:focus-within input {
  border-color: var(--color-secondary);
}
.input-wrapper + .input-wrapper {
  margin-top: var(--space-l);
}

.input-group {
  position: relative;
}
.input-group input {
  border-radius: var(--base-border-radius);
  padding-left: calc(var(--space-s) + 60px);
}
.input-group .icon {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  border-top-left-radius: var(--base-border-radius);
  border-bottom-left-radius: var(--base-border-radius);
  pointer-events: none;
}

label {
  font-size: calc(var(--font-size) / 1.65);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.065rem;
  display: block;
  margin-bottom: var(--space-xs);
  color: var(--color-primary);
}

.icon {
  display: flex;
  align-items: center;
  flex: 0 1 auto;
  padding: var(--space-m);
  background-color: var(--color-primary);
}
.icon svg {
  width: 1.25em;
  height: 1.25em;
  fill: white;
  pointer-events: none;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  transition: transform var(--duration) var(--ease);
}

input {
  flex: 1 1 0;
  width: 100%;
  outline: none;
  padding: var(--space-m);
  font-size: var(--font-size);
  font-family: var(--font-family);
  color: var(--color-secondary);
  border: 2px solid var(--color-primary);
}
input:focus {
  color: var(--color-primary);
}

.btn-group {
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.btn-group > * + * {
  margin-left: var(--space-s);
}

.btn {
  position: relative;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: space-between;
  outline: none;
  padding: var(--space-m) var(--space-l);
  cursor: pointer;
  border: 2px solid transparent;
  border-radius: var(--base-border-radius);
}

.btn--primary {
  font-size: calc(var(--font-size) / 1.65);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.065rem;
  background-color: var(--color-primary);
  border-color: var(--color-primary);
  color: white;
}
.btn--primary:focus {
  background-color: var(--color-secondary);
  border-color: var(--color-secondary);
}

.btn--text {
  font-size: calc(var(--font-size) / 1.5);
  padding: 0;
}
    </style>
</head>

<body>
   
        <div class="form-signin w-100 m-auto py-5">
           
                <form class="form" method="POST" action="secretSebastien.php">
                    <div class=" form-inner">
                        <h2>Connexion</h2>
                        <div class="input-wrapper">
                    <img class="mx-auto d-block"
                        src="https://expernet.re/wp-content/themes/tm-bootstrap/images/logo.png" alt="" width="72"
                        height="57">
                    <div class="form-floating py-2">
                        <input type="text" name="login" class="form-control input-group" />
                        <label for="nom">Login</label>
                    </div>
                   
                    <div class="form-floating py-2">
                        <input type="password" name="password" class="form-control input-group" />
                        <label for="password">Mot de passe</label>
                    </div>
                    <input class="btn btn-primary w-100" value="Se Connecter" type="submit" name="submit" />
                </div>
            </div>
                </form>
            
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>