<?php
/**
 * FrontGoogleAnalytics
 * version: 1.2.0
 * 
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @copyright Copyright (c) 2012 Ommu Platform (opensource.ommu.co)
 * @link https://github.com/ommu/Core
 * @contact (+62)856-299-4114
 *
 */
class FrontGoogleAnalytics extends CWidget
{

	public function init() {
	}

	public function run() {
		$this->renderContent();
	}

	protected function renderContent() {
		
		$model = OmmuSettings::model()->findByPk(1,array(
			'select' => 'site_url, analytic, analytic_id',
		));

		$this->render('front_google_analytics',array(
			'model' => $model,
		));	
	}
}
