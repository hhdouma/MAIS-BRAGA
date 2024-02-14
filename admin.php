<!DOCTYPE html>
<html lang="en">

<head>
  <title>admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="Index.css">
  <link rel="stylesheet" href="index admin.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    @media (max-width: 768px) {
      .footer {
        margin-top: 100px; /* Ajuste o valor conforme necessário para evitar que o footer cubra a mensagem */
      }
    }

    /* Adicionando estilo para a seta do botão de dropdown */
    .dropdown-toggle::after {
      content: none;
    }

    .dropdown-toggle.collapsed::after {
      content: '';
    }
  </style>
</head>

<body class="bg-dark">

  <div class="container-fluid p-0 full-height">
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="+bragaa.png" alt="Logo" width="" height="50" class="d-inline-block align-text-top">
          </a>

          <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" onclick="toggleNavbar()">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="#" onclick="toggleNavbar()">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Adicionando uma tabela no centro da página -->
    <div class="container mt-5 flex-grow-1 min-vh-100">
      <h1 class="text-center text-light mb-4">Reportes</h1>
      <table class="table table-dark mb-5">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Problema</th>
            <th scope="col">Localização</th>
            <th scope="col">Data</th>
            <th scope="col">Status</th>
            <th scope="col">Reportes</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>

        <?php
          $x=0;
          while($x <=5){
        ?>
          <tr>
            <th scope="row">1</th>
            <td>Problema na rua XYZ</td>
            <td>Braga Parque</td>
            <td>2024-01-27</td>
            <td>
              <div class="status-bar">
                <div class="status-incompleto"></div>
                Incompleto
              </div>
            </td>
            <td>5</td> <!-- Número de reportes (pode ser dinâmico com a lógica que você implementar) -->
            <td>     
                <button type="button" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#demo<?php echo $x ?>">Simple collapsible</button>
             
            </td>
          </tr>
          <!-- Adicione mais linhas conforme necessário -->
          <tr>
            <td colspan="7">
              <div id="demo<?php echo $x ?>" class="collapse">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </div>
            

            </td>
          </tr>
            <?php

               $x++;
              }
            ?>
          
       
          
          <!-- Adicione mais linhas conforme necessário -->
        </tbody>
      </table>

      <!-- Adicionando texto abaixo da tabela -->
      <p class="text-center text-light mt-5">O histórico de navegação é apresentado aqui.</p>
    </div>

    <footer class="footer">
      <div class="waves">
        <div class="wave" id="wave1"></div>
        <div class="wave" id="wave2"></div>
        <div class="wave" id="wave3"></div>
        <div class="wave" id="wave4"></div>
      </div>
      <ul class="social-icon">
        <li class="social-icon__item"><a class="social-icon__link" href="#">
            <ion-icon name="logo-facebook"></ion-icon>
          </a></li>
        <li class="social-icon__item"><a class="social-icon__link" href="#">
            <ion-icon name="logo-twitter"></ion-icon>
          </a></li>
        <li class="social-icon__item"><a class="social-icon__link" href="#">
            <ion-icon name="logo-linkedin"></ion-icon>
          </a></li>
        <li class="social-icon__item"><a class="social-icon__link" href="#">
            <ion-icon name="logo-instagram"></ion-icon>
          </a></li>
      </ul>
      <ul class="menu">
        <li class="menu__item"><a class="menu__link" href="#">Home</a></li>
        <li class="menu__item"><a class="menu__link" href="#">About</a></li>
        <li class="menu__item"><a class="menu__link" href="#">Services</a></li>
        <li class="menu__item"><a class="menu__link" href="#">Team</a></li>
        <li class="menu__item"><a class="menu__link" href="#">Contact</a></li>
      </ul>
      <p>&copy;2024 Tiago Oliveira | All Rights Reserved</p>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  </div>

</body>

</html>