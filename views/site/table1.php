<?php

/* @var $this yii\web\View */
/* @var $rows LogTable1[] */

use app\models\LogTable1;
use yii\widgets\LinkPager;

$this->title = 'Тестовое задание "PHP-программист"';

?>

    <table class="table table-danger">
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <?php foreach ($rows as $row): ?>
            <tr>
                <td><?= $row->date ?></td>
                <td><?= $row->time ?></td>
                <td><?= $row->ip ?></td>
                <td><?= $row->url_from ?></td>
                <td><?= $row->url_to ?></td>
            </tr>
        <?php endforeach ?>
    </table>


<?php echo LinkPager::widget([
    'pagination' => $pages,
]);