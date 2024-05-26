# Employees project!

## Introduction

Welcome to Employees project! this project is a test for a company.
this is the requirements.

Considere a seguinte situação:
Você foi contratado para desenvolver um sistema de gerenciamento de funcionários usando PHP e orientação a objetos. O sistema deve permitir a criação de funcionários, atribuição de departamentos, jornada de trabalho (horas) e exibição de informações detalhadas sobre cada funcionário de forma simplificada.

1) Criação de funcionários: Nome, e-mail, cpf, idade, departamento de trabalho

2) Atribuição de departamentos: Criação de novos departamentos dinâmicos e vínculo com funcionários existentes.

3) Jornada de trabalho:
   A lista de trabalho deve ser para os próximos 30 dias e cada dia ter 24 horas. Porém, apenas as horas úteis de trabalho devem ser incluídas na lista (9h às 12h e das 13h às 18h com uma pausa para o almoço das 12h às 13h).

- Descreva o processo que você seguiria para criar a lista de horários de trabalho.
- Explique como você garantiria que apenas as horas úteis de trabalho fossem incluídas na lista.
- Forneça um exemplo de código em PHP para criar a lista de horários de trabalho e verificar se uma determinada hora é uma hora útil.

Critérios:
- Estrutura de Classes
- Encapsulamento
- Legibilidade e Boas Práticas


Informações gerais do teste:
- Não precisa se preocupar com front, pode usar algo cru.
- Use apenas PHP, HTML, CSS e JS.
- Sinta-se a vontade de usar qualquer framework PHP

## Getting Started

Follow the steps below to get your project up and running:

1. **Install Dependencies**: Run the following command to install PHP dependencies using Composer:
    ```bash
    composer install
    ```

2. **Start Docker**: Start the Docker containers using Docker Compose:
    ```bash
    docker-compose up -d
    ```

3. **Run Migrations**: Execute the database migrations to create the necessary database tables:
    ```bash
    php artisan migrate
    ```

4. **Serve Application**: Finally, serve the application using PHP's built-in web server:
    ```bash
    php artisan serve
    ```

Your application will now be running at [http://localhost:8000](http://localhost:8000).

## Additional Information

- For more details on how to use the application, please contact Abmael Souza on his [LinkedIn Profile](https://www.linkedin.com/in/abmael-souza-126879178/)
