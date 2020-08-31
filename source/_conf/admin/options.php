<?php
define("DB_UPLOADS", "/data/db/");

$adminModules = array(
    "server" => array(
        "active" => true,
        "aliasMenu" => "Сервер",
        "altText" => "Настройки подключения к серверу и базе данных",
    ),
    "sql" => array(
        "active" => true,
        "aliasMenu" => "SQL",
        "altText" => "SQL-инъекции. Портировать запрос на сервер и в базу данных",
    ),
    "adminUsers" => array(
        "active" => true,
        "aliasMenu" => "Пользователи",
        "altText" => "Список пользователей, добавить или удалить пользователя",
    ),
    "tables" => array(
        "active" => true,
        "aliasMenu" => "Таблицы",
        "altText" => "Операции с таблицами: создание, удаление, очистка, резервные копии",
    ),
    "queryPrint" => array(
        "active" => true,
        "aliasMenu" => "Печать запроса",
        "altText" => "Вывод содержимого запроса Select",
    )
);