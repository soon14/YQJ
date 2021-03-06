
<!-- 城市树展示所需要的文件 start $ -->
  <link href="./treeview/css/jquery.treeview.css" rel="stylesheet" type="text/css"/>
  <link href="./treeview/css/jquery.ui.css" rel="stylesheet" type="text/css"/>
  <link href="./treeview/css/screen.css" rel="stylesheet" type="text/css"/>
  <script src="./treeview/js/jquery.js" type="text/javascript"></script>
  <script src="./treeview/js/jquery.ui.js" type="text/javascript"></script>	
  <script src="./treeview/js/jquery.treeview.js" type="text/javascript"></script>
  <!-- 城市树展示所需要的文件 end $ -->


  <script language="JavaScript">
  $(function() {
	$("#channelsDialog").dialog({
		autoOpen: false,
		modal: true,
		width: 600,
		height: 400,
		position: ["center",20],
		buttons: {
			"OK": function() {
				$("#channelsSelector input[name='channelIds']:checked").each(function(){
					appendChannels(this);
					$(this).removeAttr("checked");
				});
				$(this).dialog("close");
				//提交选中的城市
				$('#formcity').submit();
			}
		}
	});
	$('#channelsLink').click(function(){
		$('#channelsDialog').dialog('open');
		return false;
	});
	$('#channelsSelector').treeview({
                collapsed:true,			//初始化时的折叠状态。true，初始化为收缩节点状态；false，与前相反。
                unique:false,			//展开同级节点的唯一性。true，当展开一个节点时，同级的其他节点会自动关闭；false，当展开一个节点时，同级的其他节点保持原形。
				persist: "location",	//记忆折叠的方式。location：页面刷新不保留折叠状态；cookie：页面刷新保留折叠状态。
                animated:"slow"		//设置展开子节点时的显示速度，有 slow、normal、fast 几个值
            });

	$(":checkbox").click(function(){ 
		checkStatus($(this).val(),this);
    }); 
});

function appendChannels(channel) {
	var hasContain = false;
	$("input[class=cIds]").each(function() {
		if($(this).val()==$(channel).val()) {
			hasContain = true;
		}
	});
	if(hasContain) {
		return;
	}
	var s = "<div style='padding-top:3px;display:none'>";
	s += "<input class='cIds' name='city[]' value='"+$(channel).val()+"'/>";
	s += "<a href='javascript:void(0);' onclick='$(this).parent().remove();' class='pn-opt'>删除</a>";	
	s += "</div>";
	$("#channelsContainer").append(s);
}



function checkStatus(no,chkBox){
	if(chkBox.className == 0){
		if(chkBox.checked){
			  $("input[name='channelIds']").attr("checked", true);
		  }else{
			  $("input[name='channelIds']").attr("checked", false);
		  }
	}else{
		 checkPar(chkBox);//当子目录选中时,父目录也选中
		 $("input[name='channelIds'][class='"+no+"']").each(function(){
			 //$(this).checked = chkBox.checked;
			 $(this).attr("checked",chkBox.checked);//保持选中状态和父目录一致
			 checkStatus($(this).val(),this);//递归保持所有的子目录选中
		 })
		 nocheckPar(chkBox);//当子目录没被选中时
	}
}
function checkPar(chkBox) {
	
  if(chkBox.name == 'channelIds' && chkBox.checked && chkBox.className != 0) {//判断本单击为选中,并且不是根目录,则选中父目录
	$("input[name='channelIds'][id='ch"+chkBox.value+"']").attr('checked',true);
	var chkObject = document.getElementById("ch"+chkBox.className);//得到父目录对象
	chkObject.checked=true;
	checkPar(chkObject);
  } 
}
function nocheckPar(chkBox){
	//子目录去掉选中后，上一级变化
	if(chkBox.name == 'channelIds' && !chkBox.checked){
		var objs = $("input[name='channelIds'][id='ch"+chkBox.value+"']");
		if($("input[name='channelIds'][class='"+objs.val()+"'][checked]").length<=0){
			objs.attr('checked',false);

			if($("input[name='channelIds'][class='"+chkBox.className+"'][checked]").length<=0){
				  $("input[name='channelIds'][id='ch"+chkBox.className+"']").attr('checked',false);
				 var chkObject = document.getElementById("ch"+chkBox.className);//得到父目录对象
				 nocheckPar(chkObject);
			 }
		}  
	  }
}

  </script>


	<input id="channelsLink" type="button" value="添加区域" />
	<form action="store_manage.php?is_ajax=1&act=add_shipping_area_new" method="post" id="formcity" name="formcity">
	<input type="hidden" name="parent_id" value="<?php echo $this->_var['store_id']; ?>">
	<div id="channelsContainer"></div></form>
    <div id="channelsDialog" title="请选择区域" style="display:none;">
	<ul id="channelsSelector" class="filetree">
	<?php echo $this->_var['html']; ?>
		<!-- <li><input type="checkbox" name="channelIds" value="2" class="0" id="ch2"/>Folder 2
			<ul>
				<li><input type="checkbox" name="channelIds" id="ch2.1" class="2" value="2.1"/>Subfolder 2.1
					<ul>
						<li><input type="checkbox" name="channelIds" class="2.1" id="ch2.1.1" value="2.1.1"/>File 2.1.1</li>
						<li><input type="checkbox" name="channelIds" class="2.1" id="ch2.1.2" value="2.1.2"/>File 2.1.2</li>
					</ul>
				</li>
				<li><input type="checkbox" name="channelIds" class="2" id="ch2.2" value="2.2"/>File 2.2</li>
			</ul>
		</li>
		
		<li><input type="checkbox" name="channelIds" value="4" class="0" id="ch4"/>File 4
			<ul>
				<li><input type="checkbox" name="channelIds" id="ch4.1" class="4" value="4.1"/>Subfolder 4.1
					<ul>
						<li><input type="checkbox" name="channelIds" class="4.1" id="ch4.1.1" value="4.1.1"/>File 4.1.1</li>
						<li><input type="checkbox" name="channelIds" class="4.1" id="ch4.1.2" value="4.1.2"/>File 4.1.2</li>
					</ul>
				</li>
				<li><input type="checkbox" name="channelIds" class="4" id="ch4.2" value="4.2"/>File 4.2</li>
			</ul>
		</li> -->
	</ul>
	</div>

