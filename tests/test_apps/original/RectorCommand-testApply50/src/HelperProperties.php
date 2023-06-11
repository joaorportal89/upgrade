<?php
declare(strict_types=1);

use Cake\Controller\Controller;
use Cake\ORM\Behavior;
use Cake\View\Helper\FormHelper;

class CustomFormHelper extends FormHelper
{
    protected $_defaultWidgets = [];

    protected $_defaultConfig = [];

    protected $helpers = [];
}

class ArticlesController extends Controller 
{
    protected $name = 'Articles';

    protected $paginate = [];

    protected $autoRender = false;

    protected $plugin = 'Admin';

    protected $middlewares = [];

    protected $viewClasses = [];
}

class CustomBehavior extends Behavior
{
    protected $_defaultConfig = [];
}
