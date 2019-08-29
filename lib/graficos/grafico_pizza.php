<?php
include ("jpgraph.php");
include ("jpgraph_pie.php");
include ("jpgraph_pie3d.php");

function GraficoPizza($title, $fundo, $tamanho_hor, $tamanho_vert)
{


$data = array("10","20","30");                     //quantidades que cada fatia representar� no gr�fico
$nomes = array("Rafael","Nikolau","Kage");         //nome de cada item da legenda do gr�fico
$tamanho_hor = 400;                                //tamanho horizontal do gr�fico
$tamanho_vert = 200;                               //tamanho vertical do gr�fico
$fundo = 'black';                              //cor de fundo do gr�fico
$title = 'TESTE DO TESTE TESTADO';


$graph = new PieGraph($tamanho_hor, $tamanho_vert,"auto");
$graph->img->SetAntiAliasing();
$graph->SetMarginColor($fundo);
//$graph->SetShadow();   ->   ATIVA SOMBRA NO GR�FICO

// Setup margin and titles
$graph->title->Set($title);								//NOME DO T�TULO DO GR�FICO
$graph->title->SetColor("white"); 						//COR DO T�TULO DO GR�FICO
$p1 = new PiePlot3D($data);
$p1->SetSize(0.35);
$p1->SetCenter(0.4);                                    //POSICI��O O GR�FICO NA �REA DE PLOTAGEM

// Setup slice labels and move them into the plot
$p1->value->SetFont(FF_FONT1,FS_BOLD);
$p1->value->SetColor("white");                          //COR DO TEXTO DE PORCENTAGEM NO GR�FICO
$p1->SetLabelPos(0.2);

$p1->SetLegends($nomes);

// Explode all slices
$p1->ExplodeAll();

$graph->Add($p1);
$graph->Stroke();
}


GraficoPizza($title, $fundo, $tamanho_hor, $tamanho_vert);
?>