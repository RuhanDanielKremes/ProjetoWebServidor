<?php
    /*BANCO DE DADOS CADASTRO*/ 
    $DB = [
        'name' => ['Ruhan', 'user1', 'user2', 'user3', 'user4', 'user5', 'user6', 'user7', 'user8', 'kaue', 'Julia'],
        'email' => ['admin@gmail.com', 'user1@gmail.com', 'user2@gmail.com', 'user3@gmail.com', 'user4@gmail.com', 'user5@gmail.com', 'user6@gmail.com', 'user7@gmail.com', 'user8@gmail.com', 'user9@gmail.com'],
        'password' => ['1234', 'User1Password', 'User2Password', 'User3Password', 'User4Password', 'User5Password', 'User6Password', 'User7Password', 'User8Password', '4321','Julia123'],
        'phone' => ['+1 00 0000 0000', '+1 11 1111 1111', '+1 22 2222 2222', '+1 33 3333 3333', '+1 44 4444 4444', '+1 55 5555 5555', '+1 66 6666 6666', '+1 77 7777 7777', '+1 88 8888 8888', '+1 99 9999 9999'],
        'role' => ['admin', 'user', 'user', 'user', 'user', 'user', 'user', 'user', 'user', 'admin', 'admin'],
        'created_at' => ['created_at', 'created_at', 'created_at', 'created_at', 'created_at', 'created_at', 'created_at', 'created_at', 'created_at', 'created_at']
    ];

    /* Adicionei um banco de dados para os produtos para poder 
        manipular no carrinho facilmente, visto que se fizer estático com html e css a manipulação ficaria complexa
        e poderiamos nos deparar com um problema de lógica lá na frente 
        Optei apenas por fazer a descrição estática -JC
        */

    /*BANCO DE DADOS DOS PRODUTOS*/
    $DB_PRODUTOS= [
        'image_product' => ['../../public/images/product-1.png','../../public/images/product-2.png','../../public/images/product-3.png','../../public/images/product-4.png', '../../public/images/product-5.png', '../../public/images/product-6.png','../../public/images/product-7.png', '../../public/images/product-8.png', '../../public/images/product-9.png'],
        'name_product' => ['Notebook Dell Aspire', 'Notebook Dell Inspiron 15', 'Notebook Dell G15', 'Kit Gamer', 'Placa de video GTX 1650', 'Controle PS5', 'Cadeira Gamer', 'Iphone 13', 'Galaxy S23 Ultra'],
        'price_product' => [3950.00, 2500, 5000, 250, 1200, 500, 650, 3900, 3800],
        'quantity_product' => [5, 3, 3, 10, 5, 6, 3, 5, 7],
        'code' => ['0001','0002','0003','0004','0005','0006','0007','0008','0009',]
    ];

    /*Minha ideia é armazenar todos registros de produtos excluidos e além disso armazenar o user que excluiu pra fazer sistema mais seguro*/
    $DB_PRODUTOS_EXCLUIDOS = [];
    

    $DB_paginas_atorizada_para_usuarios = array('src/index.php', 'src/view/ProductUserView.php', 'src/view/CartView.php');
?>