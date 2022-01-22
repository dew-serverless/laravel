<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
        <title>{{ config('app.name') }}</title>
    </head>
    <body>
        <main class="container">
            <h1>{{ config('app.name') }}</h1>
            <p>Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</p>

            @if ($running_in_fc)
                <p>The application is running in Alibaba Cloud Function Compute.</p>
            @else
                <p>The application is <strong>NOT</strong> running in Alibaba Cloud Function Compute.</p>
            @endif

            <nav>
                <ul>
                    <li><a href="/error">Exception test</a></li>
                </ul>
            </nav>

            <h2>Environment</h2>
            <table>
                <thead>
                    <tr>
                        <th width="30%">Field</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($environment as $field => $value)
                        <tr>
                            <td>{{ $field }}</td>
                            <td>{{ $value }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </main>
    </body>
</html>
