# simple_Validator

# Описание

Простой валидатор, состоящий из двух компонентов - из валидации входящих данных, имени пользователя и email, а так же вывода флэш сообщений. С их помощью вы сможете проверить заполненны ли ваши поля и вывести сообщения об ошибке.


### 1. Создаем экземпляр класса и передаем значения в конструктор

```

$validation = new Validation ($username, $email);

```


### 2. Пример использования фунций

```
//производим проверку имени пользователя и email, а после выводим флэш сообщения
if ($validation->validationUsername() === 1) {
    FlashMessage::set_flash_message('validation_message1', 'Введитwwе username');
} elseif ($validation->validationUsername() === 2) {
    FlashMessage::set_flash_message('validation_message1', 'Имя пользователя должно быть не менее 3-х сммволов и не более 25');
} elseif ($validation->validationEmail() === false) {
    FlashMessage::set_flash_message('validation_message2', 'Ввеdddдите email');
}

```
