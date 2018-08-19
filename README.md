# Help-Orphans-Project - مشروع مساعدة الايتام بالعراق

Depending on statistics in Iraq for 2018 there was over 5 Million and 600,000 Orphan Children over the country,
this project (Help-Orphans-Project) is to help the Orphans by connecting them with the people who are able to empower the children from
poverty, health care and any other possible help.

---

- [Editor Requirements](#editor-requirements)
- [System Requirements](#system-requirements)
- [Installation](#installation)

## Editor Requirements

- [EditorConfig](http://editorconfig.org/#download)
- [Prettier](https://github.com/prettier/plugin-php)

## System Requirements

- [PHP >= 7.1.3](https://nodejs.org/en/)
- [Node.js](https://nodejs.org/en/)
- [Yarn](https://yarnpkg.com/lang/en/)
- [Composer](https://getcomposer.org/)
- [MySQL](https://dev.mysql.com/doc/refman/8.0/en/windows-installation.html)
- [Nginx](https://www.nginx.com/) or [Apache](https://httpd.apache.org/)
- Enable PHP Extentions inside `php.ini` file
  - OpenSSL PHP Extension
  - PDO PHP Extension
  - Mbstring PHP Extension
  - Tokenizer PHP Extension
  - XML PHP Extension
  - Ctype PHP Extension
  - JSON PHP Extension

### Installation

```sh
git clone git@github.com:code2gether/Help-Orphans-Project.git
cd Help-Orphans-Project
yarn install OR npm install (you must choose one dont mix them)
php artisan migrate
php artisan serve
enjoy ;)
```
