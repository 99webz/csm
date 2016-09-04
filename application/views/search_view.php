<?php
$this->load->view('header');
$this->load->view('sidebar');
?>
        <!-- Main content -->
        <section class="content">
        <div class="row">    
        <div class="col-xs-12.col-md-8">
                <div class="box box-success">
                    <div class="box-header">
                    <div class="box-tools pull-right"></div>
                    <h3 class="box-title">Search</h3>
<form action="" method="GET">
<input type="text" class="form-control" name="query" placeholder="Search">
<br>
<input type="submit" class="btn btn-primary" value="search">
</form>
<table class="table table-condensed table-hover table-striped" id="result_table">
        <tbody>
        <th>First name</th>
        <th>Last name</th>
        <th>Street Address</th>
        <th>City</th>
        <th>Suburb</th>
        <th>Phone</th>
        <th>Status</th>
        <?php
        if(isset ($query)){
            if(count($query)!=0){
                foreach($query as $row){
                echo "<tr><td>". $row->first_name . "</td><td>" .$row->last_name . "</td><td>" . $row->street . "</td><td>" .$row->suburb . "</td><td>" . $row->city . "</td><td>" . $row->phone . "</td><td>" . $row->status . "</td></tr>";
                }
                // echo $this->pagination->create_links();
            }
            else
            {
                echo "No results found";
            }
        }
        else
        {
            echo "Start a search by typing on the Search Bar";
        }
        ?>              
        </tbody>
    </table>
                    
                    </div>
                </div>
            </div><!-- /.col --> 
            </div><!-- ./row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
<?php $this->load->view('footer');
 ?>      