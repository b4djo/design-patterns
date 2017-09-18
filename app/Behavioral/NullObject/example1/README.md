***Назначение***

В шаблоне Null Object, нулевой объект заменяет проверку экземпляра объекта NULL.

***Проблема***

Из-за того, что некоторые методы возвращают `null` вместо реальных объектов, у вас в коде присутствует множество проверок на `null`.

***Решение***

Вместо `null` возвращайте Null-объект, который предоставляет поведение по умолчанию.

***Links***

1. https://refactoring.guru/ru/introduce-null-object
2. https://www.tutorialspoint.com/design_pattern/null_object_pattern.htm
3. https://php.earth/doc/oop/design-patterns/null-object