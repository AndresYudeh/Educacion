<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['sturecmsaid']==0)) {
  header('location:logout.php');
  } else{
   if(isset($_POST['submit']))
  {
 $stuname=$_POST['stuname'];
 $stuemail=$_POST['stuemail'];
 $stuclass=$_POST['stuclass'];
 $gender=$_POST['gender'];
 $dob=$_POST['dob'];
 $stuid=$_POST['stuid'];
 $fname=$_POST['fname'];
 $mname=$_POST['mname'];
 $connum=$_POST['connum'];
 $altconnum=$_POST['altconnum'];
 $address=$_POST['address'];
 $eid=$_GET['editid'];
$sql="update tblstudent set StudentName=:stuname,StudentEmail=:stuemail,StudentClass=:stuclass,Gender=:gender,DOB=:dob,StuID=:stuid,FatherName=:fname,MotherName=:mname,ContactNumber=:connum,AltenateNumber=:altconnum,Address=:address where ID=:eid";
$query=$dbh->prepare($sql);
$query->bindParam(':stuname',$stuname,PDO::PARAM_STR);
$query->bindParam(':stuemail',$stuemail,PDO::PARAM_STR);
$query->bindParam(':stuclass',$stuclass,PDO::PARAM_STR);
$query->bindParam(':gender',$gender,PDO::PARAM_STR);
$query->bindParam(':dob',$dob,PDO::PARAM_STR);
$query->bindParam(':stuid',$stuid,PDO::PARAM_STR);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':mname',$mname,PDO::PARAM_STR);
$query->bindParam(':connum',$connum,PDO::PARAM_STR);
$query->bindParam(':altconnum',$altconnum,PDO::PARAM_STR);
$query->bindParam(':address',$address,PDO::PARAM_STR);
$query->bindParam(':eid',$eid,PDO::PARAM_STR);
 $query->execute();
  echo '<script>alert("Student has been updated")</script>';
}

  ?>

   
      <!-- partial:partials/_navbar.html -->
     <?php include_once('includes/header.php');?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
      <?php include_once('includes/sidebar.php');?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Administrar Registro de Estudiantes </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> Administrar Estudiantes</li>
                </ol>
              </nav>
            </div>
            <div class="row">
          
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title" style="text-align: center;">Información del Estudiante</h4>
                   
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
                      <?php
$eid=$_GET['editid'];
$sql="SELECT tblstudent.StudentName,tblstudent.StudentEmail,tblstudent.StudentClass,tblstudent.Gender,tblstudent.DOB,tblstudent.StuID,tblstudent.FatherName,tblstudent.MotherName,tblstudent.ContactNumber,tblstudent.AltenateNumber,tblstudent.Address,tblstudent.UserName,tblstudent.Password,tblstudent.Image,tblstudent.DateofAdmission,tblclass.ClassName,tblclass.Section from tblstudent join tblclass on tblclass.ID=tblstudent.StudentClass where tblstudent.ID=:eid";
$query = $dbh -> prepare($sql);
$query->bindParam(':eid',$eid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
                      <div class="form-group">
                        <label for="exampleInputName1">Nombre</label>
                        <input type="text" name="stuname" value="<?php  echo htmlentities($row->StudentName);?>" class="form-control" required='true'>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Correo Electrónico</label>
                        <input type="text" name="stuemail" value="<?php  echo htmlentities($row->StudentEmail);?>" class="form-control" required='true'>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Clase</label>
                        <select  name="stuclass" class="form-control" required='true'>
                          <option value="<?php  echo htmlentities($row->StudentClass);?>"><?php  echo htmlentities($row->ClassName);?> <?php  echo htmlentities($row->Section);?></option>
                         <?php 

$sql2 = "SELECT * from    tblclass ";
$query2 = $dbh -> prepare($sql2);
$query2->execute();
$result2=$query2->fetchAll(PDO::FETCH_OBJ);

foreach($result2 as $row1)
{          
    ?>  
<option value="<?php echo htmlentities($row1->ClassName);?><?php echo htmlentities($row1->Section);?>"><?php echo htmlentities($row1->ClassName);?> <?php echo htmlentities($row1->Section);?></option>
 <?php } ?> 
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Género</label>
                        <select name="gender" value="" class="form-control" required='true'>
                          <option value="<?php  echo htmlentities($row->Gender);?>">Selecciona el Género</option>
                          <option value="Male">Masculino</option>
                          <option value="Female">Femenino</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Fecha de Nacimiento</label>
                        <input type="date" name="dob" value="<?php  echo htmlentities($row->DOB);?>" class="form-control" required='true'>
                      </div>
                     
                      <div class="form-group">
                        <label for="exampleInputName1">ID</label>
                        <input type="text" name="stuid" value="<?php  echo htmlentities($row->StuID);?>" class="form-control" readonly='true'>
                      </div>
                      <!-- <div class="form-group">
                        <label for="exampleInputName1">Student Photo</label>
                        <img src="assets/images/<?php echo $row->Image;?>" width="100" height="100" value="<?php  echo $row->Image;?>"><a href="changeimage.php?editid=<?php echo $row->ID;?>"> &nbsp; Edit Image</a>
                      </div> -->
                      <h3>Información de Tutor/es Responsable</h3>
                      <div class="form-group">
                        <label for="exampleInputName1">Nombre de Papá</label>
                        <input type="text" name="fname" value="<?php  echo htmlentities($row->FatherName);?>" class="form-control" required='true'>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Nombre de Mamá</label>
                        <input type="text" name="mname" value="<?php  echo htmlentities($row->MotherName);?>" class="form-control" required='true'>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Número Celular</label>
                        <input type="text" name="connum" value="<?php  echo htmlentities($row->ContactNumber);?>" class="form-control" required='true' maxlength="10" pattern="[0-9]+">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Número Celular Alternativo</label>
                        <input type="text" name="altconnum" value="<?php  echo htmlentities($row->AltenateNumber);?>" class="form-control" required='true' maxlength="10" pattern="[0-9]+">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Dirección de Domicílio</label>
                        <textarea name="address" class="form-control" required='true'><?php  echo htmlentities($row->Address);?></textarea>
                      </div>
<h3>Credenciales</h3>
<div class="form-group">
                        <label for="exampleInputName1">Usuario</label>
                        <input type="text" name="uname" value="<?php  echo htmlentities($row->UserName);?>" class="form-control" readonly='true'>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Contraseña</label>
                        <input type="Password" name="password" value="<?php  echo htmlentities($row->Password);?>" class="form-control" readonly='true'>
                      </div><?php $cnt=$cnt+1;}} ?>
                      <button type="submit" class="btn btn-primary mr-2" name="submit">Actualizar</button>
                     
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
         <?php include_once('includes/footer.php');?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
   <?php }  ?>