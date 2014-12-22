<?php
/* @var $this DetailsController */
/* @var $model Details */
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
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lang'); ?>
		<?php echo $form->textField($model,'lang',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sub_category_id'); ?>
		<?php echo $form->textField($model,'sub_category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'detail_type'); ?>
		<?php echo $form->textField($model,'detail_type'); ?>
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