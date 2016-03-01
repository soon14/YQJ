<form action="supplier_order.php" method="post" name="theForm" onsubmit="return check(<?php echo $this->_var['rebate']['status']; ?>)">
	<table width="100%" cellpadding="3" cellspacing="1">
	  <tr>
	  <td>订单编号</td>
	  <td>下单时间</td>
	  <td>计费时间</td>
	  <td>货款</td>
	  <td>佣金</td>
	  <td>订单状态</td>
	  <td>操作</td>
	  </tr>
	  <?php $_from = $this->_var['order_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('okey', 'order');if (count($_from)):
    foreach ($_from AS $this->_var['okey'] => $this->_var['order']):
?>
	  <tr>
	  <td><?php echo $this->_var['order']['order_sn']; ?></td>
	  <td><?php echo $this->_var['order']['short_order_time']; ?></td>
	  <td>计费时间</td>
	  <td><?php echo $this->_var['order']['total_fee']; ?></td>
	  <td><?php echo $this->_var['order']['formated_rebate_fee']; ?></td>
	  <td><?php echo $this->_var['lang']['os'][$this->_var['order']['order_status']]; ?>,<?php echo $this->_var['lang']['ps'][$this->_var['order']['pay_status']]; ?>,<?php echo $this->_var['lang']['ss'][$this->_var['order']['shipping_status']]; ?></td>
	  <td><a href="order.php?act=info&order_id=<?php echo $this->_var['order']['order_id']; ?>">查看订单</td>
	  </tr>
	  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	  <tr>
		<td align="right" nowrap="true" colspan="7">
		<?php echo $this->fetch('page.htm'); ?>
		</td>
	  </tr>
	</table>
<input name="order_id" type="hidden" value="" />
</form>

<script>
/**
 * 搜索订单
 */
function searchRebateOrder()
{
	listTable.filter['add_time_start'] = Utils.trim(document.forms['searchForm'].elements['add_time_start'].value);
	listTable.filter['add_time_end'] = Utils.trim(document.forms['searchForm'].elements['add_time_end'].value);
	listTable.filter['order_sn'] = Utils.trim(document.forms['searchForm'].elements['order_sn'].value);
	listTable.filter['page'] = 1;
	listTable.loadList();
}
</script>