<script type="text/javascript">
function load_data_treatment(id)
{
	if (id=="" || id == 0)
	{
	document.getElementById("table_treatment").innerHTML="";
	return;
	} 
	if (window.XMLHttpRequest)
	{// kode for IE7+, Firefox, Chrome, Opera, Safari
	xmlhttp=new XMLHttpRequest();
	}
	else
	{// kode for IE6, IE5
	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
	if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("table_treatment").innerHTML=xmlhttp.responseText;
		}
	}
	
	xmlhttp.open("GET","../views/treatment/list_treatment_new.php?planting_process_id="+id,true);
	xmlhttp.send();
	
	
	}
	
	function hidden_data_treatment(id)
{
	
	if (id=="" || id == 0)
	{
	document.getElementById("table_treatment").innerHTML="";
	return;
	} 
	if (window.XMLHttpRequest)
	{// kode for IE7+, Firefox, Chrome, Opera, Safari
	xmlhttp=new XMLHttpRequest();
	}
	else
	{// kode for IE6, IE5
	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
	if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("table_treatment").innerHTML=xmlhttp.responseText;
		}
	}
	
	xmlhttp.open("GET","../views/treatment/list_treatment_new.php?planting_process_id="+id,true);
	xmlhttp.send();
	
	
	}
	
function add_data_treatment(id)
{
	if (id=="" || id == 0)
	{
	document.getElementById("table_treatment").innerHTML="";
	return;
	} 
	if (window.XMLHttpRequest)
	{// kode for IE7+, Firefox, Chrome, Opera, Safari
	xmlhttp=new XMLHttpRequest();
	}
	else
	{// kode for IE6, IE5
	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
	if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("table_treatment").innerHTML=xmlhttp.responseText;
		}
	}
	
	xmlhttp.open("GET","../views/treatment/form_add.php?planting_process_id="+id,true);
	xmlhttp.send();
	
	
	}
	

function edit_data_treatment(planting_process_id, id)
{
	
	if (window.XMLHttpRequest)
	{// kode for IE7+, Firefox, Chrome, Opera, Safari
	xmlhttp=new XMLHttpRequest();
	}
	else
	{// kode for IE6, IE5
	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
	if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("table_treatment").innerHTML=xmlhttp.responseText;
		}
	}
	
	xmlhttp.open("GET","../views/treatment/form_edit.php?planting_process_id="+planting_process_id+"&id="+id,true);
	xmlhttp.send();
	
	
	}

	
</script>
                <?php
                if(isset($_GET['did']) && $_GET['did'] == 1){
                ?>
                <section class="content_new">
                   
                <div class="alert alert-info alert-dismissable">
                <i class="fa fa-check"></i>
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <b>Sukses !</b>
               Simpan Berhasil
                </div>
           
                </section>
                <?php
                }else if(isset($_GET['did']) && $_GET['did'] == 2){
                ?>
                <section class="content_new">
                   
                <div class="alert alert-info alert-dismissable">
                <i class="fa fa-check"></i>
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <b>Sukses !</b>
               Edit Berhasil
                </div>
           
                </section>
                <?php
                }else if(isset($_GET['did']) && $_GET['did'] == 3){
                ?>
                <section class="content_new">
                   
                <div class="alert alert-info alert-dismissable">
                <i class="fa fa-check"></i>
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <b>Sukses !</b>
               Delete Berhasil
                </div>
           
                </section>
                <?php
                }
                ?>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-6">
                            
                             <div class="title_page"> <?= $title ?></div>
                            
                            <div class="box">
                              <div class="box-header">
                              <div class="col-md-12">
                              
                             <form action="treatment.php?page=search" method="post" enctype="multipart/form-data" role="form">
                                 <input type="text" required class="form-control" name="i_search" value="" style="margin-bottom:10px; margin-top:10px;"/>
                                 </form>
                                 </div>
                              </div>
                                <div class="box-body2 table-responsive">
                                    <table id="example99" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                            <th width="5%">No</th>
                                            	<th>Tanggal Tanam</th>
                                                <th>Tanah</th>
                                                <th>Petani</th>
                                                <th>Config</th>
                                                  
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                           $no = 1;
                                            while($row = mysql_fetch_array($query)){
                                            ?>
                                            <tr>
                                              <td><?= $no?></td>
                                              <td><?= format_date($row['planting_process_date'])?></td>
                                              <td><?= $row['land_code']." - ".$row['location_name']." (".get_land_area($row['land_id'])." m3)"; ?></td>
                                              <td><?= $row['pemilik_tanah'] ?></td>
                                            
                                              <td style="text-align:center;">

                                                    <a href="#" onclick="load_data_treatment(<?= $row['planting_process_id']?>)" class="btn btn-default" >Treatment</a>
                                                

                                                </td>
                                            </tr>
                                            <?php
											$no++;
                                            }
                                            ?>

                                           
                                          
                                        </tbody>
                                         
                                    </table>

                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                        
                        
                          <div class="col-md-6" id="table_treatment">
                         
                         <?php
                         $planting_process_id = (isset($_GET['planting_process_id'])) ?  $_GET['planting_process_id'] : null;
						 if($planting_process_id){
						 
						 ?>
                         
                                  <div class="title_page"> <?= $planting_process_id ?></div>
                            
                            <div class="box">
                             
                                <div class="box-body2 table-responsive">
                                     <table id="example3" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                            <th width="5%">No</th>
                                            	<th>Tanggal</th>
                                                <th>Tipe Treatment</th>
                                                <th>Keterangan</th>
                                               
                                                <th>Config</th>
                                                  
                                            </tr>
                                        </thead>
                                        <tbody>
                                           

                                               <?php
                                           $no_treatment = 1;
										   $query_treatment = mysql_query("select a.*, b.treatment_type_name from treatments a 
										   								join treatment_types b on b.treatment_type_id = a.treatment_type_id
										   	where planting_process_id = '$planting_process_id' order by treatment_id");
                                            while($row_treatment = mysql_fetch_array($query_treatment)){
                                            ?>
                                            <tr>
                                              <td><?= $no_treatment?></td>
                                              <td><?= format_date($row_treatment['treatment_date'])?></td>
                                              <td><?= $row_treatment['treatment_type_name']?></td>
                                              <td><?= $row_treatment['treatment_description']?></td>
                                              <td style="text-align:center;">

                                                    <a href="#" onClick="edit_data_treatment(<?= $planting_process_id.",". $row_treatment['treatment_id'] ?>)"  class="btn btn-default" ><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" onclick="confirm_delete(<?= $row_treatment['treatment_id']; ?>,'treatment.php?page=delete&planting_process_id=<?= $row_treatment['planting_process_id']?>&id=')" class="btn btn-default" ><i class="fa fa-trash-o"></i></a>

                                                </td>
                                            </tr>
                                            <?php
											$no_treatment++;
                                            }
                                            ?>
                                          
                                        </tbody>
                                          <tfoot>
                                            <tr>
                                                <td colspan="10"><a href="#" class="btn btn-success " onClick="add_data_treatment(<?= $planting_process_id?>)" >Add</a></td>
                                               
                                            </tr>
                                        </tfoot>
                                    </table>

                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            <?php
						 }
							?>
                         
                        </div>
                        
                        
                    </div>

                </section><!-- /.content -->