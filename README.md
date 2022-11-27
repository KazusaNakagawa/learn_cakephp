## Learn PHP

### Creat App (Docker)

1. build & container
    ```bash
    docker-compose up -d --build
    ```

2. Entering the Container
    ```bash
    docker exec -it learn_cakephp_app_1 sh
    ```

3. creat app
   ```bash
   composer self-update && composer create-project --prefer-dist cakephp/app:4.* .
   ```

## Ref
* https://peblo.gs/cakephp-env-with-docker/
* https://book.cakephp.org/4/en/quickstart.html#getting-cakephp
