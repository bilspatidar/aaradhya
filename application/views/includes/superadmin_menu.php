<?php 
 $users_id = getUser('id');
 $UserDetails = $this->Internal_model->getUserDetails($users_id) ;?>

<div id="left-sidebar" class="sidebar">
        <div class="navbar-brand">
            <a href="#"><img src="<?php echo base_url(); ?>assets/assets/images/icon.svg" alt="Osam Logo" class="img-fluid logo"><span>Osam</span></a>
            <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i class="lnr lnr-menu fa fa-chevron-circle-left"></i></button>
        </div>
        <div class="sidebar-scroll">
            <div class="user-account">

                <div class="user_div">
                    <img src="<?php echo $UserDetails[0]->profile_pic;?>" class="user-photo" alt="User Profile Picture">
                </div>
                <div class="dropdown">
                    <span>Welcome,</span>
                    <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong><?php echo $UserDetails[0]->name;?></strong></a>
                    <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">
                        <li><a href="<?php echo base_url();?>admin/master/my_profile"><i class="icon-user"></i>My Profile</a></li>
                        <!-- <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li> -->
                        <li><a href="<?php echo base_url();?>admin/master/setting"><i class="icon-settings"></i><?php echo $this->lang->line('change_password') ?: 'Change Password';?></a></li>
                       
                        <li><a href="<?php echo base_url();?>admin/admin/logout"><i class="icon-power"></i>Logout</a></li>
                    </ul>
                </div>
                <a href="<?php echo base_url();?>admin/master/add_user" class="btn btn-sm btn-block btn-primary btn-round mt-3" title=""><i class="icon-plus mr-1"></i> Create New</a>
            </div>  
            <nav id="left-sidebar-nav" class="sidebar-nav">
                <ul id="main-menu" class="metismenu">
                    <li class="header">Main</li>
                    <li class="active">
                        <a href="<?php echo base_url();?>admin/index" class="has-arrow"><i class="icon-speedometer"></i><span>Dashboard</span></a>
                        
                    </li>
                    <li>
                        <a href="#uiElements" class="has-arrow"><i class="icon-diamond"></i><span><?php echo $this->lang->line('master_setting');?></span></a>
                        <ul>
                          
                        <li>
                        <a href="<?php echo base_url();?>admin/master/common_setting" class=""></i><span><?php echo $this->lang->line('common_setting');?></span></a>
                      
                       </li>
                       <li>
                        <a href="<?php echo base_url();?>admin/master/payment_setting" class=""></i><span><?php echo $this->lang->line('payment_setting');?></span></a>
                      
                       </li>
                       <li>
                        <a href="<?php echo base_url();?>admin/master/configuration_setting" class=""></i><span><?php echo $this->lang->line('configuration_setting');?></span></a>
                      
                       </li>
                       
                        </ul>
                    </li>
                    <li>
                        <a href="#uiElements" class="has-arrow"><i class="icon-diamond"></i><span><?php echo $this->lang->line('manage_branch') ?: 'Manage Branch';?></span></a>
                        <ul>
                          
                        <li>
                        <a href="<?php echo base_url();?>admin/master/branch_list" class=""></i><span><?php echo $this->lang->line('branch_list');?></span></a>
                      
                       </li>
                      
                        </ul>
                    </li>
                    
                    <li>
                        <a href="#uiElements" class="has-arrow"><i class="icon-diamond"></i><span><?php echo $this->lang->line('manage_users') ?: 'Manage Users';?></span></a>
                        <ul>
                          
                        <li>
                        <a href="<?php echo base_url();?>admin/master/add_user" class=""></i><span><?php echo $this->lang->line('regular_user');?></span></a>
                      
                       </li>
                       <?php $ur = $this->Common->getUserRole();  foreach($ur as $urres){ ?>
                    <li>
                    <a href="<?php echo base_url();?>admin/master/users/<?php echo $urres->slug; ?>" class=""><span><?php echo $this->lang->line($urres->name) ?: $urres->name;?></span></a>
                     
                    </li>
                <?php } ?>
                        </ul>
                    </li>
                    
                    
                    <li>
                        <a href="#uiElements" class="has-arrow"><i class="icon-diamond"></i><span><?php echo $this->lang->line('manage_product');?></span></a>
                        <ul>
                          
                        <li>
                        <a href="<?php echo base_url();?>admin/master/categories" class=""><span><?php echo $this->lang->line('categories');?></span></a>
                      
                       </li>
                       <li>
                        <a href="<?php echo base_url();?>admin/master/products" class=""></i><span><?php echo $this->lang->line('products');?></span></a>
                      
                       </li>
                        </ul>
                    </li>

                    <li>
                        <a href="<?php echo base_url();?>admin/master/manage_rate" class=""><i class=" icon-cloud-upload"></i><span><?php echo $this->lang->line('manage_rate');?></span></a>
                    </li>
                    <li>
                        <a href="#uiElements" class="has-arrow"><i class="icon-diamond"></i><span><?php echo $this->lang->line('manage_stock');?></span></a>
                        <ul>
                          
                        <li>
                        <a href="<?php echo base_url();?>admin/master/transfer_stock" class=""><span><?php echo $this->lang->line('transfer_stock');?></span></a>
                      
                       </li>
                       <li>
                        <a href="<?php echo base_url();?>admin/master/return_stock" class=""></i><span><?php echo $this->lang->line('return_stock');?></span></a>
                      
                       </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#uiElements" class="has-arrow"><i class="icon-diamond"></i><span><?php echo $this->lang->line('manage_payment');?></span></a>
                        <ul>
                          
                        <li>
                        <a href="<?php echo base_url();?>admin/master/transfer_stock" class=""><span><?php echo $this->lang->line('online_payment');?></span></a>
                      
                       </li>
                       <li>
                        <a href="<?php echo base_url();?>admin/master/return_stock" class=""></i><span><?php echo $this->lang->line('offline_payment');?></span></a>
                      
                       </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#uiElements" class="has-arrow"><i class="icon-diamond"></i><span><?php echo $this->lang->line('reports');?></span></a>
                        <ul>
                          
                        <li>
                        <a href="<?php echo base_url();?>admin/master/transfer_stock" class=""><span><?php echo $this->lang->line('branch_report');?></span></a>
                      
                       </li>
                       <li>
                        <a href="<?php echo base_url();?>admin/master/return_stock" class=""></i><span><?php echo $this->lang->line('stock_report');?></span></a>
                      
                       </li>
                       <li>
                        <a href="<?php echo base_url();?>admin/master/transfer_stock" class=""><span><?php echo $this->lang->line('member_report');?></span></a>
                      
                       </li>
                       <li>
                        <a href="<?php echo base_url();?>admin/master/return_stock" class=""></i><span><?php echo $this->lang->line('sale_report');?></span></a>
                      
                       </li>
                       <li>
                        <a href="<?php echo base_url();?>admin/master/return_stock" class=""></i><span><?php echo $this->lang->line('emi_report');?></span></a>
                      
                       </li>
                        </ul>
                    </li>
        <!-- branchadminfild -->
        <li>
                        <a href="#uiElements" class="has-arrow"><i class="icon-diamond"></i><span><?php echo $this->lang->line('manage_member');?></span></a>
                        <ul>
                          
                        <li>
                        <a href="<?php echo base_url();?>admin/master/add_member" class=""><span><?php echo $this->lang->line('add_member');?></span></a>
                      
                       </li>
                       
                        </ul>
                    </li>
                    <li>
                        <a href="#uiElements" class="has-arrow"><i class="icon-diamond"></i><span><?php echo $this->lang->line('manage_group');?></span></a>
                        <ul>
                          
                        <li>
                        <a href="<?php echo base_url();?>admin/master/add_group" class=""><span><?php echo $this->lang->line('add_group');?></span></a>
                      
                       </li>
                       
                        </ul>
                    </li>
                </ul>
            </nav>     
        </div>
    </div>