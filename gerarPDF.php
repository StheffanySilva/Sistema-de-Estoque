<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include './fpdf/fpdf.php';
include './conexao.php';

$produto = selectAllProduto();

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,10,utf8_decode('Relatório de cadastros'),0,0, "C");
$pdf->Ln(15);

$pdf->SetFont("Arial","B",10);
$pdf->SetLeftMargin(38);
$pdf->SetFillColor(12, 123, 203);
$pdf->Cell(40,7,"Nome",1,0,"C",1);
$pdf->Cell(40,7, utf8_decode("Preço"),1,0,"C",1);
$pdf->Cell(40,7,"Quantidade",1,0,"C",1);
$pdf->Ln();

foreach ($produto as $produto){
    $pdf->SetFont("Arial", '',10);
    $pdf->Cell(40,7,utf8_decode($produto["nome"]),1,0,"C");
    $pdf->Cell(40,7,utf8_decode($produto["preco"]),1,0,"C");
    $pdf->Cell(40,7,($produto["estoque"]),1,0,"C");
    
    $pdf->Ln();
}

$pdf->Output();