<?php
$this->load->view('header');
$this->load->view('sidebar');
?>
        <!-- Main content -->
        <section class="content">
        <div class="row">    
        <div class="col-md-9">
                <div class="box box-success">
                    <div class="box-header">
                    <h3 class="box-title">Batch Upload Transactions</h3>
                    <form action="">
                    <label>Upload CSV File</label>
                    <input type="file">
                    <br>
                    <input type="submit" value="Upload & Process" class="btn btn-default btn-block">
                    
                    </form>
                    </div>
                </div>
            </div><!-- /.col --> 
            </div><!-- ./row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
<?php $this->load->view('footer');
 ?>      
