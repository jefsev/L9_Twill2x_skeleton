## Laravel 9 | Twill CMS package

#### Environment Requirements
- php >=8.1
- mysql >=8.0
- npm / node.js
- docker (optional)

#### External docs:
- [Laravel 9](https://laravel.com/docs/9.x/)
- [Twill](https://twill.io/docs/)

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
php artisan storage:link
```

```sh
# Setup twill admin and register a super admin, this will migrate the database.
php artisan twill:install
```

##### Development

```sh
# twill admin @
http://localhost/admin
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

#### Usefull commands

```sh
# Generate twill module named pages 
# Docs: https://twill.io/docs/crud-modules/cli-generator.html
php artisan twill:module pages
```

```sh
# Generate twill block named example-banner
# Docs: https://twill.io/docs/block-editor/creating-a-block-editor.html
php artisan twill:make:block example-banner
```

```sh
# Create a superadmin
php artisan twill:superadmin
```