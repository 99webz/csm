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
                    <label>Contract ID</label>
                    <input name="contractId" type="text" class="form-control" placeholder="Contract ID">
                    <label>Customer Name</label>
                    <input name="customerName" type="text" class="form-control" placeholder="Assigned to Customer">
                     <label>Start Date</label>
                      <input name="startDate" type="date" class="form-control">
                      <label>Payment Day</label>
                      <select name="paymentDay" class="form-control">
                         <option value="monday">Mon N</option>
                         <option value="tuesday">Tue N</option>
                         <option value="wednesday">Wed N</option>
                         <option value="thursday">Thu N</option>
                         <option value="friday">Fri N</option>
                         <option value="other">Other</option>
                      </select>
                      <label>Payment Frequency</label>
                      <select name="frequency" class="form-control">
                          <option value="weekly">Weekly</option>
                          <option value="Fortnightly">Fortnightly</option>
                          <option value="monthly">Monthly</option>
                          <option value="other">Other</option>
                      </select>
                      <label>First Sold By</label>
                      <select class="form-control">
                          <option value="salesRep1">Sales Rep 1</option>
                          <option value="salesRep2">Sales Rep 2</option>
                          <option value="salesRep3">Sales Rep 3</option>
                          <option value="other">Others</option>
                      </select>
                      <label>Bank Name</label>
                      <select name="bankName" class="form-control">
                          <option value="kiwiBank">Kiwi Bank</option>
                          <option value="anzBank">ANZ Bank</option>
                          <option value="bnzBank">BNZ Bank</option>
                          <option value="westpac">Westpac Bank</option>
                          <option value="asbBank">ASB Bank</option>
                          <option value="otherBank">Other Bank</option>
                      </select>
                      <label>Account Number</label>
                      <input type="text" class="form-control" maxlength="16" pattern="[0-9]{16}" name="accountNumber" placeholder="XX-XXXX-XXXXXXX-XXX">
                      </div><!-- / .form-group -->
                      <div class="form-group">
                        <label>Initial Paymnet Amount</label>
                        <div class="input-group">
                              <div class="input-group-addon">$</div>
                              <input name="initialPayment" type="text" class="form-control" placeholder="Amount">
                              <div class="input-group-addon">.00</div>
                        </div>
                        <label>Product Details</label>

                      <input class="form-control" type="text" name="productName" placeholder="Enter The Product Details">
                      <input type="button" class="btn btn-default pull-right" value="Add More" >
                      <br>
                      
                      </div> <!-- form group -->     
                  
                </div><!-- /.box-body -->
                <div class="col-md-6">
                    <div class="form-group">                   
                      <label>Product Price</label>
                        <div class="input-group">
                              <div class="input-group-addon">$</div>
                              <input name="productPrice" type="text" class="form-control" placeholder="Price">
                              <div class="input-group-addon">.00</div>
                        </div>
                        <label>Installment Amount</label>
                        <div class="input-group">
                              <div class="input-group-addon">$</div>
                              <input name="instalment" type="text" class="form-control" placeholder="Installment">
                              <div class="input-group-addon">.00</div>
                        </div>
                      <label>Sold By</label>
                      <select name="soldBy" class="form-control">
                          <option value="salesRep1">Sales Rep 1</option>
                          <option value="salesRep2">Sales Rep 2</option>
                          <option value="salesRep3">Sales Rep 3</option>
                          <option value="other">Others</option>
                      </select>
                    </div> <!-- / .form-group -->
                    <div class="form-group">
                      <label>First Payment Date</label>
                      <input name="firstPaymentDate" type="date" class="form-control">
                      <label>Dishonour Fee</label>
                        <div class="input-group">
                              <div class="input-group-addon">$</div>
                              <input name="dishonourFee" type="text" class="form-control" placeholder="Dishonour Fee if Any">
                              <div class="input-group-addon">.00</div>
                        </div>
                        <label>Cancellation Fee</label>
                        <div class="input-group">
                              <div class="input-group-addon">$</div>
                              <input name="cancellationFee" type="text" class="form-control" placeholder="Cancellation Fee if Any">
                              <div class="input-group-addon">.00</div>
                        </div>
                        <label>Establishment Fee</label>
                        <div class="input-group">
                              <div class="input-group-addon">$</div>
                              <input name="setupFee" type="text" class="form-control" placeholder="Establishment/Setup Fee">
                              <div class="input-group-addon">.00</div>
                        </div>
                        <label>Total Amount Due</label>
                        <div class="input-group">
                              <div class="input-group-addon">$</div>
                              <input name="amountDue" type="text" class="form-control" placeholder="Amount Due">
                              <div class="input-group-addon">.00</div>
                        </div>
                        <label>Banalnce Left</label>
                        <div class="input-group">
                              <div class="input-group-addon">$</div>
                              <input name="balanceLeft" type="text" class="form-control" placeholder="Balance Amount Left">
                              <div class="input-group-addon">.00</div>
                        </div>
                      </div>
                      <input type="submit" class="btn btn-primary btn-block" value="Create Contract">
                
                </form>
                 <!-- / .box -->
            </div> <!-- / .col -->
              </div><!-- /.box -->
            </div><!-- / .col -->
            
            </div> <!-- / .col-12 -->
            </div><!-- / .row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
<?php
$this->load->view('footer');
?>
