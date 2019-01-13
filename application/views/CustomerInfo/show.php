

<div class="col-lg-12" style="margin-top:10px">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                       View Detail                       
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="">
                                
                                <table class="table">
    
    <tbody>
      <tr>
        <td><b>Name</b></td>
        <td><?php echo $item->name; ?></td>
        
      </tr>
      <tr>
      <td><b>Country</b></td>
        <td><?php echo $item->country; ?></td>
        
      </tr>
      <tr>
      <td><b>Email</b></td>
        <td><?php echo $item->email; ?></td>
        
      </tr>
      <tr>
      <td><b>About You</b></td>
        <td><?php echo $item->about_you; ?></td>
        
      </tr>
      <tr>
      <td><b>Date Of Birth</b></td>
        <td><?php echo $item->dob; ?></td>
        
      </tr>
    </tbody>
  </table>

                               
                               
                            </div>
                           
                        </div>
                        <a class="btn btn-primary  col-lg-offset-4" href="<?php echo base_url('CustomerInfo/edit/'.$item->id) ?>"> Edit</a>
                        <a class="btn btn-default" href="<?php echo base_url('CustomerInfo') ?>"> Back</a>
                        
                    </div>
                    
                </div>


    

<script>
$(document).ready(function() {
    $('#js-date').datepicker();
});

</script>













