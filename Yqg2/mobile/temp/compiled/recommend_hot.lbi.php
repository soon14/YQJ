<?php if ($this->_var['hot_goods']): ?>
<section class="index_floor">
  <div class="floor_body1" >
    <h2><em></em><?php echo $this->_var['lang']['hot_goods']; ?><div class="geng"><a href="search.php?intro=hot" >更多</a> <span></span></div></h2>
    <div id="scroll_hot" class="scroll_hot">
      <div class="bd">
        <ul>
          <?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_11312800_1456131528');$this->_foreach['hot_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['hot_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_11312800_1456131528']):
        $this->_foreach['hot_goods']['iteration']++;
?>
          <li >
            <a href="<?php echo $this->_var['goods_0_11312800_1456131528']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_11312800_1456131528']['name']); ?>">
              <div class="products_kuang">
                <img src="<?php echo $this->_var['option']['static_path']; ?><?php echo $this->_var['goods_0_11312800_1456131528']['thumb']; ?>"></div>
              <div class="goods_name"><?php echo $this->_var['goods_0_11312800_1456131528']['name']; ?></div>
              <div class="price">
              <span href="<?php echo $this->_var['goods_0_11312800_1456131528']['url']; ?>" class="price_pro"><?php if ($this->_var['goods_0_11312800_1456131528']['promote_price']): ?><?php echo $this->_var['goods_0_11312800_1456131528']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods_0_11312800_1456131528']['shop_price']; ?><?php endif; ?></span>
                <span class="costprice"><?php echo $this->_var['goods_0_11312800_1456131528']['market_price']; ?></span>
                 <a href="javascript:addToCart(<?php echo $this->_var['goods_0_11312800_1456131528']['id']; ?>)" class="btns">
                    <img src="themesmobile/68ecshopcom_mobile/images/index_flow.png">
                </a>
              </div>
            </a>
          </li>

          <?php if ($this->_foreach['hot_goods']['iteration'] % 3 == 0 && $this->_foreach['hot_goods']['iteration'] != $this->_foreach['hot_goods']['total']): ?> </ul>
        <ul>
          <?php endif; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></div>
        <div class="hd">
          <ul></ul>
        </div>
      </div>
    </div>
  </section>

  <script type="text/javascript">
    TouchSlide({ 
      slideCell:"#scroll_hot",
      titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
      effect:"leftLoop", 
      autoPage:true, //自动分页
      //switchLoad:"_src" //切换加载，真实图片路径为"_src" 
    });
  </script>
<div class="black"></div>
<?php endif; ?>