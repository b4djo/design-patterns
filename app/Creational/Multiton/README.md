**Пул одиночек (Multiton)**

Это считается анти-паттерном! Для лучшей тестируемости и сопровождения кода используйте Инъекцию Зависимости (Dependency Injection)!

**Назначение**

Содержит список именованных созданных экземпляров классов, которые в итоге используются как Singleton-ы, но в заданном заранее N-ном количестве.

**Примеры**

- Два объекта для доступа к базам данных, к примеру, один для MySQL, а второй для SQLite
- Несколько логгирующих объектов (один для отладочных сообщений, другой для ошибок и т.п.)