<span class="tooltip-text2 scrollpanel no4 content">
 <?php
  $no_item = 1;
  $total_price = 0;
  $query_item = mysql_query("select a.* ,b.tt_name,b.tt_img, c.tb_name
							from tables a
							join table_types b on b.tt_id = a.tt_id
							join table_blocks c on c.tb_id = b.tb_id
							join buildings d on d.building_id = c.building_id
							  where a.table_id = '".$row['table_id']."'");
 $row_item = mysql_fetch_array($query_item);
  ?>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="47%">
    <div class="tooltip_left">
     
	</div>
    </td>
    </tr>
    <tr>
    <td width="53%" valign="top">
    <div class="tooltip_right">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td class="tooltip_item_name">Name </td>
    <td class="tooltip_item_name" align="right">IP Address</td>
  </tr>
  <tr>
    <td class="tooltip_item_name2"><?php echo $row_item['table_name'] ?></td>
    <td class="tooltip_item_name2" align="right"><?php echo $row_item['table_ip'] ?></td>
  </tr>
  
</table>

    </div>
    
    <div class="footer_button">
      <div class="row">
    <div class="col-md-6" style="padding:0px; padding-right:10px;">
    	<a href="order.php?page=form_led&id=<?= $row_item['table_id']?>"><div class="btn_edit_item">Change</div></a>
     </div>
      <div class="col-md-6" style="padding:0px;">
      <a href="order.php?page=form_load&id=<?= $row_item['table_id']?>"><div class="btn_edit_item">Load</div></a>
      </div>
    </div>
    </div>
    
  

    </td>
  </tr>
</table>


</span>
