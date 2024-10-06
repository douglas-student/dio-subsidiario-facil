# Subsidiário Fácil [:brazil:](LEIAME.md)

## Description

**Subsidiário Fácil** is a simple registration system designed for holding companies to manage subsidiary information efficiently. The system allows users to input and store basic data such as trade names and CNPJ (National Register of Legal Entities) for their subsidiaries. With a user-friendly interface, it aims to streamline the management and organization of subsidiary data.

## Features

- User-friendly interface for adding and managing subsidiaries.
- Automatic generation of unique CNPJ numbers.
- Database storage for easy data retrieval and management.

## Technologies Used

- PHP
- MySQL
- Docker
- Nginx

## Installation

1. Clone the repository:
   ```bash
   git clone <repository-url>
   cd Subsidiário-Fácil
   ```

2. Set up the database:
   ```bash
   mysql -u root -p < banco.sql
   ```

3. Build and run the Docker container:
   ```bash
   docker build -t subsidiario-facil .
   docker run -d -p 4500:4500 subsidiario-facil
   ```

4. Access the application in your browser at `http://localhost:4500`.

## Usage

To add subsidiaries, simply fill in the form in the application interface, and the data will be stored in the database.