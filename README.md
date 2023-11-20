<p align="center">
    <img src="resources/img/Logo-TCC.jpeg" alt="Exemplo imagem" style="width: 200px;">
</p>

<h1 align="center">Melhoria na gestão de transporte público</h1>


![GitHub repo size](https://img.shields.io/github/repo-size/Dedo-Finger2/Sistema-TCC-2023?style=for-the-badge)
![GitHub language count](https://img.shields.io/github/languages/count/Dedo-Finger2/Sistema-TCC-2023?style=for-the-badge)
![GitHub forks](https://img.shields.io/github/forks/Dedo-Finger2/Sistema-TCC-2023?style=for-the-badge)
![Bitbucket open issues](https://img.shields.io/bitbucket/issues/Dedo-Finger2/Sistema-TCC-2023?style=for-the-badge)
![Bitbucket open pull requests](https://img.shields.io/bitbucket/pr-raw/Dedo-Finger2/Sistema-TCC-2023?style=for-the-badge)


> Inserir um resumo da introdução aqui depois...

## 💻 Pré-requisitos

Antes de começar, verifique se você atendeu aos seguintes requisitos:

* Você instalou a versão mais recente do `PHP / Composer / Laravel`
* Você tem uma máquina `Windows`.
* Você leu `colocar aqui o link para o manual quando ele começar a ser produzido`.

## 🚀 Instalando <nome_do_projeto>

Para instalar o <futuro_nome_do_projeto>, siga estas etapas:

Windows:
* clonando respositório
```
git clone https://github.com/Dedo-Finger2/Sistema-TCC-2023.git
```
```
cd nome_pasta_projeto
```
* instalando composer
```
composer install
```

* renomeando .env
```
copy .env.example .env
```

* configurando .env
    * Dentro do arquivo **.env** localize a linha que diz `DB_DATABASE` e mude para o nome do banco de dados do projeto.
    * O arquivo contendo o script do banco de dados está no caminho `database/dump.sql`

<br>

* gerando chave do artisan
```
php artisan key:generate
```

* migrando o banco de dados
```
php artisan migrate
```

## 📝 Licença

Esse projeto está sob licença. Veja o arquivo [LICENÇA](LICENSE.md) para mais detalhes.
