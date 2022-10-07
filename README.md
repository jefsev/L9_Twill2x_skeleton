## BKC Laravel 9 | Twill CMS package

#### Environment Requirements
- php >=8.1
- mysql >=8.0
- npm / node.js
- docker (optional)

#### Installation

##### 1.

- Clone repository
- Copy .env.example to .env and changes as needed

##### 2.

```sh
# Remove git remote origin and add remote origin of your project
git remote remove origin
git remote add origin (REPO_URL)
```

```sh
composer install
```

```sh
php artisan key:generate
```

```sh
php artisan migrate
```

```sh
npm install
```

##### 3.

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