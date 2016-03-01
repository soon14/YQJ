<!-- <?php if ($this->_var['full_page']): ?> -->

<?php echo $this->fetch('pageheader.htm'); ?>

<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,listtable.js')); ?>

<div class="form-div">

<?php if ($_GET['auid']): ?>

<?php echo $this->_var['lang']['show_affiliate_orders']; ?>

<?php else: ?>

<form action="affiliate_ck.php?act=list">

  <?php echo $this->_var['lang']['sch_stats']['info']; ?>

  <a href="affiliate_ck.php?act=list"><?php echo $this->_var['lang']['sch_stats']['all']; ?></a>

  <a href="affiliate_ck.php?act=list&status=0"><?php echo $this->_var['lang']['sch_stats']['0']; ?></a>

  <a href="affiliate_ck.php?act=list&status=1"><?php echo $this->_var['lang']['sch_stats']['1']; ?></a>

  <a href="affiliate_ck.php?act=list&status=2"><?php echo $this->_var['lang']['sch_stats']['2']; ?></a>

<?php echo $this->_var['lang']['sch_order']; ?>



<input type="hidden" name="act" value="list" />

<input name="order_sn" type="text" id="order_sn" size="20"><input type="submit" value="<?php echo $this->_var['lang']['button_search']; ?>" class="button" />

</form>

<?php endif; ?>

</div>

<form method="post" action="" name="listForm">

<div class="list-div" id="listDiv">

<!-- <?php endif; ?> -->

<table cellspacing='1' cellpadding='3'>

<tr>

  <th width="15%"><?php echo $this->_var['lang']['order_id']; ?></th>
  
  <th width="10%"><?php echo $this->_var['lang']['order_user_name']; ?></th>
  
  <th width="10%"><?php echo $this->_var['lang']['add_time']; ?></th>

  <th width="8%"><?php echo $this->_var['lang']['order_stats']['name']; ?></th>

  <th width="8%"><?php echo $this->_var['lang']['sch_stats']['name']; ?></th>

  <th><?php echo $this->_var['lang']['log_info']; ?></th>

  <th width="10%"><?php echo $this->_var['lang']['handler']; ?></th>

</tr>

<!-- <?php $_from = $this->_var['logdb']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['val']):
?> -->

<tr>

  <td align="center"><a href="order.php?act=info&order_id=<?php echo $this->_var['val']['order_id']; ?>" id="order_<?php echo $this->_var['key']; ?>"><?php echo $this->_var['val']['order_sn']; ?></a></td>
  
  <td><?php echo $this->_var['val']['user_name']; ?></td>
  
  <td><?php echo $this->_var['val']['add_time']; ?></td>

  <td><?php echo $this->_var['lang']['order_stats'][$this->_var['val']['order_status']]; ?></td>

  <td><?php echo $this->_var['lang']['sch_stats'][$this->_var['val']['is_separate']]; ?></td>

  <td><?php echo $this->_var['val']['info']; ?></td>

  <td>

  <!-- <?php if ($this->_var['val']['is_separate'] == 0): ?> -->

  <a href="javascript:confirm_redirect(separate_confirm, 'affiliate_ck.php?act=separate&oid=<?php echo $this->_var['val']['order_id']; ?>')"><?php echo $this->_var['lang']['affiliate_separate']; ?></a> | <a href="javascript:confirm_redirect(cancel_confirm, 'affiliate_ck.php?act=del&oid=<?php echo $this->_var['val']['order_id']; ?>')"><?php echo $this->_var['lang']['affiliate_cancel']; ?></a>

  <!-- <?php elseif ($this->_var['val']['is_separate'] == 1): ?> -->

<a href="javascript:confirm_redirect(rollback_confirm, 'affiliate_ck.php?act=rollback&logid=<?php echo $this->_var['val']['log_id']; ?>')"><?php echo $this->_var['lang']['affiliate_rollback']; ?></a>

  <!-- <?php else: ?> -->

  -

  <!-- <?php endif; ?> -->

  </td>

</tr>

    <!-- <?php endforeach; else: ?> -->

    <tr><td class="no-records" colspan="10"><?php echo $this->_var['lang']['no_records']; ?></td></tr>

<!-- <?php endif; unset($_from); ?><?php $this->pop_vars();; ?> -->

</table>

  <table cellpadding="4" cellspacing="0">

    <tr>

      <td align="right"><?php echo $this->fetch('page.htm'); ?></td>

    </tr>

  </table>

<!-- <?php if ($this->_var['full_page']): ?> -->

</div>

</form>

<script type="Text/Javascript" language="JavaScript">

listTable.recordCount = <?php echo $this->_var['record_count']; ?>;

listTable.pageCount = <?php echo $this->_var['page_count']; ?>;



<?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>

listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';

<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>



<!--  -->

onload = function()

