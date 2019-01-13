

<body>

    <div id="wrapper">

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                <h1 class="page-header"><a class="btn btn-success" href="<?php echo base_url('CustomerInfo/create') ?>"> Create New Record</a></h1>
                </div>
                
            </div>
          
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Customer List
                        </div>
                       
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                    <th>Name</th>
          <th>Country</th>
          <th>Email</th>
          <th>Mobile</th>
          <th>Date Of Birth</th>
         <th width="220px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                        <?php foreach ($data as $item) { ?>      
                            <tr class="odd gradeX">
                            <td><?php echo $item->name; ?></td>
                            <td><?php echo $item->country; ?></td>          
                            <td><?php echo $item->email; ?></td>          
                            <td><?php echo $item->mobile_no; ?></td>          
                            <td><?php echo $item->dob; ?></td>          
                            <td>
                            <form method="DELETE" action="<?php echo base_url('CustomerInfo/delete/'.$item->id);?>">
                            <a class="btn btn-info" href="<?php echo base_url('CustomerInfo/'.$item->id) ?>"> show</a>
                            <a class="btn btn-primary" href="<?php echo base_url('CustomerInfo/edit/'.$item->id) ?>"> Edit</a>
                            <button type="submit" class="btn btn-danger"> Delete</button>
                            </form>
                            </td>     
                            </tr>
                        <?php } ?>
                                  
                                    
                                </tbody>
                            </table>
                            
                           
                        </div>
                       
                    </div>
                    
                </div>
                
            </div>
           
           
         
            
        </div>
        

    </div>
   

    
