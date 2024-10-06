# Subsidiário Fácil [:us:](README.md)

Subsidiário Fácil é um sistema simples de cadastro desenvolvido para holding companies gerenciarem informações de subsidiárias de forma eficiente. O sistema permite que os usuários insiram e armazenem dados básicos, como nome fantasia e CNPJ (Cadastro Nacional da Pessoa Jurídica) de suas subsidiárias. Com uma interface amigável, o objetivo é agilizar a gestão e a organização dos dados das subsidiárias.

## Funcionalidades

- Interface amigável para adicionar e gerenciar subsidiárias.
- Geração automática de números de CNPJ únicos.
- Armazenamento em banco de dados para fácil recuperação e gestão de dados.

## Tecnologias Usadas

- PHP
- MySQL
- Docker
- Nginx

## Instalação

1. Clone o repositório:
   ```bash
   git clone <repository-url>
   cd Subsidiário-Fácil
   ```

2. Configure o banco de dados:
   ```bash
   mysql -u root -p < banco.sql
   ```

3. Construa e execute o container Docker:
   ```bash
   docker build -t subsidiario-facil .
   docker run -d -p 4500:4500 subsidiario-facil
   ```

4. Acesse a aplicação no seu navegador em `http://localhost:4500`.

## Uso

Para adicionar subsidiárias, basta preencher o formulário na interface da aplicação, e os dados serão armazenados no banco de dados.