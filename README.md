<h2>БД</h2>

Хост: 127.0.0.1<br>
Пользователь: gaz<br>
Пароль: gaz<br>
Имя БД: gaz<br>

<br>
<h3>Установка</h3>

<h4>Установите необходимые компоненты с помощью композера</h4>

<code>composer install</code>

<h4>Выполните миграции БД</h4>

<code>./yii migrate</code>

<h4>Импортируйте лог-файлы в БД</h4>
<h5>лог-файлы лежат в папке /test-data/</h5>

<code>./yii import/parse/</code>

<h4>Проконтролируйте результат</h4>

<a href="https://gaz.gabidullin.online/site/table1">Таблица 1</a><br>
<a href="https://gaz.gabidullin.online/site/table2">Таблица 2</a><br>
<a href="https://gaz.gabidullin.online/site/query">Запрос</a><br>
