<?php

//Kein Direktzugriff
defined('_JEXEC') or die;

//Einbinden der controller Datei der Download Komponente
require_once (JPATH_COMPONENT.DS.'controller.php');

//erzeugen eines Controller Objektes
$controller = JController::getInstance('downloadformular');
$controller->execute(JRequest::getCmd('task'));
$controller->redirect();
?>