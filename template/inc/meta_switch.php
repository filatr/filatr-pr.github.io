<?php
switch ($_SERVER['REQUEST_URI']) {
		case "/":
			$title = "Песочница";
		break;
		case "/study_theory/":
			$title = "Теория";
		break;
		case "/study_theory/theory-js.php":
			$title = "JS: теория";
		break;
		case "/study_theory/theory-php.php":
			$title = "PHP: теория";
		break;
		case "/study_theory/theory-bd-sql.php":
			$title = "БД и SQL запросы";
		break;
		case "/study_theory/theory-forms.php":
			$title = "Формы: теория";
		break;
		case "/study_theory/theory-github.php":
			$title = "Заметки о командной строке";
		break;
		case "/study_theory/theory-other.php":
			$title = "Разное";
		break;
		case "/study_working/":
			$title = "Практика";
		break;
		case "/study_working/act.php":
			$title = "act";
		break;
		case "/study_working/action.php":
			$title = "action";
		break;
		case "/study_working/script.php":
			$title = "script";
		break;
		case "/study_working/working_bd_homework_1.php":
		case "/study_working/working_bd_homework_2.php":
			$title = "Практика с БД";
		break;
		case "/study_working/working_cookies.php":
			$title = "Сессии и Cookies";
		break;
		case "/study_working/working_form_examples.php":
			$title = "Формы";
		break;
		case "/study_working/working_github.php":
			$title = "Работаем в комендной строке с текстовым редактором nano";
		break;
		case "/study_working/working_js_ function.php":
			$title = "Юзаем function";
		break;
		case "/study_working/working_js_calc.php":
			$title = "Простейший калькулятор";
		break;
		case "/study_working/working_js_final_assignment.php":
			$title = "Итоговое дз по JS";
		break;
		case "/study_working/working_js_objects.php":
			$title = "Обекты";
		break;
		case "/study_working/working_js_objects_this.php":
			$title = "Расматриваем на практике this";
		break;
		case "/study_working/working_php_0804.php":
		case "/study_working/working_php_other.php":
			$title = "Первое практическое знакомство с PHP";
		break;
		case "/study_working/working_php_file_system.php":
			$title = "Работа с файловой системой";
		break;
		case "/study_working/working_php_regular.php":
			$title = "Регулярные выражения";
		break;
		case "/admin/":
			$title = "Админка";
		break;
		case "/links/":
			$title = "Ссылки";
		break;
		case "/oop/":
			$title = "Объектно-ориентированное программирование";
		break;
	}
?>
	