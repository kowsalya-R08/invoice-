<?php
$hostname ="localhost";
$username = "root";
$password ="";
$databaseName ="invoice";

$connect =mysqli_connect($hostname, $username, $password, $databaseName);



$query= "SELECT * FROM `customerinfo`"; 
$result= mysqli_query($connect, $query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel ="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet"  href=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js">
    
    <link rel ="stylesheet" href="  https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel ="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <style>
      table {
        border-collapse: collapse;
        width: 80%;
        margin-top: 20px;
      }
      table, th, td {
        border: 1px solid black;
      }
      th, td {
        padding: 10px;
        text-align: center;
      }
      .cancel-btn {
        background-color: #ff6666;
        color: white;
        border: none;
        padding: 5px 10px;
        cursor: pointer;
      }
    </style>
   
</head>
<body id="body-pd">
    <header class="header " id="header">
        <div class="header_toggle "> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> 
        </div>
    </header>
    <div class="l-navbar " id="nav-bar">
        <nav class="nav ">
            <div> <a href="#" class="nav_logo pb-5"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">INVOICE</span> </a>
                <div class="nav_list"> <a href="#" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a> 
                    <a href="#" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Customers</span> </a> 
                    <a href="invoicemain.html" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Invoice</span> </a>
                     <a href="#" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Payment Received</span> </a> 
                     <!-- <a href="#" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Received</span> </a> -->
                      <a href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Time Tracking</span> </a>
                      <a href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Reports</span> </a>
                </div>
            </div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
        </nav>
    </div>


<div class="container pt-5 mt-5">
    <h5 class="fs-lg-3">New Invoice</h5>
    <form method="post" action="invoice.php" class="form-horizontal" >
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
        <select class="form-select" name="customer" aria-label="Default select example">
          <option value="">Select customer</option>
          <?php while ($row2 = mysqli_fetch_array($result)):;?>
            
            <option value="<?php echo $row2[2];?>"> <?php echo $row2[2];?></option>
            <?php endwhile;?>
          </select>
      </div>
      
    <div class="input-group mb-3">
    <div class="row g-3 align-items-center">
        <div class="col-auto">
          <label for="inputPassword6"  class="col-form-label fw-bold">Invoice no</label>
        </div>
        <div class="col-auto">
          <input type="text" id="inputPassword6" name="invoiceno" class="form-control" aria-describedby="passwordHelpInline">
        </div>
        <div class="col-auto">
          
        </div>
      </div>
    </div>

    <div class="input-group mb-3">
        <div class="row g-3 align-items-center">
            <!-- <div class="col-auto pe-3">
              <label for="inputPassword6" class="col-form-label fw-bold">Order no</label>
            </div>
            <div class="col-auto">
              <input type="text" id="inputPassword6" name="orderno" class="form-control" aria-describedby="passwordHelpInline">
            </div> -->
            <div class="col-auto">
              
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
            <div class="row g-3 align-items-center">
                <div class="col-auto pe-3">
                  <label for="inputPassword6" class="col-form-label fw-bold">Invoice date</label>
                </div>
                <div class="col-auto">
                  <input type="date" id="inputPassword6" name="idate" class="form-control" aria-describedby="passwordHelpInline">
                </div>
                <div class="col-auto pe-3">
                    <label for="inputPassword6" class="col-form-label fw-bold">Terms </label>
                    
                  </div>
                  <div class="col-auto">
                    <select class="form-select" name="terms" aria-label="Default select example">
                        <option selected>Due On Receipt</option>
                        <option value="1">Net 15</option>
                        <option value="2">Net 30</option>
                        <option value="3">Due End Of The Month</option>
                        <option value="4">Due End Of Next Month</option>
                      </select>
                  </div>
                  <div class="col-auto pe-3">
                    <label for="inputPassword6" class="col-form-label fw-bold">Due Date</label>
                  </div>
                  <div class="col-auto">
                    <input type="date" name="duedate" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                  </div>
                
              </div>
            </div>
            <hr>
            <!-- .............table.........  -->
           <?php
           if(isset($_POST["submit"])){


           }

           ?>  
 

 <h6 class="fw-bold fs-lg-3">Item table</h6>
 <br>
 <button onclick="addRow()" class="btn btn-success mt-2">Add Row</button>
 <div class="table-responsive">
 
 
 <table id="myTable" class=" table-bordered table-striped table-highlight">
   <thead>
     <tr>
       <th>Item Details</th>
       <th>Quantity</th>
       <th>Rate</th>
       <th>Amount</th>
       <th>Action</th>
     </tr>
   </thead>
   <tbody>
     <!-- Default row -->
     <tr>
       <td><input type="text" class="item form-control" value="Item 1" ></td>
       <td><input type="number" class="quantity form-control" onchange="calculateTotal()"></td>
       <td><input type="number" class="rate form-control" onchange="calculateTotal()"></td>
       <td><input type="text" class="amount form-control" readonly></td>
       <td><button class="cancel-btn" onclick="cancelRow(this)">Cancel</button></td>
     </tr>
   </tbody>
   <tfoot>
     <tr>
       <td colspan="3">Total</td>
       <td id="totalValue" name="grand_total"></td>
       <td></td>
     </tr>
   </tfoot>
 </table>
 <!-- <button class="bg-success p-2 border border-radius rounded text-white my-3" name="submit">Submit</button> -->
</div>







<hr>


                    <div class="mb-3">
                        <label for="basic-url" class="form-label ">Customer Notes</label>
                        <div class="input-group ">
                            <div class="col-auto pb-3 pe-3">
                                <input type="text" id="inputPassword6" class="form-control" name="customernotes" aria-describedby="passwordHelpInline" placeholder="Thanks for your Business">
                            </div>
                        <div class="form-text" id="basic-addon4">Will be displayed on the device</div>
                    </div>

        


    <!--Container Main end-->

      <div class="container pt-2">
          <div class="row ">
              <div class="col-auto p-1">
              <button class="bg-success p-2 border border-radius rounded text-white my-3" name="submit">Submit</button>

                  <!-- <button type="button" class="btn btn-success" name="submit" >Save as draft</button> -->

              </div>
              <!-- <div class="col-auto p-1">
                  <button type="button" class="btn btn-success" name="submit">Save and share</button>

              </div> -->
              <div class="col-auto p-1">
                  <!-- <button type="button" class="btn btn-danger">Cancel</button> -->

              </div>
          </div>
      </div>
      </form>

    






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
                var cell3=newrow.insertCell(2);
                var cell4=newrow.insertCell(3);
                var btn1=newrow.insertCell(4);
                cell1.innerHTML='<tr><td> <input type="text" class="form-control"></td></tr>';
                cell2.innerHTML='<tr><td> <input type="text" class="form-control"></td></tr>';
                cell3.innerHTML='<tr><td> <input type="text" class="form-control"></td></tr>';
                cell4.innerHTML='<tr><td> <input type="text" class="form-control"></td></tr>';  
                btn1.innerHTML='<tr> <td><button type="button" onclick="deleteRow(this)" id="delete"  value="x" class="btn btn-danger">x</button></td></tr>';
                
                
        
                function deleteRow(button) {
            var row = button.parentNode.parentNode;
            row.parentNode.removeChild(row);
          }
            }
        
        
        
        // delete row 
        
        // Initialize total value on page load
        calculateTotal();
        
        function addRow() {
          // Get the table and its tbody
          var table = document.getElementById("myTable");
          var tbody = table.getElementsByTagName("tbody")[0];
        
          // Create a new row and cells
          var row = tbody.insertRow();
          var cell1 = row.insertCell(0);
          var cell2 = row.insertCell(1);
          var cell3 = row.insertCell(2);
          var cell4 = row.insertCell(3);
          var cell5 = row.insertCell(4);
        
          // Add input fields and cancel button to cells
          cell1.innerHTML = '<input type="text" class="item form-control" value="New Item" >';
          cell2.innerHTML = '<input type="number" class="quantity form-control" onchange="calculateTotal()">';
          cell3.innerHTML = '<input type="number" class="rate form-control" onchange="calculateTotal()">';
          cell4.innerHTML = '<input type="text" class="amount form-control" readonly>';
          cell5.innerHTML = '<button class="cancel-btn" onclick="cancelRow(this)">Cancel</button>';
        
          // Trigger calculateTotal() for the new row
          calculateTotal();
        }
        
        function cancelRow(button) {
          // Get the row to be removed
          var row = button.parentNode.parentNode;
          
          // Remove the row from the table
          row.parentNode.removeChild(row);
        
          // Recalculate total after removing the row
          calculateTotal();
        }
        
        function calculateTotal() {
          var table = document.getElementById("myTable");
          var rows = table.getElementsByTagName("tbody")[0].getElementsByTagName("tr");
          var total = 0;
        
          for (var i = 0; i < rows.length; i++) {
            var quantity = parseFloat(rows[i].querySelector(".quantity").value) || 0;
            var rate = parseFloat(rows[i].querySelector(".rate").value) || 0;
            var amount = quantity * rate;
        
            rows[i].querySelector(".amount").value = amount.toFixed(2);
            total += amount;
          }
        
          document.getElementById("totalValue").innerHTML = total.toFixed(2);
        }
        
        
            </script>
            <script type="text/javascript" src="data:text/javascript;base64,ZnVuY3Rpb24gYWRkTmV3Um93KCl7dmFyIHRhYmxlPWRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCJlbXBsb3llZS10YWJsZSIpO3ZhciByb3dDb3VudD10YWJsZS5yb3dzLmxlbmd0aDt2YXIgY2VsbENvdW50PXRhYmxlLnJvd3NbMF0uY2VsbHMubGVuZ3RoO3ZhciByb3c9dGFibGUuaW5zZXJ0Um93KHJvd0NvdW50KTtmb3IodmFyIGk9MDtpPGNlbGxDb3VudDtpKyspe3ZhciBjZWxsPXJvdy5pbnNlcnRDZWxsKGkpO2lmKGk8Y2VsbENvdW50LTEpe2NlbGwuaW5uZXJIVE1MPSc8aW5wdXQgdHlwZT0idGV4dCIgLz4nfWVsc2V7Y2VsbC5pbm5lckhUTUw9JzxpbnB1dCB0eXBlPSJidXR0b24iIHZhbHVlPSJkZWxldGUiIG9uY2xpY2s9ImRlbGV0ZVJvdyh0aGlzKSIgLz4nfX19CmZ1bmN0aW9uIGRlbGV0ZVJvdyhlbGUpe3ZhciB0YWJsZT1kb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnZW1wbG95ZWUtdGFibGUnKTt2YXIgcm93Q291bnQ9dGFibGUucm93cy5sZW5ndGg7aWYocm93Q291bnQ8PTEpe2FsZXJ0KCJUaGVyZSBpcyBubyByb3cgYXZhaWxhYmxlIHRvIGRlbGV0ZSEiKTtyZXR1cm59CmlmKGVsZSl7ZWxlLnBhcmVudE5vZGUucGFyZW50Tm9kZS5yZW1vdmUoKX1lbHNle3RhYmxlLmRlbGV0ZVJvdyhyb3dDb3VudC0xKX19" defer>
            </script> 
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        
                        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
        </body>
        </html>
        



        
 <?php
include 'connection.php';

// print_r($_REQUEST);
if(isset($_POST['submit']))
{
  $customer=$_POST['customer'];
  $invoiceno=$_POST['invoiceno'];
  $idate=$_POST['idate'];
  $terms=$_POST['terms'];
  $duedate=$_POST['duedate'];
  $grand_total=$_POST['grand_total'];
  $customername=$_POST['customername'];

//  print_r($_REQUEST);

  $sql="insert into invoiceform(customer,invoiceno,idate,terms,duedate,grand_total,customername)values('$customer','$invoiceno','$idate','$terms','$duedate','$grand_total','$customername')";
  $res=mysqli_query($con,$sql);
  if($res){
    echo "<script>alert('Data inserted successfully')</script>";
  }
  else
  {
    echo "insert failed";
  }
}


?>