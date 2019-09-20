# Quick PHP

This is a basic PHP website using [Lumen](https://lumen.laravel.com), [Parcel JS](https://parceljs.org) and [Bootstrap](https://getbootstrap.com). It is meant to build very easy websites, such as holding pages, not requiring a CMS or anything too complex but still needing a dynamic back-end language.

Here is how it is structured:

*   **public/** is where your virtualhost should point at.
*   **routes/** is where all the routes and the logic is. You most likely want to add some php code in web.php.
*   **views/** is where all the views are. These are to be rendered in routes.
*   **resources/js/** is where your javascript lives. index.js is the entry point.
*   **resources/scss/** is where your sass lives. In bootstrap/_custom-bootstrap.scss, you can include the bootstrap components that you want. In bootstrap/_custom-variables.scss, you can overwrite the bootstrap variables.

To install, clone the repository, create a .env file based on .env.example, run **composer install**, then run **npm install** and that's it, you should be good to go.

To use it, amend the code as necessary in the routes, views, js and scss. You can run two commands:

*   **npm run build**: this will compile everything. To be run before a commit or a deployment.
*   **npm run watch**: that will watch for changes in resources/, recompile everything and reload the browser.

To install new dependencies, just use **npm install** with --save or --save-dev.