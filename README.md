# template-php-project

## Install

```bash
composer update
```

## Documentation

### Install

```bash
# install phive
brew install phpive
brew install gnupg

# install phpDocumentor
phive install phpDocumentor
```

### Build 

```bash
# build doc
./tools/phpDocumentator run -d ./src -t docs/web

# build doc with configuration
./tools/phpDocumentator run
```

## Tests 

### test

```bash
# windows
win_test.bat

# macos
./vendor/bin/phpunit -c phpunit.xml
```
### coverage

```bash
# windows
win_coverage.bat

# macos
./vendor/bin/phpunit -c phpunit.xml --coverage-html coverage
```

## reference

- [phpdoc](https://docs.phpdoc.org/3.0/)
