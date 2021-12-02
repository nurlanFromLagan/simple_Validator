# simple_Validator

# Описание

Простой валидатор, состоящий из двух компонентов - из валидации входящих данных, имени пользователя и email, а так же вывода флэш сообщений. С их помощью вы сможете проверить заполненны ли ваши поля и вывести сообщения об ошибке.


### 1. Создаем экземпляр класса

```
$validation = new Validation ();

```


### 2. Пример использования фунций

```
//Сначала проверяем заполненно ли поле 'имя пользователя', потом проверяем корректность длины 'имени пользователя', где сами задаем нужную нам длину
//функции required и checkFieldLength могут использоваться для проверки любых полей

if (!$validation->required($username)) {
    FlashMessage::set_flash_message('validation_message1', 'Введитe имя пользователя!');
    
} elseif (!$validation->checkFieldLength($username, 4, 15)) {
    FlashMessage::set_flash_message('validation_message1', 'Имя пользователя должно быть от 4 до 15 символов!');
    
}

```


### 3. Пример использования фунции для проверки email

```
//Поле email проверяем отдельной функцией, где используем фильтр для проверки 

if (!$validation->validateEmail($email)) {
    FlashMessage::set_flash_message('validation_message2', 'Введитe корректный email!');
    
}

```
