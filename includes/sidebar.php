<nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
           <!--  <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="assets/images/faces/face8.jpg" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper"> -->
                  <?php
        // $aid= $_SESSION['sturecmsaid'];
// $sql="SELECT * from tbladmin where ID=:aid";

// $query = $dbh -> prepare($sql);
// $query->bindParam(':aid',$aid,PDO::PARAM_STR);
// $query->execute();
// $results=$query->fetchAll(PDO::FETCH_OBJ);

// $cnt=1;
// if($query->rowCount() > 0)
// {
// foreach($results as $row)
// {               ?>
                 <!--  <p class="profile-name"><?php // echo htmlentities($row->AdminName);?></p>
                  <p class="designation"><?php  //echo htmlentities($row->Email);?></p> --><?php ///$cnt=$cnt+1;}} ?>
            <!--     </div>
               
              </a>
            </li> -->
            
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php">
              <i class="icon-home menu-icon"></i>
                <span class="menu-title">INICIO</span>

              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="icon-layers menu-icon"></i>
                <span class="menu-title">CLASES</span>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="add-class.php">Agregar Clase</a></li>
                  <li class="nav-item"> <a class="nav-link" href="manage-class.php">Administrar Clases</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic1">
                <i class="icon-people menu-icon"></i>
                <span class="menu-title">ESTUDIANTES</span>
              </a>
              <div class="collapse" id="ui-basic1">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="add-students.php">Agregar Estudiante</a></li>
                  <li class="nav-item"> <a class="nav-link" href="manage-students.php">Admin. Estudiantes</a></li>
                </ul>
              </div>
            </li>
            <!--  Orginal Author Name: CompuBinario K. 
 for any PHP, Codeignitor, Laravel OR Python work contact me at CompuBinario.infospace@gmail.com  
 Visit website : www.CompuBinariok.com -->  
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="icon-doc menu-icon"></i>
                <span class="menu-title">NOTICIAS</span>
                
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="add-notice.php"> Agregar Noticia </a></li>
                  <li class="nav-item"> <a class="nav-link" href="manage-notice.php"> Administrar Noticias </a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth1" aria-expanded="false" aria-controls="auth">
                <i class="icon-doc menu-icon"></i>
                <span class="menu-title">NOTICIAS PUBLICAS</span>
              </a>
              <div class="collapse" id="auth1">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="add-public-notice.php"> Agg. Noticia Pública </a></li>
                  <li class="nav-item"> <a class="nav-link" href="manage-public-notice.php"> Administrar Noticias Públicas </a></li>
                </ul>
              </div>
            <!--   <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth2" aria-expanded="false" aria-controls="auth">
               <i class="icon-docs menu-icon"></i>
                <span class="menu-title">Pages</span>
                
              </a>
              <div class="collapse" id="auth2">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="about-us.php"> About Us </a></li>
                  <li class="nav-item"> <a class="nav-link" href="contact-us.php"> Contact Us </a></li>
                </ul>
              </div>
            </li> -->
              <li class="nav-item">
              <a class="nav-link" href="between-dates-reports.php">
              <i class="icon-flag menu-icon"></i>
              <span class="menu-title">REPORTES</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="search.php">
                <i class="icon-magnifier menu-icon"></i>
                <span class="menu-title">BUSCAR</span>
              </a>
            </li>

            
            </li>
          </ul>
        </nav><!--  Orginal Author Name: CompuBinario K. 
 for any PHP, Codeignitor, Laravel OR Python work contact me at CompuBinario.infospace@gmail.com  
 Visit website : www.CompuBinariok.com -->  