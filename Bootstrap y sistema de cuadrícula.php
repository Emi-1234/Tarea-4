<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataConnect Solutions</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .logo {
            border: 4px solid black;
            padding: 15px;
            font-weight: bold;
            font-size: 28px;
        }

        .hero {
            min-height: 240px;
        }

        .item-img {
            width: 220px;
            height: 130px;
            object-fit: cover;
            border: 4px solid black;
        }

        .contact-img {
            width: 120px;
        }

        input {
            width: 70%;
            height: 35px;
        }
    </style>
</head>
<body>

<div class="container-fluid p-0">

    <!-- Navbar -->
    <div class="row m-0">
        <div class="col-12 p-3 bg-warning d-flex align-items-center">
            <div class="logo me-4">Logo</div>
            <h1 class="fw-bold">DataConnect Solutions</h1>
        </div>
    </div>

    <!-- Hero -->
    <div class="row m-0">
        <div class="col-lg-8 p-3 mx-auto bg-danger text-center hero">
            <h1 class="fw-bold mt-4">
                Creamos soluciones a medida
            </h1>

            <h4 class="fw-bold">
                ¿Necesitas una red segura para tu negocio?
            </h4>

            <button class="btn btn-info border border-dark border-4 fw-bold fs-2 mt-4">
                Contactar
            </button>
        </div>
    </div>

    <!-- Servicios -->
    <div class="row m-0 text-center">

        <div class="col-lg-3 p-3 bg-success border border-dark">
            <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=300"
                 class="item-img">
            <h4 class="fw-bold mt-3">Instalación de redes</h4>
        </div>

        <div class="col-lg-3 p-3 bg-success border border-dark">
            <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=300"
                 class="item-img">
            <h4 class="fw-bold mt-3">Asistencia remota</h4>
        </div>

        <div class="col-lg-3 p-3 bg-success border border-dark">
            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=300"
                 class="item-img">
            <h4 class="fw-bold mt-3">Servidores Ubuntu</h4>
        </div>

        <div class="col-lg-3 p-3 bg-success border border-dark">
            <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?w=300"
                 class="item-img">
            <h4 class="fw-bold mt-3">Seguridad de datos</h4>
        </div>

    </div>

    <!-- Contacto -->
    <div class="row m-0 text-light">

        <div class="col-lg-6 p-3 bg-secondary border border-light text-center">
            <h1 class="fw-bold mt-5">
                Agenda una reunión
            </h1>

            <h1 class="fw-bold">
                informativa sin costo
            </h1>

            <img src="https://cdn-icons-png.flaticon.com/512/747/747310.png"
                 class="contact-img mt-4">
        </div>

        <div class="col-lg-6 p-3 bg-secondary border border-light text-center">

            <h2 class="fw-bold mb-5">
                Contacto
            </h2>

            <form>

                <div class="mb-3">
                    <label class="fw-bold fs-3">Nombre</label>
                    <br>
                    <input type="text">
                </div>

                <div class="mb-4">
                    <label class="fw-bold fs-3">Email</label>
                    <br>
                    <input type="email">
                </div>

                <button class="btn btn-info fw-bold fs-3 px-5">
                    Enviar
                </button>

            </form>

        </div>

    </div>

    <!-- Footer -->
    <div class="row m-0">
        <div class="col-12 p-3 bg-dark text-light text-center">
            <h3 class="fw-bold mt-4">
                DataConnect Solutions ® 2026
            </h3>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>