{

  // 开始检查订单

  startCheckOrder();

}

<!--  -->

</script>

<?php echo $this->fetch('pagefooter.htm'); ?>

<!-- <?php endif; ?> -->
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

    /**
     * 搜索订单
     */
    function searchOrder()
    {
        listTable.filter['order_sn'] = Utils.trim(document.forms['searchForm'].elements['order_sn'].value);
        listTable.filter['consignee'] = Utils.trim(document.forms['searchForm'].elements['consignee'].value);
        listTable.filter['composite_status'] = document.forms['searchForm'].elements['status'].value;
		listTable.filter['order_type'] = document.forms['searchForm'].elements['order_type'].value;
        listTable.filter['page'] = 1;
        listTable.loadList();
    }

    function check()
    {
      var snArray = new Array();
      var eles = document.forms['listForm'].elements;
      for (var i=0; i<eles.length; i++)
      {
        if (eles[i].tagName == 'INPUT' && eles[i].type == 'checkbox' && eles[i].checked && eles[i].value != 'on')
        {
          snArray.push(eles[i].value);
        }
      }
      if (snArray.length == 0)
      {
        return false;
      }
      else
      {
        eles['order_id'].value = snArray.toString();
        return true;
      }
    }
    /**
     * 显示订单商品及缩图
     */
    var show_goods_layer = 'order_goods_layer';
    var goods_hash_table = new Object;
    var timer = new Object;

    /**
     * 绑定订单号事件
     *
     * @return void
     */
    function bind_order_event()
    {
        var order_seq = 0;
        while(true)
        {
            var order_sn = Utils.$('order_'+order_seq);
            if (order_sn)
            {
                order_sn.onmouseover = function(e)
                {
                    try
                    {
                        window.clearTimeout(timer);
                    }
                    catch(e)
                    {
                    }
                    var order_id = Utils.request(this.href, 'order_id');
                    show_order_goods(e, order_id, show_goods_layer);
                }
                order_sn.onmouseout = function(e)
                {
                    hide_order_goods(show_goods_layer)
                }
                order_seq++;
            }
            else
            {
                break;
            }
        }
    }
    listTable.listCallback = function(result, txt) 
    {
        if (result.error > 0) 
        {
            alert(result.message);
        }
        else 
        {
            try 
            {
                document.getElementById('listDiv').innerHTML = result.content;
                bind_order_event();
                if (typeof result.filter == "object") 
                {
                    listTable.filter = result.filter;
                }
                listTable.pageCount = result.page_count;
            }
            catch(e)
            {
                alert(e.message);
            }
        }
    }
    /**
     * 浏览器兼容式绑定Onload事件
     *
     */
    if (Browser.isIE)
    {
        window.attachEvent("onload", bind_order_event);
    }
    else
    {
        window.addEventListener("load", bind_order_event, false);
    }

    /**
     * 建立订单商品显示层
     *
     * @return void
     */
    function create_goods_layer(id)
    {
        if (!Utils.$(id))
        {
            var n_div = document.createElement('DIV');
            n_div.id = id;
            n_div.className = 'order-goods';
            document.body.appendChild(n_div);
            Utils.$(id).onmouseover = function()
            {
                window.clearTimeout(window.timer);
            }
            Utils.$(id).onmouseout = function()
            {
                hide_order_goods(id);
            }
        }
        else
        {
            Utils.$(id).style.display = '';
        }
    }

    /**
     * 显示订单商品数据
     *
     * @return void
     */
    function show_order_goods(e, order_id, layer_id)
    {
        create_goods_layer(layer_id);
        $layer_id = Utils.$(layer_id);
        $layer_id.style.top = (Utils.y(e) + 12) + 'px';
        $layer_id.style.left = (Utils.x(e) + 12) + 'px';
        if (typeof(goods_hash_table[order_id]) == 'object')
        {
            response_goods_info(goods_hash_table[order_id]);
        }
        else
        {
            Ajax.call('order.php?is_ajax=1&act=get_goods_info&order_id='+order_id, '', response_goods_info , 'POST', 'JSON');
        }
    }

    /**
     * 隐藏订单商品
     *
     * @return void
     */
    function hide_order_goods(layer_id)
    {
        $layer_id = Utils.$(layer_id);
        window.timer = window.setTimeout('$layer_id.style.display = "none"', 500);
    }

    /**
     * 处理订单商品的Callback
     *
     * @return void
     */
    function response_goods_info(result)
    {
        if (result.error > 0)
        {
            alert(result.message);
            hide_order_goods(show_goods_layer);
            return;
        }
        if (typeof(goods_hash_table[result.content[0].order_id]) == 'undefined')
        {
            goods_hash_table[result.content[0].order_id] = result;
        }
        Utils.$(show_goods_layer).innerHTML = result.content[0].str;
    }
</script>