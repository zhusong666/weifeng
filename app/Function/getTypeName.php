<?php 

use App\Model\Admin\Category;

	function getTypeName($cate_pid)
	{
		if($cate_pid == '0'){

			return '顶级类别';
		} else {

			$res = Category::where('cate_id',$cate_pid)->first();

			// return $res->cate_name;

			echo 222 ;

		}


	}	