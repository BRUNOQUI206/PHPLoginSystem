# PHP User Authentication System

## Descrição

Este projeto é um sistema simples de autenticação de usuários utilizando PHP e MySQL. Ele permite que os usuários se cadastrem, façam login e vejam suas informações de perfil. O projeto é focado na criação de um sistema de login seguro e prático, utilizando senhas criptografadas e sessões PHP.

## Funcionalidades

- **Registro de Usuários:** Os novos usuários podem se registrar fornecendo nome, e-mail e senha.
- **Login de Usuários:** Os usuários registrados podem fazer login utilizando suas credenciais.
- **Página de Perfil:** Após o login, os usuários são redirecionados para uma página de perfil que exibe seu nome e e-mail.
- **Listagem de Usuários:** Uma página que lista todos os usuários cadastrados (opcional).
- **Autenticação com Senha Criptografada:** As senhas são armazenadas de maneira segura no banco de dados utilizando `password_hash()` e verificadas com `password_verify()`.
- **Sessões PHP:** O sistema utiliza sessões para manter os usuários logados.

## Estrutura do Projeto

