<?php
include ("jpgraph.php");
include ("jpgraph_pie.php");
include ("jpgraph_pie3d.php");

function GraficoPizza($title, $fundo, $tamanho_hor, $tamanho_vert)
{


$data = array("10","20","30");                     //quantidades que cada fatia representará no gráfico
$nomes = array("Rafael","Nikolau","Kage");         //nome de cada item da legenda do gráfico
$tamanho_hor = 400;                                //tamanho horizontal do gráfico
$tamanho_vert = 200;                               //tamanho vertical do gráfico
$fundo = 'black';                              //cor de fundo do gráfico
$title = 'TESTE DO TESTE TESTADO';


$graph = new PieGraph($tamanho_hor, $tamanho_vert,"auto");
$graph->img->SetAntiAliasing();
$graph->SetMarginColor($fundo);
//$graph->SetShadow();   ->   ATIVA SOMBRA NO GRÁFICO

// Setup margin and titles
$graph->title->Set($title);								//NOME DO TÍTULO DO GRÁFICO
$graph->title->SetColor("white"); 						//COR DO TÍTULO DO GRÁFICO
$p1 = new PiePlot3D($data);
$p1->SetSize(0.35);
$p1->SetCenter(0.4);                                    //POSICIÇÃO O GRÁFICO NA ÁREA DE PLOTAGEM

// Setup slice labels and move them into the plot
$p1->value->SetFont(FF_FONT1,FS_BOLD);
$p1->value->SetColor("white");                          //COR DO TEXTO DE PORCENTAGEM NO GRÁFICO
$p1->SetLabelPos(0.2);

$p1->SetLegends($nomes);

// Explode all slices
$p1->ExplodeAll();

$graph->Add($p1);
$graph->Stroke();
}


GraficoPizza($title, $fundo, $tamanho_hor, $tamanho_vert);
?>