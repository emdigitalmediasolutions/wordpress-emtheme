# WPTheme Template - Tailwind CSS

This project containers a starting point for WordPress theme development.

## Setting Up

You will need Docker, Node.js, npm, git and a code editor / IDE.

Clone this repo to a folder on your local machine, then execute the following command to install all node dependencies.

```sh
npm install
```

You will also need gulp installed globally, this is completed using the following.

```sh
npm install --global gulp-cli
```

## Folder Structure

This project contains or will create the following folders

**debug** - This folder is generated by the docker containers and contains all runtime data. This is excluded from git and changes should not be made here directly as they will be overwritten on the next build.

**src** - This contains all source files and assets used to build the theme.

**src/js** - All javascript source files are stored here. Gulp is used to concat each sub folder into its own package.

**src/php** - All php source files are located here, these will be copied to the theme directory without any modification.

**src/sass** - Each scss or sass filed located in this folder is used to generate a CSS file in the theme, sub folders are ignored, so can be used to organise complex style sheets into multiple files.

**theme.json** - Contains configuration options regarding how the theme is built. Change options here to customise the theme name. Other options will be added over time.

## Testing

A docker configuration can be used to set up a basic WordPress environment, it shouldn't need any modification unless you need to change default ports etc.

This is not intended for production use.

Create the docker images and containers using the following command.

```sh
docker-compose up --detach
```

This will create a WordPress and MySQL container that will persist through PC restarts and shut downs.

To stop the container use this command

```sh
docker-compose down
```

You can build the theme and insert it into the WordPress container directly by using the following.

```sh
gulp build
```

And if you want to watch all source files for any changes, and create the theme when changes are detected, use the following.

```sh
gulp watch
```

This does not currently refresh the browser when the build process completes, so you will need to do this manually and watch out for any browser caching of scripts / images.
