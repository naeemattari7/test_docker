<?php
/* @var $this SubCategoryController */
/* @var $model SubCategory */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'category_id'); ?>
		<?php echo $form->textField($model,'category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sub_category'); ?>
		<?php echo $form->textArea($model,'sub_category',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lang'); ?>
		<?php echo $form->textField($model,'lang',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'parent_sub_category_id'); ?>
		<?php echo $form->textField($model,'parent_sub_category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'child_category_available'); ?>
		<?php echo $form->textField($model,'child_category_available'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_enabled'); ?>
		<?php echo $form->textField($model,'is_enabled'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->