<?php 
$this->load->view('header');
$this->load->view('sidebar');
?>


        <!-- Main content -->
        <section class="content">
        <div class="row">
        <div class="col-md-12">
           
           
            <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">Customer Details</h3>
                </div><!-- /.box-header -->
                
                <div class="box-body">
                 <div class="col-md-6">
                  <form role="form">
                    <!-- text input -->
                    <div class="form-group">
                    <label>Customer ID</label>
                    <input type="text" class="form-control" placeholder="Customer ID">
                     <label>First Name</label>
                      <input type="text" class="form-control" placeholder="First Name">
                      <label>Last Name</label>
                      <input type="text" class="form-control" placeholder="Last Name">
                      <label>Status</label>
                      <select class="form-control">
                          <option value="active">Active</option>
                          <option value="cancelled">Cancelled</option>
                          <option value="hold">On Hold</option>
                          <option value="closed">Closed</option>
                          <option value="default">Default</option>
                          <option value="deceased">Deceased</option>
                      </select>
                      <label>Customer Type</label>
                      <select class="form-control">
                          <option value="default">Default</option>
                          <option value="new">New</option>
                          <option value="existing">Existing</option>
                      </select>
                      <label>Email</label>
                      <input type="email" class="form-control" placeholder="Email">
                      </div><!-- / .form-group -->
                      
                    <div class="form-group">
                      <label>Phone Number</label>
                      <input type="number" class="form-control" placeholder="Phone Number">
                      <label>Mobile</label>
                      <input type="number" class="form-control" placeholder="Mobile">
                      <label>Mobile Other</label>
                      <input type="number" class="form-control" placeholder="Mobile Other">
                      </div>                   
                                    
                  
                </div><!-- /.box-body -->
                <div class="col-md-6">
                    <div class="form-group">
                      <label>Address</label>
                      <input type="text" class="form-control" placeholder="Street Address">
                      <input type="text" class="form-control" placeholder="Suburb/Town">
                      <input type="text" class="form-control" placeholder="City">
                      <input type="text" class="form-control" placeholder="Postal Code">
                    </div> <!-- / .form-group -->
                    <div class="form-group">
                      <label>Date of Birth</label>
                      <input type="date" class="form-control" placeholder="DOB">
                      <label>Govt ID Type</label>
                      <input type="number" class="form-control" placeholder="ID Type">
                      <label>ID Number</label>
                      <input type="text" class="form-control" placeholder="ID Number">
                      <label>Date Joined</label>
                      <input type="date" class="form-control" placeholder="Date Joined">
                      <label>Comments</label>
                      <textarea name="comments" class="form-control" placeholder="Enter Comments"></textarea>
                      <hr>
                      <input type="submit" class="btn btn-primary btn-block" value="Create/Update Record">
                      </div>
                
                </form>
                 <!-- / .box -->
            </div> <!-- / .col -->
              </div><!-- /.box -->
            </div><!-- / .col -->
            
            </div> <!-- / .col-12 -->
            </div><!-- / .row -->
            
            
          
        
            

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

<?php $this->load->view('footer'); ?>
