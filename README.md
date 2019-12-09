# GNS3 WebServer

This repo is a docker container created to provide a custom HTTP(S) web server. It contain a simple PHP form and will be used to demonstrate some network vulnerabilities.

The credentials for the form are :

    username : admin
    password : securePassword

# Credit

This docker container is built on top of the [webdevops/php-nginx](https://hub.docker.com/r/webdevops/php-nginx/) container that provide the PHP/Nginx engine, based on alpine OS.

# Licence

This tool is provided under the MIT Licence :

```
MIT License

Copyright (c) 2019 Théo Martos

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
```