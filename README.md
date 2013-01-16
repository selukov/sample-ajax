sample-ajax
===========

Небольшой пример использования технологии ajax в cakephp, пример использует библиотеку jquery, но также может использовать библиотеку prototype

Переключение между библиотеками необходимо раскомментировать  / закомментировать соответствующие строки

в файле default.ctp 
echo $this->Html->script('jquery-1.8.3.min'); 
//echo $this->Html->script('prototype'); 

в файле AppController.php
public $helpers = array('Html','Form','Session','Js' => array('Jquery'),'Paginator');
//public $helpers = array('Html','Form','Session','Js' => array('Prototype'),'Paginator');

