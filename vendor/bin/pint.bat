@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../laravel/pint/builds/pint
php "%BIN_TARGET%" %*
