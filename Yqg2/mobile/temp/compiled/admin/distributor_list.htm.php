<?php if ($this->_var['full_page']): ?>

<!-- $Id: users_list.htm 17053 2015-02-10 06:50:26Z derek $ -->

<?php echo $this->fetch('pageheader.htm'); ?>

<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,listtable.js')); ?>



<div class="form-div">

  <form action="javascript:searchUser()" name="searchForm">

    <img src="images/icon_search.gif" width="26" height="22" border="0" alt="SEARCH" />
	 <a href="distributor.php?act=list"><?php echo $this->_var['lang']['all_user']; ?></a>

  	 <a href="distributor.php?act=list&sign=1"><?php echo $this->_var['lang']['plat_user']; ?></a>

     <a href="distributor.php?act=list&sign=2"><?php echo $this->_var['lang']['other_user']; ?></a>

 	 <a href="distributor.php?act=list&sign=3"><?php echo $this->_var['lang']['not_user']; ?></a>
    &nbsp;<?php echo $this->_var['lang']['label_rank_name']; ?> <select name="user_rank"><option value="0"><?php echo $this->_var['lang']['all_option']; ?></option><?php echo $this->html_options(array('options'=>$this->_var['user_ranks'])); ?></select>

    &nbsp;<?php echo $this->_var['lang']['label_user_name']; ?> &nbsp;<input type="text" name="keyword" size="20" /> <input type="submit" value="<?php echo $this->_var['lang']['button_search']; ?>" class="button"/>

  </form>

</div>



<form method="POST" action="" name="listForm" onsubmit="return confirm_bath()">



<!-- start users list -->

<div class="list-div" id="listDiv">

<?php endif; ?>

<!--用户列表部分-->

