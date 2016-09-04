<?php
$this->load->view('header');
$this->load->view('sidebar');
?>
        <!-- Main content -->
        <section class="content">
        <div class="row">    
        <div class="col-md-4">
                <div class="box box-success">
                    <div class="box-header">
                    <h3 class="box-title">Add/Remove Sales Rep</h3>
                    <hr>
                    <?php echo validation_errors(); ?>
                    <?php echo form_open('formsuccess'); ?>
                    <label>ID</label>
                    <input type="text" name="id" class="form-control"></input>
                    <label>Name of Sales Rep</label>
                    <input type="text" name="rep_name" placeholder="Sales Rep Name" class="form-control">
                    <br>
                    <input type="submit" value="Add" class="btn btn-primary btn-block">
                    </form>
                    </div>
                </div>
            </div><!-- /.col --> 
            </div><!-- ./row -->
            <?php 
                foreach ($results as $row) {
                    echo $row->rep_name. '<br>';
                }
             ?>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
<?php $this->load->view('footer');
 ?>      
