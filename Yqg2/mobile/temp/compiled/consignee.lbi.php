 <div class="address_add_content" >

	<ul>
       <li>
    	<input type="text" placeholder="<?php echo $this->_var['lang']['consignee_name']; ?>*" name="consignee" value="<?php echo htmlspecialchars($this->_var['consignee']['consignee']); ?>" id="consignee_<?php echo $this->_var['sn']; ?>" />
		</li>
         <li>
    	<input type="email" placeholder="<?php echo $this->_var['lang']['email_address']; ?>" name="email" value="<?php if ($this->_var['consignee']['consignee']): ?><?php echo htmlspecialchars($this->_var['consignee']['email']); ?><?php endif; ?>" id="consignee_<?php echo $this->_var['sn']; ?>" id="email_<?php echo $this->_var['sn']; ?>"/></li>     
    		  <?php if ($this->_var['real_goods_count'] > 0): ?>
  
            <li>

          <select name="country" id="selCountries_<?php echo $this->_var['sn']; ?>" onchange="region.changed(this, 1, 'selProvinces_<?php echo $this->_var['sn']; ?>')" class="login_text" style="display:none;">
		<option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['0']; ?></option>
		<?php $_from = $this->_var['country_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'country');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['country']):
        $this->_foreach['name']['iteration']++;
?>
		<option value="<?php echo $this->_var['country']['region_id']; ?>"<?php if (($this->_foreach['name']['iteration'] <= 1)): ?> selected="selected"<?php endif; ?>><?php echo $this->_var['country']['region_name']; ?></option>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</select>
          
          
    			<select name="province" id="selProvinces_<?php echo $this->_var['sn']; ?>" onchange="region.changed(this, 2, 'selCities_<?php echo $this->_var['sn']; ?>')" class="province_select" >
                    	<option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['1']; ?></option>
		<?php $_from = $this->_var['province_list'][$this->_var['sn']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'province');if (count($_from)):
    foreach ($_from AS $this->_var['province']):
?>
		<option value="<?php echo $this->_var['province']['region_id']; ?>"<?php if ($this->_var['consignee']['province'] == $this->_var['province']['region_id']): ?> selected="selected"<?php endif; ?>><?php echo $this->_var['province']['region_name']; ?></option>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            	   		
            	   			</select>

	            <select  name="city" id="selCities_<?php echo $this->_var['sn']; ?>" onchange="region.changed(this, 3, 'selDistricts_<?php echo $this->_var['sn']; ?>')"  >
                      <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['2']; ?></option>
		<?php $_from = $this->_var['city_list'][$this->_var['sn']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'city');if (count($_from)):
    foreach ($_from AS $this->_var['city']):
?>
		<option value="<?php echo $this->_var['city']['region_id']; ?>"<?php if ($this->_var['consignee']['city'] == $this->_var['city']['region_id']): ?> selected="selected"<?php endif; ?>><?php echo $this->_var['city']['region_name']; ?></option>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	              		
	         </select>
        	</li>
    		<li>
		<select name="district" id="selDistricts_<?php echo $this->_var['sn']; ?>"  <?php if (! $this->_var['district_list'][$this->_var['sn']]): ?>style="display:none"<?php endif; ?> onchange="region.changed(this, 4, 'selXiangcun_<?php echo $this->_var['sn']; ?>')">
           	<option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['3']; ?></option>
		<?php $_from = $this->_var['district_list'][$this->_var['sn']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'district');if (count($_from)):
    foreach ($_from AS $this->_var['district']):
?>
		<option value="<?php echo $this->_var['district']['region_id']; ?>"<?php if ($this->_var['consignee']['district'] == $this->_var['district']['region_id']): ?> selected="selected"<?php endif; ?>><?php echo $this->_var['district']['region_name']; ?></option>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
                </select>

                <select name="xiangcun" id="selXiangcun_<?php echo $this->_var['sn']; ?>"  style="margin-left:10px; <?php if (! $this->_var['xiangcun_list'][$this->_var['sn']]): ?>display:none<?php endif; ?>">
                    <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['4']; ?></option>
                    <?php $_from = $this->_var['xiangcun_list'][$this->_var['sn']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'xiangcun');if (count($_from)):
    foreach ($_from AS $this->_var['xiangcun']):
?>
                    <option value="<?php echo $this->_var['xiangcun']['region_id']; ?>" <?php if ($this->_var['consignee']['xiangcun'] == $this->_var['xiangcun']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['xiangcun']['region_name']; ?></option>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                  </select>
    		</li>
            <li>
    		 <input type="text"  placeholder="<?php echo $this->_var['lang']['detailed_address']; ?>*"  name="address" value="<?php echo htmlspecialchars($this->_var['consignee']['address']); ?>" required id="address_<?php echo $this->_var['sn']; ?>" maxlength="100"/>
	        </li>
            <?php endif; ?>
         
         
           
           <li>
		<input type="tel" name="tel" value="<?php echo htmlspecialchars($this->_var['consignee']['tel']); ?>" required id="tel_<?php echo $this->_var['sn']; ?>"  placeholder="<?php echo $this->_var['lang']['phone']; ?>*"/>
	        </li>

        	
            
    	</ul>
            
        <?php if ($_SESSION['user_id'] > 0 && $this->_var['consignee']['address_id'] > 0): ?>
          <div class="field submit-btn fl" style="width:48%;">
            <input type="submit" class="c-btn-orange" value="<?php echo $this->_var['lang']['shipping_address']; ?>">
          </div>
          <div class="field submit-btn fr" style="width:48%;">
          <a href="javascript:void(0);" class="c-btn-orange" onclick="if (confirm('<?php echo $this->_var['lang']['confirm_drop_address']; ?>'))location.href='user.php?act=drop_consignee&id=<?php echo $this->_var['consignee']['address_id']; ?>'"/><?php echo $this->_var['lang']['drop']; ?></a>
          </div>
          <div class="clear"></div>
          <?php else: ?>
    <div class="field submit-btn"><input type="submit" value="<?php echo $this->_var['lang']['add_address']; ?>" class="c-btn-orange "/></div>
    
	<?php endif; ?>
      
         <input type="hidden" name="step" value="consignee">
	<input type="hidden" name="act" value="checkout">
	<input type="hidden" name="address_id" value="<?php echo $this->_var['consignee']['address_id']; ?>">
 
</div>
