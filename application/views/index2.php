<style>
table.table-striped{ table-layout:fixed; word-break: break-all; max-width:1550px;}

</style>
<div class="container-fluid">
    <!-- Display status message -->
    <?php if(!empty($success_msg)){ ?>
    <div class="col-xs-12">
        <div class="alert alert-success"><?php echo $success_msg; ?></div>
    </div>
    <?php }elseif(!empty($error_msg)){ ?>
    <div class="col-xs-12">
        <div class="alert alert-danger"><?php echo $error_msg; ?></div>
    </div>
    <?php } ?>
    
    <div class="row">
    <?php if(isset($_SESSION['success'])) { ?>
            <div class="alert alert-success"> <?php echo $_SESSION['success']; ?> </div> 
         <?php
        } ?>
 <div class="col-md-2">Hello Admin, <?php echo $_SESSION['username'];?></div>
        <div class="col-md-4 search-panel">
            <!-- Search form -->
            <form method="post">
                <div class="input-group mb-2">
                    <input type="text" name="searchKeyword2" class="form-control" placeholder="Search by keyword..." value="<?php echo $searchKeyword2; ?>">
                    <div class="input-group-append">
                        <input type="submit" name="submitSearch2" class="btn btn-outline-secondary" value="Search">
                        <input type="submit" name="submitSearchReset2" class="btn btn-outline-secondary" value="Reset">
                    </div>
                </div>
            </form>
            
        </div>
        <div class="col-md-4">
                <a href="<?php echo site_url('members2/add/'); ?>" class="btn btn-success">Add client</a>
                <a button type="button" class="btn btn-primary" id="button2" href="<?php echo base_url(); ?>index.php/members2/index3">Salesusers</button></a>
        </div>
                <div class="col-md-2">
                <a button type="button" class="btn btn-danger" id="button2" href="<?php echo base_url(); ?>index.php/auth/logout">Logout</button></a>
                </div>
            
        
        <!-- Data list table --> 
        
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Client Name</th>
                    <th style="width: 15%">Address</th>
                    <th>Contact</th>
                    <th>Review/Comments</th>
                    <th>Sales Name</th>
                    <th>Feedback</th>
                    <th>Created On</th>
                    <th>Schedule Time</th>
                    <th>Action</th>
                    <th>User_id</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($members)){ foreach($members as $row){ ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['clientname']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['contact_no']; ?></td>
                    <td><?php echo $row['review']; ?></td>
                    <td><?php echo $row['sales_name']; ?></td>
                    <td><?php echo $row['feedback']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['datetimepicker']; ?></td>
                    

                    <td>
                    <!-- <a href="<?php //echo site_url('members/view/'.$row['id']); ?>" class="btn btn-primary">view</a>-->
                        <a href="<?php echo site_url('members2/edit/'.$row['id']); ?>" class="btn btn-warning">edit</a>
                        <a href="<?php echo site_url('members2/delete/'.$row['id']); ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')">delete</a>
                    </td>
                    <td><?php echo $row['user_id']; ?></td>
                </tr>
                <?php } }else{ ?>
                <tr><td colspan="10">No member(s) found...</td></tr>
                <?php } ?>
            </tbody>
        </table>
        
        <!-- Display pagination links -->
        <div class="pagination pull-right">
            <?php echo $this->pagination->create_links(); ?>
        </div>
    </div>