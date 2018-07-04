@echo off
if "%PHPBIN%" == "" set PHPBIN=D:\wamp\bin\php\php7.2.4\php.exe
"%PHPBIN%" "D:\wamp\www\symfony\composer.phar" %*