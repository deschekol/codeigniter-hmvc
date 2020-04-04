<!DOCTYPE html>
<html lang="en">
<head>
  <title>User Registration</title>
    <?php $this->load->view("signup/include/load-styles"); ?>
</head>
<body>

<div class="container">
    <div class="col-sm-12">
        <div class="col-sm-8">
        <h2>User Registration</h2>
            <form action="<?php echo site_url('signup/user-submit'); ?>" method="post" name="frm_add_user" id="frm_add_user">
                <div class="form-group">
                <label for="txtname">Name:</label>
                <input type="text"  class="form-control" id="txtname" value="<?php echo set_value('txtname'); ?>" placeholder="Enter Name" name="txtname">
                <div class="error"><?php echo form_error("txtname"); ?></div>
                </div>
                <div class="form-group">
                <label for="txtemail">Email:</label>
                <input type="email"  class="form-control" id="txtemail" value="<?php echo  set_value('txtemail'); ?>" placeholder="Enter Email" name="txtemail">
                <div class="error"><?php echo form_error("txtemail"); ?></div>
                </div>
                <div class="form-group">
                <label for="txtmobile">Mobile:</label>
                <input type="number"  class="form-control" id="txtmobile" value="<?php echo  set_value('txtmobile'); ?>" placeholder="Enter Mobile" name="txtmobile">
                <div class="error"><?php echo form_error("txtmobile"); ?></div>
                </div>
                <div class="form-group">
                <label for="dddesignation">Select Designation:</label>
                <?php $old_value = set_value('dddesignation'); ?>
                <select class="form-control"  name="dddesignation">
                        <option value="">Choose Designation</option>
                        <option value="web designer" <?php  if($old_value == "web designer") echo "selected" ?>>Web Designer</option>
                        <option value="web develoepr" <?php  if($old_value == "web develoepr") echo "selected" ?>>Web Developer</option>
                        <option value="tester" <?php  if($old_value == "tester") echo "selected" ?>>Tester</option>
                        <option value="ba" <?php  if($old_value == "ba") echo "selected" ?>>BA</option>
                </select>
                <div class="error"><?php echo form_error("dddesignation"); ?></div>
                </div>
                
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>

</div>

</body>
<?php $this->load->view("signup/include/load-scripts"); ?>
</html>
