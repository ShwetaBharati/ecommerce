<?php
use Illuminate\Support\Facades\DB;
function prx($arr){
    echo"<pre>";
    print_r($arr);
    die();
}

function getTopNavCat(){
	$result=DB::table('categories')->where(['status'=>1])->get();
	$arr=[];
foreach($result as $row){
	$arr[$row->id]['city']=$row->category_name;
	$arr[$row->id]['parent_id']=$row->category_parent_id;
	$arr[$row->id]['category_slug']=$row->category_slug;
}
$str =buildTreeView($arr,0);
return $str;
}
$html='';
function buildTreeView($arr,$parent,$level=0,$prelevel= -1){
	global $html;
	foreach($arr as $id=>$data){
		if($parent==$data['parent_id']){
			if($level>$prelevel){
				if($html==''){
					$html.='<ul class="main-menu navbar"> <li class="dropdown mega_menu m1 level-1 font-weight-bolderer"><a class="dropdown-toggle" href="http://localhost/yourwebsitewala/">Home</a></li>';
				}else{
					$html.='<ul class="dropdown-menu">';
				}
				
			}
			if($level==$prelevel){
				$html.='</li>';
			}
			$html.='<li class="h_title text-uppercase font-weight-bolder"><a href="'.$data['category_slug'].'"role="button"
			data-toggle="dropdown" aria-expanded="false" class="dropdown-item font-weight-bolderer">'.$data['city'].'</a>';
			if($level>$prelevel){
				$prelevel=$level;
			}
			$level++;
			buildTreeView($arr,$id,$level,$prelevel);
			$level--;
		}
	}
	if($level==$prelevel){
		$html.='</li></ul>';
	}
	return $html;
}

?>