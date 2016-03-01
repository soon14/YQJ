<!-- $Id: category_info.htm 16752 2009-10-20 09:59:38Z wangleisvn $ -->

<?php echo $this->fetch('pageheader.htm'); ?>

<!-- start add new category form -->

<div class="main-div">

  <form action="category.php" method="post" name="theForm" enctype="multipart/form-data" onsubmit="return validate()">

  <table width="100%" id="general-table">

      <tr>

        <td class="label"><?php echo $this->_var['lang']['cat_name']; ?>:</td>

        <td>

          <input type='text' name='cat_name' maxlength="20" value='<?php echo htmlspecialchars($this->_var['cat_info']['cat_name']); ?>' size='27' readonly="readonly"/> <font color="red">*</font>

        </td>

      </tr>

      <tr>

        <td class="label"><?php echo $this->_var['lang']['parent_id']; ?>:</td>

        <td>

          <select name="parent_id" disabled="disabled">

            <option value="0"><?php echo $this->_var['lang']['cat_top']; ?></option>

            <?php echo $this->_var['cat_select']; ?>

          </select>
		<input type="hidden" name="p_id" value="<?php echo $this->_var['cat_info']['parent_id']; ?>" />
        </td>

      </tr>

      <tr>

        <td class="label"><?php echo $this->_var['lang']['sort_order']; ?>:</td>

        <td>

          <input type="text" name='sort_order' <?php if ($this->_var['cat_info']['sort_order']): ?>value='<?php echo $this->_var['cat_info']['sort_order']; ?>'<?php else: ?> value="50"<?php endif; ?> size="15" />

        </td>

      </tr>
      <!-----从这时开始是新增加的---->
       <tr>
    <td class="label">分类图片</td>
    <td><input type="file" name="type_img" id="thumb" size="45"><?php if ($this->_var['cat_info']['type_img'] != ""): ?><input type="button" value="删除logo" onclick="if (confirm('确认删除分类图标吗?'))location.href='category.php?act=drop_thumb&id=<?php echo $this->_var['cat_info']['cat_id']; ?>'"><?php endif; ?>
    <br />
    <?php if ($this->_var['cat_info']['type_img']): ?>
    <img src="../data/catthumb/<?php echo $this->_var['cat_info']['type_img']; ?>"  width="80"  height="80"/>
    <?php endif; ?>
    </td>
  </tr>
 <!-------------新加加的结束---------------------->
<tr>

        <td class="label"><?php echo $this->_var['lang']['is_show']; ?>:</td>

        <td>

          <input type="radio" name="is_show" value="1" <?php if ($this->_var['cat_info']['is_show'] != 0): ?> checked="true"<?php endif; ?>/> <?php echo $this->_var['lang']['yes']; ?>

          <input type="radio" name="is_show" value="0" <?php if ($this->_var['cat_info']['is_show'] == 0): ?> checked="true"<?php endif; ?> /> <?php echo $this->_var['lang']['no']; ?>

        </td>

      </tr>
      </table>

      <div class="button-div">

        <input type="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" />

        <input type="reset" value="<?php echo $this->_var['lang']['button_reset']; ?>" />

      </div>

    <input type="hidden" name="act" value="<?php echo $this->_var['form_act']; ?>" />

    <input type="hidden" name="old_cat_name" value="<?php echo $this->_var['cat_info']['cat_name']; ?>" />

    <input type="hidden" name="cat_id" value="<?php echo $this->_var['cat_info']['cat_id']; ?>" />

  </form>

</div>

<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,validator.js')); ?>



<script language="JavaScript">

<!--

document.forms['theForm'].elements['cat_name'].focus();

/**

 * 检查表单输入的数据

 */

function validate()

{

  validator = new Validator("theForm");

  validator.required("cat_name",      catname_empty);

  if (parseInt(document.forms['theForm'].elements['grade'].value) >10 || parseInt(document.forms['theForm'].elements['grade'].value) < 0)

  {

    validator.addErrorMsg('<?php echo $this->_var['lang']['grade_error']; ?>');

  }

  return validator.passed();

}

onload = function()

{

  // 开始检查订单

  startCheckOrder();

}



/**

 * 新增一个筛选属性

 */

function addFilterAttr(obj)

{

  var src = obj.parentNode.parentNode;

  var tbl = document.getElementById('tbody-attr');



  var validator  = new Validator('theForm');

  var filterAttr = document.getElementsByName("filter_attr[]");



  if (filterAttr[filterAttr.length-1].selectedIndex == 0)

  {

    validator.addErrorMsg(filter_attr_not_selected);

  }

  

  for (i = 0; i < filterAttr.length; i++)

  {

    for (j = i + 1; j <filterAttr.length; j++)

    {

      if (filterAttr.item(i).value == filterAttr.item(j).value)

      {

        validator.addErrorMsg(filter_attr_not_repeated);

      } 

    } 

  }



  if (!validator.passed())

  {

    return false;

  }



  var row  = tbl.insertRow(tbl.rows.length);

  var cell = row.insertCell(-1);

  cell.innerHTML = src.cells[0].innerHTML.replace(/(.*)(addFilterAttr)(.*)(\[)(\+)/i, "$1removeFilterAttr$3$4-");

  filterAttr[filterAttr.length-1].selectedIndex = 0;

}



/**

 * 删除一个筛选属性

 */

function removeFilterAttr(obj)

{

  var row = rowindex(obj.parentNode.parentNode);

  var tbl = document.getElementById('tbody-attr');



  tbl.deleteRow(row);

}

//-->

</script>



<?php echo $this->fetch('pagefooter.htm'); ?>