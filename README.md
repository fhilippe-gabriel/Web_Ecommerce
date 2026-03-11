<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Web_Ecommerce (Laravel + Tailwind)

## 🇺🇸 English

### Requirements

- PHP **8.2+**
- Composer
- Node.js **18+** and npm
- Git
- SQLite (default) or MySQL/PostgreSQL

### Quick start (recommended)

```bash
git clone <REPOSITORY_URL>
cd Web_Ecommerce
composer run setup
composer run dev
```

`composer run setup` automatically runs:

- `composer install`
- `.env` creation (if missing)
- `php artisan key:generate`
- `php artisan migrate --force`
- `npm install`
- `npm run build`

### Manual setup (step by step)

```bash
git clone <REPOSITORY_URL>
cd Web_Ecommerce
composer install
cp .env.example .env
php artisan key:generate
```

#### Database

**Default (SQLite):**

```bash
touch database/database.sqlite
php artisan migrate
```

**MySQL/PostgreSQL:**

1. Update DB variables in `.env` (`DB_CONNECTION`, `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`).
2. Run:

```bash
php artisan migrate
```

#### Frontend (Tailwind + Vite)

```bash
npm install
npm run build
```

For hot reload during development:

```bash
npm run dev
```

### Run the app

Option A (full local dev: Laravel server + queue + logs + Vite):

```bash
composer run dev
```

Option B (separate terminals):

```bash
php artisan serve
npm run dev
```

Default URL: `http://127.0.0.1:8000`

### Useful commands

```bash
php artisan test
./vendor/bin/pint
php artisan optimize
```

### Common issues

- **`Vite manifest not found`** → run `npm run build`.
- **`No application encryption key has been specified`** → run `php artisan key:generate`.
- **Database/session/cache table errors** → run `php artisan migrate`.

---

## 🇧🇷 Português

### Requisitos

- PHP **8.2+**
- Composer
- Node.js **18+** e npm
- Git
- SQLite (padrão) ou MySQL/PostgreSQL

### Início rápido (recomendado)

```bash
git clone <URL_DO_REPOSITORIO>
cd Web_Ecommerce
composer run setup
composer run dev
```

O comando `composer run setup` executa automaticamente:

- `composer install`
- criação do `.env` (se não existir)
- `php artisan key:generate`
- `php artisan migrate --force`
- `npm install`
- `npm run build`

### Configuração manual (passo a passo)

```bash
git clone <URL_DO_REPOSITORIO>
cd Web_Ecommerce
composer install
cp .env.example .env
php artisan key:generate
```

#### Banco de dados

**Padrão (SQLite):**

```bash
touch database/database.sqlite
php artisan migrate
```

**MySQL/PostgreSQL:**

1. Ajuste as variáveis de banco no `.env` (`DB_CONNECTION`, `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`).
2. Execute:

```bash
php artisan migrate
```

#### Frontend (Tailwind + Vite)

```bash
npm install
npm run build
```

Para desenvolvimento com hot reload:

```bash
npm run dev
```

### Rodar a aplicação

Opção A (desenvolvimento completo: servidor Laravel + fila + logs + Vite):

```bash
composer run dev
```

Opção B (terminais separados):

```bash
php artisan serve
npm run dev
```

URL padrão: `http://127.0.0.1:8000`

### Comandos úteis

```bash
php artisan test
./vendor/bin/pint
php artisan optimize
```

### Problemas comuns

- **`Vite manifest not found`** → execute `npm run build`.
- **`No application encryption key has been specified`** → execute `php artisan key:generate`.
- **Erros de tabela de banco/sessão/cache** → execute `php artisan migrate`.

---

## License / Licença

This project is open-sourced under the [MIT license](https://opensource.org/licenses/MIT).

Este projeto é open source sob a [licença MIT](https://opensource.org/licenses/MIT).
