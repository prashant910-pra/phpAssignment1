

<div class="col-lg-12" style="margin-top:10px">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        Edit Record                       
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6 col-lg-offset-3">
                                <form method="post" action="<?php echo base_url('CustomerInfo/update/'.$item->id);?>">
                                    <div class="form-group center">
                                    <?php

                                    if ($this->session->flashdata('errors')){
                                    echo '<div class="alert alert-danger">';
                                    echo $this->session->flashdata('errors');
                                    echo "</div>";
                                    }


                                    ?>

                                    </div>
                                        <div class="form-group center">
                                            <label>Name</label>
                                            <input class="form-control" name="name" value="<?php echo $item->name; ?>">
                                            
                                        </div>
                                        <div class="form-group center">
                                            <label>Country</label>
                                            <input class="form-control" name="country" value="<?php echo $item->country; ?>">
                                            
                                        </div>
                                        <div class="form-group center">
                                            <label>Email</label>
                                            <input class="form-control" name="email" value="<?php echo $item->email; ?>">
                                            
                                        </div>
                                        <div class="form-group center">
                                            <label>Mobile</label>
                                            <input class="form-control" name="mobile_no" value="<?php echo $item->mobile_no; ?>">
                                            
                                        </div>

                                        <div class="form-group center">
                                            <label>Description</label>
                                            <textarea name="about_you" class="form-control"><?php echo $item->about_you; ?></textarea>
                                            
                                        </div>
                                        
                                        <div class="form-group center">
                                            <label>Date Of Birth</label>
                                            <input name="dob" class="form-control" id="js-date" value="<?php echo $item->dob; ?>">
                                            
                                        </div>
                                        <div class="form-group center">
                                        <button type="submit" class="btn btn-success">Update</button>
                                        <a class="btn btn-default" href="<?php echo base_url('CustomerInfo') ?>"> Cancel</a>  
                                        </div>
                                        
                                    </form>
                                </div>
                               
                            </div>
                           
                        </div>
                        
                    </div>
                    
                </div>


    

<script>
$(document).ready(function() {
    $('#js-date').datepicker();
});

</script>













