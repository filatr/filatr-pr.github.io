<?php
if ($_SERVER['REQUEST_URI']=='/') {
	$title = "Песочница";
}
elseif ($_SERVER['REQUEST_URI']=='/study_theory/') {
	$title = "Теория";
}
elseif ($_SERVER['REQUEST_URI']=='/study_theory/theory_js.php') {
	$title = "JS: теория";
}
elseif ($_SERVER['REQUEST_URI']=='/study_theory/theory_php.php') {
	$title = "PHP: теория";
}
elseif ($_SERVER['REQUEST_URI']=='/study_theory/theory_bd_sql.php') {
	$title = "БД и SQL запросы";
}
elseif ($_SERVER['REQUEST_URI']=='/study_theory/theory_forms.php') {
	$title = "Формы: теория";
}
elseif ($_SERVER['REQUEST_URI']=='/study_theory/theory_github.php') {
	$title = "Заметки о командной строке";
}
elseif ($_SERVER['REQUEST_URI']=='/study_theory/theory_other.php') {
	$title = "Разное";
}
elseif ($_SERVER['REQUEST_URI']=='/study_working/') {
	$title = "Практика";
}
elseif ($_SERVER['REQUEST_URI']=='/study_working/act.php') {
	$title = "act";
}
elseif ($_SERVER['REQUEST_URI']=='/study_working/action.php') {
	$title = "action";
}
elseif ($_SERVER['REQUEST_URI']=='/study_working/script.php') {
	$title = "script";
}
elseif ($_SERVER['REQUEST_URI']=='/study_working/working_bd_homework_1.php') {
	$title = "Практика с БД";
}
elseif ($_SERVER['REQUEST_URI']=='/study_working/working_bd_homework_2.php') {
	$title = "Практика с БД";
}
elseif ($_SERVER['REQUEST_URI']=='/study_working/working_cookies.php') {
	$title = "Сессии и Cookies";
}
elseif ($_SERVER['REQUEST_URI']=='/study_working/working_form_examples.php') {
	$title = "Формы";
}
elseif ($_SERVER['REQUEST_URI']=='/study_working/working_github.php') {
	$title = "Работаем в комендной строке с текстовым редактором nano";
}
elseif ($_SERVER['REQUEST_URI']=='/study_working/working_js_ function.php') {
	$title = "Юзаем function";
}
elseif ($_SERVER['REQUEST_URI']=='/study_working/working_js_calc.php') {
	$title = "Простейший калькулятор";
}
elseif ($_SERVER['REQUEST_URI']=='/study_working/working_js_final_assignment.php') {
	$title = "Итоговое дз по JS";
}
elseif ($_SERVER['REQUEST_URI']=='/study_working/working_js_objects.php') {
	$title = "Обекты";
}
elseif ($_SERVER['REQUEST_URI']=='/study_working/working_js_objects_this.php') {
	$title = "Расматриваем на практике this";
}
elseif ($_SERVER['REQUEST_URI']=='/study_working/working_php_0804.php') {
	$title = "Первое практическое знакомство с PHP";
}
elseif ($_SERVER['REQUEST_URI']=='/study_working/working_php_other.php') {
	$title = "Первое практическое знакомство с PHP";
}
elseif ($_SERVER['REQUEST_URI']=='/study_working/working_php_cycle.php') {
	$title = "Практикум по цыклам";
}
elseif ($_SERVER['REQUEST_URI']=='/study_working/working_php_regular.php') {
	$title = "Регулярные выражения";
}
elseif ($_SERVER['REQUEST_URI']=='/study_working/working_php_file_system.php') {
	$title = "Работа с файловой системой";
}
elseif ($_SERVER['REQUEST_URI']=='/admin/') {
	$title = "Админка";
}
elseif ($_SERVER['REQUEST_URI']=='/links/') {
	$title = "Ссылки";
}
elseif ($_SERVER['REQUEST_URI']=='/oop/') {
	$title = "Объектно-ориентированное программирование";
}
elseif ($_SERVER['REQUEST_URI']=='/oop/working_php_oop_1.php')  {
	$title = "ООП: практика на занятии";
}
elseif ($_SERVER['REQUEST_URI']=='/oop/working_php_oop_2.php')  {
    $title = "ООП: практика дома";
}
else
$title = "Песочница";
$description = "Песочница. Просто песочница. Проходи дальше";
$keywords = "песочница, PHP, SQL, JavaScript, HTML, CSS, практика, теория";
$robots = "index, follow";


?>
	