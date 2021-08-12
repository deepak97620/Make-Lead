<!doctype html> 
<html> 
<head> 
    <title>DataTables and Codeigniter</title> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <!--data table--> 
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/pdfmake-0.1.18/dt-1.10.12/b-1.2.2/b-colvis-1.2.2/b-html5-1.2.2/b-print-1.2.2/r-2.1.0/datatables.min.css" /> 
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs/pdfmake-0.1.18/dt-1.10.12/b-1.2.2/b-colvis-1.2.2/b-html5-1.2.2/b-print-1.2.2/r-2.1.0/datatables.min.js"></script> 
    <!--/.data table--> 
    <style> 
        body { 
            padding: 15px; 
        } 
    </style> 
</head> 

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand col-md-4 col-lg-4 col-sm-6" href="#">User_id / Name: <?php echo $_SESSION['id'];?>
  <!-- <//?php echo $_SESSION['username'];?></a> -->
  
  
  
    <a class="navbar-brand col-md-4 col-lg-4 col-sm-6" href="#">Members / Clients List</a>
    
    
    
    <a class="navbar-brand col-md-1 col-lg-1 col-sm-6" href="#"><?php echo anchor(site_url('members/add'), 'Add Client', 'class="btn btn-success"'); ?></a>
    <a class="navbar-brand col-md-1 col-lg-1 col-sm-6" href="#"><?php echo anchor(site_url('auth2/logout'), 'LogOut', 'class="btn btn-danger"'); ?></a>
    
    
    <!--  <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Features</a>
      <a class="nav-item nav-link" href="#">Pricing</a>
      <a class="nav-item nav-link disabled" href="#">Disabled</a>-->
      
      
</nav>
<body>
     <!--
    <div class="row" style="margin-bottom: 10px"> 
    <div class="col-md-2">Your User_id is : <?php echo $this->session->userdata('username');?></div>
        <div class="col-md-4"> 
            <h2 style="margin-top:0px">Members / Clients List</h2> 
        </div> 
        <div class="col-md-4 text-center"> 
            <div style="margin-top: 4px" id="message"> 
            
                <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?> 
            </div> 
        </div> 
        <div class="col-md-2 text-right"> 
            <?php echo anchor(site_url('members/add'), 'Create', 'class="btn btn-primary"'); ?> 
        </div> 
    </div> 
     -->
    <table class="table table-bordered table-striped" id="mytable"> 
    
        <thead> 
            <tr> 
                <th>#</th>
                    <th>Client Name</th>
                    <th style="text-align:center">Address</th>
                    <th>Contact</th>
                    <th style="text-align:center">Review/Comments</th>
                    <th>Sales Name</th>
                    <th>Feedback</th>
                    <th style="text-align:center">Created On</th>
                    <th style="text-align:center">Schedule Time</th>
                    <th style="text-align:center">Action</th> 
            </tr> 
        </thead> 
        <tbody> 
            
            <?php 
            $start=0; if(!empty($members)){foreach ($members as $job_positions) 
            { 
                ?> 
                <tr>    
                    <td> 
                    <?php echo ++$start ?>
                    </td> 
                    <td> 
                        <?php echo $job_positions['clientname']; ?> 
                    </td> 
                    <td> 
                        <?php echo $job_positions['address']; ?> 
                    </td> 
                    <td> 
                        <?php echo $job_positions['contact_no']; ?> 
                    </td> 
                    <td> 
                        <?php echo $job_positions['review']; ?> 
                    </td> 
                    <td> 
                        <?php echo $job_positions['sales_name']; ?> 
                    </td>
                    <td> 
                        <?php echo $job_positions['feedback']; ?> 
                    </td>
                    <td> 
                        <?php echo $job_positions['date']; ?> 
                    </td>
                    <td> 
                        <?php echo $job_positions['datetimepicker']; ?> 
                    </td>

                    <td style="text-align:center" width="200px"> 
                        <?php  
             
            echo anchor(site_url('members/edit/'.$job_positions['id']),'Update');
            echo ' | ';  
            echo anchor(site_url('members/delete/'.$job_positions['id']),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"');  
            ?> 
                    </td> 
                </tr> <?php } }else{ ?>
                <tr><td colspan="10">No member(s) found...</td></tr>
                <?php } ?>
        </tbody> 
    </table> 
    <script type="text/javascript"> 
        $(document).ready(function() { 
            $("#mytable").dataTable(); 
        }); 
    </script> 
</body> 
</html>