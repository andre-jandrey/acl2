<h1>Permissões WestSoftware</h1>

#Execute: 

php artisan vendor:publish 


#Atualização para versão 2.0

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
    