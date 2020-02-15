:: use this file to run your own startup commands 
:: use @ in front of the command to prevent printing the command
 
:: @call "C:\Program Files (x86)\Git/cmd/start-ssh-agent.cmd
:: @set PATH=%CMDER_ROOT%\vendor\whatever;%PATH%
 

:: 使用的PHP版本目錄
@set PHP_VERSION=php-7.0.6-Win32-VC14-x86

:: 基礎變數定義
@set SOFTWARE_ROOT=%CMDER_ROOT%\..\
@set PHP_BIN_ROOT=%SOFTWARE_ROOT%\UwAmp\bin\php\%PHP_VERSION%\
@set COMPOSER_HOME=%SOFTWARE_ROOT%\composer\
@set CMDER_START=%SOFTWARE_ROOT%\UwAmp\www\

:: 設定php目錄至環境變數
@set PATH=%PHP_BIN_ROOT%;%COMPOSER_HOME%;%COMPOSER_HOME%\vendor\bin;%PATH%

:: 切換至UwAmp的www目錄
@cd /d %CMDER_START%