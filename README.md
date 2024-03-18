# Primeiros passos com Docker

## Comandos

### Docker

```bash
# Verificar a versão do Docker
docker --version

# Verificar a versão do Docker Compose
docker-compose --version

# Criar imagem a partir de um Dockerfile
docker build -t <nome_da_imagem> <caminho_do_Dockerfile>

# Listar imagens
docker images

# Listar todos os containers
docker ps -a

# Listar containers em execução
docker ps

# Executar container em modo interativo e com terminal
docker-compose up -d

# Parar container
docker-compose stop
