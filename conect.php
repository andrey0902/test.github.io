<?php
if(isset($_GET['countries'],$_GET['countri_id'])){
			if($_GET['action']!='edit'&&$_GET['action']!='delete'){
		 include './skin/'.$_GET['action'].'/'.'end.tpl';
		}}
		elseif(isset($_GET['countries'])){
		  $p=(int)$_GET['countries'];
		   if(is_int($p)&&$p!=0){
		  	 include './skin/'.$_GET['action'].'/'.'cities.tpl';
		   }
			}elseif(!isset($_GET['countries'])){
		  include './skin/'.$_GET['action'].'/'.'main.tpl';
		}
		if(in_array($_GET['action'], array('create','delete','edit','show'))&&$_GET['countries']!='cities'&&$_GET['countries']!='lang'){
		include './skin/'.$_GET['action'].'/'.'main.tpl';
		}
		if($_GET['action']=='edit'&&$_GET['countries']=='cities'){
		include './skin/'.$_GET['action'].'/'.'city.tpl';
		}if($_GET['action']=='edit'&&$_GET['countries']=='lang'){
		include './skin/'.$_GET['action'].'/'.'lang.tpl';
		}