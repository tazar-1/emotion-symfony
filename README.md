Emotion Symfony
=============================

## System Preparation

To use this starter project, you'll need the following things installed on your machine.

2. [Lien](http://nodejs.org) - use the installer.
3. [Lien](https://github.com/gulpjs/gulp) - `$ bliblablu`
```shell
$ bliblablu
```
and in the other terminal :
```shell
$ bliblablu
```

## Local Installation

1.
2.

<!-- ## Usage

**development mode**

This will give you file watching, browser synchronisation, auto-rebuild, CSS injecting etc etc. [docs](https://github.com/gulpjs/gulp/blob/master/docs/API.md)

```shell
$ gulp
``` -->

## Deploy with Gulpfile

<!-- ```javascript
var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync');

// gulp.task('sass', function () {
//     gulp.src('scss/styles.sass')
//         .pipe(sass({includePaths: ['scss']}))
//         .pipe(gulp.dest('css'));
// });

gulp.task('sass', function (done) {
	gulp.src('scss/styles.sass')
		.pipe(sass())
		.on('error', sass.logError)
		.pipe(gulp.dest('css/'))
		.on('end', done);
});

// Tâche "watch" = je surveille *less
gulp.task('watch', ['sass', 'browser-sync'], function () {
  gulp.watch('/css/*.css', ['sass']);
});

gulp.task('browser-sync', function() {
    browserSync.init(["css/*.css", "js/*.js"], {
        server: {
            baseDir: "./"
        }
    });
});

``` -->
GIT
=============================

Aller dans le dossier :
```shell
$ cd
```
## Initialiser Git

Cloner un dépôt :
```shell
$ git clone username@host:/path/to/repository
```

S’enregistrer :
```shell
$ git config --global user.email “user@gmal.com”
$ git config --global user.name “User”
```

Enregistrer sa clé ssh :
```shell
$ cat ~/.ssh/id_rsa.pub | pbcopy (puis aller sur son git perso)
```
cat ~/.ssh/id_rsa.pub | pbcopy

Connaître l’état de la configuration :
```shell
$ git config --list
```


Les branches :
```shell
Création d’une branche
$ git branch ‘nom-de-la-branch’
Aller sur la branch
$ git checkout ‘nom-de-la-branch’
Création et aller sur la branch
$ git checkout -b ‘nom-de-la-branch’
Suppression
$ git branch -D ‘ndlb’
```

Ajouter à la zone :
```shell
Ajouter un changement :
$ git add
Regarder le statut de la zone :
$ git status
```

Valider/Envoyer à la zone :
```shell
Validation de tous les types de changements/création
$ git commit -m ‘Message de validation’
Regarder le statut de la zone :
$ git status
Envoyer les changements
$ git push origin 'branch'
```


```shell
$ git add *
$ git commit -m 'message'
$ git push --set-upstream origin 'ingrid'

```

[Git](https://gist.github.com/aquelito/8596717)
