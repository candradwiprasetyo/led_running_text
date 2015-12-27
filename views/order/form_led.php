<?php

if(!$_SESSION['login']){
    header("location: ../login.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gate Teluk Lamong System</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="../css/ionicons.min.css" rAWel="stylesheet" type="text/css" />
        <!-- DATA TABLES -->
        <link href="../css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="../css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <!-- Popup Modal -->
        <link href="../css/popModal.css" type="text/css" rel="stylesheet" >
        <!-- Preview -->
        <link href="../css/preview.css" type="text/css" rel="stylesheet" >
         <!-- iCheck for checkboxes and radio inputs -->
        <link href="../css/iCheck/all.css" rel="stylesheet" type="text/css" />
         <!-- daterange picker -->
        <link href="../css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- Bootstrap time Picker -->
        <link href="../css/timepicker/bootstrap-timepicker.min.css" rel="stylesheet"/>
        <!-- datepicker -->
       <link href="../css/datepicker/datepicker.css" rel="stylesheet">
       <!-- Bootstrap Color Picker -->
        <link href="../css/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet"/>
       
       <!-- lookup -->
       <link rel="stylesheet" type="text/css" href="../css/lookup/bootstrap-select.css">
       <!-- Button -->
	   <link rel="stylesheet" type="text/css" href="../css/button/component.css" />
       <!-- tooptip meja -->
       <link rel="stylesheet" type="text/css" href="../css/tooltip/tooltip-classic.css" />
      
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        
        <!-- footable 
           <link href="../css/footable/footable.core.css?v=2-0-1" rel="stylesheet" type="text/css"/>
            <link href="../css/footable/footable.standalone.css" rel="stylesheet" type="text/css"/>
           
           
            <script src="../js/footable/footable.js?v=2-0-1" type="text/javascript"></script>
            <script src="../js/footable/footable.sort.js?v=2-0-1" type="text/javascript"></script>
            <script src="../js/footable/footable.filter.js?v=2-0-1" type="text/javascript"></script>
            <script src="../js/footable/footable.paginate.js?v=2-0-1" type="text/javascript"></script>
            <script src="../js/footable/bootstrap-tab.js" type="text/javascript"></script>
         -->

        <!-- jQuery 2.0.2 -->
       <script src="../js/jquery.js"></script>
        <script src="../js/function.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <!-- DATA TABES SCRIPT -->
        <script src="../js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="../js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
       	<!-- date-range-picker -->
        <script src="../js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- InputMask -->
        <script src="../js/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
        <script src="../js/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
        <script src="../js/plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
        <!-- pop Modal-->
        <script src="../js/popup/popModal.js"></script>
        <!-- bootstrap time picker -->
        <script src="../js/plugins/timepicker/bootstrap-timepicker.min.js" type="text/javascript"></script>
        <!-- Datepicker -->
        <script src="../js/plugins/datepicker/bootstrap-datepicker.js"></script>
		<!-- select -->
		<script type="text/javascript" src="../js/lookup/bootstrap-select.js"></script>
        <!-- AdminLTE App -->
        <script src="../js/AdminLTE/app.js" type="text/javascript"></script>
          <!-- bootstrap color picker -->
        <script src="../js/plugins/colorpicker/bootstrap-colorpicker.min.js" type="text/javascript"></script>
        <!-- validasi -->
        <script src="../js/plugins/validate/jquery.validate.js" type="text/javascript"></script>
        <!-- button -->
        <script src="../js/button/modernizr.custom.js"></script>
		<script src="../js/button/classie.js"></script>
        <!-- find scroll -->
		
       
    </head>
    <body class="skin-blue">
       
       <!-- Content Header (Page header) -->
        

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                      
                        <!-- right column -->
                        <div class="col-md-8 col-md-offset-2">
                            <!-- general form elements disabled -->

                          
                          <div class="title_page">Process Gateway</div>

                             <form action="<?= $action?>" method="post" enctype="multipart/form-data" role="form">

                            <div class="box box-cokelat">
                                
                               
                                <div class="box-body">
                                    
                                    
                                        <div class="col-md-12">

                                            <script type="text/javascript">
                                            
                                            var vInputString = "0000000020C90037:TEMP:data";
                                            var vArray = vInputString.split(":");
                                            var vRes = vArray[0] + ":" + vArray[2];

                                            </script>
                                        
                                        <div class="form-group">
                                            <label>Gateway Name</label>
                                            <input readonly type="text" name="i_name" class="form-control"  value="<?= $row['table_name'] ?>"/>
                                        </div>
                                      
                                       
            
                                          <div class="form-group">
                                            <label>Gate Way IP Address</label>
                                            <input readonly type="text" name="i_ip" class="form-control"  value="<?= $row['table_ip'] ?>"/>
                                        </div>

                                         <div class="form-group">
                                            <label>Format Type</label>
                                          
                                            <select name="i_type" id="i_type" class="form-control" onchange="get_type(this.value)">
                                                <option value="1" <?php if($row['type'] == 1){ echo "selected"; } ?>>Format 1</option>
                                                <option value="2" <?php if($row['type'] == 2){ echo "selected"; } ?>>Format Manual</option>
                                            </select>
                                                
                                        
                                        </div>

                                         <div id="format1_frame" <?php if($row['type']==2){ ?> style="display:none;"<?php } ?>>
                                            <label>Gate Way Value</label>
                                         <div class="form-group">
                                            
                                           <div class="row" style="margin-left:-15px; margin-right:-15px;">
                                            <div class="col-md-4">
                                                    <input type="text" name="i_value1" class="form-control led_value"  value="<?= $row['value1'] ?>"/>
                                            </div>
                                             <div class="col-md-4">
                                                    <select name="i_value2" id="i_value2" class="form-control led_value" >
                                                            
                                                            <?php
                                                            $query_value = mysql_query("select * from master_values order by value_id");
                                                            while($row_value = mysql_fetch_array($query_value)){  
                                                            ?>

                                                            <option value="<?= $row_value['value_id']?>" <?php if($row['value2'] == $row_value['value_id']){ echo "selected"; } ?>><?= $row_value['value_name']?></option>

                                                            <?php
                                                            }
                                                            ?>
                                                            
                                                        </select>
                                            </div>
                                             <div class="col-md-4">
                                                   <select name="i_value3" id="i_value3" class="form-control led_value" >
                                                            
                                                            <?php
                                                            $query_value2 = mysql_query("select * from master_values order by value_id");
                                                            while($row_value2 = mysql_fetch_array($query_value2)){  
                                                            ?>

                                                            <option value="<?= $row_value2['value_id']?>" <?php if($row['value3'] == $row_value2['value_id']){ echo "selected"; } ?>><?= $row_value2['value_name']?></option>

                                                            <?php
                                                            }
                                                            ?>
                                                            
                                                        </select>
                                            </div>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <div class="row" style="margin-left:-15px; margin-right:-15px;">
                                                <div class="col-md-4">
                                                <label>Colour 1</label>
                                                   <select name="i_colour1" id="i_colour1" class="form-control">
                                                    <option value="1" <?php if($row['colour1'] == 1){ echo "selected"; } ?>>Green</option>
                                                    <option value="2" <?php if($row['colour1'] == 2){ echo "selected"; } ?>>Red</option>
                                                     <option value="3" <?php if($row['colour1'] == 3){ echo "selected"; } ?>>Yellow</option>
                                                </select>
                                                </div>

                                                <div class="col-md-4">
                                                <label>Colour 2</label>
                                                   <select name="i_colour2" id="i_colour2" class="form-control">
                                                    <option value="1" <?php if($row['colour2'] == 1){ echo "selected"; } ?>>Green</option>
                                                    <option value="2" <?php if($row['colour2'] == 2){ echo "selected"; } ?>>Red</option>
                                                     <option value="3" <?php if($row['colour2'] == 3){ echo "selected"; } ?>>Yellow</option>
                                                </select>
                                                </div>

                                                <div class="col-md-4">
                                                <label>Colour 3</label>
                                                   <select name="i_colour3" id="i_colour3" class="form-control">
                                                    <option value="1" <?php if($row['colour3'] == 1){ echo "selected"; } ?>>Green</option>
                                                    <option value="2" <?php if($row['colour3'] == 2){ echo "selected"; } ?>>Red</option>
                                                     <option value="3" <?php if($row['colour3'] == 3){ echo "selected"; } ?>>Yellow</option>
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                        </div>

                                        <div id="format2_frame" <?php if($row['type']==1 || $row['type']==""){ ?> style="display:none;"<?php } ?>>
                                         <div class="form-group">
                                            <label>Gate Way Value</label>
                                           
                                                    <input  type="text" name="i_value_manual" class="form-control led_value"  value="<?= $row['value1'] ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Colour</label>
                                               <select name="i_colour_manual" id="i_colour_manual" class="form-control">
                                                <option value="1" <?php if($row['colour1'] == 1){ echo "selected"; } ?>>Green</option>
                                                <option value="2" <?php if($row['colour1'] == 2){ echo "selected"; } ?>>Red</option>
                                                 <option value="3" <?php if($row['colour1'] == 3){ echo "selected"; } ?>>Yellow</option>
                                            </select>
                                        </div>
                                        </div>

                                     

                                     
                                        
                                        </div>
                                       
                                        <div style="clear:both;"></div>
                                     
                                </div><!-- /.box-body -->
                                
                                  <div class="box-footer">
                                <input class="btn btn-success" type="submit" value="Save"/>
                                <a href="<?= $close_button?>" class="btn btn-success" >Close</a>
                             
                             </div>
                            
                            </div><!-- /.box -->
                       </form>
                        </div><!--/.col (right) -->
                    </div>   <!-- /.row -->
                </section><!-- /.content -->

    </body>
</html>

       

 <!-- page script -->
        <script type="text/javascript">
            $(function() {
                $("#example1").dataTable();
                $('#example2').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
                $("#example3").dataTable();
                $("#example4").dataTable();
                $('#example_simple').dataTable({
                    "bPaginate": false,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": false,
                    "bInfo": false,
                    "bAutoWidth": false
                });
                
                  $('#example_no_order_by').dataTable({            
                    "bSort": false
                });
                
                $('#example99').dataTable({
                   
                    "bFilter": false,
                   
                });
                /*
                $(function() {
                  $('#new_table').footable();
                });
                
                $('.footable').data('limit-navigation', 5);
                $('.footable').trigger('footable_initialized');
                        
                $('#change-page-size').change(function (e) {
                    //  e.preventcokelat();
                        var pageSize = $(this).val();
                        $('.footable').data('page-size', pageSize);
                        $('.footable').trigger('footable_initialized');
                });
                    */
                //Datemask dd/mm/yyyy
                $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
                //Datemask2 mm/dd/yyyy
                $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
                //Money Euro
                $("[data-mask]").inputmask();
                
                //iCheck for checkbox and radio inputs
                $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                    checkboxClass: 'icheckbox_minimal',
                    radioClass: 'iradio_minimal'
                });
                //Red color scheme for iCheck
                $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
                    checkboxClass: 'icheckbox_minimal-red',
                    radioClass: 'iradio_minimal-red'
                });
                //Flat red color scheme for iCheck
                $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
                    checkboxClass: 'icheckbox_flat-red',
                    radioClass: 'iradio_flat-red'
                });
                
                //Date range picker
                $('#reservation').daterangepicker();
                
                //date picker
                $('#date_picker1').datepicker({
                    format: 'dd/mm/yyyy'
                });
                
                $('#date_picker2').datepicker({
                    format: 'dd/mm/yyyy'
                });
                
                $('#date_picker3').datepicker({
                    format: 'dd/mm/yyyy'
                });
                
                //Timepicker
                $(".timepicker").timepicker({
                    showInputs: false
                });
                
                 //Colorpicker
                $(".my-colorpicker1").colorpicker();
                //color picker with addon
                $(".my-colorpicker2").colorpicker();
                
                
                
                
            });
            
            
