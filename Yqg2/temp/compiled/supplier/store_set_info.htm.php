<!-- $Id: brand_info.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<?php echo $this->fetch('pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/region.js')); ?>
<div class="main-div">
<form method="post" action="store_manage.php" name="theForm"  onsubmit="return validate()">
<table cellspacing="1" cellpadding="3" width="100%">
  <tr>
    <td class="label"><?php echo $this->_var['lang']['store_jwd']; ?></td>
    <td><input type="text" name="latlog" maxlength="60" value="<?php echo $this->_var['store']['latlog']; ?>" /><?php echo $this->_var['lang']['require_field']; ?></td>
  </tr>
  <tr>
    <td class="label"><?php echo $this->_var['lang']['sub_address']; ?></td>
    <td>
	<select name="province" id="selProvinces" onchange="region.changed(this, 2, 'selCities')">
     <option value=''><?php echo $this->_var['lang']['select_please']; ?></option>
     <?php $_from = $this->_var['provinces']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'region');if (count($_from)):
    foreach ($_from AS $this->_var['region']):
?>
      <option value="<?php echo $this->_var['region']['region_id']; ?>" <?php if ($this->_var['region']['region_id'] == $this->_var['store']['province']): ?>selected<?php endif; ?>><?php echo $this->_var['region']['region_name']; ?></option>
     <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </select>
	<select name="city" id="selCities" onchange="region.changed(this, 3, 'selDistricts')">
    <option value=''><?php echo $this->_var['lang']['select_please']; ?></option>
     <?php $_from = $this->_var['cities']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'region');if (count($_from)):
    foreach ($_from AS $this->_var['region']):
?>
     <option value="<?php echo $this->_var['region']['region_id']; ?>" <?php if ($this->_var['region']['region_id'] == $this->_var['store']['city']): ?>selected<?php endif; ?>><?php echo $this->_var['region']['region_name']; ?></option>
     <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
     </select>
	 <select name="district" id="selDistricts">
          <option value=""><?php echo $this->_var['lang']['select_please']; ?></option>
			 <?php $_from = $this->_var['district']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'region');if (count($_from)):
    foreach ($_from AS $this->_var['region']):
?>
			<option value="<?php echo $this->_var['region']['region_id']; ?>" <?php if ($this->_var['region']['region_id'] == $this->_var['store']['district']): ?>selected<?php endif; ?>><?php echo $this->_var['region']['region_name']; ?></option>
			 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </select>
	</td>
  </tr>


  <tr>
    <td colspan="2" align="center"><br />
      <input type="submit" class="button" value="<?php echo $this->_var['lang']['button_submit']; ?>" />
      <input type="reset" class="button" value="<?php echo $this->_var['lang']['button_reset']; ?>" />
      <input type="hidden" name="act" value="<?php echo $this->_var['form_action']; ?>" />
      <input type="hidden" name="store_id" value="<?php echo $this->_var['store']['store_id']; ?>" />
    </td>
  </tr>
</table>
</form>
</div>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,validator.js')); ?>

<script language="JavaScript">
<!--
region.isAdmin = true;
onload = function()
{
    // 开始检查订单
    startCheckOrder();
}
/**
 * 检查表单输入的数据
 */
function validate()
{
    validator = new Validator("theForm");
    validator.required("latlog",  no_jwd);
	validator.required("province",  no_province);
	validator.required("city",  no_city);
	validator.required("district",  '没有选择区（县）');
	
    return validator.passed();
}

//-->
</script>

<?php echo $this->fetch('pagefooter.htm'); ?>