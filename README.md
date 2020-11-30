## API

Api baseada na API da Marvel


## Tópicos
1. [Iniciando](#iniciando)
2. [Pré-Requisitos](#prerequisitos)
3. [Instalação](#instalacao)
4. [Rodar API](#rodarapi)
5. [Sugestão de Aplicativo para testar a API](#testarapi)
6. [Error Codes](#errorcode)
7. [Herois Existentes](#heroesexistente)
8. [Rotas](#rotas)
9. [Autor](#autor)


<a name="iniciando"/></a>
## Iniciando
  - Clonar o repositório. (git clone https://github.com/alissoonluan/api-marvel.git)
  - Entre na pasta do projeto (cd api-marvel)
  - Retiramos o .env do arquivo .gitignore, para não houver problemas com as variaveis padrão do banco de dados, portando ao realizar o download do projeto o arquivo .env já estará configurado como padrão.
<a name="prerequisitos"/></a>
### Pre-Requisitos
  - PHP 7.3, <a href="https://windows.php.net/downloads/releases/php-7.3.25-nts-Win32-VC15-x64.zip">Download</a>, ou a versão do PHP 7.3 já configurada com as extensões necessárias  <a href="https://wetransfer.com/downloads/eda06f86ea1b02fd5763e8695ce34c5a20201129223605/05969ceda67e89b0202cce34cfac727b20201129223621/4c6d1b?utm_campaign=WT_email_tracking&utm_content=general&utm_medium=download_button&utm_source=notify_recipient_email">Download</a>. 
  - PostgreSQL 10, <a href="https://windows.php.net/downloads/releases/php-7.3.25-nts-Win32-VC15-x64.zip">Download</a>.
  - Composer, <a href="https://getcomposer.org/Composer-Setup.exe">Download</a>.
  - Laravel 4

<a name="instalacao"/></a>
### Instalação
    - PHP: Extraia o php para o C:, navegue até o arquivo php.ini, procure os arquivos a baixo e apague o ;.
    (Se você estiver baixado o PHP 7.3 já configurado, não é necessario habilitar as extensões)
    Habilitar extensões do php.ini
        - extension=pdo_odbc
        - extension=pdo_pgsql
        - extension=pgsql
    - É necessário colocar o php nas variaveis de ambiente, segue passo a passo:
     
    - PostgreSQL: Apos o download do PostgreSQL, ############
    - Composer: Instale o Composer e vincule ao php instalado.
    - Navegue até a pasta aonde o projeto foi clonado.
    - Clique com o botão direito do mouse em Git Bash Here.
    - Laravel: composer install.
		
<a name="rodarapi"/></a>
## Rodar API	
        php artisan migrate
        php artisan serve
        
        
<a name="testarapi"/></a>
## Sugestão de Aplicativo para testar a API
  <a href="https://updates.insomnia.rest/downloads/windows/latest?app=com.insomnia.app&source=website&ref=https%3A%2F%2Fwww.google.com%2F">Insomnia</a>
        
        
<a name="errorcode"/></a>
## Error Codes	(Erros Internos para retorno na API)
          2010 - Enviado com sucesso com retorno
          3010 - Parâmetros não esperados
          3031 - Informação não foi encontrada
          4040 - Erro não identificado
          4041 - Erro identificado
          
<a name="heroesexistente"/></a>
## Id de Hérois existentes
          1 - 3-D Man
          2 - A-Bomb (HAS)
          3 - A.I.M.
          4 - Aaron Stack
          5 - Abdomination (Emil Blonsky)

<a name="rotas"/></a>
## Rotas	
        - GET /v1/public/characters (Lista todos Herois)
        - GET /v1/public/characters/{characterId} (Lista Héroi selecionado)
        - GET /v1/public/characters/{characterId}/comics  (Lista as Histórias em Quadrinho do Héroi)
        - GET /v1/public/characters/{characterId}/events  (Lista os eventos do Héroi)
        - GET /v1/public/characters/{characterId}/series  (Lista as Séries do Héroi)
        - GET /v1/public/characters/{characterId}/stories (Lista as Histórias do Héroi)  

<a name="autor"/></a>
## Autor
  - [Alisson Luan](https://br.linkedin.com/in/alissoonluan)

