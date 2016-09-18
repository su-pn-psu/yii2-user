<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel suPnPsu\user\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ระบบจัดการผู้ใช้';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class='box box-info'>
    <div class='box-header'>
        <h3 class='box-title'><?= Html::encode($this->title) ?></h3>
    </div><!--box-header -->

    <div class='box-body pad'>

        <div class="table-responsive">
            <?=
            GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    //['class' => 'yii\grid\SerialColumn'],

                        [
                        'attribute' => 'id',
                        'headerOptions' => ['style' => 'width: 60px;']
                    ],
                    'username',
                    'email:email',
                        [
                        'attribute' => 'profile.fullname',
                        'value' => 'profile.fullname',
                        'label' => 'Fullname',
                    ],
                        [
                        'attribute' => 'status',
                        'value' => 'statusName',
                        'filter' => Html::activeDropDownList($searchModel, 'status', $searchModel->statusList, ['class' => 'form-control', 'prompt' => '-- All --']),
                    ],
                    // 'created_at',
                    // 'updated_at',
                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]);
            ?>
        </div>
        
        
    </div><!--box-body pad-->
</div><!--box box-info-->

