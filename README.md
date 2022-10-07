## BKC Laravel 9 | Twill CMS package

#### Environment Requirements
- php >=8.1
- mysql >=8.0
- npm / node.js
- docker (optional)

#### Installation

##### Clone and setup

```sh
# Clone this repository
Clone repository

# Remove git remote origin and add remote origin of your project
git remote remove origin
git remote add origin (REPO_URL)

# Copy .env.example to .env and change as needed
cp .env.example .env
```

##### Install and migrate

```sh
composer install
```

```sh
npm install
```

```sh
php artisan key:generate
```

```sh
php artisan migrate
```

##### Update frontend during development

```sh
# Watch for changes during development on localhost
npm run dev
```

##### Build for production

```sh
# Build production ready
npm run build
```

#### External docs:

- [Laravel 9](https://laravel.com/docs/9.x/)
- [Twill](https://twill.io/docs/)