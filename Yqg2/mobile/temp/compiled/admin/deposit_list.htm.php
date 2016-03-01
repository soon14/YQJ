<?php if ($this->_var['full_page']): ?>
<!-- $Id: users_list.htm 17053 2015-02-10 06:50:26Z derek $ -->
<?php echo $this->fetch('pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,listtable.js')); ?>

<form method="POST" action="" name="listForm">

<!-- start users list -->
<div class="list-div" id="listDiv">
<?php endif; ?>
<!--用户列表部分-->
<table cellpadding="3" cellspacing="1">
  <tr>
    <th>编号</th>
    <th>提现申请人</th>
    <th>提现金额</th>
    <th>申请时间</th>
    <th>状态</th>
    <th>操作</th>
  <tr>
  <?php $_from = $this->_var['deposit_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['list']):
?>
  <tr>
    <td align="center"><?php echo $this->_var['list']['id']; ?></td>
    <td align="center"><?php echo $this->_var['list']['user_name']; ?></td>
    <td align="center"><?php echo $this->_var['list']['deposit_money']; ?></td>
    <td align="center"><?php echo $this->_var['list']['add_time']; ?></td>
    <td align="center"><?php if ($this->_var['list']['status'] == 0): ?>未处理<?php elseif ($this->_var['list']['status'] == 1): ?><span style="color:#F00">已处理</span><?php else: ?>未通过<?php endif; ?></td>
    <td align="center">
    <a href="deposit_list.php?act=edit&id=<?php echo $this->_var['list']['id']; ?>" title="<?php echo $this->_var['lang']['edit']; ?>"><img src="images/icon_edit.gif" border="0" height="16" width="16" /></a>
    </td>
  </tr>
  <?php endforeach; else: ?>
  <tr><td class="no-records" colspan="12"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
  <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
  <tr>
      <td colspan="12" align="right"><?php echo $this->fetch('page.htm'); ?></td>
  </tr>
</table>

<?php if ($this->_var['full_page']): ?>
</div>
<!-- end users list -->
</form>
<script type="text/javascript" language="JavaScript">
<!--
listTable.recordCount = <?php echo $this->_var['record_count']; ?>;
listTable.pageCount = <?php echo $this->_var['page_count']; ?>;

<?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>


onload = function()
{
    document.forms['searchForm'].elements['keyword'].focus();
    // 开始检查订单
    startCheckOrder();
}
//-->
</script>

<?php echo $this->fetch('pagefooter.htm'); ?>
<?php endif; ?>