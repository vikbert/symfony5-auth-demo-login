<div align="center">
  <img src="./docs/symfony.png" width="100" alt="aino" />
  <h3>Symfony 5 Authentication Demo</h3>
  <p>Login demo with the new authentication flow symfony 5</p>

  <p>
    <a href="#">
      <img src="https://img.shields.io/badge/PRs-Welcome-brightgreen.svg?style=flat-square" alt="PRs Welcome">
    </a>
    <a href="#">
      <img src="https://img.shields.io/badge/License-MIT-brightgreen.svg?style=flat-square" alt="MIT License">
    </a>
  </p>
</div>

---

## Install
```bash
composer install 
```

## Development
```bash
symfony serve 
```

## Development from scratch
```bash
symfony new symfony5-auth-demo-login
cd symfony5-auth-demo-login

symfony composer req maker
# added "symfony/maker-bundle": "^1.29",

symfony composer req security
# added "symfony/maker-bundle": "^1.29",

symfony composer req orm
# added:
# "composer/package-versions-deprecated": "1.11.99.1",
# "doctrine/doctrine-bundle": "^2.2",
# "doctrine/doctrine-migrations-bundle": "^3.0",
# "doctrine/orm": "^2.8",

# enable sqlite config in .env
DATABASE_URL="sqlite:///%kernel.project_dir%/var/data.db"

symfony bin/console make:user

symfony composer req annotations 
# added "sensio/framework-extra-bundle": "^6.1",

symfony composer req twig 
# added 
# "symfony/twig-bundle": "5.2.*",
# "symfony/yaml": "5.2.*",
# "twig/extra-bundle": "^2.12|^3.0",
# "twig/twig": "^2.12|^3.0"






```


## licence

MIT [@vikbert](https://vikbert.github.io/)
