## ZendRF

This is a collection of Zend Framework extension classes to complement Racerfish's Zend Framework project boilerplate.

## Installation/Usage

This package is supposed to be installed in your local Zend Framework Project's library folder. Make sure to include the directory in your application.ini as a namespace:

	autoloaderNamespaces.app[] = "RF"

If you intend to use any of the View Helpers, make sure to add those in your root Bootstrap File

	$view->addHelperPath(APPLICATION_PATH . '/../library/RF/View/Helper', 'RF_View_Helper');   