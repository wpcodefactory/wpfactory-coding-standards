# WPFactory coding standards
A brief tutorial for getting WordPress coding standards in your WordPress project, adapted to **WPFactory** needs

## PHP coding standards installation
-  Install [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) and [WordPress Coding Standards for PHP_CodeSniffer](https://github.com/WordPress/WordPress-Coding-Standards) composer packages just like this repository is doing. Take a look at our **composer.json**
- Copy **phpcs.xml** to your project
- Copy the contents from **.gitignore** to your project **.gitignore**

#### Optional
- Copy **.github/workflows/php.yml** to you project if you want to get coding standards reports from github on each push

### :heavy_check_mark: Visual Studio Code 
* Install [PHP Sniffer & Beautifier for VS Code](https://github.com/valeryan/vscode-phpsab)
* Install [vscode-phpcs](https://github.com/ikappas/vscode-phpcs.git)
* Copy the **.vscode** folder to your project

> :sunglasses: **_Note:_** This setup allows to fix code errors automatically on file saving with `phpcbf`

### :heavy_check_mark: Sublime Text 4

* Install [SublimeLinter](http://www.sublimelinter.com/)
* Install [SublimeLinter-phpcs](https://github.com/SublimeLinter/SublimeLinter-phpcs)
* Setup SublimeLinter

Access **Preference > Package settings > SublimeLinter > Settings** and config the `linters` node like this:

```json
"linters": {
    "phpcs": {
        "disable": false,            
        "SublimeLinter.linters.phpcs.args": "--standard='${folder}/phpcs.xml'",            
        "executable": "${folder}/vendor/squizlabs/php_codesniffer/bin/phpcs.bat",
    },
```

> :sweat_smile: **_Note:_** This setup does not allow to fix code errors automatically on file saving yet

### :heavy_check_mark: Notepad ++

* Install [NppExec](https://github.com/d0vgan/nppexec)
* Setup NppExec
1. Access **Plugins > NppExec > Execute**, create this command and save:
```
$(CURRENT_DIRECTORY)/vendor/squizlabs/php_codesniffer/bin/phpcbf.bat --standard=phpcs.xml $(FULL_CURRENT_PATH)
NPP_SENDMSG NPPM_RELOADFILE 0 "$(FULL_CURRENT_PATH)"
```
2. Follow this [tiny tutorial](https://superuser.com/a/1295528) about creating a hotkey that will call the previous command. It can be CTRL + S or any other you want
