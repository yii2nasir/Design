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

//$obj->clear(); //unset previous data

$tbl=new \HTML\Table();

$tbl->set_heading(['Name', 'Color', 'Size']);
$tbl->add_row(['Fred', '<strong>Blue</strong>', 'Small']);
$tbl->add_row(['Mary', 'Red', 'Large']);
$tbl->add_row(['John', 'Green', 'Medium']);
//$tbl->function = 'htmlspecialchars';
echo $tbl->generate();


/**************CHANGE DESIGN***********/
////////////////////////////////////////



$template = array(
    'table_open'            => '<table border="0" cellpadding="4" cellspacing="0">',

    'thead_open'            => '<thead>',
    'thead_close'           => '</thead>',

    'heading_row_start'     => '<tr>',
    'heading_row_end'       => '</tr>',
    'heading_cell_start'    => '<th>',
    'heading_cell_end'      => '</th>',

    'tbody_open'            => '<tbody>',
    'tbody_close'           => '</tbody>',

    'row_start'             => '<tr>',
    'row_end'               => '</tr>',
    'cell_start'            => '<td>',
    'cell_end'              => '</td>',

    'row_alt_start'         => '<tr>',
    'row_alt_end'           => '</tr>',
    'cell_alt_start'        => '<td>',
    'cell_alt_end'          => '</td>',

    'table_close'           => '</table>'
);

$tbl->set_template($template);

//......................................................................................................
//.7777777777....AAAAA.....RRRRRRRRRR.....CCCCCCC....HHHH...HHHH..EEEEEEEEEEE.RRRRRRRRRR....SSSSSSS.....
//.7777777777....AAAAA.....RRRRRRRRRRR...CCCCCCCCC...HHHH...HHHH..EEEEEEEEEEE.RRRRRRRRRRR..SSSSSSSSS....
//......7777....AAAAAA.....RRRRRRRRRRR..CCCCCCCCCCC..HHHH...HHHH..EEEEEEEEEEE.RRRRRRRRRRR..SSSSSSSSSS...
//......7777....AAAAAAA....RRRR...RRRRR.CCCC...CCCCC.HHHH...HHHH..EEEE........RRRR...RRRRRRSSSS..SSSS...
//.....7777....AAAAAAAA....RRRR...RRRRRRCCC.....CCC..HHHH...HHHH..EEEE........RRRR...RRRRRRSSSS.........
//....77777....AAAAAAAA....RRRRRRRRRRR.RCCC..........HHHHHHHHHHH..EEEEEEEEEE..RRRRRRRRRRR..SSSSSSS......
//....7777.....AAAA.AAAA...RRRRRRRRRRR.RCCC..........HHHHHHHHHHH..EEEEEEEEEE..RRRRRRRRRRR...SSSSSSSSS...
//....7777....AAAAAAAAAA...RRRRRRRR....RCCC..........HHHHHHHHHHH..EEEEEEEEEE..RRRRRRRR........SSSSSSS...
//...7777.....AAAAAAAAAAA..RRRR.RRRR...RCCC.....CCC..HHHH...HHHH..EEEE........RRRR.RRRR..........SSSSS..
//...7777.....AAAAAAAAAAA..RRRR..RRRR...CCCC...CCCCC.HHHH...HHHH..EEEE........RRRR..RRRR..RSSS....SSSS..
//...7777....7AAA....AAAA..RRRR..RRRRR..CCCCCCCCCCC..HHHH...HHHH..EEEEEEEEEEE.RRRR..RRRRR.RSSSSSSSSSSS..
//...7777....7AAA.....AAAA.RRRR...RRRRR..CCCCCCCCCC..HHHH...HHHH..EEEEEEEEEEE.RRRR...RRRRR.SSSSSSSSSS...
//...7777...77AAA.....AAAA.RRRR....RRRR...CCCCCCC....HHHH...HHHH..EEEEEEEEEEE.RRRR....RRRR..SSSSSSSS....
//......................................................................................................
