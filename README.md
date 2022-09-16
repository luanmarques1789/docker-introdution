# INTRODUÇÃO AO DOCKER

## O que é este projeto?

Este é um projeto didático cuja finalidade é demonstrar o uso do Docker em fase de desenvolvimento de uma mini aplicação.

Os componentes dessa mini aplicação consistem em:

- uma API em Node.js com banco de dados MySQL;
- um servidor web Apache com PHP.

## Pré-requisitos

Tenha o `docker` e o `docker-compose` instalados no seu computador, assim como o `Node` e o gerenciador de pacotes `npm`.

## Como utilizar

Na raiz do projeto, execute o script abaixo no terminal para iniciá-lo:

```bash
./start-docker.sh # Ou `sh start-docker.sh`
```

**PS**: Note que os comandos e o script de execução foram pensados em uma **ambiente Linux**. Logo faça as mudanças necessárias a fim que o script funcione em seu sistema operacional, ou execute cada comando individualmente no terminal.

Instale as dependências necessárias no repositório _api_:

```bash
npm i
```
