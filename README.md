# Webbviken Genesis Starter

GitHub project link: https://github.com/jnnrdn/webbviken-genesis-starter.


## Installation Instructions

1. Upload the Webbviken Genesis Starter theme folder via FTP to your wp-content/themes/ directory. (The Genesis parent theme needs to be in the wp-content/themes/ directory as well.)
2. Go to your WordPress dashboard and select Appearance.
3. Activate the Webbviken Genesis Starter theme.
4. Inside your WordPress dashboard, go to Genesis > Theme Settings and configure them to your liking.

## For Developers

The version of [Webbviken Genesis Starter on GitHub](https://github.com/jnnrdn/webbviken-genesis-starter/) includes tooling to check code against WordPress standards. To use it:

1. Install Composer globally on your development machine. [See Composer setup steps](https://getcomposer.org/doc/00-intro.md#downloading-the-composer-executable).
2. In the command line, change directory to the Webbviken Genesis Starter folder.
3. Type the command `composer install` to install PHP development dependencies.
4. Type `composer phpcs` to run coding standards checks.

You'll see output highlighting issues with PHP files that do not conform to Webbviken Genesis Starter coding standards.

Run `composer phpcbf` if you see “phpcbf can fix the x marked sniff violations automatically” in the output of `composer phpcs`.

### npm scripts

Scripts are also provided to help with CSS linting, CSS autoprefixing, and creation of pot language files. To use them:

1. Install [Node.js](https://nodejs.org/), which also gives you the Node Package Manager (npm).
2. In the command line, change directory to the Webbviken Genesis Starter folder.
3. Type the command `npm install` to install dependencies.

You can then type any of these commands:

- `npm start` to start development processes (gulp, browsersync etc).
- `npm build` to build the project for production.
