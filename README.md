
# Api Marvel

A simple API based on the Marvel's API.

### Tradução
Uma simples API baseada na Api da Marvel.

## Table of Contents
1. [Getting Started](#gettingStarted)
2. [Pre-requisites](#preRequisites)
3. [Installation](#installation)
4. [Extensions php.ini](#extensionsphp)
5. [Routes](#routes)
6. [Author](#author)


<a name="gettingStarted"/></a>
## Getting Started
  - Clone this repository. (git clone https://github.com/alissoonluan/api-marvel.git)
  - Enter folder
  - Configure .env file.
    DB_CONNECTION=pgsql
    DB_HOST=127.0.0.1
    DB_PORT=5432
    DB_DATABASE=api_marvel
    DB_USERNAME=postgres
    DB_PASSWORD=apimarvel

<a name="preRequisites"/></a>
### Pre-requisites
  - PHP 7.3, <a href="https://windows.php.net/downloads/releases/php-7.3.25-nts-Win32-VC15-x64.zip">Download</a>, or My PHP <a href="https://wetransfer.com/downloads/eda06f86ea1b02fd5763e8695ce34c5a20201129223605/05969ceda67e89b0202cce34cfac727b20201129223621/4c6d1b?utm_campaign=WT_email_tracking&utm_content=general&utm_medium=download_button&utm_source=notify_recipient_email">Download</a>. 
  - PostgreSQL 10, <a href="https://windows.php.net/downloads/releases/php-7.3.25-nts-Win32-VC15-x64.zip">Download</a>.
  - Composer, <a href="https://getcomposer.org/Composer-Setup.exe">Download</a>.
  - Laravel 4
  
### Installation
    - PHP: place the php folder in c:, open the folder and open the php.ini file, find the extensions below and remove ";".
    - PostgreSQL: After the installation, create database, CREATE DATABASE api_marvel;
    - Composer: Installation with php installed.
    - Laravel: composer


<a name="extensionsphp"/></a>
### Extensions (If you installer php on the my PHP, otherwise skip this step)
    Enable extension on php.ini
        - extension=mysqli
        - extension=pdo_mysql
        - extension=pdo_odbc
        - extension=pdo_pgsql
        - extension=pdo_sqlite
        - extension=pgsql
		
		
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
