<?php

require '../../vendor/autoload.php';

require '../../Entity/ItemNav.class.php';

$loader = new Twig_Loader_Filesystem('tpl/');
$twig = new Twig_Environment($loader);

$array_items_menu = array();

$item1 = new ItemNav;
$item1->setId(0);
$item1->setTitle("Acceuil");
$item1->setLink("/");
$item1->setSubMenu(true);
$item1->setParentMenu(false);
$item1->setActive("active");
$array_items_menu[] = $item1;

$item2 = new ItemNav;
$item2->setId(1);
$item2->setTitle("A propos");
$item2->setLink("/propos");
$item2->setSubMenu(false);
$item2->setParentMenu("0");
$item2->setActive("active");
$array_items_menu[] = $item2;

$item3 = new ItemNav;
$item3->setId(2);
$item3->setTitle("Produit");
$item3->setLink("/produit");
$item3->setSubMenu(true);
$item3->setParentMenu(false);
$item3->setActive("active");
$array_items_menu[] = $item3;

$item4 = new ItemNav;
$item4->setId(3);
$item4->setTitle("T-shirt");
$item4->setLink("/t-shirt");
$item4->setSubMenu(false);
$item4->setParentMenu("2");
$item4->setActive("active");
$array_items_menu[] = $item4;


echo $twig->render('test.html.twig', array(
  'items' => $array_items_menu,
  ));