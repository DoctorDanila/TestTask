# TestTask

## Rules for making commits to Frontend developers

### Description

To standardize the approach to programming in the team, we will use this approach to naming commits in the project \ <br>
**Чтобы стандартизировать подход к программированию в команде, мы будем использовать этот подход к именованию коммитов в проекте**

### Example of commit:

[*`page\block`*] *`type_of_commit`*: *`short_description_of_commit`* <br>
or <br>
(*`file`*) *`type_of_commit`*: *`short_description_of_commit`* <br>
or <br>
{*`area`*} *`type_of_commit`*: *`short_description_of_commit`* <br>

### types_of_commit:
#### general:
- **`fix`** - if you fixed some serious bug \ **если вы исправили какую-то серьезную ошибку** <br>
- **`feature`** - used when adding new application-level functionality \ **используется при добавлении новых функций на уровне приложения** <br>
- **`docs`** - everything about documentation \ **все, что касается документации** <br>
- **`style`** - correcting typos, correcting formatting \ **исправление опечаток, исправление форматирования** <br>
- **`refactor`** - refactoring the application code \ **рефакторинг кода приложения** <br>
- **`test`** - everything related to testing \ **все, что связано с тестированием** <br>
- **`chore`** - normal code maintenance \ **обычная поддержка кода** <br>
- **`resources`** - if you added new media resources \ **если вы добавили новые медиаресурсы** <br>
- **`structure`** - if you change the structure of the application \ **если вы изменяете структуру приложения** <br>

#### technological:

- **`layout`** - when changing the layout \ **при изменении вёрстки** <br>
- **`css`** - when changing the css styles \ **при изменении css стилей** <br>
- **`script`** - when changing the site-sctipts \ **при изменении скриптов сайта** <br>

## Rules for making commits to Backend developers

### Description

To standardize the approach to programming in the team, we will use this approach to naming commits in the project \ <br>
**Чтобы стандартизировать подход к программированию в команде, мы будем использовать этот подход к именованию коммитов в проекте**

### Example of commit:

[*`page\block\function`*] *`type_of_commit`*: *`short_description_of_commit`* <br>
or <br>
(*`file`*) *`type_of_commit`*: *`short_description_of_commit`* <br>
or <br>
{*`area`*} *`type_of_commit`*: *`short_description_of_commit`* <br>

### types_of_commit:
#### general:
- **`fix`** - if you fixed some serious bug \ **если вы исправили какую-то серьезную ошибку** <br>
- **`feature`** - used when adding new application-level functionality \ **используется при добавлении новых функций на уровне приложения** <br>
- **`docs`** - everything about documentation \ **все, что касается документации** <br>
- **`style`** - correcting typos, correcting formatting \ **исправление опечаток, исправление форматирования** <br>
- **`refactor`** - refactoring the application code \ **рефакторинг кода приложения** <br>
- **`test`** - everything related to testing \ **все, что связано с тестированием** <br>
- **`chore`** - normal code maintenance \ **обычная поддержка кода** <br>
- **`resources`** - if you added new media resources \ **если вы добавили новые медиаресурсы** <br>
- **`structure`** - if you change the structure of the application \ **если вы изменяете структуру приложения** <br>
- **`config`** - if you change the configuration file \ **если вы изменяете конфигурацию приложения** <br>

#### technological:

- **`layout`** - when changing the layout \ **при изменении вёрстки** <br>
- **`css`** - when changing the css styles \ **при изменении css стилей** <br>
- **`script`** - when changing the site-sctipts \ **при изменении скриптов сайта** <br>
- **`api`** - when changing the API \ **при изменении API** <br>
- **`db`** - when changing the Data Base \ **при изменении базы данных** <br>

## warning

❗ you can slightly deviate from the rules for naming commits, but remember that they must convey the essence of what was done in this commit ❗️ \ <br>
**`❗ Вы можете незначительно отходить от правил наименования коммитов, но помните, что они должны передавать суть того, что было сделано в этом коммите ❗️`**

## When working with commits, departing from the rules, remember

- The name should contain a separate file or area that was changed in the commit, for quick localization of the problem, if it occurs \ **В названии должен быть отделённый файл или область, которая изменялась в коммите, для быстрой локализации проблемы, при её возникновении**

- The title should contain a word that briefly describes what has been done, a bug fix or simple project management \ **В названии должно находится слово которое кратко описывает, что было сделано, фикс бага или простое ведение проекта**

- The name of the commit should contain a brief description of what was done, a more detailed description can be added in the description of the commit \ **В названии коммита должно находиться краткое описание что было сделано, более подробное описание можно добавить в описании коммита**

- The length of the commit name should not be long, we try to stick to no more than 24-32 words \ **Длинна названия коммита не должна быть большой, стараемся придерживаться не более 24-32 слов**

- One commit is one task, so that it can be conveniently rolled back, because the more points we leave to return, the more pointwise we can undo changes \ **Один коммит - одна задача, для того чтобы можно было удобно откатываться, ведь чем больше точек для возврата оставим, тем более точечно сможем отменять изменения**

