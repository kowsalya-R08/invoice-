<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylec.css">
    <link rel ="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet"  href=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js">
    
    <link rel ="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel ="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
   <!-- <style>
     #id
    {
        top:0;
        position:sticky;
    }
   </style> -->
</head>
<body>
<div class="container-fluid pt-5">
    <div class="row">
        <div class="col-md-10 pt-5">
            <h3>Customers Details</h3>
        </div>
        <div class="col-md-2 text-sm-end pt-lg-5">
        <button  onclick="location.href = 'customer.php';" class="btn bg-primary text-white">Add customer</button>
        </div>
    </div>
</div>

<div class="table-responsive pt-3 mt-2">
<form class="form-horizontal">
  <table class="table table-bordered table-striped table-hightlight table-condensed">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Customer Type</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Comapnay Name</th>
        <th scope="col">Customer Email</th>
        <th scope="col">Customer Phone</th>
        <th scope="col">Update</th>
        
      </tr>
<tbody>
</form>
</div>
  <?php
$sql= "select*from customerinfo";
$res=mysqli_query($con,$sql);
if($res){

  while ($row=mysqli_fetch_assoc($res))
  {
    $id=$row['id'];
    $customertype=$row['customertype'];
    $firstname=$row['firstname'];
    $lastname=$row['lastname'];
    $companyname=$row['companyname'];
    $customeremail=$row['customeremail'];
    $customerphone=$row['customerphone'];
    
     echo '<tr>
     <th scope="row">'.$id.'</th>
     <td>'.$customertype.'</td>
     <td>'.$firstname.'</td>
     <td>'.$lastname.'</td>
     <td>'.$companyname.'</td>
     <td>'.$customeremail.'</td>
     <td>'.$customerphone.'</td>
    
<td>
  <button class="btn btn-success"><a href="customeredit.php?updateid='.$id.'" class="text-light text-decoration-none">Edit</a></button>
  
    </td>
</tr>';


  }
 
}
?>


</tbody>




    </thead>
  </table>
</div>


</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylec.css">
    <link rel ="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet"  href=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js">
    
    <link rel ="stylesheet" href="  https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel ="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
   
</head>
<body id="body-pd">
        <header class="header " id="header">
        <div class="header_toggle "> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> 
         </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav ">
            <div> <a href="#" class="nav_logo pb-5"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">INVOICE</span> </a>
                <div class="nav_list"> <a href="#" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a> 
                    <a href="customertab.php" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Customer</span> </a> 
                    <a href="#" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Service</span> </a> 
                    <a href="#" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Invoice</span> </a>
                     <a href="#" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Payment Received</span> </a> 
                     <!-- <a href="#" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Received</span> </a> -->
                      <a href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Time Tracking</span> </a>
                      <a href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Reports</span> </a>
                     </div>
            </div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
        </nav>
    </div>






    
            <script>

                document.addEventListener("DOMContentLoaded", function(event) {
                   
                   const showNavbar = (toggleId, navId, bodyId, headerId) =>{
                   const toggle = document.getElementById(toggleId),
                   nav = document.getElementById(navId),
                   bodypd = document.getElementById(bodyId),
                   headerpd = document.getElementById(headerId)
                   
                   // Validate that all variables exist
                   if(toggle && nav && bodypd && headerpd){
                   toggle.addEventListener('click', ()=>{
                   // show navbar
                   nav.classList.toggle('show')
                   // change icon
                   toggle.classList.toggle('bx-x')
                   // add padding to body
                   bodypd.classList.toggle('body-pd')
                   // add padding to header
                   headerpd.classList.toggle('body-pd')
                   })
                   }
                   }
                   
                   showNavbar('header-toggle','nav-bar','body-pd','header')
                   
                   /*===== LINK ACTIVE =====*/
                   const linkColor = document.querySelectorAll('.nav_link')
                   
                   function colorLink(){
                   if(linkColor){
                   linkColor.forEach(l=> l.classList.remove('active'))
                   this.classList.add('active')
                   }
                   }
                   linkColor.forEach(l=> l.addEventListener('click', colorLink))
                   
                    // Your code to run since DOM is loaded and ready
                   });            
                
                
                // add item 
                function addrow(){
                        var table=document.getElementById("mytable");
                        var newrow=table.insertRow(table.rows.length);
                        var cell1=newrow.insertCell(0);
                        var cell2=newrow.insertCell(1);
                        var cell2=newrow.insertCell(2);
                        cell1.innerHTML='<tr><td> <input type="text"></td></tr>';
                        cell2.innerHTML='<tr><td> <input type="text"></td></tr>';
                        cell3.innerHTML='<tr><td> <input type="text"></td></tr>';
                  
                    }              
                
                    </script>
                    <script type="text/javascript" src="data:text/javascript;base64,ZnVuY3Rpb24gYWRkTmV3Um93KCl7dmFyIHRhYmxlPWRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCJlbXBsb3llZS10YWJsZSIpO3ZhciByb3dDb3VudD10YWJsZS5yb3dzLmxlbmd0aDt2YXIgY2VsbENvdW50PXRhYmxlLnJvd3NbMF0uY2VsbHMubGVuZ3RoO3ZhciByb3c9dGFibGUuaW5zZXJ0Um93KHJvd0NvdW50KTtmb3IodmFyIGk9MDtpPGNlbGxDb3VudDtpKyspe3ZhciBjZWxsPXJvdy5pbnNlcnRDZWxsKGkpO2lmKGk8Y2VsbENvdW50LTEpe2NlbGwuaW5uZXJIVE1MPSc8aW5wdXQgdHlwZT0idGV4dCIgLz4nfWVsc2V7Y2VsbC5pbm5lckhUTUw9JzxpbnB1dCB0eXBlPSJidXR0b24iIHZhbHVlPSJkZWxldGUiIG9uY2xpY2s9ImRlbGV0ZVJvdyh0aGlzKSIgLz4nfX19CmZ1bmN0aW9uIGRlbGV0ZVJvdyhlbGUpe3ZhciB0YWJsZT1kb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnZW1wbG95ZWUtdGFibGUnKTt2YXIgcm93Q291bnQ9dGFibGUucm93cy5sZW5ndGg7aWYocm93Q291bnQ8PTEpe2FsZXJ0KCJUaGVyZSBpcyBubyByb3cgYXZhaWxhYmxlIHRvIGRlbGV0ZSEiKTtyZXR1cm59CmlmKGVsZSl7ZWxlLnBhcmVudE5vZGUucGFyZW50Tm9kZS5yZW1vdmUoKX1lbHNle3RhYmxlLmRlbGV0ZVJvdyhyb3dDb3VudC0xKX19" defer>
                    </script> 
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
                
                       

</div>
</div>
                  </body>
                  </html>
