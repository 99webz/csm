      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          

          <!-- search form (Optional) -->
          <form action="search" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="query" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li><a href="<?php echo base_url(); ?>index.php/dashboard"><i class="fa fa-line-chart"></i><span>DashBoard</span></a></li>
            <!-- Optionally, you can add icons to the links -->
            
            <li class="treeview">
              <a href="#"><i class="fa fa-users"></i> <span>Customers</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url(); ?>index.php/add_customer">Add New</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/view_customers">View All</a></li>
              </ul>
            </li>
              <li class="treeview">
              <a href="#"><i class="fa fa-file-text-o"></i> <span>Contracts</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url(); ?>index.php/create_contract">Create Contract</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/contracts">All Contracts</a></li>
              </ul>
            </li>
              <li class="treeview">
              <a href="#"><i class="fa fa-money"></i> <span>Transactions</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url(); ?>index.php/new_transaction">Add New Transaction</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/batch_upload">Upload CSV</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/transactions">View All Transactions</a></li>  
              </ul>
            </li>
            </li>
              <li class="treeview">
              <a href="#"><i class="fa fa-file-text"></i> <span>Reports</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url(); ?>index.php/sales">Sales Report</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/delivery">Delivery Reports</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/invoice">Customer Invoices</a></li>  
              </ul>
            </li> 
            <li class="treeview">
              <a href="#"><i class="fa fa-check-square"></i> <span>To DOs</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url(); ?>index.php/new_note">New Note</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/notes">Completed Notes</a></li>
              </ul>
            </li>
            <li><a href="<?php echo base_url(); ?>index.php/admin"><i class="fa fa-cogs"></i><span>Settings</span></a></li>
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>