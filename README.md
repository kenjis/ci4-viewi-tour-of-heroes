# CodeIgniter4 Viewi Tour of Heroes app

This repository demonstrates CodeIgniter4 and Viewi integration with Tour of Heroes app.

This tutorial app comes from:
- https://viewi.net/tutorial
- https://github.com/ivanvoitovych/tour-of-heroes

## How to Run

```console
$ git clone https://github.com/kenjis/ci4-viewi-tour-of-heroes.git
$ cd ci4-viewi-tour-of-heroes/
$ composer install
```

```console
$ php spark serve
```

Navigate to <http://localhost:8080/>.

## Folder Structure

```
.
├── app/
│   ├── Adapters/ ... Adapters for Viewi
│   └── ViewiApp/ ... Viewi App
│        ├── Components/
│        │   ├── Models/
│        │   ├── Services/
│        │   └── Views/
│        ├── build/     ... Do not touch
│        ├── config.php ... Viewi config file
│        └── routes.php ... Viewi routes file
├── public/
│   └── viewi-build/ ... Do not touch
```

## References

- https://www.codeigniter.com/
- https://viewi.net/
- https://github.com/kenjis/ci4-viewi-demo
