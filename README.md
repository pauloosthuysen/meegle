meegle
======

A simple RESTful (or "GETful") web-service with authentication, dynamic action scripts and type switching. Redirection to http://www.google.com if secret authentication code is blank/not valid. The action parameter given in the URL, will dynamically call the PHP script with matching name from the {MEEGLE_DIR}/actions/ directory.

Response Types
==============

HTML, XML, JSON

Usage
=====

http://localhost/meegle/index.php?secret=dsf8723kljhasd89810d&action=sayHelloWorld&type=xml
