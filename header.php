<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CryoHealth</title>
    <!--link css-->
    <link rel="stylesheet" type="text/css" title="" href="css/lib/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" title="" href="css/font-awesome.css"> 
    <link rel="stylesheet" type="text/css" title="" href="css/lib/slick.min.css">
    <link rel="stylesheet" type="text/css" title="" href="css/lib/slick-theme.min.css"> 
    <link rel="stylesheet" type="text/css" title="" href="css/animate.css"> 
    <!-- <link rel="stylesheet" type="text/css" title="" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css">   -->
    <link rel="stylesheet" type="text/css" title="" href="css/style.css?v=1002"> 
    <script type="text/javascript" src="js/lib/jquery.min.js"></script>   

</head>

<body> 
   <!-- <header>
      <div class="header-menu">
         <div class="container">
            <div class="h-content-menu">
               <div class="row align-items-center">
                  <div class="col-md-3">
                     <div class="logo"><a href="index.php"><img src="images/logo.png" class="img-fluid" alt=""></a></div>
                  </div>
                  <div class="col-md-9">
                     <div class="menu-right">
                        <div class="h-menu">
                           <ul>
                              <li><a href="howwework.php">How we work</a></li>
                              <li><a href="forwho.php">for who</a></li>
                              <li><a href="products.php">products</a></li>
                              <li><a href="contact.php">contact</a></li>
                           </ul>
                        </div>
                        <div class="translate text-uppercase">
                           <ul>
                              <li><a href="" class="active">NL</a></li>
                              <li><a href="">ENG</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header> -->

   <div class="modal fade" id="myModal">
        <div class="modal-dialog dialog-booking">
          <div class="modal-content">
            <div class="modal-body">
              <div class="content-popup">
               <button type="button" class="close" data-dismiss="modal">&times;</button>

               <div class="step-booking step-1">
                  <div class="date-picker">
                     <div class="input d-none">
                        <div class="result">Select Date: <span></span></div>
                        <button><i class="fa fa-calendar"></i></button>
                     </div>
                     <div class="calendar"></div>
                  </div>
                  <div class="choose-time">
                     <h5>Available start times</h5>
                     <ul>
                        <li><a href="javascript:void(0)">09:00</a></li>
                        <li><a href="javascript:void(0)">10:00</a></li>
                        <li><a href="javascript:void(0)">11:00</a></li>
                        <li><a href="javascript:void(0)">12:00</a></li>
                        <li><a href="javascript:void(0)">13:00</a></li>
                        <li><a href="javascript:void(0)">14:00</a></li>
                        <li><a href="javascript:void(0)">15:00</a></li>
                        <li><a href="javascript:void(0)">16:00</a></li>
                        <li><a href="javascript:void(0)">17:00</a></li>
                     </ul>
                  </div>
               </div>



               <div class="step-booking step-2">
                  <div class="title-popup text-center">Please, confirm details</div>
                  <div class="frm-popup">
                     <div class="item-frm">
                        <label>Name: <span style="color: red">*</span></label>
                        <input type="text" placeholder="Enter your name" class="txt_field">
                     </div>
                     <div class="item-frm">
                        <label>Email: <span style="color: red">*</span></label>
                        <input type="text" placeholder="Enter your address" class="txt_field">
                     </div>
                     <div class="item-frm">
                        <label>Phone: <span style="color: red">*</span></label>
                        <input type="number" placeholder="Enter phone number" class="txt_field">
                     </div>
                  </div>
                  <div class="info-booking">
                     <h4>Pat Viroux Coaching</h4>
                     <ul>
                        <li>
                           <p>Date:</p>
                           <p><strong>21-12-2022</strong></p>
                        </li>
                        <li>
                           <p>Starts at:</p>
                           <p><strong>11:00</strong></p>
                        </li>
                        <li>
                           <p>Provider:</p>
                           <p><strong>Pat Viroux Coaching</strong></p>
                        </li>
                     </ul>
                  </div>
                  <div class="check-rememb">
                     <ul>
                        <li>
                           <input type="checkbox" id="1001"><label for="1001">I agree with SimplyBook.me Terms & Conditions*</label>
                        </li>
                        <li>
                           <input type="checkbox" id="1002"><label for="1002">Subscribe to be one of first to receive our promotions, cool offers and get other relevant information.</label>
                        </li>
                     </ul>
                  </div>
                  <div class="btn-booking-send text-center"><input type="submit" value="Confirm Booking" class="btn_field"></div>
               </div>
              </div>
            </div>
          </div>
        </div>
      </div>