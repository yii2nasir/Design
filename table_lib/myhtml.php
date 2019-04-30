
<?php
require_once('C:\xampp\htdocs\ecomm.local\cg\Table.php');
//echo \HTML\Table::test();

$data = [
    ['Name', 'Color', 'Size'],
    ['Fred', 'Blue', 'Small'],
    ['Mary', 'Red', 'Large'],
    ['John', 'Green', 'Medium']
];

$obj=new \HTML\Table();
echo $obj->generate($data);