# Laravel Mongolia

Шинээр үүсгэсэн Ларавел төслийг Монгол хэл дээр болгоно. 
 - Validation
 - Auth

Composer ашиглан тооцоолуур дээрээ суулгана. 

```
composer global require selmonal/laravel-mn
```

## Ашиглалт

Ларавел шинэ төсөл үүсгэсэн төсөл рүүгээ орно. Тэгээд дээр суурьлуулсан орчуулагчаа ажиллуулна.

```
laravel new example
cd example
laravelmn translate
```

Хэрэв make:auth ийг ашигласан бол дараах сонголтыг нэмж ажиллуулна.

```
laravelmn translate --with-auth
```

