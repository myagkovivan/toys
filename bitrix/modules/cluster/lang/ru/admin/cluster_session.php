<?
$MESS["CLU_SESSION_NO_SECURITY"] = "Требуется установленный модуль проактивной защиты.";
$MESS["CLU_SESSION_SAVEDB_TAB"] = "Хранение в базе данных";
$MESS["CLU_SESSION_SAVEDB_TAB_TITLE"] = "Включение механизма хранения данных сессий пользователей в базе данных";
$MESS["CLU_SESSION_TITLE"] = "Хранение сессий в базе данных";
$MESS["CLU_SESSION_DB_ON"] = "Данные сессий хранятся в БД модуля безопасности.";
$MESS["CLU_SESSION_DB_OFF"] = "Данные сессий не хранятся в БД модуля безопасности.";
$MESS["CLU_SESSION_DB_BUTTON_OFF"] = "Отключить хранение данных сессий в БД модуля";
$MESS["CLU_SESSION_DB_BUTTON_ON"] = "Включить хранение данных сессий в БД модуля";
$MESS["CLU_SESSION_DB_WARNING"] = "Внимание! При переключении режима хранения сессий все пользователи потеряют авторизацию (данные сессий будут уничтожены).";
$MESS["CLU_SESSION_SESSID_WARNING"] = "Идентификатор сессии не совместим с модулем безопасности. Идентификатор возвращаемый функцией session_id() должен быть не более 32-х символов длиной и содержать только символы латинского алфавита и цифры.";
$MESS["CLU_SESSION_NOTE"] = "<p>При использовании нескольких веб-серверов необходимо настроить поддержку сессии.</p>
<p>Наиболее часто используемые варианты распределения нагрузки на балансировщике:</p>
<p>1) сессия пользователя привязывается к определенному веб-серверу и в дальнейшем обслуживается только им.</p>
<p>2) разные хиты одной сессии обслуживаются разными веб-серверами.<br>
Обязательным условием работоспособности этого сценария является необходимость включения хранения данных сессий в базе данных модуля безопасности.</p>";
?>