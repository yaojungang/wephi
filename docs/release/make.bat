@ECHO off 
cls 
color 0a 

SET SVN_URI= https://wephi.googlecode.com/svn/trunk/
SET ZIP_URL="7za.exe"

ECHO ���ڴ� %SVN_URI% �������°汾�ļ�

svn export --force %SVN_URI% wephi

del wephi\core\config.php
del wephi\core\version.php
rmdir "wephi\docs" /s/q
rmdir "wephi\nbproject" /s/q

ping -n 5 127.1>nul


FOR /R wephi %%i in (.) DO (
    ECHO. > %%~fi\\index.htm
)
del wephi\install\index.htm
del wephi\index.htm

ECHO �ļ������ɹ�...

ECHO ��ʼ���
%ZIP_URL% a wephi.zip wephi
ECHO ����ѹ�������

ECHO ɾ����ʱ�ļ�
ping -n 5 127.1>nul
rmdir wephi /s/q

ECHO ��װ�����ɳɹ���

pause