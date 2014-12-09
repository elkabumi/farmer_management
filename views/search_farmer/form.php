<script type="text/javascript">
    function getval(id) {
       alert(id.value);
    }
</script>
<!-- Content Header (Page header) -->      
                 <?php
                if(isset($_GET['did']) && $_GET['did'] == 1){
                ?>
                <section class="content_new">
                   
                <div class="alert alert-info alert-dismissable">
                <i class="fa fa-check"></i>
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <b>Simpan gagal !</b>
               Password dan confirm password tidak sama
                </div>
           
                </section>
                <?php
                }
                ?>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                      
                        <!-- right column -->
                        <div class="col-md-12">
                            <!-- general form elements disabled -->

                          
                            <div class="title_page"> <?= $title ?></div>
                            

                             <form action="<?= $action?>" method="post" enctype="multipart/form-data" role="form">

                            <div class="box box-cokelat">                               
                                <div class="box-body">                      
                                    <div class="col-md-12">
                                        <div class="form-group">
                                         <label>Nama Petani</label>
                                        <select onchange="getval(this);" name="i_farmer_id"  class="selectpicker show-tick form-control" data-live-search="true"><option value="0">-</option>
                                        <?php
                                        $query_farmer = mysql_query("select * from farmers");
                                        while($row_farmer = mysql_fetch_array($query_farmer)){
                                        ?>
                                        <option value="<?= $row_farmer['farmer_id']?>" <?php if($row_farmer['fermer_id'] == $i_farmer_id){ ?> selected="selected"<?php }?>><?= $row_farmer['farmer_name'] ?></option>
                                        <?php
                                        }
                                        ?>
                                        </select>
                                        </div>
                                        <div class="form-group">
                                         <label>Kode Petani</label>
                                        <select name="i_farmer_id"  class="selectpicker show-tick form-control" data-live-search="true"><option value="0">-</option>
                                        <?php
                                        $query_farmer = mysql_query("select * from farmers");
                                        while($row_farmer = mysql_fetch_array($query_farmer)){
                                        ?>
                                        <option value="<?= $row_farmer['farmer_id']?>" <?php if($row_farmer['fermer_id'] == $i_farmer_id){ ?> selected="selected"<?php }?>><?= $row_farmer['farmer_contract_code'] ?></option>
                                        <?php
                                        }
                                        ?>
                                        </select>
                                        </div>
                                        <div class="form-group">
                                         <label>Alamat Petani</label>
                                        <select name="i_farmer_id"  class="selectpicker show-tick form-control" data-live-search="true"><option value="0">-</option>
                                        <?php
                                        $query_farmer = mysql_query("select * from farmers");
                                        while($row_farmer = mysql_fetch_array($query_farmer)){
                                        ?>
                                        <option value="<?= $row_farmer['farmer_id']?>" <?php if($row_farmer['fermer_id'] == $i_farmer_id){ ?> selected="selected"<?php }?>><?= $row_farmer['farmer_address'] ?></option>
                                        <?php
                                        }
                                        ?>
                                        </select>
                                        </div>
                                  	 </div>
                                        <div style="clear:both;"></div>
                                     
                                </div><!-- /.box-body -->
                                
                                <div class="box-footer">
                                <input class="btn btn-success" type="submit" value="Preview"/>
                             
                             </div>
                            
                            </div><!-- /.box -->
                       </form>
                        </div><!--/.col (right) -->
                    </div>   <!-- /.row -->
                </section><!-- /.content -->