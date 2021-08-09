# Kûarasy
Just a simple PHP - MySQL framework

## About
This is a very simple and basic PHP - MySQL framework. Help us improve it. Use as you wish.

## Installation
Update the database connection details in <code>config.php</code>

### Default view
As default, **DEFAULT_VIEW** is defined in <code>config.php</code>. It holds the directory name of your main frontpage.  
**Load** other views and web apps using the basic function *load('view_name')* from <code>/views/Default.php</code>

### REST API
The basic REST API in this framework uses a **action** request field to define the task / route
See how it works in <code>/controllers/Api.php</code>

After installation test it: [http://localhost/kuarasy?action=status](http://localhost/kuarasy?action=status)

### Cron jobs
Each task uses a pair of command fields **taks** and **key**. Try this:  
```
php index.php task=say_hello key=key_example
```
