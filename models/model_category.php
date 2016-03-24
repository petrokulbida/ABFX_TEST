<?php
// модель
Class Model_Category extends Model_Base{

	public function getAll(){
		$qry = "SELECT * FROM category";
		$res = $this->db->query($qry)->fetchAll(PDO::FETCH_ASSOC);		
		$cats = array();		
		foreach($res as $one){
			$cats_id[$one['id']][] = $one;
			$cats[$one['parent']][$one['id']] = $one;			
		}
		return $this->build_tree($cats, 0, '');
	}	
	
	public function  build_tree($cats,$parent_id,$j,$only_parent = false){

	    if(is_array($cats) and isset($cats[$parent_id])){
			$css = $parent_id == 0 ? 'id="navigation" class="treeview"' : "";
			$tree = '<ul '.$css.'>';
			if($only_parent==false){
				$i = 1;
				foreach($cats[$parent_id] as $cat){
					$b = $j ? $j.'.'.$i : $i;
					$tree .= '<li><div class="hitarea expandable-hitarea"></div>
					<a href="?'.$b.'">'.$cat['category'].' '.$b.'</a>';
					$tree .=  $this->build_tree($cats,$cat['id'],$b);
					$tree .= '</li>';
					$i++;
				}
			}elseif(is_numeric($only_parent)){
				$cat = $cats[$parent_id][$only_parent];
				$tree .= '<li>'.$cat['category'].' #'.$cat['id'];
				$tree .=  $this->build_tree($cats,$cat['id']);
				$tree .= '</li>';
			}
			$tree .= '</ul>';
		}
		else return null;
		return $tree;       
	}
	
}