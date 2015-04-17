<?php
// zip code
$z = new ZipArchive();
$z->open("test.zip", ZipArchive::CREATE);
file_put_contents("aaa","12");
$z->addFile("/home/wangxiaoyu/aaa");
$z->close();

// pdf code
$pdf = pdf_new();
pdf_begin_document($pdf, "test.pdf", "");
pdf_begin_page_ext($pdf, 595, 842, "");
pdf_set_parameter($pdf, "textformat", "utf8");

$fontdir = "/usr/share/fonts/yahei";
pdf_set_parameter($pdf, "FontOutline", "yahei=$fontdir/YaHeiConsolasHybrid.ttf");

$yahei = pdf_load_font($pdf, "yahei", "host", "embedding=true");
pdf_setfont($pdf, $yahei, 10);

pdf_show_xy($pdf, "There are more things in heaven and earth, Horatio,",50, 750);
pdf_show_xy($pdf, "than are dreamt of in your philosophy", 50,730);
pdf_end_page_ext($pdf, "");
pdf_end_document($pdf, "");