![Laravel Mongolia](http://s22.postimg.org/mtn77ds8x/h_XXQ0_CQm_Gj.gif "Laravel Mongolia")

# Laravel Mongolia [5.*]

Шинээр үүсгэсэн Ларавел төслийг Монгол хэл дээр болгоно. 
 - Validation
 - Auth

Composer ашиглан тооцоолуур дээрээ суулгана. Яг laravel/installer шиг.

```
composer global require selmonal/laravel-mn
```

## Ашиглалт

Ларавел төсөлрүүгээ ороод дээр суурьлуулсан орчуулагчаа ажиллуулна.

```
laravel new example
cd example

laravel-mn translate
```

Хэрэв make:auth ийг ашигласан бол дараах сонголтыг нэмж ажиллуулна.

```
laravel-mn translate --with-auth
```

