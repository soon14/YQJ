<!-- $Id: order_info.htm 17060 2010-03-25 03:44:42Z liuhui $ -->
<?php if ($this->_var['full_page']): ?>
<?php echo $this->fetch('pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'topbar.js,../js/utils.js,listtable.js,selectzone.js,../js/common.js')); ?>
<script type="text/javascript" src="../js/calendar.php?lang=<?php echo $this->_var['cfg_lang']; ?>"></script>
<link href="../js/calendar/calendar.css" rel="stylesheet" type="text/css" />
<style>
.pay_type{position:relative;}
.pay_type_list{position:absolute;width:100px;height:auto;padding-bottom:50px;background:#eeeeee;border:1px solid #000;left:2px;top:25px;}
</style>


<div class="list-div" style="margin-bottom: 5px">
<table width="100%" cellpadding="3" cellspacing="1">
  <tr>
    <th colspan="4">结算单编号：<?php echo $this->_var['rebate']['sign']; ?>&nbsp;&nbsp;&nbsp;&nbsp;佣金时间范围：<?php echo $this->_var['rebate']['rebate_paytime_start']; ?>----<?php echo $this->_var['rebate']['rebate_paytime_end']; ?></th>
  </tr>
  <?php if ($this->_var['money_info']): ?>
  <tr>
	  <table width='100%' cellpadding="3" cellspacing="1">
	  <?php $_from = $this->_var['money_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'money');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['money']):
?>
	  <tr>
	  <td><?php if ($this->_var['key'] == 'online'): ?>线上货款：<?php else: ?>线下货款(货到付款)：<?php endif; ?></td><td><?php echo $this->_var['money']['allmoney']; ?></td><td>佣金比例：</td><td><?php echo $this->_var['money']['supplier_rebate']; ?>%</td><td>佣金：</td><td><?php echo $this->_var['money']['rebatemoney']; ?></td>
	  </tr>
	  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	  </table>
  </tr>
  <?php endif; ?>
  <tr>
	  <table width="100%" cellpadding="3" cellspacing="1">
	  <tr>
	  <td><a href="supplier_order.php?act=view&rid=<?php echo $this->_var['rebate']['rebate_id']; ?>">妥投订单</a></td><td><a href="supplier_order.php?act=view&rid=<?php echo $this->_var['rebate']['rebate_id']; ?>&otype=2">退货订单</a></td>
	  </tr>
	  </table>
  </tr>
<?php if ($_GET['otype'] == 2): ?>
  <tr>
		<table width="100%" cellpadding="3" cellspacing="1">
		<tr>
		<td>退货总货款：<?php echo $this->_var['back_money']['all']; ?>元（线上货款：<?php echo $this->_var['back_money']['online']; ?>元，货到付款：<?php echo $this->_var['back_money']['onout']; ?>元）， 已完成退货货款：<?php echo $this->_var['back_money']['finish']; ?>元， 申请中退货货款：<?php echo $this->_var['back_money']['nofinish']; ?>元</td>
		</tr>
		</table>
  </tr>
  <?php endif; ?>
  <tr>
    <form action="javascript:searchRebateOrder()" name="searchForm">
	<table width="100%" cellpadding="3" cellspacing="1">
	<tr><td>
		订单编号：<input type='text' name='order_sn' id='order_sn' value=''>
		<img src="images/icon_search.gif" width="26" height="22" border="0" alt="SEARCH" />
		下单时间：
		<input name="add_time_start" type="text" id="add_time_start" size="15"><input name="selbtn1" type="button" id="selbtn1" onclick="return showCalendar('add_time_start', '%Y-%m-%d', false, false, 'selbtn1');" value="选择时间" class="button"/> - <input name="add_time_end" type="text" id="add_time_end" size="15"><input name="selbtn1" type="button" id="selbtn1" onclick="return showCalendar('add_time_end', '%Y-%m-%d', false, false, 'selbtn1');" value="选择时间" class="button"/>
		<input type="submit" value="<?php echo $this->_var['lang']['button_search']; ?>" class="button" />
	</td></tr>
	</table>
	</form>
  </tr>
  <tr>
  <div id='listDiv'>
<?php endif; ?>
	<?php if ($_GET['otype'] == 2): ?>
		<?php echo $this->fetch('rebate_order2.htm'); ?>
	<?php else: ?>
		<?php echo $this->fetch('rebate_order.htm'); ?>
	<?php endif; ?>
<?php if ($this->_var['full_page']): ?>
  </div>
  </tr>
</table>
</div>




<script language="JavaScript">
listTable.recordCount = <?php echo $this->_var['record_count']; ?>;
listTable.pageCount = <?php echo $this->_var['page_count']; ?>;

<?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
onload = function()
{
	// 开始检查订单
	startCheckOrder();
}

function check(status)
{
	if(status <= 0){//冻结状态下结算佣金验证
		var snArray = new Array();
		var eles = document.forms['theForm'].elements;
		for (var i=0; i<eles.length; i++)
		{
			if (eles[i].tagName == 'INPUT' && eles[i].type == 'checkbox' && eles[i].checked && eles[i].value != 'on')
			{
			  snArray.push(eles[i].value);
			}
		}
		if (snArray.length == 0)
		{
			alert('请选择要结算的订单!');
			return false;
		}
		else
		{
			eles['order_id'].value = snArray.toString();
			return true;
		}
	}
	else if(status == 1){//可结算状态下撤销全部佣金
		if(confirm('撤销后，佣金状态由可结算将回归到冻结状态')){
			return true;
		}else{
			return false;
		}
	}
}

</script>


<?php echo $this->fetch('pagefooter.htm'); ?>
<?php endif; ?>