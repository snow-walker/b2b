<?php
$this->breadcrumbs = array(
    'Create User',
);

if (Yii::app()->user->checkAccess('admin')) {
    $this->menu = array(
        array('label' => 'List User', 'url' => array('index')),
        array('label' => 'Manage User', 'url' => array('admin')),
    );
}
?>

<h1>Create User</h1>
<?php echo $this->renderPartial('_form', array('model' => $model)); ?>