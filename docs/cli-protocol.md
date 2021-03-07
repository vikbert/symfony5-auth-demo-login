
```bash
➜ scr maker
Using version ^1.29 for symfony/maker-bundle
./composer.json has been updated
Running composer update symfony/maker-bundle
Loading composer repositories with package information
Updating dependencies
Lock file operations: 3 installs, 0 updates, 0 removals
  - Locking doctrine/inflector (2.0.3)
  - Locking nikic/php-parser (v4.10.4)
  - Locking symfony/maker-bundle (v1.29.1)
Writing lock file
Installing dependencies from lock file (including require-dev)
Package operations: 3 installs, 0 updates, 0 removals
  - Installing nikic/php-parser (v4.10.4): Extracting archive
  - Installing doctrine/inflector (2.0.3): Extracting archive
  - Installing symfony/maker-bundle (v1.29.1): Extracting archive
Generating optimized autoload files
30 packages you are using are looking for funding.
Use the `composer fund` command to find out more!

Symfony operations: 1 recipe (71a97b44cc4512d265a631454cdb3691)
  - Configuring symfony/maker-bundle (>=1.0): From github.com/symfony/recipes:master
Executing script cache:clear [OK]
Executing script assets:install public [OK]

Some files may have been created or updated to configure your new packages.
Please review, edit and commit them: these files are yours.

Nothing to unpack

➜ scr security
./composer.json has been updated
Running composer update symfony/security-bundle
Loading composer repositories with package information
Restricting packages listed in "symfony/symfony" to "5.2.*"
Updating dependencies
Lock file operations: 7 installs, 0 updates, 0 removals
  - Locking symfony/property-access (v5.2.4)
  - Locking symfony/property-info (v5.2.4)
  - Locking symfony/security-bundle (v5.2.4)
  - Locking symfony/security-core (v5.2.4)
  - Locking symfony/security-csrf (v5.2.4)
  - Locking symfony/security-guard (v5.2.4)
  - Locking symfony/security-http (v5.2.4)
Writing lock file
Installing dependencies from lock file (including require-dev)
Package operations: 7 installs, 0 updates, 0 removals
  - Installing symfony/property-info (v5.2.4): Extracting archive
  - Installing symfony/security-core (v5.2.4): Extracting archive
  - Installing symfony/property-access (v5.2.4): Extracting archive
  - Installing symfony/security-http (v5.2.4): Extracting archive
  - Installing symfony/security-guard (v5.2.4): Extracting archive
  - Installing symfony/security-csrf (v5.2.4): Extracting archive
  - Installing symfony/security-bundle (v5.2.4): Extracting archive
Generating optimized autoload files
37 packages you are using are looking for funding.
Use the `composer fund` command to find out more!

Symfony operations: 1 recipe (64ba89a68e76110e010b37fd39556de5)
  - Configuring symfony/security-bundle (>=5.1): From github.com/symfony/recipes:master
Executing script cache:clear [OK]
Executing script assets:install public [OK]

Some files may have been created or updated to configure your new packages.
Please review, edit and commit them: these files are yours.

Nothing to unpack

➜ scr orm
Using version ^2.1 for symfony/orm-pack
./composer.json has been updated
Running composer update symfony/orm-pack
Loading composer repositories with package information
Restricting packages listed in "symfony/symfony" to "5.2.*"
Updating dependencies
Lock file operations: 23 installs, 0 updates, 0 removals
  - Locking composer/package-versions-deprecated (1.11.99.1)
  - Locking doctrine/annotations (1.12.1)
  - Locking doctrine/cache (1.10.2)
  - Locking doctrine/collections (1.6.7)
  - Locking doctrine/common (3.1.1)
  - Locking doctrine/dbal (2.12.1)
  - Locking doctrine/doctrine-bundle (2.2.3)
  - Locking doctrine/doctrine-migrations-bundle (3.0.2)
  - Locking doctrine/event-manager (1.1.1)
  - Locking doctrine/instantiator (1.4.0)
  - Locking doctrine/lexer (1.2.1)
  - Locking doctrine/migrations (3.1.0)
  - Locking doctrine/orm (2.8.2)
  - Locking doctrine/persistence (2.1.0)
  - Locking doctrine/sql-formatter (1.1.1)
  - Locking friendsofphp/proxy-manager-lts (v1.0.3)
  - Locking laminas/laminas-code (4.0.0)
  - Locking laminas/laminas-eventmanager (3.3.0)
  - Locking laminas/laminas-zendframework-bridge (1.2.0)
  - Locking symfony/doctrine-bridge (v5.2.4)
  - Locking symfony/orm-pack (v2.1.0)
  - Locking symfony/proxy-manager-bridge (v5.2.4)
  - Locking symfony/stopwatch (v5.2.4)
Writing lock file
Installing dependencies from lock file (including require-dev)
Package operations: 23 installs, 0 updates, 0 removals
  - Installing composer/package-versions-deprecated (1.11.99.1): Extracting archive
  - Installing doctrine/lexer (1.2.1): Extracting archive
  - Installing doctrine/annotations (1.12.1): Extracting archive
  - Installing doctrine/cache (1.10.2): Extracting archive
  - Installing doctrine/collections (1.6.7): Extracting archive
  - Installing doctrine/event-manager (1.1.1): Extracting archive
  - Installing doctrine/persistence (2.1.0): Extracting archive
  - Installing doctrine/common (3.1.1): Extracting archive
  - Installing doctrine/instantiator (1.4.0): Extracting archive
  - Installing symfony/stopwatch (v5.2.4): Extracting archive
  - Installing laminas/laminas-zendframework-bridge (1.2.0): Extracting archive
  - Installing laminas/laminas-eventmanager (3.3.0): Extracting archive
  - Installing laminas/laminas-code (4.0.0): Extracting archive
  - Installing friendsofphp/proxy-manager-lts (v1.0.3): Extracting archive
  - Installing doctrine/dbal (2.12.1): Extracting archive
  - Installing doctrine/migrations (3.1.0): Extracting archive
  - Installing doctrine/sql-formatter (1.1.1): Extracting archive
  - Installing symfony/doctrine-bridge (v5.2.4): Extracting archive
  - Installing symfony/proxy-manager-bridge (v5.2.4): Extracting archive
  - Installing doctrine/orm (2.8.2): Extracting archive
  - Installing doctrine/doctrine-bundle (2.2.3): Extracting archive
  - Installing doctrine/doctrine-migrations-bundle (3.0.2): Extracting archive
  - Installing symfony/orm-pack (v2.1.0): Extracting archive
Generating optimized autoload files
composer/package-versions-deprecated: Generating version class...
composer/package-versions-deprecated: ...done generating version class
55 packages you are using are looking for funding.
Use the `composer fund` command to find out more!

Symfony operations: 3 recipes (fe87c1ef50c3b6cac6321d0309cac72a)
  - Configuring doctrine/annotations (>=1.0): From github.com/symfony/recipes:master
  - Configuring doctrine/doctrine-bundle (>=2.0): From github.com/symfony/recipes:master
  - Configuring doctrine/doctrine-migrations-bundle (>=2.2): From github.com/symfony/recipes:master
Executing script cache:clear [OK]
Executing script assets:install public [OK]

Some files may have been created or updated to configure your new packages.
Please review, edit and commit them: these files are yours.

                        
 Database Configuration 
                        

  * Modify your DATABASE_URL config in .env

  * Configure the driver (postgresql) and
    server_version (13) in config/packages/doctrine.yaml

Unpacked symfony/orm-pack dependencies
Installing dependencies from lock file (including require-dev)
Verifying lock file contents can be installed on current platform.
Package operations: 0 installs, 0 updates, 1 removal
  - Removing symfony/orm-pack (v2.1.0)
54 packages you are using are looking for funding.
Use the `composer fund` command to find out more!

➜ sc make:user

 The name of the security user class (e.g. User) [User]:
 > User

 Do you want to store user data in the database (via Doctrine)? (yes/no) [yes]:
 > yes

 Enter a property name that will be the unique "display" name for the user (e.g. email, username, uuid) [email]:
 > email

 Will this app need to hash/check user passwords? Choose No if passwords are not needed or will be checked/hashed by some other system (e.g. a single sign-on server).

 Does this app need to hash/check user passwords? (yes/no) [yes]:
 > yes

 created: src/Entity/User.php
 created: src/Repository/UserRepository.php
 updated: src/Entity/User.php
 updated: config/packages/security.yaml

           
  Success! 
           

 Next Steps:
   - Review your new App\Entity\User class.
   - Use make:entity to add more fields to your User entity and then run make:migration.
   - Create a way to authenticate! See https://symfony.com/doc/current/security.html

➜ scr annotations
Using version ^6.1 for sensio/framework-extra-bundle
./composer.json has been updated
Running composer update sensio/framework-extra-bundle
Loading composer repositories with package information
Updating dependencies
Lock file operations: 1 install, 0 updates, 0 removals
  - Locking sensio/framework-extra-bundle (v6.1.1)
Writing lock file
Installing dependencies from lock file (including require-dev)
Package operations: 1 install, 0 updates, 0 removals
  - Installing sensio/framework-extra-bundle (v6.1.1): Extracting archive
Generating optimized autoload files
composer/package-versions-deprecated: Generating version class...
composer/package-versions-deprecated: ...done generating version class
54 packages you are using are looking for funding.
Use the `composer fund` command to find out more!

Symfony operations: 1 recipe (5d000b04bd8dbfccf0df04520c9dbdf9)
  - Configuring sensio/framework-extra-bundle (>=5.2): From github.com/symfony/recipes:master
Executing script cache:clear [OK]
Executing script assets:install public [OK]

Some files may have been created or updated to configure your new packages.
Please review, edit and commit them: these files are yours.

Nothing to unpack

➜ scr twig
Using version ^1.0 for symfony/twig-pack
./composer.json has been updated
Running composer update symfony/twig-pack
Loading composer repositories with package information
Restricting packages listed in "symfony/symfony" to "5.2.*"
Updating dependencies
Lock file operations: 6 installs, 0 updates, 0 removals
  - Locking symfony/translation-contracts (v2.3.0)
  - Locking symfony/twig-bridge (v5.2.4)
  - Locking symfony/twig-bundle (v5.2.4)
  - Locking symfony/twig-pack (v1.0.1)
  - Locking twig/extra-bundle (v3.3.0)
  - Locking twig/twig (v3.3.0)
Writing lock file
Installing dependencies from lock file (including require-dev)
Package operations: 6 installs, 0 updates, 0 removals
  - Installing twig/twig (v3.3.0): Extracting archive
  - Installing symfony/translation-contracts (v2.3.0): Extracting archive
  - Installing symfony/twig-bridge (v5.2.4): Extracting archive
  - Installing symfony/twig-bundle (v5.2.4): Extracting archive
  - Installing twig/extra-bundle (v3.3.0): Extracting archive
  - Installing symfony/twig-pack (v1.0.1): Extracting archive
Generating optimized autoload files
composer/package-versions-deprecated: Generating version class...
composer/package-versions-deprecated: ...done generating version class
60 packages you are using are looking for funding.
Use the `composer fund` command to find out more!

Symfony operations: 2 recipes (29c5994a266bde1a17bbf84e426d3380)
  - Configuring symfony/twig-bundle (>=5.0): From github.com/symfony/recipes:master
  - Configuring twig/extra-bundle (>=v3.3.0): From auto-generated recipe
Executing script cache:clear [OK]
Executing script assets:install public [OK]

Some files may have been created or updated to configure your new packages.
Please review, edit and commit them: these files are yours.

Unpacked symfony/twig-pack dependencies
Installing dependencies from lock file (including require-dev)
Verifying lock file contents can be installed on current platform.
Package operations: 0 installs, 0 updates, 1 removal
  - Removing symfony/twig-pack (v1.0.1)
59 packages you are using are looking for funding.
Use the `composer fund` command to find out more!

➜ sc make:auth

 What style of authentication do you want? [Empty authenticator]:
  [0] Empty authenticator
  [1] Login form authenticator
 > 1

 The class name of the authenticator to create (e.g. AppCustomAuthenticator):
 > LoginFormAuthenticator

 Choose a name for the controller class (e.g. SecurityController) [SecurityController]:
 > 

 Do you want to generate a '/logout' URL? (yes/no) [yes]:
 > y

 created: src/Security/LoginFormAuthenticator.php
 updated: config/packages/security.yaml
 created: src/Controller/SecurityController.php
 created: templates/security/login.html.twig

           
  Success! 
           

 Next:
 - Customize your new authenticator.
 - Finish the redirect "TODO" in the App\Security\LoginFormAuthenticator::onAuthenticationSuccess() method.
 - Review & adapt the login template: templates/security/login.html.twig.


➜ sc debug:router
 ---------------- -------- -------- ------ -------------------------- 
  Name             Method   Scheme   Host   Path                      
 ---------------- -------- -------- ------ -------------------------- 
  _preview_error   ANY      ANY      ANY    /_error/{code}.{_format}  
  app_login        ANY      ANY      ANY    /login                    
  app_logout       ANY      ANY      ANY    /logout                   
 ---------------- -------- -------- ------ -------------------------- 

➜ sc make:migration

 Are you sure you wish to continue? (yes/no) [yes]:
 > yes
           
  Success! 

 Next: Review the new migration "migrations/Version20210307114339.php"
 Then: Run the migration with php bin/console doctrine:migrations:migrate
 See https://symfony.com/doc/current/bundles/DoctrineMigrationsBundle/index.html

➜ sc do:mi:mi -n
 [WARNING] You have 1 previously executed migrations in the database that are not registered migrations.      

 >> 2021-03-07 11:38:44 (DoctrineMigrations\Version20210307113831)
[notice] Migrating up to DoctrineMigrations\Version20210307114339
[notice] finished in 14.8ms, used 14M memory, 1 migrations executed, 3 sql queries

```