<table cellpadding="3" cellspacing="1">

  <tr>

    <th>

      <input onclick='listTable.selectAll(this, "checkboxes")' type="checkbox">

      <a href="javascript:listTable.sort('user_id'); "><?php echo $this->_var['lang']['record_id']; ?></a><?php echo $this->_var['sort_user_id']; ?>

    </th>

    <th><a href="javascript:listTable.sort('user_name'); "><?php echo $this->_var['lang']['username']; ?></a><?php echo $this->_var['sort_user_name']; ?></th>

    <th><?php echo $this->_var['lang']['user_money']; ?></th>

    <th><?php echo $this->_var['lang']['frozen_money']; ?></th>

    <th><?php echo $this->_var['lang']['is_fenxiao']; ?></th>

    <th><?php echo $this->_var['lang']['upper_distrib']; ?></th>
    
    <th><?php echo $this->_var['lang']['total_user']; ?></th>

    <th><?php echo $this->_var['lang']['one_level_user']; ?></th>

    <th><?php echo $this->_var['lang']['two_level_user']; ?></th>

    <th><?php echo $this->_var['lang']['three_level_user']; ?></th>

    <th><?php echo $this->_var['lang']['handler']; ?></th>

  <tr>

  <?php $_from = $this->_var['user_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'user');if (count($_from)):
    foreach ($_from AS $this->_var['user']):
?>

  <tr>

    <td><input type="checkbox" name="checkboxes[]" value="<?php echo $this->_var['user']['user_id']; ?>" notice="<?php if ($this->_var['user']['user_money'] != 0): ?>1<?php else: ?>0<?php endif; ?>"/><?php echo $this->_var['user']['user_id']; ?></td>

    <td align="center"><?php echo htmlspecialchars($this->_var['user']['user_name']); ?></td>

    <td align="center"><?php echo $this->_var['user']['user_money']; ?></td>

    <td align="center"><?php echo $this->_var['user']['frozen_money']; ?></td>

    <td align="center"><img src="images/<?php if ($this->_var['user']['is_fenxiao'] == 1): ?>yes<?php else: ?>no<?php endif; ?>.gif" onclick="listTable.toggle(this, 'is_fenxiao', <?php echo $this->_var['user']['user_id']; ?>)" /></td>

    <td align="center"><?php echo $this->_var['user']['upper_user_name']; ?></td>
	<td align="center"><?php echo $this->_var['user']['total_user']; ?></td>
    <th align="center"><?php if ($this->_var['user']['is_fenxiao'] == 1): ?><?php if ($this->_var['user']['one_level_user_count'] == 0): ?><?php echo $this->_var['user']['one_level_user_count']; ?><?php else: ?><a href="user_grade.php?act=list&user_id=<?php echo $this->_var['user']['user_id']; ?>&level=1"><?php echo $this->_var['user']['one_level_user_count']; ?></a><?php endif; ?><?php else: ?><?php echo $this->_var['lang']['no_distributor']; ?><?php endif; ?></th>

    <th align="center"><?php if ($this->_var['user']['is_fenxiao'] == 1): ?><?php if ($this->_var['user']['two_level_user_count'] == 0): ?><?php echo $this->_var['user']['two_level_user_count']; ?><?php else: ?><a href="user_grade.php?act=list&user_id=<?php echo $this->_var['user']['user_id']; ?>&level=2"><?php echo $this->_var['user']['two_level_user_count']; ?></a><?php endif; ?><?php else: ?><?php echo $this->_var['lang']['no_distributor']; ?><?php endif; ?></th>

    <th align="center"><?php if ($this->_var['user']['is_fenxiao'] == 1): ?><?php if ($this->_var['user']['three_level_user_count'] == 0): ?><?php echo $this->_var['user']['three_level_user_count']; ?><?php else: ?><a href="user_grade.php?act=list&user_id=<?php echo $this->_var['user']['user_id']; ?>&level=3"><?php echo $this->_var['user']['three_level_user_count']; ?></a><?php endif; ?><?php else: ?><?php echo $this->_var['lang']['no_distributor']; ?><?php endif; ?></th>

    <td align="center">

      <a href="distributor.php?act=edit&id=<?php echo $this->_var['user']['user_id']; ?>" title="<?php echo $this->_var['lang']['edit']; ?>"><img src="images/icon_edit.gif" border="0" height="16" width="16" /></a>

    </td>

  </tr>

  <?php endforeach; else: ?>

  <tr><td class="no-records" colspan="12"><?php echo $this->_var['lang']['no_records']; ?></td></tr>

  <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>

  <tr>

      <td colspan="2">

      <input type="hidden" name="act" value="batch_remove" />

      <input type="submit" id="btnSubmit" value="<?php echo $this->_var['lang']['button_remove']; ?>" disabled="true" class="button" /></td>

      <td align="right" nowrap="true" colspan="12">

      <?php echo $this->fetch('page.htm'); ?>

      </td>

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



/**

 * 搜索用户

 */

function searchUser()

{

    listTable.filter['keywords'] = Utils.trim(document.forms['searchForm'].elements['keyword'].value);

    listTable.filter['rank'] = document.forms['searchForm'].elements['user_rank'].value;

    listTable.filter['pay_points_gt'] = Utils.trim(document.forms['searchForm'].elements['pay_points_gt'].value);

    listTable.filter['pay_points_lt'] = Utils.trim(document.forms['searchForm'].elements['pay_points_lt'].value);

    listTable.filter['page'] = 1;

    listTable.loadList();

}



function confirm_bath()

{

  userItems = document.getElementsByName('checkboxes[]');



  cfm = '<?php echo $this->_var['lang']['list_remove_confirm']; ?>';



  for (i=0; userItems[i]; i++)

  {

    if (userItems[i].checked && userItems[i].notice == 1)

    {

      cfm = '<?php echo $this->_var['lang']['list_still_accounts']; ?>' + '<?php echo $this->_var['lang']['list_remove_confirm']; ?>';

      break;

    }

  }



  return confirm(cfm);

}

//-->

</script>



<?php echo $this->fetch('pagefooter.htm'); ?>

<?php endif; ?>