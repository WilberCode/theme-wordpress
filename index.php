<?php 
get_header(); 
printf('
<div class="banner banner--front customizer-bg">
    <img class="banner__img" src="'.get_theme_mod('showcase_image').'" alt="">
    <div class="banner-container"> 
        <div class="banner__content"> 
            <img class="banner__content-img" src="'.get_theme_mod('front_image').'" alt="">
            <h1 class="banner__content-title">'.get_theme_mod('showcase_heading','EXPRESO LOS CHANKAS').'</h1>
        </div>
     </div>
</div>

<main class="main">
    <div class="main-container">
        <div class="main-info">
            <div class="main-info__blank">
 
            </div>
            <div class="main-info__about">
                <p class="main-info__description cus-bdc__desc">
                    '.get_theme_mod('showcase_description','Description de la empresa').'  
                </p>
            </div>
        </div>
        <div class="main-info">
            <div class="main-info__destinations">
                <h1 class="main-info__destinations-title"> DESTINOS </h1> 
                    <div class="main-info__destinations-content">
                        <h2 class="main-info__destinations-subtitle">Los destinos  de ciudades importantes </h2>
                        <ul class="main-info__destinations-lists cus-bg__dests">
                            <li class="main-info__destinations-list cus-bg__dest"><i class=" icon-marker fas fa-map-marker"></i><p>Lima</p></li> 
                            <li class="main-info__destinations-list cus-bg__dest"><i class=" icon-marker fas fa-map-marker"></i><p>Ayacucho </p></li> 
                            <li class="main-info__destinations-list cus-bg__dest"><i class=" icon-marker fas fa-map-marker"></i><p>Andahuaylas </p></li> 
                            <li class="main-info__destinations-list cus-bg__dest"><i class=" icon-marker fas fa-map-marker"></i><p>Abancay </p></li> 
                            <li class="main-info__destinations-list cus-bg__dest"><i class=" icon-marker fas fa-map-marker"></i><p>Cusco </p></li> 
                            <li class="main-info__destinations-list cus-bg__dest"><i class=" icon-marker fas fa-map-marker"></i><p>Puerto Maldonado </p></li> 
                        </ul>
                     </div>
             </div>
            <div class="main-info__passages">
                <h1 class="main-info__passages-title">COMPRA DE PASAJES EXPRESO LOS CHANKVAS Y DESCUENTOS</h1>
                <div class="main-info__passages-content">
                    <h2 class="main-info__passages-subtitle">Para viajar por Expreso Los Chankas tienes las siguientes opciones disponibles para la compra de pasajes:</h2>
                    <li class="main-info__passages-list"><img src="'.get_bloginfo('template_url').'./assets/img/office.svg" alt="">Taquillas de las terminales y agencias de la empresa.</li>
                    <li class="main-info__passages-list"><img src="'.get_bloginfo('template_url').'./assets/img/phone.svg" alt="">Por teléfono, llamando al número de teléfono 983 727 654 de Lima.</li> 
                    <img class="main-info__passages-img" src="'.get_bloginfo('template_url').'./assets/img/money.svg" alt="">
                    <p class="main-info__passages-discounts">En Expreso Los Chankas puedes encontrar algunas promociones y diversos descuentos durante el año. Pregunta por ellos en las terminales y sus agencias de venta de boletos.</p>
                </div>
             </div>
        </div>
      '); 
printf('<div class="main-info">
            <div class="services">
            '); 
                dynamic_sidebar('services_widget');
    printf('</div> 
        </div>');
printf('<div class="main-info">
            <div class="terminals">
            '); 
                dynamic_sidebar('terminals_widget');
    printf('</div> 
       </div>');
printf('<div class="main-info">
            <div class="questions">
                <h1 class="questions__title">¿Preguntas Frecuentes?</h1>
                <ul class="questions__list" id="questions-list"> 
                    <li class="questions__btn ">¿Cuánto tiempo antes se debe llegar al terminal?</li>
                        <li class="questions__item">
                            <p class="questions__content" >Calcula aproximadamente 30 minutos en temporada baja y 60 en la alta. Esto evitará que pierdas tu salida en caso de algún inconveniente.                            </>
                        </li>
                    <li class="questions__btn">¿Los niños pagan boleto?</li> 
                        <li class="questions__item">
                            <p class="questions__content" >Sí, comenzando desde los 5 años.</p>
                        </li>
                    <li class="questions__btn">¿Puedo cambiar el destino o fecha de mi pasaje? </li> 
                        <li class="questions__item">
                            <p class="questions__content" >Sí, acudiendo con anticipación a la fecha de salida al terminal.                            </p>
                        </li>
                    <li class="questions__btn">¿Qué direción tienen en Lima?</li> 
                        <li class="questions__item">
                            <p class="questions__content" >Avenida de los Héroes # 819, en San Juan De Miraflores.                            </p>
                        </li> 
                </ul>
            '); 
                
    printf('</div>  
        </div>');
 
 printf('<div class="archivo">El archivo index.php </div>');
 get_footer();

