# sylius-skeleton
softmg sylius skeleton

##installation
```bash
composer create-project -s beta sylius/sylius-standard acme
cd acme # Move to the newly created directory
php bin/console sylius:install
npm install
npm run gulp
```

* Check locality, can change in sylius_locale
* Add base migration to sylius_migrate
* Customize model [doc](http://docs.sylius.org/en/latest/customization/model.html)