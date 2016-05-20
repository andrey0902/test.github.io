<?php

if (isset($_GET['route'])){
	$temp= explode ('/',$_GET['route']);

	
		
		$i=0;
		foreach ($temp as $k=>$v){
			if($i== 0){
				if(!empty($v)){
				$_GET['action']=$v;
				}else{$_GET['action'] = 'countries';}
			}elseif($i==1){
				if(!empty($v)){
				$_GET['countries']=$v;
				}
			}elseif($i==2){
				if(!empty($v)){
				$_GET['countri_id']=$v;
				}
			}elseif($i==3){
				if(!empty($v)){
				$_GET['cities']=$v;
				}
			}elseif($i==4){
				if(!empty($v)){
				$_GET['cities_id']=$v;
				}
			}else{
				$_GET['key'.($k-1)]=$v;
			}
		++$i;
		}
		
	
	}
		
		if(!isset($temp[0])){ 
		  $_GET['action']='countries';
		  
		}
		elseif(!in_array($temp[0], array('countries','create','delete','edit','show'))){
		 
		}
		
		
		

			
		
	
	