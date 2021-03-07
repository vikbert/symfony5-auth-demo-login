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
symfony composer req security
symfony composer req orm

# enable sqlite config in .env
DATABASE_URL="sqlite:///%kernel.project_dir%/var/data.db"
symfony console make:user

symfony composer req annotations 
symfony composer req twig
symfony console make:auth
symfony console debug:router

symfony console make:migration
symfony console do:mi:mi -n




```


## licence

MIT [@vikbert](https://vikbert.github.io/)
