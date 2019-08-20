<h1>Permissões WestSoftware 2.3</h1>

#Execute: 

php artisan vendor:publish 


#Atualização para versão 2.3

#Mudanças:
    - Remoção de assets não utilizados
    - Correção de textos de botões
    - Correção de rota acl.home para acl.index
    - Ordenando usuários pelo nome


#Atualização para versão 2.2

#Mudanças:

    -Automatizado registro da middleare => check.permissions
    
    -Revisão ACL

    -Menu de navegação

    -Layout Modern Admin

    -Loading das permissões listener (Automatizado comando => php artisan event:generate)

    -Segurança não alterar dados de terceiros url

    -Add Toastr alert

        acrescentar as diretivas @toast ao arquivo de layout
            head => @toastr_css
            
            body =>
              @jquery
              @toastr_js
              @toastr_render
    