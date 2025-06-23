## Pasos para iniciar el proyecto.

Este proyecto viene configurado para Docker V2, por lo que instalar tal versión.

Al terminar de clonar el proyecto, realizar la copia del `.env.example` a `.env` y descomentar la configuración de la DB.

Luego estar en la carpeta raíz del mismo, buildear el docker:

```sh
  docker compose up --build -d
```

El build aparte de la instalación, realiza las migraciones y ejecuta los seed con los datos bases para su prueba.

Ingresar al contenedor para correr el servidor:

```sh
docker compose exec app bash
```

Y correr el servidor:

```sh
php artisan serve --host=0.0.0.0 --port=8000 
```

## Usuarios creados cada uno con un rol para su prueba:

```json
//Maslow_Admin
{
  "email":"maslow_admin@test.com",
  "password":"admin"
}

//Company_Admin
{
  "email":"company_admin@test.com",
  "password":"company"
}

//Company_Employee
{
  "email":"company_employee1@test.com",
  "password":"employee"
}
```


## Ingreso a la base de datos de forma externa

Se está utilizando mysql y el mismo tiene configurado el puerto `3307` en caso que quiera ingresar de forma externa.
