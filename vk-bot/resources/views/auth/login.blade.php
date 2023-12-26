<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa; /* добавим фон для body */
            margin: 0; /* уберем отступы по умолчанию */
            display: flex;
            align-items: center; /* по вертикали по центру */
            justify-content: center; /* по горизонтали по центру */
            min-height: 100vh; /* на весь экран */
        }

        .container {
            max-width: 546px; /* изменения по заданию */
            width: 100%;
        }

        .card {
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            color: #000;
            font-family: Inter;
            font-size: 50px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            border-bottom: 1px solid #ddd;
            padding: 15px; /* увеличим отступы для красоты */
            font-family: 'Inter';
            font-size: 50px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            text-align: center; /* выровняем по центру */
        }

        .card-body {
            display: flex;
            padding: 20px;
            justify-content: center;
            flex-wrap: wrap;
            align-content: center;
            flex-direction: column;
        }

        .form-label {
            font-weight: bold;
            border-radius: 10px;
            background: #FFF;
            border-radius: 5px;
            border: 0;
        }

        .form-control {
            width: 371px;
            height: 62px;
            flex-shrink: 0;
            margin-bottom: 15px; /* добавим отступ снизу для разделения полей */
        }

        .btn-primary {
            background-color: #3522A8;
            border-color: #3522A8;
            width: 371px; /* изменения по заданию */
            height: 62px; /* изменения по заданию */
        }

        .btn-primary:hover {
            background-color: #6c3483; /* изменения по заданию */
            border-color: #6c3483; /* изменения по заданию */
        }
    </style>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>
                    <div class="card-body">
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label"></label>
                                <input type="text" id="name" name="name" class="form-control" required placeholder="{{ __('Логин') }}">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label"></label>
                                <input type="password" id="password" name="password" class="form-control" required placeholder="{{ __('Пароль') }}">
                            </div>
                            <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Подключаем скрипты Bootstrap и ваш пользовательский скрипт, если есть -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
