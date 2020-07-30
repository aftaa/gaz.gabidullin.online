<?php

/* @var $this yii\web\View */

$this->title = 'Тестовое задание "PHP-программист"';

?>

<code><pre>
    <?= $sql ?>
</pre></code>

<table class="table table-hover table-striped">
    <thead>
    <tr>
        <td>IP-адрес</td>
        <td>Браузер</td>
        <td>ОС</td>
        <td>Первый URL</td>
        <td>Крайний URL</td>
        <td>Уникальных URL</td>
    </tr>
    </thead>
    <tbody>
        <?php foreach ($result as $r): ?>
        <tr>
            <td><?= $r['ip'] ?></td>
            <td><?= $r['browser'] ?></td>
            <td><?= $r['os'] ?></td>
            <td><?= $r['url_first'] ?></td>
            <td><?= $r['url_last'] ?></td>
            <td><?= $r['cnt'] ?></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
