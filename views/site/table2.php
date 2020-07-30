<?php

/* @var $this yii\web\View */
/* @var $rows LogTable2[] */

use app\models\LogTable2;
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
                <td><?= $row->ip ?></td>
                <td><?= $row->browser ?></td>
                <td><?= $row->os ?></td>
            </tr>
        <?php endforeach ?>
    </table>


<?php echo LinkPager::widget([
    'pagination' => $pages,
]);