<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>后台管理</title>
    	<script type="text/javascript" src="__ROOT__/Index/Common/js/angular.min.js"></script>	
		<link rel="stylesheet" type="text/css" href="__ROOT__/Admin/Common/css/index.css"/>
		<link rel="stylesheet" type="text/css" href="__ROOT__/Admin/Common/css/body.css"/>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	</head>
	<body>
		<div ng-app="myapp" ng-controller="mycontroller" id="main">
			<div class="header">
				<h1>后台管理</h1>
			</div>
			<div class="body">
				<div class="addinfo">
			        <div>
			            <span>标题 </span><input ng-model="title" type="text"/>
			        </div>
			        <div>
			            <span>简介 </span><input ng-model="info" type="text"/>
			        </div>
			        <div>
			            <span>颜色 </span><input ng-model="color" type="text"/>
			        </div>
			        
			        <div>
			            <span>图片1: </span><input name="img" type="file"/><span id="btn" style="position: absolute; margin-left: -50px;margin-top: 5px; width: 120px;">&nbsp;&nbsp;点击添加更多图片 </span>
			        	<span>图片2: </span><input name="img" type="file"/>
			        	<span>图片3: </span><input name="img" type="file"/>
			        </div>
			        
			        <div>
			            <span>市场价 </span><input ng-model="marketPrice" type="text"/>
			        </div>
			        <div>
			            <span>商店价 </span><input ng-model="StorePrice" type="text"/>
			        </div>
			        <div>
			            <span>库存 </span><input ng-model="stock" type="text"/>
			        </div>
			        <div class="addinfo_btn" ng-click="sub()">提交</div>
			    </div>
			

		        <table>
		            <tr >
		                <td style="width:55px">编号</td>
		                <td style="width:100px;">ID</td>
		                <td >标题</td>
		                <td >图片链接</td>
		                <td >URL</td>
		                <td style="width:70px;">时间</td>
		                <td style="width:70px;">操作</td>
		            </tr>
		           
		               <!-- <tr ng-clok ng-repeat="(k,v) in list" style="text-align:center;height:26px;color:#4C4C4C;">
		                    <td width="10px;">{{k+1}}</td>
		                    <td>{{v.id}}</td>
		                    <td>{{v.title}}</td>
		                    <td>{{v.imgurl}}</td>
		                    <td>{{v.newurl}}</td>
		                    <td>{{v.addtime}}</td>
		                    <td ng-click="del(v.id)"><span>删除</span></td>
		                </tr>
		          -->
		       </table>
			</div>
		</div>
		
	<script type="text/javascript">
		var fd = new FormData();
    	const app = angular.module("myapp",[]);
    	app.controller("mycontroller",function($scope){
    		//multiple name="img[]"多选图片
    		$scope.title = "" ;
    		$scope.info = "" ;
    		$scope.color = "" ;
    		$scope.marketPrice = "" ;
    		$scope.StorePrice = "" ;
    		$scope.stock = "" ;
    		$scope.sub = function(){
    			var allImg = true;
    			$("input[name='img']").each(function(){
    				if(this.value===""){
    					allImg = false;
    				};
    			});
    			if(true){
	    			
	    			console.log(fd)
	    			$("input[name='img']").each(function(k){
//	    				console.log(k, this.files[0] );
						 fd.append('img'+k, this.files[0]);
	    			});
	    			fd.append('title', $scope.title);
	    			fd.append('info', $scope.info);
	    			fd.append('color', $scope.color);
	    			fd.append('marketPrice', $scope.marketPrice);
	    			fd.append('StorePrice', $scope.StorePrice);
	    			fd.append('stock', $scope.stock);
//	    			console.log(fd)
	    			asdf(fd);
	    			
    			}else{
    				alert("缺少图片");
    			}

    		}
    	});
    	function asdf(fd){
    		$.ajax({
				type:"POST",
				url:"__APP__/Shop/upload",
				async:true,
				data:fd,
				success:function(data){
					console.log(data);
				}
			});
    	}
    </script>
	</body>
</html>