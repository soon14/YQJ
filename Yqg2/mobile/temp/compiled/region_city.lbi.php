
<script>  
$(function () {
    
    var p = <?php echo $_COOKIE['region_1']; ?>;
    var c = <?php echo $_COOKIE['region_2']; ?>;
    var d = <?php echo $_COOKIE['region_3']; ?>;
    var x = <?php echo $_COOKIE['region_4']; ?>;

	var i = (p<=0) ? 0 : Math.floor($('#treelist>li[value="1"]').find("span[name='<?php echo $_COOKIE['region_1']; ?>']").parent().index()),  
	j = (c<=0) ? 0 : Math.floor($('#treelist>li[value="1"]').eq(i).find('ul li[value="2"]').find("span[name='<?php echo $_COOKIE['region_2']; ?>']").parent().index());  
	hh = (d<=0) ? 0 : Math.floor($('#treelist>li[value="1"]').eq(i).find('ul li[value="2"]').eq(j).find('ul li[value="3"]').find("span[name='<?php echo $_COOKIE['region_3']; ?>']").parent().index());
	mm = (x<=0) ? 0 : Math.floor($('#treelist>li[value="1"]').eq(i).find('ul li[value="2"]').eq(j).find('ul li[value="3"]').eq(hh).find('ul li[value="4"]').find("span[name='<?php echo $_COOKIE['region_4']; ?>']").parent().index());
	var defaultValue1 = '';
	if(i>=0){
	 defaultValue1= [i];
	}
	if(j>=0){
	 defaultValue1= [i,j];
	}
	if(hh>=0){
	 defaultValue1= [i,j,hh];
	}
	if(mm>=0){
	 defaultValue1=[i,j,hh,mm];
	}
		
    $("#treelist").mobiscroll().treelist({  

        theme: "ios",  
        lang: "zh",  
	mode : "scroller",
        display : "bottom",
	placeholder: '<?php echo $this->_var['showname']; ?>',
        defaultValue: defaultValue1,  
      formatResult: function (array) { //返回自定义格式结果	
	var result = '';
        result = $('#treelist>li[value="1"]').eq(array[0]).children('span').text() 
		+ 
		$('#treelist>li[value="1"]').eq(array[0]).find('ul li[value="2"]').eq(array[1]).children('span').text()
		+
		$('#treelist>li[value="1"]').eq(array[0]).find('ul li[value="2"]').eq(array[1]).find('ul li[value="3"]').eq(array[2]).children('span').text()
		 + 
		$('#treelist>li[value="1"]').eq(array[0]).find('ul li[value="2"]').eq(array[1]).find('ul li[value="3"]').eq(array[2]).find('ul li[value="4"]').eq(array[3]).children('span').text();  
	
		var pval = $('#treelist>li[value="1"]').eq(array[0]).children('span').attr('name');
		var cval = $('#treelist>li[value="1"]').eq(array[0]).find('ul li[value="2"]').eq(array[1]).children('span').attr('name');
		var dval = $('#treelist>li[value="1"]').eq(array[0]).find('ul li[value="2"]').eq(array[1]).find('ul li[value="3"]').eq(array[2]).children('span').attr('name');
		var xval = $('#treelist>li[value="1"]').eq(array[0]).find('ul li[value="2"]').eq(array[1]).find('ul li[value="3"]').eq(array[2]).find('ul li[value="4"]').eq(array[3]).children('span').attr('name');

		document.cookie = (typeof(pval) == "undefined") ? "region_1=0" : "region_1="+pval;
		document.cookie = (typeof(cval) == "undefined") ? "region_2=0" : "region_2="+cval;
		document.cookie = (typeof(dval) == "undefined") ? "region_3=0" : "region_3="+dval;
		document.cookie = (typeof(xval) == "undefined") ? "region_4=0" : "region_4="+xval;
		return result;
	},
	onSelect:function(array){
		top.location.reload();
	}  
    });  
})   
</script>  
<?php if ($this->_var['info'] [ 'province' ]): ?>
<ul id="treelist" style="display:none;">
<?php $_from = $this->_var['info']['province']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('pkey', 'pvalue');if (count($_from)):
    foreach ($_from AS $this->_var['pkey'] => $this->_var['pvalue']):
?>
      <li  value="<?php echo $this->_var['pvalue']['region_type']; ?>"><span  name="<?php echo $this->_var['pvalue']['region_id']; ?>" value="<?php echo $this->_var['pvalue']['region_type']; ?>" title="<?php echo $this->_var['pvalue']['region_name']; ?>"><?php echo $this->_var['pvalue']['region_name']; ?></span>
      <?php if ($this->_var['pvalue'] [ 'city' ]): ?>
        <ul>
	<?php $_from = $this->_var['pvalue']['city']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('ckey', 'cvalue');if (count($_from)):
    foreach ($_from AS $this->_var['ckey'] => $this->_var['cvalue']):
