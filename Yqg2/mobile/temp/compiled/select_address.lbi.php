<link href="themesmobile/68ecshopcom_mobile/css/mobiscroll.custom-2.16.1.min.css" rel="stylesheet" type="text/css" />
<script src="themesmobile/68ecshopcom_mobile/js/mobiscroll.custom-2.16.1.min.js" type="text/javascript"></script>


<div class="shipping">
  <dl class="list-entry-extra">
    <dt class="row01"> 
       
      
      <span class="col01">送至：</span> <span class="col02" id="btn-select-region">
      <div class="address address01 J_ping"><i class="icon icon-location"></i>
    <?php 
$k = array (
  'name' => 'select_region',
  'from' => 'good',
  'title' => '配&nbsp;送&nbsp;至：',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>  

      </div>
      <p class="row01col03"> <span id="youhuo">加载中... </span> &nbsp;&nbsp;<a href="javascript:void(0)" id="pickup_point">查看自提点></a> </p>
      <p class="row01col04"> </p>
      </span> </dt>
  </dl>
  <div> </div>
</div>
