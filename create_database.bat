@echo off

echo Gerando script
echo SELECT pg_terminate_backend(pid) >> ".\createbase.sql"
echo FROM pg_stat_activity >> ".\createbase.sql"
echo WHERE datname='api_marvel'; >> ".\createbase.sql"
echo -- >> ".\createbase.sql"
echo -- >> ".\createbase.sql"
echo CREATE DATABASE api_marvel >> ".\createbase.sql"
echo WITH OWNER postgres  >> ".\createbase.sql"
echo TEMPLATE template0 >> ".\createbase.sql"
echo CONNECTION LIMIT -1; >> ".\createbase.sql"


echo Dropando e recriando banco api_marvel
SET PGPASSWORD=place123
"C:\Program Files\PostgreSQL\10\bin\psql.exe" -U postgres -f ".\createbase.sql"


echo Limpando arquivos temporarios
del ".\createbase.sql"
pause