:: use this file to run your own startup commands 
:: use @ in front of the command to prevent printing the command
 
:: @call "C:\Program Files (x86)\Git/cmd/start-ssh-agent.cmd
:: @set PATH=%CMDER_ROOT%\vendor\whatever;%PATH%
 

:: �ϥΪ�PHP�����ؿ�
@set PHP_VERSION=php-7.0.6-Win32-VC14-x86

:: ��¦�ܼƩw�q
@set SOFTWARE_ROOT=%CMDER_ROOT%\..\
@set PHP_BIN_ROOT=%SOFTWARE_ROOT%\UwAmp\bin\php\%PHP_VERSION%\
@set COMPOSER_HOME=%SOFTWARE_ROOT%\composer\
@set CMDER_START=%SOFTWARE_ROOT%\UwAmp\www\

:: �]�wphp�ؿ��������ܼ�
@set PATH=%PHP_BIN_ROOT%;%COMPOSER_HOME%;%COMPOSER_HOME%\vendor\bin;%PATH%

:: ������UwAmp��www�ؿ�
@cd /d %CMDER_START%