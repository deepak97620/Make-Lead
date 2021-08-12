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
    <div class="col-md-2">Your User_id is : <?php echo $_SESSION['id'];?></div>    
        <div class="col-md-6 search-panel">
            <!-- Search form -->
            <form method="post">
                <div class="input-group mb-3">
                    <input type="text" name="searchKeyword" class="form-control" placeholder="Search by keyword..." value="<?php echo $searchKeyword; ?>">
                    <div class="input-group-append">
                        <input type="submit" name="submitSearch" class="btn btn-outline-secondary" value="Search">
                        <input type="submit" name="submitSearchReset" class="btn btn-outline-secondary" value="Reset">
                    </div>
                </div>
            </form>
            
        </div>
        <div class="col-md-3">
                <a href="<?php echo site_url('members/add/'); ?>" class="btn btn-success">Add client</a>
                <a button type="button" class="btn btn-danger" id="button2" href="<?php echo base_url(); ?>index.php/auth2/logout">Logout</button></a>
            </div>
        
        <!-- Data list table --> 
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Client Name</th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th>Review/Comments</th>
                    <th>Sales Name</th>
                    <th>Feedback</th>
                    <th>Date</th>
                    <th>Schedule Time</th>
                    <th>Action</th>
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
                        <a href="<?php echo site_url('members/edit/'.$row['id']); ?>" class="btn btn-warning">edit</a>
                        <a href="<?php echo site_url('members/delete/'.$row['id']); ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')">delete</a>
                    </td>
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