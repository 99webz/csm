<?php
$this->load->view('header');
$this->load->view('sidebar');
?>
        <!-- Main content -->
        <section class="content">
        <div class="row">    
        <div class="col-md-6">
                <div class="box box-success">
                    <div class="box-header">
                    <i class="fa fa-money"></i>
                    <h3 class="box-title">Add New Payment</h3>
                    <form action="" autocomplete="on">
                    <br>
                    <label>Customer ID</label>
                    <input type="text" class="form-control" placeholder="Customer ID" >
                    <label>Customer Name</label> 
                    <input type="text" class="form-control" placeholder="Customer Name">
                    <label>Contract ID</label>
                    <input type="text" class="form-control" placeholder="Contract ID" > 
                    <label>Payment Date</label>
                    <input type="date" class="form-control">
                    <label>Transaction Type</label>
                    <select  name="transactionType" class="form-control">
                        <option value="credit">Credit</option>
                        <option value="dishonour">Dishonour</option>
                        <option value="refund">Refund</option>
                    </select>
                    <label>Dishonour Code(if Any)</label>
                    <select  name="transactionType" class="form-control">
                        <option value="u">U</option>
                        <option value="x">X</option>
                        <option value="h">H</option>
                        <option value="c">C</option>
                        <option value="l">L</option>
                    </select>
                    <label>Payment Amount</label> 
                    <div class="input-group">
                      <div class="input-group-addon">$</div>
                      <input name="paymentAmount" type="text" class="form-control" placeholder="Amount">
                      <div class="input-group-addon">.00</div>
                    </div>  
                    <br>
                    <input type="submit" class="btn btn-primary" value="Add Transaction">        
                    </form>
                    </div>
                </div>
            </div><!-- /.col --> 
            </div><!-- ./row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
<?php $this->load->view('footer'); ?>