<!Doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Adding Client Page</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
<style>
a.nav-link{font-size : 150%;}</style>

<div class="container">
    <h2>Add Client</h2>
    
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
        <div class="col-md-6">
        <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
<?php if(isset($_SESSION['success'])) { ?>

<div class="alert alert-success"><?php echo $_SESSION['success'];  ?></div>
<?php 
} 
?>
    <form method="post">
                
                    <div class="form-group">
                        <label>Clientname</label>
                        <input type="text" class="form-control" name="clientname" value="<?php echo !empty($member['clientname'])?$member['clientname']:''; ?>" >
                        <?php echo form_error('clientname','<div class="invalid-feedback">','</div>'); ?>
                    </div>
                    

<div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" name="address" value="<?php echo !empty($member['address'])?$member['address']:''; ?>" >
                        <?php echo form_error('address','<div class="invalid-feedback">','</div>'); ?>
                </div>
                
                <div class="form-group">
                    <label>Contact_no</label>
                    <input type="text" class="form-control" name="contact_no" value="<?php echo !empty($member['contact_no'])?$member['contact_no']:''; ?>" >
                    <?php echo form_error('contact_no','<div class="invalid-feedback">','</div>'); ?>
                </div>

                <div class="form-group">
                    <label>Review</label>
                    <input type="text" class="form-control" name="review" value="<?php echo !empty($member['review'])?$member['review']:''; ?>" >
                    <?php echo form_error('review','<div class="invalid-feedback">','</div>'); ?>
                </div>
      
                <div class="form-group">
                    <label>Sales Name</label>
                    <input type="text" class="form-control" name="sales_name" value="<?php echo !empty($member['sales_name'])?$member['sales_name']:''; ?>" >
                    <?php echo form_error('sales_name','<div class="invalid-feedback">','</div>'); ?>
                </div>

                <div class="form-group">
                    <label>Feedback:</label>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="gender1" name="feedback" class="custom-control-input" value="Interested" <?php echo empty($member['feedback']) || (!empty($member['feedback']) && ($member['feedback'] == 'Interested'))?'checked="checked"':''; ?> >
                        <label class="custom-control-label" for="gender1">Interested</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="gender2" name="feedback" class="custom-control-input" value="Follow_Up" <?php echo (!empty($member['feedback']) && ($member['feedback'] == 'Follow_Up'))?'checked="checked"':''; ?> >
                        <label class="custom-control-label" for="gender2">Follow Up</label>
                    </div>
                    <?php //echo form_error('gender','<div class="invalid-feedback">','</div>'); ?>
                </div>

                <label for="follow_up">Follow_Up Date and Time:</label>
    <div class="row">
    
        <div class='col-sm-12'>

            <div class="form-group">

                <div class='input-group date' id='datetimepicker1'>

                    <input type="text" class="form-control" id="datetimepicker" name="datetimepicker" value="<?php echo !empty($member['datetimepicker'])?$member['datetimepicker']:''; ?>">

                    <span class="input-group-addon">

                        <span class="glyphicon glyphicon-calendar"></span>

                    </span>

                </div>

            </div>

        </div>

        <script type="text/javascript">

            $(function () {

                $('#datetimepicker1').datetimepicker({

                    

                });

            });
        </script>
</div>
                        <div class="form-group">
                        
                        <input type="hidden" class="form-control" name="user_id" value="<?php echo ($this->session->userdata('id')); ?>" >
                        <?php echo form_error('clientname','<div class="invalid-feedback">','</div>'); ?>
                    </div>


                <a href="<?php echo site_url('members'); ?>" class="btn btn-secondary">Back</a>
                <input type="submit" name="memSubmit" class="btn btn-success" value="Submit">
            </form>
        </div>
    </div>
</div>