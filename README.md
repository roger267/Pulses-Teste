# Pulses-Teste
-> Seja Bem-Vindo você acessar o Readme através do link:
			-> https://tarefaspulses.readme.io/docs/tarefas-dimensões-pulses
			
@author Roger Willian Torres < malito: rogerwillian121213@hotmail.com>

Tarefas\dimensoês##
    
🚧-OBS: ESSE PROJETO ESTÁ NA PRIMEIRA VERSÃO, POR ISSO ALGUMAS FUNÇÕES NÃO ESTÃO FUNCIONANDO.
🚧-Foi me dado 3 dias para realizar o projeto, e não queria que passe sem entregar nada em 3 dias  tive alguns imprevisto peço outra oportunidade para terminar de fazer o projeto/teste. Obrigado
🚧- Primero você deve tirar todos os aquivos da pasta 



🚧 Em construção... 🚧

🚀

TAREFAS
@package Tarefas\dimensões
@author Roger Willian Torres rogerwillian121213@hotmail.com
@version v.1.0
@copyright Copyright (c) 2021, ROGER
🚀
🚀O objetivo do teste e determinar uma dimensão para qualquer pergunta onde você pode editar as perguntas ou dimensões de cada uma delas.
🚀O projeto é composto por 5 telas:
1. Tela inicial
2. Perguntas
3. Criar/Editar Perguntas
4. Dimensões
5. Criar/Editar Dimensões
-> Linguagem usadas: PHP, Sql, Javascript e Html.
-> Framework: Bootstrap.
Instalação
🚀 Criar um Banco com nome de Pulses.
🚀 Criar duas tabelas como nome
#tbdimensoes -> id, dimen, data de cadastro.
#tb perguntas -> id, pergunta, data de cadastro.

🚀Conexão feita com o banco através do código:
-> <?php
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'pulses');
$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');
?>
🚀Informações sobre o banco:
Servidor: 127.0.0.1 via TCP/IP
Tipo de servidor: MariaDB
Conexão com o servidor: SSL não está sendo usado Documentação
Versão do servidor: 10.4.20-MariaDB - mariadb.org binary distribution
Versão do protocolo: 10
Utilizador: root@localhost
Conjunto de caracteres do servidor: UTF-8 Unicode (utf8mb4)

Obs: Foi testado em banco local.
<?php
        define('HOST', '127.0.0.1');
        define('USUARIO', 'root');
        define('SENHA', '');
        define('DB', 'pulses');
$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');
🚀Colocar os aquivos com a extensão php na pasta do servidor local.
🚀E já ira rodar o programa.
Instalação
@author Roger Willian Torres < malito: rogerwillian121213@hotmail.com>