?>
          <li value="<?php echo $this->_var['cvalue']['region_type']; ?>"><span  name="<?php echo $this->_var['cvalue']['region_id']; ?>" value="<?php echo $this->_var['cvalue']['region_type']; ?>" title="<?php echo $this->_var['cvalue']['region_name']; ?>"><?php echo $this->_var['cvalue']['region_name']; ?></span>
            <?php if ($this->_var['cvalue'] [ 'district' ]): ?>
	    <ul>
	     <?php $_from = $this->_var['cvalue']['district']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('dkey', 'dvalue');if (count($_from)):
    foreach ($_from AS $this->_var['dkey'] => $this->_var['dvalue']):
?>
              <li value="<?php echo $this->_var['dvalue']['region_type']; ?>"><span name="<?php echo $this->_var['dvalue']['region_id']; ?>" value="<?php echo $this->_var['dvalue']['region_type']; ?>" title="<?php echo $this->_var['dvalue']['region_name']; ?>"><?php echo $this->_var['dvalue']['region_name']; ?></span>
		      <?php if ($this->_var['dvalue'] [ 'xiangcun' ]): ?>
		      <ul>
		      <?php $_from = $this->_var['dvalue']['xiangcun']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('xkey', 'xvalue');if (count($_from)):
    foreach ($_from AS $this->_var['xkey'] => $this->_var['xvalue']):
?>
		      <li value="<?php echo $this->_var['xvalue']['region_type']; ?>"><span  name="<?php echo $this->_var['xvalue']['region_id']; ?>" value="<?php echo $this->_var['xvalue']['region_type']; ?>" title="<?php echo $this->_var['xvalue']['region_name']; ?>"><?php echo $this->_var['xvalue']['region_name']; ?></span></li>
		      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		      </ul>
		      <?php endif; ?>
              </li>
	      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
	    <?php endif; ?>
          </li>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
      <?php endif; ?>
      </li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
<?php endif; ?> 
    <!--
<div style="position:relative;height:25px;line-height:25px; display:">
     <div class="selectcity">
		<div class="province" id="province_box">
		<?php $_from = $this->_var['levels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('did', 'infovalue');if (count($_from)):
    foreach ($_from AS $this->_var['did'] => $this->_var['infovalue']):
?>
			<div id="region_<?php echo $this->_var['did']; ?>" class="province">
			<?php if ($this->_var['levelsinfo'] [ $this->_var['did'] ]): ?>
			<select name="region_<?php echo $this->_var['did']; ?>"  onchange="get_regions(<?php echo $this->_var['did']; ?>, this.value)">
			<option value="0">请选择</option>
				<?php $_from = $this->_var['levelsinfo'][$this->_var['did']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('iid', 'infos');if (count($_from)):
    foreach ($_from AS $this->_var['iid'] => $this->_var['infos']):
?> 
					<option value="<?php echo $this->_var['iid']; ?>" <?php if ($this->_var['divlevels'] [ $this->_var['did'] ] == $this->_var['iid']): ?> selected <?php endif; ?>><?php echo $this->_var['infos']; ?></option>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</select>
			<?php endif; ?>
			</div>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

		</div>
	</div>
</div>



<div style="position:relative;height:25px;line-height:25px;display:none">
     <div class="selectcity">
		<div style="float:left;font-size:12px;font-weight:bold;">
		<?php echo $this->_var['address_title']; ?>
		</div>
		<div class="province" onmouseover="document.getElementById('citybox_childmenu').style.display='block';this.className='province_cur';"  id="province_box">
		<font id="province"><?php echo $this->_var['fullname']; ?></font>
		<input type="hidden" name="store_province_id" id="store_province_id" value="">            
		</div>
	</div>

	 <div class="childmenu" id="citybox_childmenu"  >
	 <div class="citybox_close" onclick="javascript:document.getElementById('citybox_childmenu').style.display='none';document.getElementById('province_box').className='province';"></div>	
	 <div class="cityul">
	 <?php $_from = $this->_var['shownames']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('pid', 'names');if (count($_from)):
    foreach ($_from AS $this->_var['pid'] => $this->_var['names']):
?>
	  <div class=<?php if ($this->_var['pid'] == 1): ?>"licur"<?php else: ?>"li"<?php endif; ?> onclick="javascript:get_regions(<?php echo $this->_var['pid']; ?>, 0)" id="city_li_<?php echo $this->_var['pid']; ?>" style="display:<?php if ($this->_var['names']): ?>block<?php else: ?>none<?php endif; ?>"><?php echo $this->_var['names']; ?><i></i></div>
	 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	  </div>
	  <div style="clear:both;"></div>
	  <?php $_from = $this->_var['divlevels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('did', 'levels');if (count($_from)):
    foreach ($_from AS $this->_var['did'] => $this->_var['levels']):
?>
	  <div class="childli" id="city_box_<?php echo $this->_var['did']; ?>" style="display:<?php if ($this->_var['did'] == 1): ?>block<?php else: ?>none<?php endif; ?>">

		<?php $_from = $this->_var['levelsinfo'][$this->_var['levels']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('iid', 'infos');if (count($_from)):
    foreach ($_from AS $this->_var['iid'] => $this->_var['infos']):
?>  
		   <a href="javascript:void(0);" onclick="get_regions(<?php echo $this->_var['did']; ?>, '<?php echo $this->_var['iid']; ?>');" style="text-decoration:none;"><?php echo $this->_var['infos']; ?></a>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		
	  </div>
	  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	   	   
	</div>
</div>-->
