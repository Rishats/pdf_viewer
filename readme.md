# Browsing a  PDF document's with PHP script.



You should allow the users of your site to call this script.


### Installation
1
```clone
git clone git@github.com:Rishats/pdf_viewer.git
```
2

```use
http://yourdomain.com/pdf_viewer.php?pdf=name.pdf
```
Example[demo].
```try
http://127.0.0.1/pdf_viewer.php?pdf=hello-world.pdf
```

3
You can change path dir where your pdf stored.
```path
4 $file = dirname(__FILE__).'/change_there/'.$_GET['pdf'];
```


