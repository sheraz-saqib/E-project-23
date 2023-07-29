 <?php
//   $login= false;
//  if(!$_SESSION['name'] && $_SESSION['name'] !=true ){
  
// }
// $login = true;
//  $name = $_SESSION['name'];
// $selectQ = "SELECT * FROM `user` WHERE `name`= '$name'";

// $select = mysqli_query($conn,$selectQ);
// $data = mysqli_fetch_assoc($select);

 ?>



<style>
  *{
        box-shadow:none !important;
    }
    button{
  border: transparent;
  
}
a{
  cursor: pointer;
}
.modal-header{
    display: flex;
    justify-content: center;
}
.modal-title{
font-size: 1rem;
}
.modal-body{
    border-top: 1px solid #4153f19c;
    display: flex;
    flex-direction: column;
    
}
.modal-content{
    background-color: #fff;
}
.modal-body a div {
  padding: .3rem .5rem;
}
.modal-body a div i{
  margin-right: 1rem;
}
.vacc-reg-btn{
  background-color:  #4154f1;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: .3rem;
  height: 2rem;
  color: white;
  margin-top: 2rem;
  font-size: .8rem !important;
  transition: .3s;
}

.vaccine-card h5
{
font-size: .8rem !important;

}
.vaccine-card ul{
  margin-left: -1rem;
  font-size: .7rem;
  font-weight: 500 !important;
}
.vaccine-card:hover .vacc-reg-btn{
  background-color: white;
  color: black;
}
button{
  border: none;
}
.text-center input{
  background-color: #4154f1;
  border-radius: .3rem !important;
  color: white;
}
.text-center input:hover{
  background-color: #4153f1d8;
color: white;
}
.col-lg-4:hover{
color: #4154f1 !important;
}
.col-lg-4:hover .icon{
  box-shadow: 0 0 1rem #4153f169 !important;
}
.bg-success{
  background-color:  rgb(11, 156, 156) !important;
}
.bg-danger{
  background-color:  rgb(175, 17, 51) !important;
}
</style>
 <!-- navbar -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Registeration For </h5>
       
          <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
        </div>
        <div class="modal-body">
         <div><a href="pat_reg.php"> <div class="vacc-reg-btn "><i class="fa-solid fa-bed"></i>Registeration for parient</div></a></div>
         <div><a href="hos_reg.php"> <div class="vacc-reg-btn "><i class="fa-regular fa-hospital"></i> Registeration for hospital</div></a></div>
        </div>
        <!-- <div class="modal-footer">
        <button class="vacc-reg-btn "> cancel</button>
        </div> -->
      </div>
    </div>
  </div> 
 <!-- modal -->
 <div class="modal fade" id="statusModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Status</h5>
       
          <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
        </div>
        <div class="modal-body">
         <div><a href="patient_status.php"> <div class="vacc-reg-btn "><i class="fa-solid fa-bed"></i>Status Check for parient</div></a></div>
         <div><a href="hospital_status.php"> <div class="vacc-reg-btn "><i class="fa-regular fa-hospital"></i>Status Check for hospital</div></a></div>
        </div>
        <!-- <div class="modal-footer">
        <button class="vacc-reg-btn "> cancel</button>
        </div> -->
      </div>
    </div>
  </div> 
 <!-- modal -->
 <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="align-items-center d-none d-md-flex">
        <i class="bi bi-clock"></i> Monday - Saturday, 8AM to 10PM
      </div>
      <div class="d-flex align-items-center">
        <i class="bi bi-phone"></i> Call us now +1 5589 55488 55
      </div>
    </div>
  </div>

 <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""> <span  class="logo">HS centre</span></a>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="welcome.php">Home</a></li>
          <li><a class="nav-link scrollto" href="welcome.php#vaccine">vaccines</a></li>
          <li><a class="nav-link scrollto" href="welcome.php#services">Services</a></li>
          <li><a class="nav-link scrollto" href="welcome.php#departments">Departments</a></li>
          <li><a class="nav-link scrollto"data-bs-toggle="modal" data-bs-target="#statusModal" class="appointment-btn scrollto" >status</a></li>
          
          <li><a class="nav-link scrollto" href="welcome.php#contact">Contact</a></li>
          <li class="dropdown"><a href="#"><span>Profile</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              
              <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li> -->
              <li><a href="#"><?php echo  $_SESSION['name'] ?><i class="fa-solid fa-user"></i> </a></li>
              <li><a href="#"><?php echo  $_SESSION['email'] ?><i class="fa-solid fa-at"></i> </a></li>
              <li><a href="#"><?php echo  $_SESSION['cnic'] ?><i class="fa-regular fa-id-card"></i></a></li>
              <li><a href="edit.php?id=<?=$_SESSION['id'] ?>"> Update profile<i class="fa-regular fa-pen-to-square"></i></a></li>
              <li><a href="logout.php">Logout <i class="fa-solid fa-right-from-bracket"></i></a></li>
              
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="appointment-btn scrollto"><span class="d-none d-md-inline"></span> Registeration</button>

    </div>
  </header>