<?php
    
header('Content-Type: text/html; charset=utf-8');

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        if (!empty($_GET['save'])) {
            print ('<div class="save has-text-info">Спасибо, данные отправлены в базу данных.</div>');
        }   
        include ('form.php');
        exit();
    }
    
    $errors = false;
    
    if (empty($_POST['name1'])) {
        print ('Введите свое имя.<br/>');
        $errors = true;
    }
    
    if (empty($_POST['email1'])) {
        print ('Введите свой email.<br>');
        $errors = true;
    }
    
    if (empty($_POST['field4'])) {
        print ('Выберите хотя бы одну сверхспособность.<br>');
        $errors = true;
    } else {
        $powers = serialize($_POST['field4']);
    }
    
    if (empty($_POST['field2'])) {
        print ('Введите что-нибудь о себе.<br>');
        $errors = true;
    }
    
    if (empty($_POST['check1'])) {
        print ('Вы не можете отправить форму не согласившись с контрактом.<br>');
        $errors = true;
    }
    
    if ($errors) { exit(); }
    
    $user = 'u20983'; $pass = '3425454';
    
    $db = new PDO('mysql:host=localhost;dbname=u20983', $user, $pass, array(
    PDO::ATTR_PERSISTENT => true
    ));
    
    try {
        $stmt = $db->prepare("INSERT INTO ex3 SET name = ?, email = ?, year = ?, sex = ?, limbs = ?, powers = ?, bio = ?");
        $stmt->execute(array(
            $_POST['name1'],
            $_POST['email1'],
            $_POST['date1'],
            $_POST['radio1'],
            $_POST['radio2'],
            $powers,
            $_POST['field2'],
        ));
    }
    catch(PDOException $e) {
        print ('Ошибка: ' . $e->getMessage());
        exit();
    }
    
header('Location: ?save=1');