<?php
    $img='';
    if($_GET['id'] == '3' || $_GET['id'] == '8') {
        $img = 'call';
        
        }else{
        $img = 'whatsapp';
    }  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo Digital by Bliones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="build/css/app.css">
</head>

<body>
    <header class="header">
        <!-- <div class="bg-header"></div> -->
        <div class="content-header">
            <h1 class="title">Catálogo Digital</h1>
            <p class="subtitle">Deja de perder clientes <span>por no estar en el face.</span></p>
        </div>
        <a class="boton-red boton-header" href="
                <?php
                    if($_GET['id'] == '3' || $_GET['id'] == '8') {
                        echo 'tel:' . $phone;
                        
                        }else{
                        echo 'https://wa.me/' . $phone;
                    }  
                ?>
			" target="_blank">Contáctanos, nosotros te ayudamos</a>
        <!--         <picture>
            <source srcset="build/img/header.webp" type="image/webp">
            <source srcset="build/img/header.png" type="image/png">
            <img src="build/img/header.png" alt="Websites Premium">
        </picture> -->
    </header>

    <!-- Botones Menu -->
    <div class="botones-direcc">
        <div class="btn-izquierdo">
            <a href="">Uniformes</a>
        </div>
        <div class="btn-derecho">
            <a href="">Menus</a>
        </div>
    </div>

    <!-- Websites basicos -->
    <div class="section">
        <div class="title-container">
            <h3>Website Basico</h3>
        </div>

        <div class="content section-body">
            <picture>
                <source srcset="build/img/wb_basic/website_basico.webp" type="image/webp">
                <source srcset="build/img/wb_basic/website_basico.png" type="image/png">
                <img src="build/img/wb_basic/website_basico.png" alt="Websites Básicos">
            </picture>
            <div class="row">
                <h4 class="title-card">Beneficios de tener website</h4>

                <div class="card-beneficios">
                    <div class="beneficios tercios text-center">
                        <picture>
                            <source srcset="build/img/wb_basic/wbb_1.webp" type="image/webp">
                            <source srcset="build/img/wb_basic/wbb_1.png" type="image/png">
                            <img class="img-height-10rem" src="build/img/wb_basic/wbb_1.png" alt="Websites Básicos">
                        </picture>
                        <p class="slag">Aumenta el alcance de tu negocio</p>
                        <p class="description">
                            Cualquier persona con acceso a Internet podrá ver lo que ofreces.
                        </p>
                    </div><!-- .beneficios -->
                    <div class="beneficios tercios text-center">
                        <picture>
                            <source srcset="build/img/wb_basic/wbb_2.webp" type="image/webp">
                            <source srcset="build/img/wb_basic/wbb_2.png" type="image/png">
                            <img class="img-height-10rem" src="build/img/wb_basic/wbb_2.png" alt="Websites Básicos">
                        </picture>
                        <p class="slag">Mejora la imagen de tu marca</p>
                        <p class="description">
                            Un buen website mejora la imagen de tu marca.
                        </p>
                    </div><!-- beneficios -->
                    <div class="beneficios tercios text-center">
                        <picture>
                            <source srcset="build/img/wb_basic/wbb_3.webp" type="image/webp">
                            <source srcset="build/img/wb_basic/wbb_3.png" type="image/png">
                            <img class="img-height-10rem" src="build/img/wb_basic/wbb_3.png" alt="Websites Básicos">
                        </picture>
                        <p class="slag">Aumenta tus ventas</p>
                        <p class="description">
                            El tener un website es como tener tu negocio abierto 24/7.
                        </p>
                    </div><!-- beneficios -->
                    <div class="beneficios flex medios">
                        <picture>
                            <source srcset="build/img/dominio-ico.webp" type="image/webp">
                            <source srcset="build/img/dominio-ico.png" type="image/png">
                            <img src="build/img/dominio-ico.png" alt="Websites Básicos">
                        </picture>
                        <p class="slag">Nombre de tu negocio como tu dominio .com</p>
                    </div><!-- beneficios -->
                    <div class="beneficios flex medios">
                        <picture>
                            <source srcset="build/img/google-ico.webp" type="image/webp">
                            <source srcset="build/img/google-ico.png" type="image/png">
                            <img src="build/img/google-ico.png" alt="Websites Básicos">
                        </picture>
                        <p class="slag">Aparece en las búsquedas de Google</p>
                    </div><!-- beneficios -->
                </div> <!-- .card -->
            </div><!-- row -->

            <div class="row flex-row">
                <div class="dos-tercios">
                    <h4 class="title-card tablet-display">Características</h4>

                    <div class="accordion movil-display" id="accordionOne">
                        <div class="accordion-item">
                            <h2 class="accordion-header boton-azul" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Da click aquí para ver las características
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionOne">
                                <div class="accordion-body">

                                    <div class="card-caracteristicas">
                                        <div class="caracteristicas">
                                            <picture>
                                                <source srcset="build/img/wb_basic/webb_(2).webp" type="image/webp">
                                                <source srcset="build/img/wb_basic/webb_(2).png" type="image/png">
                                                <img src="build/img/wb_basic/webb_(2).png" alt="Websites Básicos">
                                            </picture>
                                            <p>Información de negocio</p>
                                        </div><!-- .caracteristicas -->
                                        <div class="caracteristicas">
                                            <picture>
                                                <source srcset="build/img/wb_basic/webb_(3).webp" type="image/webp">
                                                <source srcset="build/img/wb_basic/webb_(3).png" type="image/png">
                                                <img src="build/img/wb_basic/webb_(3).png" alt="Websites Básicos">
                                            </picture>
                                            <p>Mapa</p>
                                        </div><!-- .caracteristicas -->
                                        <div class="caracteristicas">
                                            <picture>
                                                <source srcset="build/img/wb_basic/webb_(5).webp" type="image/webp">
                                                <source srcset="build/img/wb_basic/webb_(5).png" type="image/png">
                                                <img src="build/img/wb_basic/webb_(5).png" alt="Websites Básicos">
                                            </picture>
                                            <p>Diseño responsivo</p>
                                        </div><!-- .caracteristicas -->
                                        <div class="caracteristicas">
                                            <picture>
                                                <source srcset="build/img/wb_basic/webb_(1).webp" type="image/webp">
                                                <source srcset="build/img/wb_basic/webb_(1).png" type="image/png">
                                                <img src="build/img/wb_basic/webb_(1).png" alt="Websites Básicos">
                                            </picture>
                                            <p>Formulario de contacto</p>
                                        </div><!-- .caracteristicas -->
                                        <div class="caracteristicas">
                                            <picture>
                                                <source srcset="build/img/wb_basic/webb_(6).webp" type="image/webp">
                                                <source srcset="build/img/wb_basic/webb_(6).png" type="image/png">
                                                <img src="build/img/wb_basic/webb_(6).png" alt="Websites Básicos">
                                            </picture>
                                            <p>Enlace a redes sociales</p>
                                        </div><!-- .caracteristicas -->
                                        <div class="caracteristicas">
                                            <picture>
                                                <source srcset="build/img/wb_basic/webb_(4).webp" type="image/webp">
                                                <source srcset="build/img/wb_basic/webb_(4).png" type="image/png">
                                                <img src="build/img/wb_basic/webb_(4).png" alt="Websites Básicos">
                                            </picture>
                                            <p>Galeria de fotos</p>
                                        </div><!-- .caracteristicas -->

                                        <picture>
                                            <source srcset="build/img/wb_basic/website_basico_galeria.webp" type="image/webp">
                                            <source srcset="build/img/wb_basic/website_basico_galeria.png" type="image/png">
                                            <img src="build/img/wb_basic/website_basico_galeria.png" alt="Websites Básicos">
                                        </picture>
                                    </div><!-- .card-caracteristicas -->
                                </div>

                            </div><!-- .accordion-body -->
                        </div>
                    </div>

                    <div class="card-caracteristicas tablet-display">
                        <div class="caracteristicas">
                            <picture>
                                <source srcset="build/img/wb_basic/webb_(2).webp" type="image/webp">
                                <source srcset="build/img/wb_basic/webb_(2).png" type="image/png">
                                <img src="build/img/wb_basic/webb_(2).png" alt="Websites Básicos">
                            </picture>
                            <p>Información de negocio</p>
                        </div><!-- .caracteristicas -->
                        <div class="caracteristicas">
                            <picture>
                                <source srcset="build/img/wb_basic/webb_(3).webp" type="image/webp">
                                <source srcset="build/img/wb_basic/webb_(3).png" type="image/png">
                                <img src="build/img/wb_basic/webb_(3).png" alt="Websites Básicos">
                            </picture>
                            <p>Mapa</p>
                        </div><!-- .caracteristicas -->
                        <div class="caracteristicas">
                            <picture>
                                <source srcset="build/img/wb_basic/webb_(5).webp" type="image/webp">
                                <source srcset="build/img/wb_basic/webb_(5).png" type="image/png">
                                <img src="build/img/wb_basic/webb_(5).png" alt="Websites Básicos">
                            </picture>
                            <p>Diseño responsivo</p>
                        </div><!-- .caracteristicas -->
                        <div class="caracteristicas">
                            <picture>
                                <source srcset="build/img/wb_basic/webb_(1).webp" type="image/webp">
                                <source srcset="build/img/wb_basic/webb_(1).png" type="image/png">
                                <img src="build/img/wb_basic/webb_(1).png" alt="Websites Básicos">
                            </picture>
                            <p>Formulario de contacto</p>
                        </div><!-- .caracteristicas -->
                        <div class="caracteristicas">
                            <picture>
                                <source srcset="build/img/wb_basic/webb_(6).webp" type="image/webp">
                                <source srcset="build/img/wb_basic/webb_(6).png" type="image/png">
                                <img src="build/img/wb_basic/webb_(6).png" alt="Websites Básicos">
                            </picture>
                            <p>Enlace a redes sociales</p>
                        </div><!-- .caracteristicas -->
                        <div class="caracteristicas">
                            <picture>
                                <source srcset="build/img/wb_basic/webb_(4).webp" type="image/webp">
                                <source srcset="build/img/wb_basic/webb_(4).png" type="image/png">
                                <img src="build/img/wb_basic/webb_(4).png" alt="Websites Básicos">
                            </picture>
                            <p>Galeria de fotos</p>
                        </div><!-- .caracteristicas -->

                        <picture>
                            <source srcset="build/img/wb_basic/website_basico_galeria.webp" type="image/webp">
                            <source srcset="build/img/wb_basic/website_basico_galeria.png" type="image/png">
                            <img src="build/img/wb_basic/website_basico_galeria.png" alt="Websites Básicos">
                        </picture>
                    </div><!-- .card-caracteristicas -->

                </div><!-- .dos-tercios -->
                <div class="tercios">
                    <div class="qr">
                        <a class="boton-red">Catálogo Online</a>
                    </div><!-- .qr -->
                    <div class="etiqueta">
                        <h3>Website Basico</h3>
                        <p>Código: BL 117</p>
                        <p>$ 399</p>
                    </div>
                    <h4 class="mant-mensual">Mantenimiento mensual: $ 69</h4>
                    <p>Protección de virus, actualización de fotografías o información</p>
                    <p>* Precio sujeto a cambios</p>
                </div><!-- .tercio -->
            </div><!-- row -->
        </div>

        <a class="boton-verde" href="
			<?php
				if($_GET['id'] == '3' || $_GET['id'] == '8') {
					echo 'tel:' . $phone;
					
					}else{
					echo 'https://wa.me/' . $phone;
				}  
			?>
			" target="_blank">
                <picture>
                    <source srcset="build/img/<?php echo $img; ?>.webp" type="image/webp">
                    <source srcset="build/img/<?php echo $img; ?>.png" type="image/png">
                    <img src="build/img/<?php echo $img; ?>.png" alt="Websites Básicos">
                </picture>
				<h2>
					<?php
						if($_GET['id'] == '3' || $_GET['id'] == '8') {
							echo 'Llámanos';
							
							}else{
							echo 'Envíanos un WhatsApp';
						}  
				?>
				</h2>
		</a>

    </div><!-- .section -->

    <!-- Websites Premium -->
    <div class="section">
        <div class="title-container">
            <h3>Website Premium</h3>
        </div>
        <div class="content section-body">
            <picture>
                <source srcset="build/img/wb_prem/website_premium.webp" type="image/webp">
                <source srcset="build/img/wb_prem/website_premium.png" type="image/png">
                <img src="build/img/wb_prem/website_premium.png" alt="Websites Premium">
            </picture>
            <div class="row">
                <h4 class="title-card">Beneficios de tener Website Premium</h4>
                <div class="card-beneficios">
                    <div class="beneficios tercios text-center">
                        <picture>
                            <source srcset="build/img/wb_prem/wbp_2.webp" type="image/webp">
                            <source srcset="build/img/wb_prem/wbp_2.png" type="image/png">
                            <img class="img-height-10rem" src="build/img/wb_prem/wbp_2.png" alt="Websites Premium">
                        </picture>
                        <p class="slag">Extremadamente versátil</p>
                        <p class="description">
                            Amplia variedad de opciones dependiendo de las necesidades de su negocio.
                        </p>
                    </div><!-- .beneficios -->
                    <div class="beneficios tercios text-center">
                        <picture>
                            <source srcset="build/img/wb_prem/860322wbp_.webp" type="image/webp">
                            <source srcset="build/img/wb_prem/860322wbp_.png" type="image/png">
                            <img class="img-height-10rem" src="build/img/wb_prem/860322wbp_.png" alt="Websites Premium">
                        </picture>
                        <p class="slag">Website Dinámico</p>
                        <p class="description">
                            Permite colocar videos, animaciones y transiciones.
                        </p>
                    </div><!-- beneficios -->
                    <div class="beneficios tercios text-center">
                        <picture>
                            <source srcset="build/img/wb_prem/wbp_3.webp" type="image/webp">
                            <source srcset="build/img/wb_prem/wbp_3.png" type="image/png">
                            <img class="img-height-10rem" src="build/img/wb_prem/wbp_3.png" alt="Websites Premium">
                        </picture>
                        <p class="slag">Interactividad</p>
                        <p class="description">
                            Los usuarios pueden interactuar con elementos del website.
                        </p>
                    </div><!-- beneficios -->
                    <div class="beneficios flex medios">
                        <picture>
                            <source srcset="build/img/dominio-ico.webp" type="image/webp">
                            <source srcset="build/img/dominio-ico.png" type="image/png">
                            <img src="build/img/dominio-ico.png" alt="Websites Premium">
                        </picture>
                        <p class="slag">Nombre de tu negocio como tu dominio .com</p>
                    </div><!-- beneficios -->
                    <div class="beneficios flex medios">
                        <picture>
                            <source srcset="build/img/google-ico.webp" type="image/webp">
                            <source srcset="build/img/google-ico.png" type="image/png">
                            <img src="build/img/google-ico.png" alt="Websites Premium">
                        </picture>
                        <p class="slag">Aparece en las búsquedas de Google</p>
                    </div><!-- beneficios -->
                </div> <!-- .card -->
            </div><!-- row -->

            <div class="row flex-row">
                <div class="dos-tercios">
                    <h4 class="title-card tablet-display">Características</h4>

                    <div class="accordion movil-display" id="accordionTwo">
                        <div class="accordion-item">
                            <h2 class="accordion-header boton-azul" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    Da click aquí para ver las características
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionTwo">
                                <div class="accordion-body">

                                    <div class="card-caracteristicas">
                                        <div class="caracteristicas">
                                            <picture>
                                                <source srcset="build/img/wb_prem/2405177wbp_.webp" type="image/webp">
                                                <source srcset="build/img/wb_prem/2405177wbp_.png" type="image/png">
                                                <img src="build/img/wb_prem/2405177wbp_.png" alt="Websites Premium">
                                            </picture>
                                            <p>Interacción con las redes sociales</p>
                                        </div><!-- .caracteristicas -->
                                        <div class="caracteristicas">
                                            <picture>
                                                <source srcset="build/img/wb_prem/4771203wbp_.webp" type="image/webp">
                                                <source srcset="build/img/wb_prem/4771203wbp_.png" type="image/png">
                                                <img src="build/img/wb_prem/4771203wbp_.png" alt="Websites Premium">
                                            </picture>
                                            <p>Fondos personalizados</p>
                                        </div><!-- .caracteristicas -->
                                        <div class="caracteristicas">
                                            <picture>
                                                <source srcset="build/img/wb_prem/4395215wbp_.webp" type="image/webp">
                                                <source srcset="build/img/wb_prem/4395215wbp_.png" type="image/png">
                                                <img src="build/img/wb_prem/4395215wbp_.png" alt="Websites Premium">
                                            </picture>
                                            <p>Reviews</p>
                                        </div><!-- .caracteristicas -->
                                        <div class="caracteristicas">
                                            <picture>
                                                <source srcset="build/img/wb_prem/2684612wbp_.webp" type="image/webp">
                                                <source srcset="build/img/wb_prem/2684612wbp_.png" type="image/png">
                                                <img src="build/img/wb_prem/2684612wbp_.png" alt="Websites Premium">
                                            </picture>
                                            <p>Slider home</p>
                                        </div><!-- .caracteristicas -->
                                        <div class="caracteristicas">
                                            <picture>
                                                <source srcset="build/img/wb_prem/3447671wbp_.webp" type="image/webp">
                                                <source srcset="build/img/wb_prem/3447671wbp_.png" type="image/png">
                                                <img src="build/img/wb_prem/3447671wbp_.png" alt="Websites Premium">
                                            </picture>
                                            <p>Pop-Ups</p>
                                        </div><!-- .caracteristicas -->
                                        <div class="caracteristicas">
                                            <picture>
                                                <source srcset="build/img/wb_prem/2522227wbp_.webp" type="image/webp">
                                                <source srcset="build/img/wb_prem/2522227wbp_.png" type="image/png">
                                                <img src="build/img/wb_prem/2522227wbp_.png" alt="Websites Premium">
                                            </picture>
                                            <p>Formularios personalizados</p>
                                        </div><!-- .caracteristicas -->
                                        <div class="caracteristicas">
                                            <picture>
                                                <source srcset="build/img/wb_prem/860322wbp_.webp" type="image/webp">
                                                <source srcset="build/img/wb_prem/860322wbp_.png" type="image/png">
                                                <img src="build/img/wb_prem/860322wbp_.png" alt="Websites Premium">
                                            </picture>
                                            <p>Galería multimedia</p>
                                        </div><!-- .caracteristicas -->
                                        <div class="caracteristicas">
                                            <picture>
                                                <source srcset="build/img/wb_prem/3022233wbp_.webp" type="image/webp">
                                                <source srcset="build/img/wb_prem/3022233wbp_.png" type="image/png">
                                                <img src="build/img/wb_prem/3022233wbp_.png" alt="Websites Premium">
                                            </picture>
                                            <p>Smart links</p>
                                        </div><!-- .caracteristicas -->
                                        <div class="caracteristicas">
                                            <picture>
                                                <source srcset="build/img/wb_prem/1961593wbp_.webp" type="image/webp">
                                                <source srcset="build/img/wb_prem/1961593wbp_.png" type="image/png">
                                                <img src="build/img/wb_prem/1961593wbp_.png" alt="Websites Premium">
                                            </picture>
                                            <p>Diseño responsivo</p>
                                        </div><!-- .caracteristicas -->
                                        <div class="caracteristicas">
                                            <picture>
                                                <source srcset="build/img/wb_prem/115757wbp_.webp" type="image/webp">
                                                <source srcset="build/img/wb_prem/115757wbp_.png" type="image/png">
                                                <img src="build/img/wb_prem/115757wbp_.png" alt="Websites Premium">
                                            </picture>
                                            <p>Mailing</p>
                                        </div><!-- .caracteristicas -->
                                        <div class="caracteristicas">
                                            <picture>
                                                <source srcset="build/img/wb_prem/854980wbp_.webp" type="image/webp">
                                                <source srcset="build/img/wb_prem/854980wbp_.png" type="image/png">
                                                <img src="build/img/wb_prem/854980wbp_.png" alt="Websites Premium">
                                            </picture>
                                            <p>Mapas personalizados</p>
                                        </div><!-- .caracteristicas -->
                                        <div class="caracteristicas">
                                            <picture>
                                                <source srcset="build/img/wb_prem/3898840wbp_.webp" type="image/webp">
                                                <source srcset="build/img/wb_prem/3898840wbp_.png" type="image/png">
                                                <img src="build/img/wb_prem/3898840wbp_.png" alt="Websites Premium">
                                            </picture>
                                            <p>Multi-idiomas</p>
                                        </div><!-- .caracteristicas -->
                                    </div><!-- .card-caracteristicas -->

                                </div>

                            </div><!-- .accordion-body -->
                        </div>
                    </div>

                    <div class="card-caracteristicas tablet-display">
                        <div class="caracteristicas">
                            <picture>
                                <source srcset="build/img/wb_prem/2405177wbp_.webp" type="image/webp">
                                <source srcset="build/img/wb_prem/2405177wbp_.png" type="image/png">
                                <img src="build/img/wb_prem/2405177wbp_.png" alt="Websites Premium">
                            </picture>
                            <p>Interacción con las redes sociales</p>
                        </div><!-- .caracteristicas -->
                        <div class="caracteristicas">
                            <picture>
                                <source srcset="build/img/wb_prem/4771203wbp_.webp" type="image/webp">
                                <source srcset="build/img/wb_prem/4771203wbp_.png" type="image/png">
                                <img src="build/img/wb_prem/4771203wbp_.png" alt="Websites Premium">
                            </picture>
                            <p>Fondos personalizados</p>
                        </div><!-- .caracteristicas -->
                        <div class="caracteristicas">
                            <picture>
                                <source srcset="build/img/wb_prem/4395215wbp_.webp" type="image/webp">
                                <source srcset="build/img/wb_prem/4395215wbp_.png" type="image/png">
                                <img src="build/img/wb_prem/4395215wbp_.png" alt="Websites Premium">
                            </picture>
                            <p>Reviews</p>
                        </div><!-- .caracteristicas -->
                        <div class="caracteristicas">
                            <picture>
                                <source srcset="build/img/wb_prem/2684612wbp_.webp" type="image/webp">
                                <source srcset="build/img/wb_prem/2684612wbp_.png" type="image/png">
                                <img src="build/img/wb_prem/2684612wbp_.png" alt="Websites Premium">
                            </picture>
                            <p>Slider home</p>
                        </div><!-- .caracteristicas -->
                        <div class="caracteristicas">
                            <picture>
                                <source srcset="build/img/wb_prem/3447671wbp_.webp" type="image/webp">
                                <source srcset="build/img/wb_prem/3447671wbp_.png" type="image/png">
                                <img src="build/img/wb_prem/3447671wbp_.png" alt="Websites Premium">
                            </picture>
                            <p>Pop-Ups</p>
                        </div><!-- .caracteristicas -->
                        <div class="caracteristicas">
                            <picture>
                                <source srcset="build/img/wb_prem/2522227wbp_.webp" type="image/webp">
                                <source srcset="build/img/wb_prem/2522227wbp_.png" type="image/png">
                                <img src="build/img/wb_prem/2522227wbp_.png" alt="Websites Premium">
                            </picture>
                            <p>Formularios personalizados</p>
                        </div><!-- .caracteristicas -->
                        <div class="caracteristicas">
                            <picture>
                                <source srcset="build/img/wb_prem/860322wbp_.webp" type="image/webp">
                                <source srcset="build/img/wb_prem/860322wbp_.png" type="image/png">
                                <img src="build/img/wb_prem/860322wbp_.png" alt="Websites Premium">
                            </picture>
                            <p>Galería multimedia</p>
                        </div><!-- .caracteristicas -->
                        <div class="caracteristicas">
                            <picture>
                                <source srcset="build/img/wb_prem/3022233wbp_.webp" type="image/webp">
                                <source srcset="build/img/wb_prem/3022233wbp_.png" type="image/png">
                                <img src="build/img/wb_prem/3022233wbp_.png" alt="Websites Premium">
                            </picture>
                            <p>Smart links</p>
                        </div><!-- .caracteristicas -->
                        <div class="caracteristicas">
                            <picture>
                                <source srcset="build/img/wb_prem/1961593wbp_.webp" type="image/webp">
                                <source srcset="build/img/wb_prem/1961593wbp_.png" type="image/png">
                                <img src="build/img/wb_prem/1961593wbp_.png" alt="Websites Premium">
                            </picture>
                            <p>Diseño responsivo</p>
                        </div><!-- .caracteristicas -->
                        <div class="caracteristicas">
                            <picture>
                                <source srcset="build/img/wb_prem/115757wbp_.webp" type="image/webp">
                                <source srcset="build/img/wb_prem/115757wbp_.png" type="image/png">
                                <img src="build/img/wb_prem/115757wbp_.png" alt="Websites Premium">
                            </picture>
                            <p>Mailing</p>
                        </div><!-- .caracteristicas -->
                        <div class="caracteristicas">
                            <picture>
                                <source srcset="build/img/wb_prem/854980wbp_.webp" type="image/webp">
                                <source srcset="build/img/wb_prem/854980wbp_.png" type="image/png">
                                <img src="build/img/wb_prem/854980wbp_.png" alt="Websites Premium">
                            </picture>
                            <p>Mapas personalizados</p>
                        </div><!-- .caracteristicas -->
                        <div class="caracteristicas">
                            <picture>
                                <source srcset="build/img/wb_prem/3898840wbp_.webp" type="image/webp">
                                <source srcset="build/img/wb_prem/3898840wbp_.png" type="image/png">
                                <img src="build/img/wb_prem/3898840wbp_.png" alt="Websites Premium">
                            </picture>
                            <p>Multi-idiomas</p>
                        </div><!-- .caracteristicas -->
                    </div><!-- .card-caracteristicas -->

                </div><!-- .dos-tercios -->
                <div class="tercios">
                    <!-- <h4 class="title-card">Catálogo Online</h4> -->
                    <div class="qr">
                        <a class="boton-red">Catálogo Online</a>
                    </div><!-- .qr -->
                    <div class="etiqueta">
                        <h3>Website Premium</h3>
                        <p>Código: BL 117</p>
                        <p>$ 799</p>
                    </div>
                    <h4 class="mant-mensual">Mantenimiento mensual: $ 69</h4>
                    <p>Mantenimiento prioritario, protección de virus y actualizaciones.</p>
                    <p>* Precio sujeto a cambios</p>
                </div><!-- .tercio -->
            </div><!-- row -->
        </div>
    </div><!-- .section -->

    <!-- Tienda en linea -->
    <div class="section">
        <div class="title-container">
            <h3>Tienda en linea</h3>
        </div>

        <div class="content section-body">
            <picture>
                <source srcset="build/img/shop/shop.webp" type="image/webp">
                <source srcset="build/img/shop/shop.png" type="image/png">
                <img src="build/img/shop/shop.png" alt="Websites Premium">
            </picture>
            <div class="row margin-neg-top-10">
                <h4 class="title-card">Beneficios de tener tienda en línea</h4>
                <div class="card-beneficios">
                    <div class="beneficios tercios text-center">
                        <picture>
                            <source srcset="build/img/shop/1149305shop.webp" type="image/webp">
                            <source srcset="build/img/shop/1149305shop.png" type="image/png">
                            <img class="img-height-10rem" src="build/img/shop/1149305shop.png" alt="Websites Premium">
                        </picture>
                        <p class="slag">Facilidad de vender</p>
                        <p class="description">
                            Cualquier persona con acceso a internet podrá ver lo que ofreces.
                        </p>
                    </div><!-- .beneficios -->
                    <div class="beneficios tercios text-center">
                        <picture>
                            <source srcset="build/img/shop/3094824shop.webp" type="image/webp">
                            <source srcset="build/img/shop/3094824shop.png" type="image/png">
                            <img class="img-height-10rem" src="build/img/shop/3094824shop.png" alt="Websites Premium">
                        </picture>
                        <p class="slag">Interacción con tu cliente</p>
                        <p class="description">
                            Interactúa con tu público para atraer a un gran número de clientes.
                        </p>
                    </div><!-- beneficios -->
                    <div class="beneficios tercios text-center">
                        <picture>
                            <source srcset="build/img/shop/4634670shop.webp" type="image/webp">
                            <source srcset="build/img/shop/4634670shop.png" type="image/png">
                            <img class="img-height-10rem" src="build/img/shop/4634670shop.png" alt="Websites Premium">
                        </picture>
                        <p class="slag">Tienda abierta 24/7</p>
                        <p class="description">
                            Disposición los 365 días del año.
                        </p>
                    </div><!-- beneficios -->
                    <div class="beneficios flex medios">
                        <picture>
                            <source srcset="build/img/dominio-ico.webp" type="image/webp">
                            <source srcset="build/img/dominio-ico.png" type="image/png">
                            <img src="build/img/dominio-ico.png" alt="Websites Premium">
                        </picture>
                        <p class="slag">Nombre de tu negocio como tu dominio .com</p>
                    </div><!-- beneficios -->
                    <div class="beneficios flex medios">
                        <picture>
                            <source srcset="build/img/google-ico.webp" type="image/webp">
                            <source srcset="build/img/google-ico.png" type="image/png">
                            <img src="build/img/google-ico.png" alt="Websites Premium">
                        </picture>
                        <p class="slag">Aparece en las búsquedas de Google</p>
                    </div><!-- beneficios -->
                </div> <!-- .card -->
            </div><!-- row -->

            <div class="row flex-row">

                <div class="dos-tercios">
                    <h4 class="title-card">Website Premium más</h4>
                    <div class="card-caracteristicas">
                        <div class="caracteristicas">
                            <picture>
                                <source srcset="build/img/shop/3712232shop.webp" type="image/webp">
                                <source srcset="build/img/shop/3712232shop.png" type="image/png">
                                <img src="build/img/shop/3712232shop.png" alt="Websites Premium">
                            </picture>
                            <p>Opciones de productos</p>
                        </div><!-- .caracteristicas -->
                        <div class="caracteristicas">
                            <picture>
                                <source srcset="build/img/shop/1831669shop.webp" type="image/webp">
                                <source srcset="build/img/shop/1831669shop.png" type="image/png">
                                <img src="build/img/shop/1831669shop.png" alt="Websites Premium">
                            </picture>
                            <p>Promociones y Ofertas</p>
                        </div><!-- .caracteristicas -->
                        <div class="caracteristicas">
                            <picture>
                                <source srcset="build/img/shop/2857300shop.webp" type="image/webp">
                                <source srcset="build/img/shop/2857300shop.png" type="image/png">
                                <img src="build/img/shop/2857300shop.png" alt="Websites Premium">
                            </picture>
                            <p>Panel de tienda</p>
                        </div><!-- .caracteristicas -->
                        <div class="caracteristicas">
                            <picture>
                                <source srcset="build/img/shop/3655346shop.webp" type="image/webp">
                                <source srcset="build/img/shop/3655346shop.png" type="image/png">
                                <img src="build/img/shop/3655346shop.png" alt="Websites Premium">
                            </picture>
                            <p>Gift Cards</p>
                        </div><!-- .caracteristicas -->
                        <div class="caracteristicas">
                            <picture>
                                <source srcset="build/img/shop/679701shop.webp" type="image/webp">
                                <source srcset="build/img/shop/679701shop.png" type="image/png">
                                <img src="build/img/shop/679701shop.png" alt="Websites Premium">
                            </picture>
                            <p>Productos</p>
                        </div><!-- .caracteristicas -->
                        <picture>
                            <source srcset="build/img/shop/Productosshop.webp" type="image/webp">
                            <source srcset="build/img/shop/Productosshop.png" type="image/png">
                            <img src="build/img/shop/Productosshop.png" alt="Websites Premium">
                        </picture>

                    </div><!-- .card-caracteristicas -->
                </div><!-- .dos-tercios -->

                <div class="tercios">
                    <div class="etiqueta">
                        <h3>Tienda en linea</h3>
                        <p>Código: BL 117</p>
                        <p>$ 1500</p>
                    </div>
                    <h4 class="mant-mensual">Costo adicional por mantenimiento mensual</h4>
                    <p>Mantenimiento prioritario, protección de virus, cambios y actualizaciones.</p>
                    <p>* Precio sujeto a cambios</p>
                </div><!-- .tercio -->
            </div><!-- row -->

            <a class="boton-verde" href="
                <?php
                    if($_GET['id'] == '3' || $_GET['id'] == '8') {
                        echo 'tel:' . $phone;
                        
                        }else{
                        echo 'https://wa.me/' . $phone;
                    }  
                ?>
                " target="_blank">
                <picture>
                    <source srcset="build/img/<?php echo $img; ?>.webp" type="image/webp">
                    <source srcset="build/img/<?php echo $img; ?>.png" type="image/png">
                    <img src="build/img/<?php echo $img; ?>.png" alt="Websites Básicos">
                </picture>
                <h2>
                    <?php
                        if($_GET['id'] == '3' || $_GET['id'] == '8') {
                            echo 'Llámanos';
                            
                            }else{
                            echo 'Envíanos un WhatsApp';
                        }  
                    ?>
                </h2>
            </a>

        </div><!-- .content -->
    </div><!-- .section -->

    <div class="section">
        <div class="title-container">
            <p>Redes sociales</p>
            <h3>Facebook</h3>
        </div>
        <div class="content section-body">
            <div class="row row-red-social">
                <div class="medios card-red">
                    <picture>
                        <source srcset="build/img/facebook/Capa_4.webp" type="image/webp">
                        <source srcset="build/img/facebook/Capa_4.png" type="image/png">
                        <img src="build/img/facebook/Capa_4.png" alt="Websites Premium">
                    </picture>
                    <div class="card-red-text">
                        <h4>Facebook es el rey de las redes sociales</h4>
                        <p>Plataforma social líder, con el <span>60,6%</span> de los usuarios de Internet</p>
                    </div>
                </div><!-- .medios -->
                <div class="medios card-red">
                    <picture>
                        <source srcset="build/img/facebook/2697432.webp" type="image/webp">
                        <source srcset="build/img/facebook/2697432.png" type="image/png">
                        <img src="build/img/facebook/2697432.png" alt="Websites Premium">
                    </picture>
                    <div class="card-red-text">
                        <h4>Los negocios tienen página en Facebook</h4>
                        <p>Facebook tiene más de <span>80 millones</span> de páginas de pequeños negocios</p>
                    </div>
                </div><!-- .medios -->
            </div><!-- .row -->
            <div class="row flex-row">
                <div class="medios">
                    <picture>
                        <source srcset="build/img/facebook/phone_face.webp" type="image/webp">
                        <source srcset="build/img/facebook/phone_face.png" type="image/png">
                        <img class="img-medio" src="build/img/facebook/phone_face.png" alt="Websites Premium">
                    </picture>
                </div>

                <div class="medios">
                    <div class="card-paquetes-container">
                        <div class="card-paquetes">
                            <div class="title-paquetes">
                                <picture>
                                    <source srcset="build/img/facebook/flag.webp" type="image/webp">
                                    <source srcset="build/img/facebook/flag.png" type="image/png">
                                    <img src="build/img/facebook/flag.png" alt="Websites Premium">
                                </picture>
                                <h4>Paquete Básico</h4>
                            </div>
                            <ul>
                                <li>Características</li>
                                <li>Creación o actualización de fanpage</li>
                                <li>2 publicaciones por semana</li>
                                <li>- Imagenes</li>
                                <li>- Texto</li>
                                <li>Sesión de fotos trimestral</li>
                                <li>Publicidad incluida</li>
                                <li>Informes y análisis trimestral</li>
                                <li>$ 120</li>
                            </ul>
                        </div><!-- .card-paquetes -->
                    </div>

                    <div class="card-paquetes-container">
                        <div class="card-paquetes">
                            <div class="title-paquetes">
                                <picture>
                                    <source srcset="build/img/facebook/banner.webp" type="image/webp">
                                    <source srcset="build/img/facebook/banner.png" type="image/png">
                                    <img src="build/img/facebook/banner.png" alt="Websites Premium">
                                </picture>
                                <h4>Paquete Estándar</h4>
                            </div>
                            <ul>
                                <li>Características</li>
                                <li>Creación o actualización de fanpage</li>
                                <li>4 publicaciones por semana</li>
                                <li>- Imagenes</li>
                                <li>- Texto</li>
                                <li>Una historia por semana</li>
                                <li>Sesión de fotos mensual</li>
                                <li>Publicidad incluida</li>
                                <li>Informes y análisis mensual</li>
                                <li>$ 240</li>
                            </ul>
                        </div><!-- .card-paquetes -->
                    </div>

                    <div class="card-paquetes-container">
                        <div class="card-paquetes">
                            <div class="title-paquetes">
                                <picture>
                                    <source srcset="build/img/facebook/diamond.webp" type="image/webp">
                                    <source srcset="build/img/facebook/diamond.png" type="image/png">
                                    <img src="build/img/facebook/diamond.png" alt="Websites Premium">
                                </picture>
                                <h4>Paquete Premium</h4>
                            </div>
                            <ul>
                                <li>Características</li>
                                <li>Creación o actualización de fanpage</li>
                                <li>6 publicaciones por semana</li>
                                <li>- Imagenes</li>
                                <li>- Texto</li>
                                <li>- Videos/Gifs</li>
                                <li>Tres historias por semana</li>
                                <li>Sesión de fotos mensual</li>
                                <li>Publicidad incluida</li>
                                <li>Informes y análisis mensual</li>
                                <li>$ 510</li>
                            </ul>
                        </div><!-- .card-paquetes -->
                    </div><!-- .card-paquetes-container -->
                </div><!-- .medios -->
            </div><!-- .row -->

        </div><!-- .content -->
    </div><!-- .section -->

    <div class="section">
        <div class="title-container">
            <p>Redes sociales</p>
            <h3>Instagram</h3>
        </div>
        <div class="content section-body">
            <div class="row row-red-social">
                <div class="medios card-red">
                    <picture>
                        <source srcset="build/img/insta/Capa_2.webp" type="image/webp">
                        <source srcset="build/img/insta/Capa_2.png" type="image/png">
                        <img src="build/img/insta/Capa_2.png" alt="Websites Premium">
                    </picture>
                    <div class="card-red-text">
                        <h4>Los negocios usan Instagram</h4>
                        <p>El <span>71%</span> de los negocios de EEUU utilizan Instagram</p>
                    </div>
                </div><!-- .medios -->
                <div class="medios card-red">
                    <picture>
                        <source srcset="build/img/insta/2956395.webp" type="image/webp">
                        <source srcset="build/img/insta/2956395.png" type="image/png">
                        <img src="build/img/insta/2956395.png" alt="Websites Premium">
                    </picture>
                    <div class="card-red-text">
                        <h4>Instagram tiene fuerte influencia</h4>
                        <p>Instagram ayuda al <span>80%</span> de sus usuarios a decidir que productos o servicios comprar</p>
                    </div>
                </div><!-- .medios -->
            </div><!-- .row -->
            <div class="row flex-row">
                <div class="medios">
        
                    <picture>
                        <source srcset="build/img/insta/phone_insta.webp" type="image/webp">
                        <source srcset="build/img/insta/phone_insta.png" type="image/png">
                        <img class="img-medio" src="build/img/insta/phone_insta.png" alt="Websites Premium">
                    </picture>

                </div>

                <div class="medios">
                    <div class="card-paquetes-container">
                        <div class="card-paquetes">
                            <div class="title-paquetes">
                                <picture>
                                    <source srcset="build/img/insta/flag.webp" type="image/webp">
                                    <source srcset="build/img/insta/flag.png" type="image/png">
                                    <img src="build/img/insta/flag.png" alt="Websites Premium">
                                </picture>
                                <h4>Paquete Básico</h4>
                            </div>
                            <ul>
                                <li>Características</li>
                                <li>Creación o actualización de perfil</li>
                                <li>2 publicaciones por semana</li>
                                <li>- Imagenes</li>
                                <li>- Texto</li>
                                <li>Sesión de fotos trimestral</li>
                                <li>Publicidad incluida</li>
                                <li>Informes y análisis trimestral</li>
                                <li>$ 80</li>
                            </ul>
                        </div><!-- .card-paquetes -->
                    </div>

                    <div class="card-paquetes-container">
                        <div class="card-paquetes">
                            <div class="title-paquetes">
                                <picture>
                                    <source srcset="build/img/insta/banner.webp" type="image/webp">
                                    <source srcset="build/img/insta/banner.png" type="image/png">
                                    <img src="build/img/insta/banner.png" alt="Websites Premium">
                                </picture>
                                <h4>Paquete Estándar</h4>
                            </div>
                            <ul>
                                <li>Características</li>
                                <li>Creación o actualización de perfil</li>
                                <li>4 publicaciones por semana</li>
                                <li>- Imagenes</li>
                                <li>- Texto</li>
                                <li>Una historia por semana</li>
                                <li>Sesión de fotos mensual</li>
                                <li>Publicidad incluida</li>
                                <li>Informes y análisis mensual</li>
                                <li>$ 160</li>
                            </ul>
                        </div><!-- .card-paquetes -->
                    </div>

                    <div class="card-paquetes-container">
                        <div class="card-paquetes">
                            <div class="title-paquetes">
                                <picture>
                                    <source srcset="build/img/insta/diamond.webp" type="image/webp">
                                    <source srcset="build/img/insta/diamond.png" type="image/png">
                                    <img src="build/img/insta/diamond.png" alt="Websites Premium">
                                </picture>
                                <h4>Paquete Premium</h4>
                            </div>
                            <ul>
                                <li>Características</li>
                                <li>Creación o actualización de perfil</li>
                                <li>6 publicaciones por semana</li>
                                <li>- Imagenes</li>
                                <li>- Texto</li>
                                <li>- Videos/Gifs</li>
                                <li>Tres historias por semana</li>
                                <li>Sesión de fotos mensual</li>
                                <li>Publicidad incluida</li>
                                <li>Informes y análisis mensual</li>
                                <li>$ 370</li>
                            </ul>
                        </div><!-- .card-paquetes -->
                    </div><!-- .card-paquetes-container -->
                </div><!-- .medios -->
            </div><!-- row -->

            <a class="boton-verde" href="
                <?php
                    if($_GET['id'] == '3' || $_GET['id'] == '8') {
                        echo 'tel:' . $phone;
                        
                        }else{
                        echo 'https://wa.me/' . $phone;
                    }  
                ?>
                " target="_blank">
                <picture>
                    <source srcset="build/img/<?php echo $img; ?>.webp" type="image/webp">
                    <source srcset="build/img/<?php echo $img; ?>.png" type="image/png">
                    <img src="build/img/<?php echo $img; ?>.png" alt="Websites Básicos">
                </picture>
                <h2>
                    <?php
                        if($_GET['id'] == '3' || $_GET['id'] == '8') {
                            echo 'Llámanos';
                            
                            }else{
                            echo 'Envíanos un WhatsApp';
                        }  
                    ?>
                </h2>
            </a>

        </div><!-- .content -->
    </div><!-- .section -->

    <div class="section">
        <div class="title-container">
            <h3>Codigo QR</h3>
        </div>
        <div class="content section-body">
            <div class="qr-card">
                <div class="card-qr medios">
                    <picture class="img-width-10">
                        <source srcset="build/img/qr/rapi.webp" type="image/webp">
                        <source srcset="build/img/qr/rapi.png" type="image/png">
                        <img src="build/img/qr/rapi.png" alt="Websites Premium">
                    </picture>
                    <h4>Rapidez</h4>
                    <p>No tienes que buscar el enlace de tu página web o redes sociales. Simplemente necesitas escanear el código QR.</p>
                </div><!-- .card-qr -->

                <div class="card-qr medios">
                    <picture class="img-width-10">
                        <source srcset="build/img/qr/versa.webp" type="image/webp">
                        <source srcset="build/img/qr/versa.png" type="image/png">
                        <img src="build/img/qr/versa.png" alt="Websites Premium">
                    </picture>
                    <h4>Versatilidad</h4>
                    <p>Pueden ser integrados con una amplia gama de materiales de marketing para cualquier propósito, incluyendo material impreso.</p>
                </div><!-- .card-qr -->

                <div class="card-qr medios">
                    <picture class="img-width-10">
                        <source srcset="build/img/qr/uso.webp" type="image/webp">
                        <source srcset="build/img/qr/uso.png" type="image/png">
                        <img src="build/img/qr/uso.png" alt="Websites Premium">
                    </picture>
                    <h4>Usabilidad</h4>
                    <p>Comparte gran variedad de información como: teléfono, email, redes sociales, página web e incluso la contraseña del wifi de tu negocio.</p>
                </div><!-- .card-qr -->

                <div class="card-code-qr medios">
                    <div class="etiqueta width-100">
                        <h3>Codigo QR</h3>
                        <p>Código: BL 300</p>
                    </div>
                    <div class="etiqueta width-100">
                        <p>$ 100</p>
                    </div>
                    <p class="text-center">* Precio sujeto a cambios</p>
                </div>

            </div><!-- qr-card -->
        </div><!-- .content -->

        <picture>
            <source srcset="build/img/qr/QR_comp.webp" type="image/webp">
            <source srcset="build/img/qr/QR_comp.png" type="image/png">
            <img class="img-qr" src="build/img/qr/QR_comp.png" alt="Websites Premium">
        </picture>

    </div><!-- .section -->

    <div class="section">
        <div class="title-container">
            <h3>Google My Business</h3>
        </div>
        <div class="content section-body">
            <div class="row flex-row">
                <div class="tercios">
                    <div class="card-red">
                        <picture class="img-gmb img-width-10">
                            <source srcset="build/img/GMB/2702602.webp" type="image/webp">
                            <source srcset="build/img/GMB/2702602.png" type="image/png">
                            <img src="build/img/GMB/2702602.png" alt="Websites Premium">
                        </picture>
                        <div class="card-red-text">
                            <h4>Ayuda a tu negocio a salir en las búsquedas de Google.</h4>
                        </div>
                    </div><!-- .card-red -->

                    <div class="card-red">
                        <picture class="img-gmb img-width-10">
                            <source srcset="build/img/GMB/1031897.webp" type="image/webp">
                            <source srcset="build/img/GMB/1031897.png" type="image/png">
                            <img src="build/img/GMB/1031897.png" alt="Websites Premium">
                        </picture>
                        <div class="card-red-text">
                            <h4>El 91% de las personas se guían por las reseñas de Google.</h4>
                        </div>
                    </div><!-- .card-red -->

                    <div class="card-red">
                        <picture class="img-gmb img-width-10">
                            <source srcset="build/img/GMB/1072566.webp" type="image/webp">
                            <source srcset="build/img/GMB/1072566.png" type="image/png">
                            <img src="build/img/GMB/1072566.png" alt="Websites Premium">
                        </picture>
                        <div class="card-red-text">
                            <h4>Actualizar la información de tu negocio en Google Maps</h4>
                        </div>
                    </div><!-- .card-red -->
                </div>
                <div class="tercios">
                    <picture>
                        <source srcset="build/img/GMB/02.webp" type="image/webp">
                        <source srcset="build/img/GMB/02.png" type="image/png">
                        <img class="cellphones" src="build/img/GMB/02.png" alt="Websites Premium">
                    </picture>
                </div>

                <div class="tercios">
                    <picture>
                        <source srcset="build/img/GMB/01.webp" type="image/webp">
                        <source srcset="build/img/GMB/01.png" type="image/png">
                        <img class="cellphones" src="build/img/GMB/01.png" alt="Websites Premium">
                    </picture>
                </div>
            </div><!-- .row -->

            <div class="row flex-row">
                <div class="tercios">
                    <picture>
                        <source srcset="build/img/GMB/04.webp" type="image/webp">
                        <source srcset="build/img/GMB/04.png" type="image/png">
                        <img class="cellphones" src="build/img/GMB/04.png" alt="Websites Premium">
                    </picture>

                </div>
                <div class="dos-tercios">
                    <picture>
                        <source srcset="build/img/GMB/imagen.webp" type="image/webp">
                        <source srcset="build/img/GMB/imagen.png" type="image/png">
                        <img src="build/img/GMB/imagen.png" alt="Websites Premium">
                    </picture>
                    <div class="etiqueta">
                        <h3>Google My Business</h3>
                        <p>Código: BL 301</p>
                        <p>$ 200</p>
                    </div>
                    <h4 class="mant-mensual">Mantenimiento mensual: $ 25</h4>
                    <p>* Precio sujeto a cambios</p>
                </div><!-- .dos-tercios -->
            </div><!-- .row -->

            <a class="boton-verde" href="
                <?php
                    if($_GET['id'] == '3' || $_GET['id'] == '8') {
                        echo 'tel:' . $phone;
                        
                        }else{
                        echo 'https://wa.me/' . $phone;
                    }  
                ?>
                " target="_blank">
                <picture>
                    <source srcset="build/img/<?php echo $img; ?>.webp" type="image/webp">
                    <source srcset="build/img/<?php echo $img; ?>.png" type="image/png">
                    <img src="build/img/<?php echo $img; ?>.png" alt="Websites Básicos">
                </picture>
                <h2>
                    <?php
                        if($_GET['id'] == '3' || $_GET['id'] == '8') {
                            echo 'Llámanos';
                            
                            }else{
                            echo 'Envíanos un WhatsApp';
                        }  
                    ?>
                </h2>
            </a>

        </div><!-- .content -->

    </div><!-- .section -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="build/js/modernizr.js"></script>
    <script src="build/js/app.js"></script>
</body>

</html>