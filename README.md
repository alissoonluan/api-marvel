
# Api Marvel

Marvel API-based API

## Tradução
Api baseada na API da Marvel


## Table of Contents
1. [Getting Started](#gettingStarted)
2. [Pre-requisites](#preRequisites)
3. [Installation](#installation)
4. [Run the API](#runtheapi)
5. [Error Codes](#errorcode)
6. [Routes](#routes)
7. [Author](#author)


<a name="gettingStarted"/></a>
## Getting Started
  - Clone this repository. (git clone https://github.com/alissoonluan/api-marvel.git)
  - Enter the folder
  - Configure .env file
  ```
        DB_CONNECTION=pgsql
        DB_HOST=127.0.0.1
        DB_PORT=5432
        DB_DATABASE=api_marvel
        DB_USERNAME=postgres
        DB_PASSWORD=apimarvel
```

<a name="preRequisites"/></a>
### Pre-requisites
  - PHP 7.3, <a href="https://windows.php.net/downloads/releases/php-7.3.25-nts-Win32-VC15-x64.zip">Download</a>, or My PHP <a href="https://wetransfer.com/downloads/eda06f86ea1b02fd5763e8695ce34c5a20201129223605/05969ceda67e89b0202cce34cfac727b20201129223621/4c6d1b?utm_campaign=WT_email_tracking&utm_content=general&utm_medium=download_button&utm_source=notify_recipient_email">Download</a>. 
  - PostgreSQL 10, <a href="https://windows.php.net/downloads/releases/php-7.3.25-nts-Win32-VC15-x64.zip">Download</a>.
  - Composer, <a href="https://getcomposer.org/Composer-Setup.exe">Download</a>.
  - Laravel 4
  
### Installation
    - PHP: place the php folder in c:, open the folder and open the php.ini file, find the extensions below and remove ";".
    (If you installer php on the my PHP, otherwise skip this step below)
    Enable extension on php.ini
        - extension=mysqli
        - extension=pdo_mysql
        - extension=pdo_odbc
        - extension=pdo_pgsql
        - extension=pdo_sqlite
        - extension=pgsql
    - PostgreSQL: After the installation, create database, CREATE DATABASE api_marvel;
    - Composer: Installation with php installed.
    - Laravel: composer install
		
<a name="runtheapi"/></a>
## Run	
        - php artisan migrate
        - php artisan serve
        
<a name="errorcode"/></a>
## Error Codes	(Return codes API)
          COD_SUBMITTED_SUCCESSFULLY = '2010'; # 2010 - was submitted successfully with return.
          COD_PARAMETERS_NOT_EXPECTED = '3010'; # 3010 - paramenters not expected
          COD_INFO_NOT_FOUND = '3031'; # 3031 - Info not found
          COD_ERROR_NOT_IDENTIFIED = '4040'; # 4040 - Error not identified
          COD_ERROR_IDENTIFIED = '4041'; # 4041 - Error identified   

<a name="routes"/></a>
## Routes	
        - GET /v1/public/characters (List all Heroes)
        - GET /v1/public/characters/{characterId} (List Hero selected)
        - GET /v1/public/characters/{characterId}/comics  (List Comics of the Hero selected)
        - GET /v1/public/characters/{characterId}/events  (List Events of the Hero selected)
        - GET /v1/public/characters/{characterId}/series  (List Series of the Hero selected)
        - GET /v1/public/characters/{characterId}/stories (List Stories of the Hero selected)  

<a name="author"/></a>
## Author
  - [Alisson Luan](https://br.linkedin.com/in/alissoonluan)

## License
   - This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details  
