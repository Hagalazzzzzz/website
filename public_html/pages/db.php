﻿<?php // <==================================================================================================================
// ==================================================> ------------- <======================================================
// ===============================================> © Copyright barik <==================> Скрипт: ПОДКЛЮЧЕНИЕ К БАЗЕ ДАННЫХ
// ==================================================> ------------- <======================================================
// ========================================================================================================================= 
function connectDB (){ // =============================================================> Открываем соединение с базой данных
// =====================================================================> Определяем константы для соединения с базой данных
    define('DB_HOST', 'localhost'); // =======================================================================> Имя хостинга
    define('DB_USER', 'f0381178_Recipe'); // ===================================================================================> Логин
    define('DB_PASS', 'DBReipe'); // ==================================================================================> Пароль
    define('DB_NAME', 'f0381178_Recipe'); // =========================================================================> Имя базы данных
    // =================================================================================> Пытаемся соединится с базой данных
    $dbconn = mysql_connect(DB_HOST, DB_USER, DB_PASS) // ====================================================> Подключаемся
        or die("Ошибка соединения с базой данных! " . mysql_error()); // =============> Если подключения нет - выдаём ошибку
    mysql_select_db(DB_NAME); // ========================================================================> Выбрираем таблицу
    mysql_query('SET NAMES utf8'); // =============================================================> Устанавливаем кодировку
    return $dbconn;} // ==================================================================> Возвращаем дескриптор соединения
function closeDB($dbconn){mysql_close($dbconn);} // ===================================> Закрываем соединение с базой данных
// =========================================================================================================================
// =========================================================================================================================
// ===================================================================================> // Скрипт: ПОДКЛЮЧЕНИЕ К БАЗЕ ДАННЫХ
// =========================================================================================================================
// =====================================================================================================================> ?>