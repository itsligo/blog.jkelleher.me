---
title: Localhost options
slug: localhost
date: 2015/03/16 14:25:23
taxonomy:
 tag: web-dev
image: localhost.jpg
---

Recently, working on a few projects at once, I needed a more streamlined means of running a web server. Typically, working in Visual Studio I left it to do the spin up of IISExpress or the internal development server which did the job fine but as I move more development to the Mac side, I looked at other options. I'm finding myself in Terminal (well, [iTerm2](http://iterm2.com/)) more often now so here's an array of possibilities:

* simple-http-server ([link](https://github.com/andrewpthorp/simple-http-server))
* A simple web server, built in js, distributed with npm. Execute with _nserver -p 9000_, once installed.
* SimpleHTTPServer ([link](http://www.pythonforbeginners.com/simplehttpserver/))
* Particularly useful if you have Python already installed (as with Macs), this makes it particularly easy to launch a web server from any folder. Execute with _python -m SimpleHTTPServer 8080_.
* MAMP ([link](http://www.mamp.info/en/))
* I have a lot of love for Mamp (Pro not needed) as it's one of the quickest ways (once installed) to throw up both a capable web server and a mySQL Server - particularly handy for Wordpress folk. Easily customisable too. But as your confidence grows you'll want to take charge of these basic housekeeping jobs yourself. Also MAMP is limited to running once server at a time and often you'll need a few running on different ports.
* PHP ([link](http://php.net/manual/en/features.commandline.webserver.php))
* Just as with Python, PHP has a built-in server (once you have PHP). Execute with _PHP -S localhost:8080_. PHP is installed as standard on Macs but note Yosemite dropped support for PNG from the PHP server and I for one, found it very tricky to amend this omission.
* Node/Grunt/Gulp
* Flavour of the month must be Node.js. With minimal configuration you can use [Connect](https://www.npmjs.org/package/connect) or [ServeStatic](https://github.com/expressjs/serve-static) with node to throw up a web server. More typically, you'll probably find a gulp or grunt config file will have arranged this for you, especially if you've scaffolded an app with [Yeoman](www.yeoman.io) or similar. If so, it's typically as easy as _grunt serve_.
Using Gulp or Grunt is my current favourite particularly since you're already doing a lot of work at the bash window and the gulp/grunt task folds in the launching of a server for you. On top of that, livereload is a staple of many scaffolded apps and Grunt/Gulp will engage that along with the server making your development much more streamlined.
