<?php

/**
 * Common presenter properties.
 *
 * @author     Roman Sklenář
 * @package    DataGrid\Example
 */
abstract class BasePresenter extends /*Nette\Application\*/Presenter
{
	public $oldLayoutMode = FALSE;
	

	/**
	 * Template factory.
	 * @see libs/Nette/Application/Control#createTemplate()
	 */
	protected function createTemplate()
	{
		$template = parent::createTemplate();
		$template->registerFilter('Nette\Templates\CurlyBracketsFilter::invoke');
		return $template;
	}
}