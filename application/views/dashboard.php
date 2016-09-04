<?php
$this->load->view('header');
$this->load->view('sidebar');
?>
        <!-- Main content -->
        <section class="content">

          <div class="row">
            <div class="col-lg-3 col-xs-6">
            <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>500</h3>
                  <p>Number of Active Customers</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">
                  View All CUstomers <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div> 
              
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>$5000<sup style="font-size: 20px"></sup></h3>
                  <p>Total Expected Amount</p>
                </div>
                <div class="icon">
                  <i class="ion ion-cash"></i>
                </div>
                <a href="#" class="small-box-footer">
                  View All Contracts <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>65</h3>
                  <p>Deliveries Pending</p>
                </div>
                <div class="icon">
                  <i class="ion ion-cube"></i>
                </div>
                <a href="#" class="small-box-footer">
                  View Pending Deliveries <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->  
            
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-blue">
                <div class="inner">
                  <h3>100</h3>
                  <p>Sales This Week</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-cart"></i>
                </div>
                <a href="#" class="small-box-footer">
                  View All Sales <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
        <div class="row">    
        <div class="col-md-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Latest Customers</h3>
                  <div class="box-tools">
                    <button class="btn btn-block btn-primary">View All Customers</button>   
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>Customer ID</th>
                      <th>Name</th>
                      <th>Contact No.</th>
                      <th>Status</th>
                    </tr>
                    <tr>
                      <td><a href="#">100001</a></td>
                      <td>John Smith</td>
                      <td>027 123 4567</td>
                      <td><span>On Hold</span></td>
                    </tr>
                    <tr>
                      <td><a href="#">100005</a></td>
                      <td>Chennel Martini</td>
                      <td>027 123 4567</td>
                      <td><span>Active</span></td>
                    </tr>
                      <tr>
                      <td><a href="#">100009</a></td>
                      <td>Ruben Knights</td>
                      <td>024 123 4567</td>
                      <td><span>Active</span></td>
                    </tr>
                      <tr>
                      <td><a href="#">100020</a></td>
                      <td>Cherry Hill</td>
                      <td>027 123 5484</td>
                      <td><span>Active</span></td>
                    </tr>
                      <tr>
                      <td><a href="#">100002</a></td>
                      <td>Jamie Russel</td>
                      <td>020 584 87452</td>
                      <td><span>Cancelled</span></td>
                    </tr>
                      <tr>
                      <td><a href="#">100954</a></td>
                      <td>Katherin Olesen</td>
                      <td>022 5548 8484</td>
                      <td><span>Oh Hold</span></td>
                    </tr>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col --> 
            </div><!-- ./row -->
            <div class="row">    
        <div class="col-md-9">
		<!-- todo list box -->
		<div class="box box-primary">
                <div class="box-header">
                  <i class="ion ion-clipboard"></i>
                  <h3 class="box-title">To Do List</h3>
                  <div class="box-tools pull-right">
                    <ul class="pagination pagination-sm inline">
                      <li><a href="#">&laquo;</a></li>
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">&raquo;</a></li>
                    </ul>
                  </div>
                </div><!-- /.box-header -->
               <div class="box-body">
                  <ul class="todo-list">
                    <li>
                      <!-- drag handle -->
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                      <!-- checkbox -->
                      <input type="checkbox" value="" name="">
                      <!-- todo text -->
                      <span class="text">Mark's delivery is due tomorrow</span>
                      
                      <!-- General tools such as edit or delete-->
                      <div class="tools">
                        <i class="fa fa-edit"></i>
                        <i class="fa fa-trash-o"></i>
                      </div>
                    </li>
                    <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                      <input type="checkbox" value="" name="">
                      <span class="text">Put jacob's payment in hold for this week</span>
                      <div class="tools">
                        <i class="fa fa-edit"></i>
                        <i class="fa fa-trash-o"></i>
                      </div>
                    </li>
                    <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                      <input type="checkbox" value="" name="">
                      <span class="text">Delivery tracking not available for CX141100</span>
                      <div class="tools">
                        <i class="fa fa-edit"></i>
                        <i class="fa fa-trash-o"></i>
                      </div>
                    </li>
                    <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                      <input type="checkbox" value="" name="">
                      <span class="text">Casey want to cancel the contract, less than 7 days</span>
                      <div class="tools">
                        <i class="fa fa-edit"></i>
                        <i class="fa fa-trash-o"></i>
                      </div>
                    </li>
                    <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                      <input type="checkbox" value="" name="">
                      <span class="text">Payment dishonoured by codey for 27/7/15, call him tomorrow</span>
                      <div class="tools">
                        <i class="fa fa-edit"></i>
                        <i class="fa fa-trash-o"></i>
                      </div>
                    </li>
                    <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                      <input type="checkbox" value="" name="">
                      <span class="text">DD not loaded for McCartney</span>
                      <div class="tools">
                        <i class="fa fa-edit"></i>
                        <i class="fa fa-trash-o"></i>
                      </div>
                    </li>
                  </ul>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix no-border">
				<textarea class="form-control" placeholder="Type your new todo note here......"></textarea>
				<br>
                  <button class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add New Note</button>
                </div>
              </div><!-- /.box -->
            </div><!-- /.col --> 
            </div><!-- ./row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php $this->load->view('footer'); ?>

      