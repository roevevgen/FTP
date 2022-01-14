<?php
    require_once 'modules/User.php';
    $user = new User('Иванов', 'Иван', 'Иванович');
    $props = ['surname', 'name', 'patronymic'];
    echo $user->{$props[0]};
    