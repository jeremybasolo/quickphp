<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="<?php echo url(); ?>/dist/index.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h1>Quick PHP</h1> 
                </div>
                <div class="col-md-9">
                    <p>
                        This is a basic PHP website using <a href="https://lumen.laravel.com" target="_blank">Lumen</a>, <a href="https://parceljs.org" target="_blank">Parcel JS</a> and <a href="https://getbootstrap.com" target="_blank">Bootstrap</a>.
                        It is meant to build very easy websites, such as holding pages, not requiring a CMS or anything too complex but still needing a dynamic back-end language.
                    </p>
                    <p>
                        Here is how it is structured:
                        <ul>
                            <li><strong>public/</strong> is where your virtualhost should point at.</li>
                            <li><strong>routes/</strong> is where all the routes and the logic is. You most likely want to add some php code in web.php.</li>
                            <li><strong>views/</strong> is where all the views are. These are to be rendered in routes.</li>
                            <li><strong>resources/js/</strong> is where your javascript lives. index.js is the entry point.</li>
                            <li><strong>resources/scss/</strong> is where your sass lives. In bootstrap/_custom-bootstrap.scss, you can include the bootstrap components that you want. In bootstrap/_custom-variables.scss, you can overwrite the bootstrap variables.</li>
                        </ul>
                    </p>
                    <p>
                        To install, clone the repository, create a .env file based on .env.example, run <strong>composer install</strong>, then run <strong>npm install</strong> and that's it, you should be good to go.
                    </p>
                    <p>
                        To use it, amend the code as necessary in the routes, views, js and scss. You can run two commands:
                        <ul>
                            <li><strong>npm run build</strong>: this will compile everything. To be run before a commit or a deployment.</li>
                            <li><strong>npm run watch</strong>: that will watch for changes in resources/, recompile everything and reload the browser.</li>
                        </ul>
                    </p>
                    <p>
                        To install new dependencies, just use <strong>npm install</strong> with --save or --save-dev.
                    </p>
                </div>
            </div>
        </div>
        <script src="<?php echo url(); ?>/dist/index.js"></script>
    </body>
</html>