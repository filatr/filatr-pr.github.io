﻿<?php include "../template/inc/header.php"; ?>
<h1>Объектно-ориентированное программирование</h1>
    <h2>Источники</h2>
<ul>
    <li><a href="http://www.php.su/learnphp/phpoo/" target="_blank">PHP и ООП</a></li>
    <li><a href="https://www.php.net/manual/ru/language.oop5.magic.php" target="_blank">Магические методы</a></li>
    <li><a href="https://www.internet-technologies.ru/articles/magicheskie-metody-php.html" target="_blank">Магические методы PHP</a></li>
    <li><a href="https://www.php.net/manual/ru/language.oop5.visibility.php" target="_blank">Область видимости</a></li>
</ul>
<h2>Основы ООП</h2>
<p>В последнее время идея объектно-ориентированного программирования (ООП), кардинально новая идеология написания программ, все более занимает умы программистов.</p>
<p>Объектно-ориентированные программы более просты и мобильны, их легче модифицировать и сопровождать, чем их "традиционных" собратьев. Кроме того, похоже, сама идея объектной ориентированности при грамотном ее использовании позволяет программе быть даже более защищенной от различного рода ошибок, чем это задумывал программист в момент работы над ней. Однако ничего не дается даром: сами идеи ООП довольно трудны для восприятия "с нуля", поэтому до сих пор очень большое количество программ (различные системы Unix, Apache, Perl, да и сам <strong>PHP</strong>) все еще пишутся на старом добром "объектно-неориентированном" Си.</p>
<p>PHP до недавнего времени обеспечивал лишь некоторую поддержку ООП. Однако, после выхода PHP5 поддержка ООП в PHP стала практически полной.</p>
<p>Стратегию ООП лучше всего описать как смещение приоритетов в процессе программирования от функциональности приложения к структурам данных. Это позволяет программисту моделировать в создаваемых приложениях реальные объекты и ситуации. Технология ООП обладает тремя главными преимуществами:</p>
<ul>
  <li><span>она проста для понимания: ООП позволяет мыслить категориями повседневных объектов; </span>
  </li><li><span>повышенно надежна и проста для сопровождения — правильное проектирование обеспечивает простоту расширения и модификации объектно-ориентированных программ. Модульная структура позволяет вносить независимые изменения в разные части программы, сводя к минимуму риск ошибок программирования;</span>
  </li><li>ускоряет цикл разработки — <ins>модульность</ins> и здесь играет важную роль, поскольку различные компоненты объектно-ориентированных программ можно легко использовать в других программах, что уменьшает избыточность кода и снижает риск внесения ошибок при копировании.</li>
</ul>
<p>Специфика ООП заметно повышает эффективность труда программистов и позволяет им создавать более мощные, масштабируемые и эффективные приложения.</p>
<p>Объектно-ориентированное программирование основано на:</p>
<ul>
  <li><div class="spoiler_v2">
<a href="#" class="spoiler-trigger"><span>Инкапсуляции;</span></a>
<div class="spoiler-block">
<p>Инкапсуляция - это механизм, объединяющий данные и обрабатывающий их код как единое целое.</p>
<p>Многие преимущества ООП обусловлены одним из его фундаментальных принципов — инкапсуляцией. Инкапсуляцией называется включение различных мелких элементов в более крупный объект, в результате чего программист работает непосредственно с этим объектом. Это приводит к упрощению программы, поскольку из нее исключаются второстепенные детали.</p>
<p>Инкапсуляцию можно сравнить с работой автомобиля с точки зрения типичного водителя. Многие водители не разбираются в подробностях внутреннего устройства машины, но при этом управляют ею именно так, как было задумано. Пусть они не знают, как устроен двигатель, тормоз или рулевое управление, — существует специальный интерфейс, который автоматизирует и упрощает эти сложные операции. Сказанное также относится к инкапсуляции и ООП — многие подробности "внутреннего устройства" скрываются от пользователя, что позволяет ему сосредоточиться на решении конкретных задач. В ООП эта возможность обеспечивается классами, объектами и различными средствами выражения иерархических связей между ними.</p>
</div>
</div></li>
  <li><div class="spoiler_v2">
