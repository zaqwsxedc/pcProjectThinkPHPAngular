<?php
// 本类由系统自动生成，仅供测试用途
class ShopACtion extends Action {
    public function ShoppingCart(){
    		$classify = session("classify");
			if( !empty($classify) ){
				//添加一条数据
				$Shop = D("Shop");
				$res = $Shop -> addToShop($classify);
				$this -> assign("addOne" , $res);
				//直接显示到前面是否添加成功
				unset($_SESSION['classify']);
			}
			//登陆状态的添加购物车可以直接跳转
			$Shop = D("Shop");
			$list = $Shop -> getList();
			$this -> assign("list" , $list);
	    	$this -> display("ShoppingCart");
//		}
	}
	public function getList(){
		$Shop = D("Shop");
		$list = $Shop -> getList();
		$this ->ajaxReturn($list);
	}
	//获取购物车小计
	public function subtotal(){
		$Shop = D("Shop");
		$res = $Shop -> getSubtotal();
		$this ->ajaxReturn($res);
	}
	//点击点加到购物车的按钮
	public function addToShop(){
		$classify=I("classify");
		$Shop = D("Shop");
		$res = $Shop -> addToShop($classify);
		$this ->ajaxReturn($res);
	}
	//点击增加商品数量
	public function  addItem(){
		$classify=I("classify");
		$Shop = D("Shop");
		$res = $Shop -> addItem($classify);
		$this ->ajaxReturn($res);
		// $this ->ajaxReturn($classify);

	}
	//减少商品数量
	public function reduceItem(){
		$classify=I("classify");
		$Shop = D("Shop");
		$res = $Shop -> reduceItem($classify);
		$this ->ajaxReturn($res);
	}
	//删除商品
	public function deleteItem(){
		$classify=I("classify");
		$Shop = D("Shop");
		$res = $Shop -> deleteItem($classify);
		$this ->ajaxReturn($res);
	}
}