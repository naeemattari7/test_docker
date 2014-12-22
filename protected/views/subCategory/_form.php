<?php
/* @var $this SubCategoryController */
/* @var $model SubCategory */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sub-category-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'category_id'); ?>
		<?php echo $form->textField($model,'category_id'); ?>
		<?php echo $form->error($model,'category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sub_category'); ?>
		<?php echo $form->textArea($model,'sub_category',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'sub_category'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lang'); ?>
		<?php echo $form->textField($model,'lang',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'lang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parent_sub_category_id'); ?>
		<?php echo $form->textField($model,'parent_sub_category_id'); ?>
		<?php echo $form->error($model,'parent_sub_category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'child_category_available'); ?>
		<?php echo $form->textField($model,'child_category_available'); ?>
		<?php echo $form->error($model,'child_category_available'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_enabled'); ?>
		<?php echo $form->textField($model,'is_enabled'); ?>
		<?php echo $form->error($model,'is_enabled'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->