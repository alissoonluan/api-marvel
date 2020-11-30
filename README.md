## API

Api baseada na API da Marvel


## Tópicos
1. [Iniciando](#iniciando)
2. [Pré-Requisitos](#prerequisitos)
3. [Instalação](#instalacao)
4. [Rodar API](#rodarapi)
5. [Error Codes](#errorcode)
6. [Rotas](#rotas)
7. [Author](#author)


<a name="iniciando"/></a>
## Iniciando
  - Clonar o repositório. (git clone https://github.com/alissoonluan/api-marvel.git)
  - Entre na pasta (cd api-marvel)
  - Configure .env file
  ```
        DB_CONNECTION=pgsql
        DB_HOST=127.0.0.1
        DB_PORT=5432
        DB_DATABASE=api_marvel
        DB_USERNAME=postgres
        DB_PASSWORD=apimarvel
```

<a name="prerequisitos"/></a>
### Pre-requisites
  - PHP 7.3, <a href="https://windows.php.net/downloads/releases/php-7.3.25-nts-Win32-VC15-x64.zip">Download</a>, ou Meu PHP <a href="https://wetransfer.com/downloads/eda06f86ea1b02fd5763e8695ce34c5a20201129223605/05969ceda67e89b0202cce34cfac727b20201129223621/4c6d1b?utm_campaign=WT_email_tracking&utm_content=general&utm_medium=download_button&utm_source=notify_recipient_email">Download</a>. 
  - PostgreSQL 10, <a href="https://windows.php.net/downloads/releases/php-7.3.25-nts-Win32-VC15-x64.zip">Download</a>.
  - Composer, <a href="https://getcomposer.org/Composer-Setup.exe">Download</a>.
  - Laravel 4

<a name="instalacao"/></a>
### Instalação
    - PHP: Extraia o php para o C:, navegue até o arquivo php.ini, procure os arquivos a baixo e retire o  ;.
    (Se você estiver baixado o meu php, não é necessario habilitar as extensões)
    Habilitar extensões do php.ini
        - extension=mysqli
        - extension=pdo_mysql
        - extension=pdo_odbc
        - extension=pdo_pgsql
        - extension=pdo_sqlite
        - extension=pgsql
    - PostgreSQL: Depois do download do postgreSQL
    - Composer: Instale o Composer e vincule ao php instalado.
    - Laravel: na pasta do projeto digite: composer install.
		
<a name="rodarapi"/></a>
## Rodar API	
        - php artisan migrate
        - php artisan serve
        
<a name="errorcode"/></a>
## Error Codes	(Erros Internos para retorno na API)
          COD_SUBMITTED_SUCCESSFULLY = '2010'; # 2010 - Enviado com sucesso com retorno
          COD_PARAMETERS_NOT_EXPECTED = '3010'; # 3010 - Parâmetros não esperados
          COD_INFO_NOT_FOUND = '3031'; # 3031 - Informação não foi encontrada
          COD_ERROR_NOT_IDENTIFIED = '4040'; # 4040 - Erro não identificado
          COD_ERROR_IDENTIFIED = '4041'; # 4041 - Erro identificado   

<a name="rotas"/></a>
## Rotas	
        - GET /v1/public/characters (Lista todos Herois)
        - GET /v1/public/characters/{characterId} (Lista Héroi selecionado)
        - GET /v1/public/characters/{characterId}/comics  (Lista as Histórias em Quadrinho do Héroi)
        - GET /v1/public/characters/{characterId}/events  (Lista os eventos do Héroi)
        - GET /v1/public/characters/{characterId}/series  (Lista as Séries do Héroi)
        - GET /v1/public/characters/{characterId}/stories (Lista as Histórias do Héroi)  

<a name="author"/></a>
## Author
  - [Alisson Luan](https://br.linkedin.com/in/alissoonluan)