<a href="#" class="spoiler-trigger"><span>Полиморфизме;</span></a>
<div class="spoiler-block">
<p>Полиморфизм позволяет использовать одни и те же имена для похожих, но технически разных задач. Главным в полиморфизме является то, что он позволяет манипулировать объектами путем создания стандартных интерфейсов для схожих действий. Полиморфизм значительно облегчает написание сложных программ.</p>
</div>
</div></li>
  <li><div class="spoiler_v2">
<a href="#" class="spoiler-trigger"><span>Наследование.</span></a>
<div class="spoiler-block">
<p>Наследование позволяет одному объекту приобретать свойства другого объекта, не путайте с копированием объектов. При копировании создается точная копия объекта, а при наследовании точная копия дополняется уникальными свойствами, которые характерны только для производного объекта.</p>
</div>
</div></li>
</ul>
<hr>
    <h2>Свойства и  методы</h2>
    <p>Класс - это базовое понятие в объектно-ориентированном программировании (ООП). Классы образуют синтаксическую базу ООП. Их можно рассматривать как своего рода "контейнеры" для логически связанных данных и функций (обычно называемых методами — см. ниже). Если сказать проще, то класс - это своеобразный тип данных.</p>
    <p>Экземпляр класса - это объект. Объект - это совокупность данных (свойств) и функций (методов) для их обработки. Свойства и методы называются членами класса. Вообще, объектом является все то, что поддерживает инкапсуляцию.</p>
    <p>Если класс можно рассматривать как тип данных, то объект — как переменную (по аналогии). Скрипт может одновременно работать с несколькими объектами одного класса, как с несколькими переменными.</p>
    <p>Пример кода</p>
<pre><code>
// Создаем новый класс Coor:
class Coor {
// данные (свойства):
var $name;
var $addr;
// методы:
 function Name() {
 echo "&lt;h3&gt;John&lt;/h3&gt;";
 }
}
// Создаем объект класса Coor:
$object = new Coor;
    </code></pre>

    <hr>
    <h2>Магические методы</h2>
    <p>Магические методы PHP позволяют разработчикам совершать удивительные трюки в объектно-ориентированном PHP. Магические методы срабатывают в ответ на определенные действия или события.</p>
    <p>Существуют определенные характеристики метода конструктора, которые отличают его от других и делают его уникальным. Во-первых, он вызывается только один раз в момент создания объекта, во-вторых, мы не можем вызвать его явно. Он автоматически вызывается, когда создается экземпляр класса, и используется для инициализации переменных-членов. Мы видим, что этот метод отличается от других, используемых в ООП PHP. По таким характеристикам магические методы и выделяют в отдельную группу.</p>
    <p>В общем, магические методы PHP — это предопределенные методы, выполняемые при каком-либо конкретном событии, они автоматически вызываются, без вызова функции, когда удовлетворяется какое-либо из заданных условий. Например, __construct всегда вызывается при создании экземпляра класса. Магические методы весьма полезны, они предоставляют удивительный функционал для объектно-ориентированного программирования на PHP.</p>
    <hr>
    <h2>Приватность и публичность в классах</h2>
    <p>Область видимости свойства, метода или константы (начиная c PHP 7.1.0) может быть определена путем использования следующих ключевых слов в объявлении: public, protected или private.</p>
<ul>
    <li>Доступ к свойствам и методам класса, объявленным как <span class="like_b">public (общедоступный)</span>, разрешен отовсюду.</li>
    <li>Модификатор <span class="like_b">protected (защищенный)</span> разрешает доступ самому классу, наследующим его классам и родительским классам.</li>
    <li>Модификатор <span class="like_b">private (закрытый)</span> ограничивает область видимости так, что только класс, где объявлен сам элемент, имеет к нему доступ.</li>
</ul>
    <hr>
<h2>Практика</h2>
<ul>
    <li><a href="/oop/working_php_oop_1.php">Практика на занятии</a></li>
    <li><a href="/oop/working_php_oop_2.php">Домашняя практика</a></li>
</ul>






<?php include "../template/inc/footer.php"; ?>