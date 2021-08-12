<style>
table.table-striped{ table-layout:fixed; word-break: break-all; max-width:1550px;}
</style>
<body> 
    <div class="container-fluid">
        <?php if(!empty($success_msg)){ ?>
            <div class="col-xs-12">
                <div class="alert alert-success"><?php echo $success_msg; ?></div>
            </div>
        <?php }elseif(!empty($error_msg)){ ?>
                    <div class="col-xs-12">
                        <div class="alert alert-danger"><?php echo $error_msg; ?></div>
                    </div>
        <?php } ?>
                    <!-- Display status message -->
        <div class="row">
            <div class="col-md-2">Hello Admin, <?php echo $_SESSION['username'];?></div>
        </div>
       <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                
                 <tr>  
                 <th>#</th>  
                    <th>user_id</th>  
                    <th>Name</th>
                    <th>Username</th>
                    <th>Phone</th>
                    <th>Action</th>  
                 </tr> 
                </thead> 
            <tbody>
             <?php  
                $start=0; foreach ($h->result() as $row)  
                 {  
                     ?><tr>  
                        <td><?php echo ++$start ?></td>
                        <td><?php echo $row->id;?></td>  
                        <td><?php echo $row->name;?></td>
                        <td><?php echo $row->username;?></td>
                        <td><?php echo $row->phone;?></td>
                        <td>
                        <a href="<?php echo site_url('members2/delete2/'.$row->id); ?>">Delete</a>
                        </td>    
                        </tr>  
                <?php }   ?>  
            </tbody>  
        </table> 
    </div>  
    <a href="<?php echo site_url('members2'); ?>" class="btn btn-secondary">Back</a>
    <a button type="button" class="btn btn-danger" id="button2" href="<?php echo base_url(); ?>index.php/auth/logout">Logout</button></a>
</body>  