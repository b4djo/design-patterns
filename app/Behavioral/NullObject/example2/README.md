***Назначение***

В шаблоне Null Object, нулевой объект заменяет проверку экземпляра объекта NULL.

***Проблема***

Из-за того, что некоторые методы возвращают `null` вместо реальных объектов, у вас в коде присутствует множество проверок на `null`.

***Решение***

Вместо `null` возвращайте Null-объект, который предоставляет поведение по умолчанию.

***Links***

1. http://designpatternsphp.readthedocs.io/ru/latest/Behavioral/NullObject/README.html