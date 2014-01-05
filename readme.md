## ZendRF

This is a collection of Zend Framework extension classes to complement Racerfish's Zend Framework project boilerplate.

## Contents

The following components are included in this library

### Controller

Various Standard Plugins for Layout management and multi language and multi navigation support

### Export

Contains a CSV Export Interface

### Form

Basic form Templates for Twitter Bootstrap and jQuery Mobile as well as other default Form Templates

### Model

Basic Model Prototypes for standard Database CRUD and i18n functionality

### Social

Social Platform Plugins for Feed Integration

### Validate

Form Validation Plugins

### View

View Helpers for HTML Boilerplate Snippets

## Installation/Usage

This package is supposed to be installed in your local Zend Framework Project's library folder. Make sure to include the directory in your application.ini as a namespace:

	autoloaderNamespaces.app[] = "RF"

If you intend to use any of the View Helpers, make sure to add those in your root Bootstrap File

	$view->addHelperPath(APPLICATION_PATH . '/../library/RF/View/Helper', 'RF_View_Helper');   