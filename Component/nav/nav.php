<?php

require '../../vendor/autoload.php';

require '../../Entity/ItemNav.class.php';

$loader = new Twig_Loader_Filesystem('tpl/');
$twig = new Twig_Environment($loader, array(
  'debug' => true,
));
$twig->addExtension(new Twig_Extension_Debug()); // va de paire avec la config "debug" dans l'Environement


$first_lvl_menu = array();
$second_lvl_menu = array();

$item1 = new ItemNav;
$item1->setId(0);
$item1->setTitle("Acceuil");
$item1->setLink("/");
$item1->setSubMenu(true);
$item1->setParentMenu(false);
$item1->setActive("active");
$first_lvl_menu[] = $item1;

$item2 = new ItemNav;
$item2->setId(1);
$item2->setTitle("A propos");
$item2->setLink("/propos");
$item2->setSubMenu(false);
$item2->setParentMenu("0");
$item2->setActive("active");
$first_lvl_menu[] = $item2;

$item3 = new ItemNav;
$item3->setId(2);
$item3->setTitle("Produit");
$item3->setLink("/produit");
$item3->setSubMenu(true);
$item3->setParentMenu(false);
$item3->setActive("active");
$first_lvl_menu[] = $item3;

$item4 = new ItemNav;
$item4->setId(3);
$item4->setTitle("T-shirt");
$item4->setLink("/t-shirt");
$item4->setSubMenu(false);
$item4->setParentMenu("2");
$item4->setActive("active");
$first_lvl_menu[] = $item4;

$item5 = new ItemNav;
$item5->setId(4);
$item5->setTitle("Jean");
$item5->setLink("/jean");
$item5->setSubMenu(false);
$item5->setParentMenu("2");
$item5->setActive("active");
$first_lvl_menu[] = $item5;

$item6 = new ItemNav;
$item6->setId(5);
$item6->setTitle("Autre");
$item6->setLink("/autre");
$item6->setSubMenu(false);
$item6->setParentMenu(false);
$item6->setActive("active");
$first_lvl_menu[] = $item6;

$item7 = new ItemNav;
$item7->setId(6);
$item7->setTitle("Blop");
$item7->setLink("/blop");
$item7->setSubMenu(false);
$item7->setParentMenu("2");
$item7->setActive("active");
$first_lvl_menu[] = $item7;

$item8 = new ItemNav;
$item8->setId(7);
$item8->setTitle("T-shirt");
$item8->setLink("/t-shirt");
$item8->setSubMenu(false);
$item8->setParentMenu("2");
$item8->setActive("active");
$first_lvl_menu[] = $item8;

$item9 = new ItemNav;
$item9->setId(8);
$item9->setTitle("T-shirt");
$item9->setLink("/t-shirt");
$item9->setSubMenu(false);
$item9->setParentMenu("2");
$item9->setActive("active");
$first_lvl_menu[] = $item9;

echo $twig->render('test.html.twig', array(
  'items' => $first_lvl_menu,
  ));