$.fn.scrollView = function () {
    return this.each(function () {
      $('html, body').animate({
        scrollTop: $(this).offset().top
      }, 1000);
    });
  }


$('#scroll-link').click(function (event) {
  event.preventDefault();
  $('.header').scrollView();
});


$('#i_cari_checkout').change(function (event) {
  event.preventDefault();
  
   var keyword = document.getElementById("i_cari_checkout").value;
   window.find(keyword);
   
   /*
    $.ajax({
            url: 'transaction.php?page=get_menu&keyword='+keyword,
            type: 'POST',
            dataType: 'json',
            data: { keyword : keyword},
            success: function(data) {
                
                var menu_id = data.content['menu_id'];
                alert("test");
                console.log("success");
                
            }
        });
   //$('.header').scrollView();
  */
});

$('#button_search_checkout').change(function (event) {
  event.preventDefault();
  
   var keyword = document.getElementById("i_cari_checkout").value;
   window.find(keyword);
   
   
});

function get_type(id){

    var format1_frame = document.getElementById("format1_frame");
    var format2_frame = document.getElementById("format2_frame");
               
    if(id == 1){
        format1_frame.style.display = 'inline';
        format2_frame.style.display = 'none';
    }else{
        format1_frame.style.display = 'none';
        format2_frame.style.display = 'inline';
    }
}
                          
        </script>