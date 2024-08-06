<header>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                  <a class="navbar-brand logo" href="accueil"><img class="w-100" src="./public/images/Logo-Les-Milles-Conduite2.png" alt=""></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="accueil">ACCUEIL</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          LIVRES
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="accompagnee">LIVRE 1</a></li>
                          <li><a class="dropdown-item" href="supervisee">LIVRE 2</a></li>
                          <li><a class="dropdown-item" href="classique">LIVRE 3</a></li>
                          <li><a class="dropdown-item" href="sanscode">LIVRE 4</a></li>
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" href="code">L'AUTRICE</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" href="information">AUTEURS SUIVIS</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" href="test">test</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" href="https://www.opinionsystem.fr/fr-fr/certificate/12090">AVIS</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" href="contact">CONTACT</a>
                      </li>
                    <?php
                        if (isset($_SESSION['is_admin'])) {
                            if ($_SESSION['is_admin'] == 1) {
                                echo '<li class="nav-item">
                                <a class="nav-link active d-flex mx-3 align-items-center" href="Crud/crud.index.php">ADMIN</a>
                                </li>';
                            }
                            } else {}
                    ?>
                    <?php 
                    if (isset($_SESSION['connecter'])) {
                        echo '
                            <li class="nav-item">
                            <a class="nav-link active d-flex mx-3 align-items-center" href="">'.$_SESSION['firstname']." ".$_SESSION['connecter'].'</a>
                            </li>';
                    } else {}
                    ?>
                    </ul>
                   
                  </div>
                </div>
              </nav>

</header>