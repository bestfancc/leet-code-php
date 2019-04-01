<?php
namespace Algo_08;

require_once '../../vendor/autoload.php';

use Algo_08\StackOnLinkedList;
use Algo_06\SingleLinkedListNode;

$stack = new StackOnLinkedList();
//exit;


$stack->pushData(1);
$stack->pushData(2);
$stack->pushData(3);
$stack->pushData(4);
var_dump($stack->getLength());
$stack->printSelf();
$topNode = $stack->top();
var_dump($topNode->data);
$stack->pop();
$stack->printSelf();
$stack->pop();
$stack->printSelf();
var_dump($stack->getLength());
$stack->pop();
$stack->pop();
$stack->printSelf();