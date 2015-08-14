<?php namespace Monochro\Html;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Monochro\Html\FormBuilder
 */
class FormFacade extends Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'form'; }

}
