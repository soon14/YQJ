<div class="sidebar-nav" style="height: 100%; top: 0px; bottom: auto;">
  <div class="mods">
    <div class="middle-items">
      <div class="mod qrcode J-stie-68"> <a href="javascript:;" class="btn">
        <table>
          <tbody>
            <tr>
              <td><i></i></td>
            </tr>
            <tr>
              <td>官 方<br>
                微 信</td>
            </tr>
          </tbody>
        </table>
        </a>
        <div class="dropdown" style="display: none; opacity: 1; margin-right: 0px;"> <span></span>
          <p>扫描二维码，码上有礼！</p>
          <span class="cart_arrow" style="background:none;border:none"><b class="arrow-1"></b> <b class="arrow-2"></b></span> </div>
      </div>
      <div class="mod online-service J-stie-68"> <a href="javascript:;" class="btn">
        <table>
          <tbody>
            <tr>
              <td><i></i> <em>销 售</em></td>
            </tr>
            <tr>
              <td>在 线<br>
                销 售</td>
            </tr>
          </tbody>
        </table>
        </a>
        <div class="dropdown" style="display: none; opacity: 1; margin-right: 0px;">
          <div class="head clearfix">
            <h3 class="grid-c-l">在线销售顾问</h3>
          </div>
          <div class="button-bar"> 
            
            <?php echo $this->fetch('library/customer_service.lbi'); ?> 
             
          </div>
          <span class="cart_arrow"><b class="arrow-1"></b> <b class="arrow-2"></b></span></div>
      </div>
      <div class="mod vote_list J-stie-68"> <a href="javascript:;" class="btn">
        <table>
          <tbody>
            <tr>
              <td><i></i> <em>调 查</em></td>
            </tr>
            <tr>
              <td>在 线<br>
                调 查</td>
            </tr>
          </tbody>
        </table>
        </a>
        <div class="dropdown" style="display: none; opacity: 1; margin-right: 0px;">
          <div class="head clearfix">
            <h3 class="grid-c-l">在线调查问卷</h3>
          </div>
          <div class="button-bar"> 
          <?php echo $this->fetch('library/vote_list.lbi'); ?> 
          </div>
          <span class="cart_arrow"><b class="arrow-1"></b> <b class="arrow-2"></b></span></div>
      </div>
      <div class="mod reserve" style="height:135px;" id="ECS_CARTINFO">
      <?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
      </div>
      <div class="mod traffic"> <span class="btn">
        <table>
          <tbody>
            <tr>
              <td><i></i> <em>关 注</em></td>
            </tr>
            <tr>
              <td><a href="user.php?act=follow_shop" target="_blank" class="btn">关注<br>
                店铺</a></td>
            </tr>
          </tbody>
        </table>
        </span> </div>
      <div class="mod insure" id="collectGoods"> <span class="btn">
        <table>
          <tbody>
            <tr>
              <td><i></i> <em>收 藏</em></td>
            </tr>
            <tr>
              <td><a href="user.php?act=collection_list" class="btn">收 藏<br>
                商 品</a></td>
            </tr>
          </tbody>
        </table>
        </span> </div>
      <div class="mod asset"> <span class="btn">
        <table>
          <tbody>
            <tr>
              <td><i></i> <em>资 产</em></td>
            </tr>
            <tr>
              <td><a href="user.php?act=account_log" class="btn">我 的<br>
                资 产</a></td>
            </tr>
          </tbody>
        </table>
        </span> </div>
        
      <!--<div class="mod history empty" trigger="click"> <a href="javascript:;" class="btn">
        <table>
          <tbody>
            <tr>
              <td><i></i> <em>历 史</em></td>
            </tr>
            <tr>
              <td>浏 览<br>
                历 史</td>
            </tr>
          </tbody>
        </table>
        </a>
        <div class="dropdown" style="display: none;">
          <ul class="unstyled">
          </ul>
          <div class="bar clearfix">
            <div class="btn-bar grid-c-r"> <a href="javascript:;" class="empty-btn">清空</a> </div>
          </div>
          <div class="empty-tip">
            <p>浏览历史为空!</p>
            <p><a href="http://www.akd.cn/carmain/" rel="nofollow">去选车中心看看</a></p>
          </div>
          <b class="arrow-1"></b> <b class="arrow-2"></b> </div>
      </div>-->
    </div>
    <div class="bottom-items">
      <div class="mod top disabled"> <a href="javascript:;" class="btn">
        <table>
          <tbody>
            <tr>
              <td><i></i></td>
            </tr>
            <tr>
              <td>回 到<br>
                顶 部</td>
            </tr>
          </tbody>
        </table>
        </a> </div>
     <!-- <div class="mod fold" id="mod-fold"> <a href="javascript:;" class="btn">
        <table>
          <tbody>
            <tr>
              <td><i></i></td>
            </tr>
            <tr>
              <td>折 叠<br>
                展 开</td>
            </tr>
          </tbody>
        </table>
        </a> </div>-->
    </div>
  </div>
</div> 
<script type="text/javascript">
$(".J-stie-68").mouseover(function(){
 $(this).children(".dropdown").show();
 })
 $(".J-stie-68").mouseout(function(){
 $(this).children(".dropdown").hide();
 })
$(".J-stie-68").mouseleave(function(){
 $(this).children(".dropdown").hide();
 })

</script>
<script type="text/javascript">
$(document).ready(function(){ 
var headHeight2=200;  //这个高度其实有更好的办法的。使用者根据自己的需要可以手工调整。
 
var top=$(".top");       //要悬浮的容器的id
$(window).scroll(function(){ 
 
if($(this).scrollTop()>headHeight2){ 
top.removeClass("disabled");  
}
else{ 
top.addClass("disabled"); 
} 
}) 
})
$(".top").click(function(){
$('body,html').animate({scrollTop:0},800);
return false;
});
$("#mod-fold").click(function(){
$('.sidebar-nav').hasClass('fold') ? $('.sidebar-nav').removeClass('fold') : $('.sidebar-nav').addClass('fold');
});
</script>
