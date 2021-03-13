
## SquareBlog

Web realizada para la prueba por Marc Ibi Alvarez.

## Instrucciones para la instalación

- `git clone https://github.com/softon15/square.git`
- cd square
- composer install
- Renombrar .env.example a .env
- Rellenar el .env con la información para la conexión a la base de datos
- Crear una base de datos con el nombre que se haya puesto en el .env
- php artisan migrate
- php artisan schedule:run (Esto es para ejecutar al menos una vez la lectura de posts)
- php artisan key:generate

Ahora ya puedes lanzar php artisan serve. La web debería estar funcionando en http://127.0.0.1:8000

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
