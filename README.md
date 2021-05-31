# WPFactory coding standards
Brief tutorial for getting WordPress coding standards in your WordPress project, adapted to **WPFactory** projects

## Installation
-  Install [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) and [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) composer packages just like this repository is doing. Take a look at our **composer.json**
- Copy **phpcs.xml** to your project
- Copy the contents from **.gitignore** to your project **.gitignore**

### Optional
- Copy **.github/workflows/php.yml** to you project if you want to get coding standards reports from github on each push

## Visual Studio Code
* Install [PHP Sniffer & Beautifier for VS Code](https://github.com/valeryan/vscode-phpsab)
* Install [vscode-phpcs](https://github.com/ikappas/vscode-phpcs.git)
* Copy the **.vscode** folder to your project

> **_Note:_** This setup allows to fix code errors automatically on file saving with `phpcbf`

## Sublime Text 4

* Install [SublimeLinter](http://www.sublimelinter.com/)
* Install [SublimeLinter-phpcs](https://github.com/SublimeLinter/SublimeLinter-phpcs)

### Setup SublimeLinter
Access **Preference > Package settings > SublimeLinter > Settings** and config the `linters` node like this:

```json
"linters": {
    "phpcs": {
        "disable": false,            
        "SublimeLinter.linters.phpcs.args": "--standard='${folder}/phpcs.xml'",            
        "executable": "${folder}/vendor/squizlabs/php_codesniffer/bin/phpcs.bat",
    },
```

> **_Note:_** This setup does not allow to fix code errors automatically on file saving yet
