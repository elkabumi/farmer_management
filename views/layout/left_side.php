 <aside class="left-side sidebar-offcanvas">                
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="image" style="text-align:center; margin-bottom:10px; margin-top:10px;">
                        	<?php
                             $user_data = get_user_data();
							if($user_data[2]==""){
								$img = "../img/user/default.jpg";
							}else{
								$img = "../img/user/".$user_data[2];
							}
							?>
                            <img src="<?= $img ?>" class="img-circle" alt="User Image" />
                        </div>
                        <div class="info" style="text-align:center;">
                            <p style="color:#a0acbf; ">
                                        <?php
                                       
                                        echo "Welcome, ".$user_data[0];
                                        ?>
                                </p>

                            <a style="color:#a0acbf;  "><?= $user_data[1]?></a>
                        </div>
                    </div>
                   
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                   <?php //if(isset($_SESSION['menu_active'])) { echo $_SESSION['menu_active']; }?>
                    <ul class="sidebar-menu">
                     
                          <li class="treeview <?php if(isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 1){ echo "active"; }?>">
                            <a href="#">
                                <i class="fa fa-list-alt"></i>
                                <span>Master </span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
          
                                <li><a href="question.php?page=list"><i class="fa fa-chevron-circle-right"></i>Bibit</a></li>
                                <li><a href="question_pma.php?page=list"><i class="fa fa-chevron-circle-right"></i>Varietas</a></li>
                                
                                <li><a href="question_pma.php?page=list"><i class="fa fa-chevron-circle-right"></i>Model Jarak Tanam</a></li>
                                <li><a href="question_pma.php?page=list"><i class="fa fa-chevron-circle-right"></i>Type Treatment</a></li>
                                
                               
                             	
                            </ul>
                  </li>
                  
                    <li <?php if(isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 2){ echo "class='active'"; } ?>>
                            <a href="participant.php">
                                <i class="fa fa-briefcase"></i>
                                <span>Petani</span>
                               
                            </a>
                            
                  </li>
                      <li <?php if(isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 2){ echo "class='active'"; } ?>>
                            <a href="participant_pma.php">
                                <i class="fa fa-briefcase"></i>
                                <span>Tanah</span>

                               
                            </a>
                            
                  </li>
                
                        <li <?php if(isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 2){ echo "class='active'"; } ?>>
                            <a href="kuisioner.php">
                                <i class="fa fa-briefcase"></i>
                                <span>Hamparan Petani</span>
                               
                            </a>
                            
                  </li>
                  
                  
                        <li <?php if(isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 3){ echo "class='active'"; } ?>>
                            <a href="kuisioner_pma.php">
                                <i class="fa fa-briefcase"></i>
                                <span>Proses Tanam</span>
                               
                            </a>
                            
                  </li>
                 
                     <li <?php if(isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 3){ echo "class='active'"; } ?>>
                            <a href="kuisioner_pma.php">
                                <i class="fa fa-briefcase"></i>
                                <span>Pencarian</span>
                               
                            </a>
                            
                  </li>
                  
                        
                    
                 
                  
                  <li <?php if(isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 6){ echo "class='active'"; } ?>>
                            <a href="user.php">
                                <i class="fa fa-user"></i>
                                <span>User</span>
                               
                            </a>
                            
                  </li>
                 
              
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>