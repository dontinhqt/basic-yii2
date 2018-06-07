<?= \nullref\datatable\DataTable::widget([
    'data' => $dataProvider->getModels(),
    'dom' => 'Bfrtip',
    'columns' => [
        'code',
        'name'
    ],

    'buttons' => [
            'copy', 'csv', 'excel', 'pdf'
    ],

]) ?>



<?php 
    /*
    $this->title = 'Countries';
    $this->params['breadcrumbs'][] = $this->title;
    ?>
    <div class="country-index">

        <h1><?= Html::encode($this->title) ?></h1>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <p>
            <?= Html::a('Create Country', ['create'], ['class' => 'btn btn-success']) ?>
        </p>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'code',
                'name',
                'population',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>



    */
?>