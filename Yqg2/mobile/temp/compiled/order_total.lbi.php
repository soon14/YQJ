<ul class="ct-list order_total_ul" id="ECS_ORDERTOTAL" >
  <li class="order_total_li" > 
*<?php echo $this->_var['lang']['complete_acquisition']; ?>
    <?php if ($this->_var['config']['use_integral']): ?><span class="price"><?php echo $this->_var['total']['will_get_integral']; ?></span><?php echo $this->_var['points_name']; ?><?php endif; ?>
    <?php if ($this->_var['total']['will_get_bonus'] != $this->_var['option']['price_zero_format']): ?>
    <?php if ($this->_var['config']['use_integral'] && $this->_var['config']['use_bonus']): ?><br/><?php echo $this->_var['lang']['with_price']; ?><?php endif; ?><?php if ($this->_var['config']['use_bonus']): ?><span class="price"><?php echo $this->_var['total']['will_get_bonus']; ?></span><?php echo $this->_var['lang']['de']; ?><?php echo $this->_var['lang']['bonus']; ?><?php endif; ?><?php endif; ?>
    <?php if ($this->_var['total']['discount'] > 0): ?><br/>- <?php echo $this->_var['lang']['discount']; ?>：<span class="price"><?php echo $this->_var['total']['discount_formated']; ?></span><?php endif; ?>
    <?php if ($this->_var['total']['tax'] > 0): ?><br/>
    + <?php echo $this->_var['lang']['tax']; ?>：<span class="price"><?php echo $this->_var['total']['tax_formated']; ?></span><?php endif; ?>
    <?php if ($this->_var['total']['shipping_fee'] > 0): ?><br/>
    + <?php echo $this->_var['lang']['shipping_fee']; ?>：<span class="price"><?php echo $this->_var['total']['shipping_fee_formated']; ?></span><?php endif; ?>
    <?php if ($this->_var['total']['aa'] > 0): ?><br/> - 手机下单优惠：<span class="price"><?php echo $this->_var['total']['dd']; ?></span><?php endif; ?>
    <?php if ($this->_var['total']['shipping_insure'] > 0): ?><br/>
    + <?php echo $this->_var['lang']['insure_fee']; ?>：<span class="price"><?php echo $this->_var['total']['shipping_insure_formated']; ?></span><?php endif; ?>
    <?php if ($this->_var['total']['pay_fee'] > 0): ?><br/>
    + <?php echo $this->_var['lang']['pay_fee']; ?>：<span class="price"><?php echo $this->_var['total']['pay_fee_formated']; ?></span><?php endif; ?>
    <?php if ($this->_var['total']['pack_fee'] > 0): ?><br/>
    + <?php echo $this->_var['lang']['pack_fee']; ?>：<span class="price"><?php echo $this->_var['total']['pack_fee_formated']; ?></span><?php endif; ?>
    <?php if ($this->_var['total']['card_fee'] > 0): ?><br/>
    + <?php echo $this->_var['lang']['card_fee']; ?>：<span class="price"><?php echo $this->_var['total']['card_fee_formated']; ?></span><?php endif; ?>
    <?php if ($this->_var['total']['surplus'] > 0 || $this->_var['total']['integral'] > 0 || $this->_var['total']['bonus'] > 0): ?>
    <?php if ($this->_var['total']['surplus'] > 0): ?><br/>
    - <?php echo $this->_var['lang']['use_surplus']; ?>：<span class="price"><?php echo $this->_var['total']['surplus_formated']; ?></span><?php endif; ?>
    <?php if ($this->_var['total']['integral'] > 0): ?><br/>
    - <?php echo $this->_var['lang']['use_integral']; ?>：<span class="price"><?php echo $this->_var['total']['integral_formated']; ?></span><?php endif; ?>
    <?php if ($this->_var['total']['bonus'] > 0): ?><br/>
    - <?php echo $this->_var['lang']['use_bonus']; ?>：<span class="price"><?php echo $this->_var['total']['bonus_formated']; ?></span><?php endif; ?>
    <?php endif; ?> </li>
  <?php if ($_SESSION['user_id'] > 0 && ( $this->_var['config']['use_integral'] || $this->_var['config']['use_bonus'] )): ?>  
  <?php endif; ?>
<li> 
<div class="subtotal"> 
<span class="total-text"><?php echo $this->_var['lang']['goods_all_price']; ?>：</span>
 <em><?php echo $this->_var['total']['goods_price_formated']; ?></em><br/>
   <span class="total-text"><?php echo $this->_var['lang']['total_fee']; ?>：</span>
  <strong class="price_total"><?php echo $this->_var['total']['amount_formated']; ?></strong> 
  <span class="total-text" style="">
  <?php if ($this->_var['is_group_buy'] || $this->_var['total']['exchange_integral']): ?>
    <?php if ($this->_var['is_group_buy']): ?><?php echo $this->_var['lang']['notice_gb_order_amount']; ?><?php endif; ?>
    <?php if ($this->_var['total']['exchange_integral']): ?><br/>
    <?php echo $this->_var['lang']['notice_eg_integral']; ?><?php echo $this->_var['total']['exchange_integral']; ?> <?php endif; ?> 
    <?php endif; ?></span>
  </div>
</li>
</ul>
