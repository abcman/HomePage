<?php 
/****************************************************
*
* @File: 		functions.php
* @Package:		BootSimple
* @Action:		Bootsimple theme for GetSimple CMS
*
*****************************************************/

/**
 * 
 *
 * 
 *
 * @param string $name - This is the slug of the link you want to create
 * @return string
 */

 
 //Пример работы функции самой простой. Братва
function get_header(){
echo 'Aloha';	
}

function get_footer(){
echo 'В этот подвал нужно разместить беженцев';	
}

function get_top_menu(){
echo '<a href="/">Главная</a>';	
}
 
function get_page_title(){
	$title = 'Название страницы из переменной title';
	echo '<h1>'.$title.'</h1>';
	}
	
// function get_component('sidebar'){
	function get_sidebar(){
	echo '<br /><a href="/">Главная</a>';	
	echo '<br /><a href="org.php">Организации</a>';	
	echo '<br /><a href="user.php">Пользователи</a>';	
}
	
function get_page_content(){
	$text = 'Текст страницы из переменной text';
	//if (preg_match('/[a-z0-9_-]*/i', $_GET['name'])){$name=1};
	echo $_GET['name'];
	$text = $_GET[content];
	echo '<h3>'.$text.'</h3>';
	
	if (empty($_GET[action])){
		include 'user.php';
	$title = 'Добавить пользователя';}
	
	if ($_GET[action]==add_user){
		include 'user.php';
		$title = 'Добавить пользователя';} 

	if ($_GET[action]==org){
		include 'org.php';
		$title = 'Добавить организацию в каталог';} 
}
