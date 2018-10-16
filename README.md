# movie_rental
Desenvolve as principais funcionalidade de uma locadora de filmes, utilizando o docker, laravel, SQL e o vue.js.


## Executar a aplicação
Tendo o Docker e o Docker Compose instalado, será necessário apenas o comando:

```bash
docer-compose up -d
```

para que o projeto seja executado.

Para executar comandos `php`, `npm` ou `composer`, utilize o script `on-server.sh`, como nos exemplos abaixo.

```bash
# Executar o comando php artisan migrate
./on-server.sh php artisan migrate

# Executar o comando npm run dev
./on-server.sh npm run dev

# Executar o comando compose install
./on-server.sh compose install
```

O sistema estará disponível em [localhost:8000](http:\\localhost:8000)

O Adminer para MySQL estará disponível em [localhost:8080](http:\\localhost:8080)
