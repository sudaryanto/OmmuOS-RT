<?php
/**
 * Ommu Tags (ommu-tags)
 * @var $this GlobaltagController
 * @var $model OmmuTags
 * @var $form CActiveForm
 * version: 1.3.0
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @copyright Copyright (c) 2012 Ommu Platform (opensource.ommu.co)
 * @link https://github.com/ommu/core
 * @contact (+62)856-299-4114
 *
 */

	$this->breadcrumbs=array(
		'Ommu Tags'=>array('manage'),
		'Create',
	);
?>

<?php echo $this->renderPartial('/global_tag/_form', array(
	'model'=>$model,
)); ?>
	